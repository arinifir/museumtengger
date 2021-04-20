<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('m_admin', 'admin');
        $this->load->model('m_koleksi', 'koleksi');
        $this->load->helper('auth_helper');
        $this->load->helper('timestamp_helper');
        $this->load->library('user_agent');
        $this->load->library('configemail');
        // $this->load->library('primslib');
    }
    public function index()
    {
        $data['title'] = "Beranda | Museum Tengger";
        $data['artikel'] = $this->db->get('tb_artikel')->result_array();
        $data['collect'] = $this->db->query('SELECT * FROM tb_koleksi order by kd_koleksi desc limit 6')->result_array();
        $this->load->view('id/header', $data);
        $this->load->view('id/topbar');
        $this->load->view('id/beranda');
        $this->load->view('id/footer');
    }
    public function koleksi()
    {
        $data['title'] = "Koleksi | Museum Tengger";
        $data['collect'] = $this->db->get('tb_koleksi')->result_array();
        $this->load->view('id/header', $data);
        $this->load->view('id/topbar');
        $this->load->view('id/koleksi');
        $this->load->view('id/footer');
    }
    public function detail_koleksi($id)
    {
        $data['title'] = "Detail Koleksi | Museum Tengger";
        $data['collect'] = $this->db->get_where('tb_koleksi', ['link_koleksi' => $id])->row_array();
        $data['jmlkomen'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['collect']['kd_koleksi']])->num_rows();
        $data['comment'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['collect']['kd_koleksi'], 'level_komentar' => 0])->result_array();
        $data['info'] = $this->koleksi->getData();
        $this->load->view('id/header', $data);
        $this->load->view('id/topbar');
        $this->load->view('id/detailkoleksi');
        $this->load->view('id/footer');
    }
    public function addcomment($id)
    {
        $nama = $this->input->post("comment_name", TRUE);
        $email = $this->input->post("comment_email", TRUE);
        $content = $this->input->post("comment_content", TRUE);
        $to = $this->input->post("comment_to", TRUE);
        $level = $this->input->post("comment_id", TRUE);
        if ($to != "") {
            $data = [
                'kode_id' => $id,
                'nama_komentar' => $nama,
                'email_komentar' => $email,
                'isi_komentar' => "<strong><i>" . $to . "</i></strong> ". $content,
                'waktu_komentar' => '@' . time(),
                'level_komentar' => $level
            ];
        } else {
            $data = [
                'kode_id' => $id,
                'nama_komentar' => $nama,
                'email_komentar' => $email,
                'isi_komentar' => $content,
                'waktu_komentar' => "@" . time(),
                'level_komentar' => $level
            ];
        }
        $this->admin->addData('tb_komentar', $data);
        redirect($this->agent->referrer());
    }
    public function turvirtual()
    {
        $data['title'] = "Tur Virtual | Museum Tengger";
        $this->load->view('id/header', $data);
        $this->load->view('id/topbar');
        $this->load->view('id/turvirtual');
        $this->load->view('id/footer');
    }
    public function kontak()
    {
        $data['title'] = "Kontak | Museum Tengger";
        $this->load->view('id/header', $data);
        $this->load->view('id/topbar');
        $this->load->view('id/kontak');
        $this->load->view('id/footer');
    }
    public function informasi()
    {
        $data['title'] = "Informasi | Museum Tengger";
        $data['artikel'] = $this->db->get('tb_artikel')->result_array();
        $this->load->view('id/header', $data);
        $this->load->view('id/topbar');
        $this->load->view('id/informasi');
        $this->load->view('id/footer');
    }
    public function detail_informasi($id)
    {
        $data['title'] = "Detail Informasi | Museum Tengger";
        $data['info'] = $this->db->get_where('tb_artikel', ['link_artikel' => $id])->row_array();
        $data['jmlkomen'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['info']['id_artikel']])->num_rows();
        $data['comment'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['info']['id_artikel'], 'level_komentar' => 0])->result_array();
        $data['reinfo'] = $this->koleksi->getData();
        $this->load->view('id/header', $data);
        $this->load->view('id/topbar');
        $this->load->view('id/detailinfor');
        $this->load->view('id/footer');
    }
    public function addSubs()
    {
        $email = $this->input->post("email", TRUE);
        $cek = $this->db->get_where('tb_subscribe', ['email_subs' => $email])->num_rows();
        if ($cek == 0) {
            $data = [
                'email_subs' => $email,
            ];
            $this->admin->addData('tb_subscribe', $data);
            $this->berlangganan($email);
            $this->session->set_flashdata('berhasil', 'Terima kasih sudah berlangganan di Website kami');
            redirect($this->agent->referrer());
        }else{
            $this->session->set_flashdata('gagal', 'Email anda sudah terdaftar sebagai langganan kami!');
            redirect($this->agent->referrer());
        }
    }
    public function addMessage()
    {
        $nama = $this->input->post("nama", TRUE);
        $email = $this->input->post("email", TRUE);
        $subyek = $this->input->post("subyek", TRUE);
        $isi = $this->input->post("isi", TRUE);

        $data = [
            'nama_pesan' => $nama,
            'email_pesan' => $email,
            'subyek_pesan' => $subyek,
            'isi_pesan' => $isi,
            'waktu_pesan' => time(),
        ];
        $this->admin->addData('tb_pesan', $data);
        $this->session->set_flashdata('berhasil', 'Terkirim. Kami akan membalas pesan Anda melalui email Anda');
        redirect($this->agent->referrer());
    }

    public function berlangganan($email)
    {
        $this->configemail->email_config();
        $from = "museumtengger@gmail.com";
        $subject = "Welcome to Museum Tengger";
        $data['email'] = $email;
        $data['collect'] = $this->db->query('SELECT * FROM tb_koleksi order by kd_koleksi desc limit 3')->result_array();
        $message = $this->load->view('email/vlangganan', $data, true);
        $this->email->from($from, 'Museum Tengger');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
    public function unsubscribe($email)
    {
        $email = urldecode($email);
        $this->db->delete('tb_subscribe', ['email_subs' => $email]);
        redirect($this->agent->referrer());
    }
}

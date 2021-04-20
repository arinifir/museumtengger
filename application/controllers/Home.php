<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
        $data['title'] = "Home | Museum Tengger";
        $data['artikel'] = $this->db->get('tb_artikel')->result_array();
        $data['collect'] = $this->db->query('SELECT * FROM tb_koleksi order by kd_koleksi desc limit 6')->result_array();
        $this->load->view('en/header', $data);
        $this->load->view('en/topbar');
        $this->load->view('en/home');
        $this->load->view('en/footer');
    }
    public function collection()
    {
        $data['title'] = "Collection | Museum Tengger";
        $data['collect'] = $this->db->get('tb_koleksi')->result_array();
        $this->load->view('en/header', $data);
        $this->load->view('en/topbar');
        $this->load->view('en/collection');
        $this->load->view('en/footer');
    }
    public function detail_collection($id)
    {
        $data['title'] = "Detail Collection | Museum Tengger";
        $data['collect'] = $this->db->get_where('tb_koleksi', ['linkoleksi' => $id])->row_array();
        $data['jmlkomen'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['collect']['kd_koleksi']])->num_rows();
        $data['comment'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['collect']['kd_koleksi'], 'level_komentar' => 0])->result_array();
        $data['info'] = $this->koleksi->getData();
        $this->load->view('en/header', $data);
        $this->load->view('en/topbar');
        $this->load->view('en/detailcollect');
        $this->load->view('en/footer');
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
                'isi_komentar' => "<strong><i>" . $to . "</i></strong> " . $content,
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
    public function virtualtour()
    {
        $data['title'] = "Virtual Tour | Museum Tengger";
        $this->load->view('en/header', $data);
        $this->load->view('en/topbar');
        $this->load->view('en/virtualtour');
        $this->load->view('en/footer');
    }
    public function contact()
    {
        $data['title'] = "Contact | Museum Tengger";
        $this->load->view('en/header', $data);
        $this->load->view('en/topbar');
        $this->load->view('en/contact');
        $this->load->view('en/footer');
    }
    public function information()
    {
        $data['title'] = "Information | Museum Tengger";
        $data['artikel'] = $this->db->get('tb_artikel')->result_array();
        $this->load->view('en/header', $data);
        $this->load->view('en/topbar');
        $this->load->view('en/information');
        $this->load->view('en/footer');
    }
    public function detail_information($id)
    {
        $data['title'] = "Detail Information | Museum Tengger";
        $data['info'] = $this->db->get_where('tb_artikel', ['linkartikel' => $id])->row_array();
        $data['jmlkomen'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['info']['id_artikel']])->num_rows();
        $data['comment'] = $this->db->get_where('tb_komentar', ['kode_id' => $data['info']['id_artikel'], 'level_komentar' => 0])->result_array();
        $data['reinfo'] = $this->koleksi->getData();
        $this->load->view('en/header', $data);
        $this->load->view('en/topbar');
        $this->load->view('en/detailinfo');
        $this->load->view('en/footer');
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
            $this->session->set_flashdata('berhasil', 'Thank you for subscribing to our Website');
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('gagal', 'Your email has been registered as our subscription!');
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
        $this->session->set_flashdata('berhasil', 'Sent. We will reply to your message via your email');
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

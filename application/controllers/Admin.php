<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('m_admin', 'admin');
        $this->load->helper('auth_helper');
        $this->load->helper('timestamp_helper');
        $this->load->library('user_agent');
        $this->load->library('ConfigEmail', 'configemail');
        // $this->load->library('primslib');
        admin_logged_in();
    }
    public function index()
    {
        $data['title'] = "Dashboard | Museum Tengger";
        $data['subs'] = $this->db->get('tb_subscribe')->num_rows();
        $data['collect'] = $this->db->get('tb_koleksi')->num_rows();
        $data['info'] = $this->db->get('tb_artikel')->num_rows();
        $data['admin'] = $this->db->get_where('tb_user', ['level_user' => 1])->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    //Admin
    public function pageAdmin()
    {
        if ($this->session->userdata('level') == "Super Admin") {
            $data['title'] = "Admin | Museum Tengger";
            $data['admin'] = $this->db->get_where('tb_user', ['level_user' => 1])->result_array();
            $this->load->view('admin/header', $data);
            $this->load->view('admin/topbar');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/vadmin');
            $this->load->view('admin/footer');
        } else {
            redirect('Auth');
        }
    }
    public function addAdmin()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('username', 'Number', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_message('required', 'Please Enter Data!');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Fill them all properly!');
            redirect($this->agent->referrer());
        } else {
            $length = 5;
            $kode = $this->admin->randomcode($length);
            $nama = $this->input->post("name", TRUE);
            $email = $this->input->post("email", TRUE);
            $username = $this->input->post("username", TRUE);
            $password = md5($this->input->post("password", TRUE));
            $level = 1;
            $status = 0;
            $tanggal = date("Y-m-d H:i:s");
            $data1 = $this->admin->cekEmail($email);
            if ($data1 == 0) {
                $data2 = $this->admin->cekUsername($username);
                if ($data2 == 0) {
                    $data = [
                        'id_user' => $kode,
                        'nama_user' => $nama,
                        'email_user' => $email,
                        'username' => $username,
                        'password' => $password,
                        'tanggal_user' => $tanggal,
                        'level_user' => $level,
                        'status_user' => $status
                    ];
                    $this->admin->addData('tb_user', $data);
                    $this->session->set_flashdata('berhasil', 'Successfully added data.');
                    redirect($this->agent->referrer());
                } else {
                    $this->session->set_flashdata('gagal', 'Username is already in use!');
                    redirect($this->agent->referrer());
                }
            } else {
                $this->session->set_flashdata('gagal', 'Email is already in use!');
                redirect($this->agent->referrer());
            }
        }
    }
    public function editAdmin()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('username', 'Number', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_message('required', 'Please Enter Data!');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Fill them all properly!');
            redirect($this->agent->referrer());
        } else {
            $id = $this->input->post("id", TRUE);
            $nama = $this->input->post("name", TRUE);
            $email = $this->input->post("email", TRUE);
            $username = $this->input->post("username", TRUE);
            $password = md5($this->input->post("password", TRUE));

            $data1 = $this->admin->cekEmail($email);
            $dataemail = $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
            if ($data1 == 0) {
                $data2 = $this->admin->cekUsername($username);
                if ($data2 == 0) {
                    $data = [
                        'nama_user' => $nama,
                        'email_user' => $email,
                        'username' => $username,
                        'password' => $password
                    ];
                    $where = ['id_user' => $id];
                    $this->admin->editData('tb_user', $data, $where);
                    $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                    redirect($this->agent->referrer());
                } else if ($username == $dataemail['username']) {
                    $data = [
                        'nama_user' => $nama,
                        'email_user' => $email,
                        'password' => $password
                    ];
                    $where = ['id_user' => $id];
                    $this->admin->editData('tb_user', $data, $where);
                    $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                    redirect($this->agent->referrer());
                } else {
                    $this->session->set_flashdata('gagal', 'Username is already in use!');
                    redirect($this->agent->referrer());
                }
            } else if ($email == $dataemail['email_user']) {
                $data2 = $this->admin->cekUsername($username);
                if ($data2 == 0) {
                    $data = [
                        'nama_user' => $nama,
                        'username' => $username,
                        'password' => $password
                    ];
                    $where = ['id_user' => $id];
                    $this->admin->editData('tb_user', $data, $where);
                    $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                    redirect($this->agent->referrer());
                } else if ($username == $dataemail['username']) {
                    $data = [
                        'nama_user' => $nama,
                        'password' => $password
                    ];
                    $where = ['id_user' => $id];
                    $this->admin->editData('tb_user', $data, $where);
                    $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                    redirect($this->agent->referrer());
                } else {
                    $this->session->set_flashdata('gagal', 'Username is already in use!');
                    redirect($this->agent->referrer());
                }
            } else {
                $this->session->set_flashdata('gagal', 'Email is already in use!');
                redirect($this->agent->referrer());
            }
        }
    }
    public function delAdmin($id)
    {
        $where = [
            'id_user' => $id
        ];
        $this->admin->delData('tb_user', $where);
        $this->session->set_flashdata('berhasil', 'Successfully deleted data.');
        redirect($this->agent->referrer());
    }
    public function active($id)
    {
        $status = ['status_user' => 1];
        $where = ['id_user' => $id];
        $this->admin->editData('tb_user', $status, $where);
        $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
        redirect($this->agent->referrer());
    }
    public function nactive($id)
    {
        $status = ['status_user' => 0];
        $where = ['id_user' => $id];
        $this->admin->editData('tb_user', $status, $where);
        $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
        redirect($this->agent->referrer());
    }

    //Collection
    public function pageCollect()
    {
        $data['title'] = "Collections | Museum Tengger";
        $data['collect'] = $this->db->get('tb_koleksi')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vcollect');
        $this->load->view('admin/footer');
    }
    public function pageAddCollect()
    {
        $data['title'] = "Add Collection | Museum Tengger";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vaddcollect');
        $this->load->view('admin/footer');
    }
    public function pageEditCollect($id)
    {
        $data['title'] = "Edit Collection | Museum Tengger";
        $data['co'] = $this->db->get_where('tb_koleksi', ['kd_koleksi' => $id])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/veditcollect');
        $this->load->view('admin/footer');
    }
    public function addCollect()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('isi', 'Content', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');
        $this->form_validation->set_message('required', 'Please Enter Data!');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Fill them all properly!');
            redirect($this->agent->referrer());
        } else {
            $cekkode = $this->admin->cekkode();
            // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
            $nourut = substr($cekkode, 3, 3);
            $nourut++;
            $char = "KLS";
            $kode = $char . sprintf("%03s", $nourut);
            $nama = $this->input->post("nama", TRUE);
            $name = $this->input->post("name", TRUE);
            $isi = $this->input->post("isi", TRUE);
            $content = $this->input->post("content", TRUE);
            $tanggal = time();

            $uploadgambar = $_FILES['gambar_koleksi']['name'];

            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '10000';
                $config['upload_path'] = './assets/images/koleksi/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_koleksi')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('gambar_koleksi', $img);
                } else {
                    echo $this->upload->displays_errors();
                }
            }

            $data = [
                'kd_koleksi' => $kode,
                'nama_koleksi' => $nama,
                'name_koleksi' => $name,
                'desk_koleksi' => $isi,
                'desc_koleksi' => $content,
                'waktu_koleksi' => $tanggal,
                'link_koleksi' => urlencode(strtolower(str_replace(' ', '-', $nama))),
                'linkoleksi' => urlencode(strtolower(str_replace(' ', '-', $name)))
            ];
            $this->admin->addData('tb_koleksi', $data);
            $this->sendemail();
            $this->session->set_flashdata('berhasil', 'Successfully added data.');
            redirect($this->agent->referrer());
        }
    }
    public function editCollect()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('isi', 'Content', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');
        $this->form_validation->set_message('required', 'Please Enter Data!');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Fill them all properly!');
            redirect($this->agent->referrer());
        } else {
            $kode = $this->input->post("kode", TRUE);
            $nama = $this->input->post("nama", TRUE);
            $name = $this->input->post("name", TRUE);
            $isi = $this->input->post("isi", TRUE);
            $content = $this->input->post("content", TRUE);
            $tanggal = time();

            $uploadgambar = $_FILES['gambar_koleksi']['name'];

            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '10000';
                $config['upload_path'] = './assets/images/koleksi/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_koleksi')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('gambar_koleksi', $img);
                } else {
                    echo $this->upload->displays_errors();
                }
            }

            $data = [
                'nama_koleksi' => $nama,
                'name_koleksi' => $name,
                'desk_koleksi' => $isi,
                'desc_koleksi' => $content,
                'link_koleksi' => urlencode(strtolower(str_replace(' ', '-', $nama))),
                'linkoleksi' => urlencode(strtolower(str_replace(' ', '-', $name)))
            ];
            $where = ['kd_koleksi' => $kode];
            $this->admin->editData('tb_koleksi', $data, $where);
            $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
            redirect($this->agent->referrer());
        }
    }
    public function delCollect($id)
    {
        $where = [
            'kd_koleksi' => $id
        ];
        $this->admin->delData('tb_koleksi', $where);
        $this->session->set_flashdata('berhasil', 'Successfully deleted data.');
        redirect($this->agent->referrer());
    }

    public function uploadeditor()
    {
        if (isset($_FILES['upload']['name'])) {
            $file = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];
            $file_name_array = explode(".", $file_name);
            $extension = end($file_name_array);
            $new_image_name = rand() . '.' . $extension;
            $allowed_extension = array("jpg", "jpeg", "png", "PNG", "JPEG", "JPG");
            if (in_array($extension, $allowed_extension)) {
                move_uploaded_file($file, base_url() . 'assets/images/artikel/' . $new_image_name);
                $function_number = $_GET['CKEditorFuncNum'];
                $url = base_url() . 'assets/images/artikel/' . $new_image_name;
                $message = 'Upload Success';
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
            }
        }
    }

    //Information
    public function pageInfo()
    {
        $data['title'] = "Informations | Museum Tengger";
        $data['info'] = $this->db->get('tb_artikel')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vinfo');
        $this->load->view('admin/footer');
    }
    public function pageAddInfo()
    {
        $data['title'] = "Add Information | Museum Tengger";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vaddinfo');
        $this->load->view('admin/footer');
    }
    public function pageEditInfo($id)
    {
        $data['title'] = "Edit Information | Museum Tengger";
        $data['in'] = $this->db->get_where('tb_artikel', ['id_artikel' => $id])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/veditinfo');
        $this->load->view('admin/footer');
    }
    public function addInfo()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('isi', 'Content', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');
        $this->form_validation->set_message('required', 'Please Enter Data!');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Fill them all properly!');
            redirect($this->agent->referrer());
        } else {
            $cekkode = $this->admin->cekkodein();
            // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
            $nourut = substr($cekkode, 3, 3);
            $nourut++;
            $char = "ART";
            $kode = $char . sprintf("%03s", $nourut);
            $nama = $this->input->post("nama", TRUE);
            $name = $this->input->post("name", TRUE);
            $isi = $this->input->post("isi", TRUE);
            $content = $this->input->post("content", TRUE);
            $tanggal = time();

            $uploadgambar = $_FILES['gambar_artikel']['name'];

            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '10000';
                $config['upload_path'] = './assets/images/artikel/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_artikel')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('gambar_artikel', $img);
                } else {
                    echo $this->upload->displays_errors();
                }
            }

            $data = [
                'id_artikel' => $kode,
                'judul_artikel' => $nama,
                'title_artikel' => $name,
                'isi_artikel' => $isi,
                'content_artikel' => $content,
                'waktu_artikel' => $tanggal,
                'link_artikel' => urlencode(strtolower(str_replace(' ', '-', $nama))),
                'linkartikel' => urlencode(strtolower(str_replace(' ', '-', $name)))
            ];
            $this->admin->addData('tb_artikel', $data);
            $this->session->set_flashdata('berhasil', 'Successfully added data.');
            redirect($this->agent->referrer());
        }
    }
    public function editInfo()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('isi', 'Content', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');
        $this->form_validation->set_message('required', 'Please Enter Data!');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Fill them all properly!');
            redirect($this->agent->referrer());
        } else {
            $kode = $this->input->post("kode", TRUE);
            $nama = $this->input->post("nama", TRUE);
            $name = $this->input->post("name", TRUE);
            $isi = $this->input->post("isi", TRUE);
            $content = $this->input->post("content", TRUE);
            $tanggal = time();

            $uploadgambar = $_FILES['gambar_artikel']['name'];

            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '10000';
                $config['upload_path'] = './assets/images/artikel/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_artikel')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('gambar_artikel', $img);
                } else {
                    echo $this->upload->displays_errors();
                }
            }

            $data = [
                'judul_artikel' => $nama,
                'title_artikel' => $name,
                'isi_artikel' => $isi,
                'content_artikel' => $content,
                'link_artikel' => urlencode(strtolower(str_replace(' ', '-', $nama))),
                'linkartikel' => urlencode(strtolower(str_replace(' ', '-', $name)))
            ];
            $where = ['id_artikel' => $kode];
            $this->admin->editData('tb_artikel', $data, $where);
            $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
            redirect($this->agent->referrer());
        }
    }
    public function delInfo($id)
    {
        $where = [
            'id_artikel' => $id
        ];
        $this->admin->delData('tb_artikel', $where);
        $this->session->set_flashdata('berhasil', 'Successfully deleted data.');
        redirect($this->agent->referrer());
    }

    //Comments
    public function pageComment()
    {
        $data['title'] = "Comments | Museum Tengger";
        $data['comment'] = $this->db->get('tb_komentar')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vcomment');
        $this->load->view('admin/footer');
    }
    public function delComment($id)
    {
        $where = [
            'id_komentar' => $id
        ];
        $this->admin->delData('tb_komentar', $where);
        $this->session->set_flashdata('berhasil', 'Successfully deleted data.');
        redirect($this->agent->referrer());
    }

    //Subscribe
    public function pageSubscriber()
    {
        $data['title'] = "Subscribers | Museum Tengger";
        $data['subs'] = $this->db->get('tb_subscribe')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vsubscribe');
        $this->load->view('admin/footer');
    }
    public function delSubscribe($id)
    {
        $where = [
            'id' => $id
        ];
        $this->admin->delData('tb_subscribe', $where);
        $this->session->set_flashdata('berhasil', 'Successfully deleted data.');
        redirect($this->agent->referrer());
    }
    public function pageMessage()
    {
        $data['title'] = "Message | Museum Tengger";
        $data['pesan'] = $this->db->get('tb_pesan')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vmessage');
        $this->load->view('admin/footer');
    }

    public function sendemail()
    {
        $this->configemail->email_config();
        $data = $this->db->query('select * from tb_subscribe')->result_array();
        foreach ($data as $to) {
            $from = "museumtengger@gmail.com";
            $subject = "New Collections";
            $data['email'] = $to['email_subs'];
            $data['collect'] = $this->db->query('SELECT * FROM tb_koleksi order by kd_koleksi desc limit 3')->result_array();
            $message = $this->load->view('email/vkoleksibaru', $data, true);
            $this->email->from($from, 'Museum Tengger');
            $this->email->to($to['email_subs']);
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->send();
        }
    }
    public function sendMessage()
    {
        $data['title'] = "Send Message | Museum Tengger";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vsendmessage');
        $this->load->view('admin/footer');
    }
    public function replyMessage($id)
    {
        $data['title'] = "Reply Message | Museum Tengger";
        $data['pesan'] = $this->db->get_where('tb_pesan', ['id_pesan' => $id])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vreplymessage');
        $this->load->view('admin/footer');
    }

    public function read($id)
    {
        $status = ['status_pesan' => 1];
        $where = ['id_pesan' => $id];
        $this->admin->editData('tb_pesan', $status, $where);
    }

    public function send()
    {
        $this->configemail->email_config();
        $from = "museumtengger@gmail.com";
        $subject = $this->input->post("subject", TRUE);
        $message = $this->input->post("message", TRUE);
        $this->email->from($from, 'Museum Tengger');
        $this->email->to($this->input->post("to", TRUE));
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();

        $this->session->set_flashdata('berhasil', 'Successfully send email.');
        redirect($this->agent->referrer());
    }

    public function reply()
    {

        $this->configemail->email_config();
        $from = "museumtengger@gmail.com";
        $id = $this->input->post("id", TRUE);
        $subject = $this->input->post("subject", TRUE);
        $message = $this->input->post("message", TRUE);
        $this->email->from($from, 'Museum Tengger');
        $this->email->to($this->input->post("to", TRUE));
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();

        $this->read($id);
        $this->session->set_flashdata('berhasil', 'Successfully reply email.');
        redirect('Admin/pageMessage');
    }

    public function delMessage($id)
    {
        $where = [
            'id_pesan' => $id
        ];
        $this->admin->delData('tb_pesan', $where);
        $this->session->set_flashdata('berhasil', 'Successfully deleted data.');
        redirect($this->agent->referrer());
    }

    public function pageProfile()
    {
        $id = $this->session->userdata('id_user');
        $data['title'] = "Profile | Museum Tengger";
        $data['user'] = $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vprofil');
        $this->load->view('admin/footer');
    }

    public function editProfil()
    {
        $email_session = $this->session->userdata('email');
        $username_session = $this->session->userdata('username');
        $id = $this->input->post("id", TRUE);
        $nama = $this->input->post("nama", TRUE);
        $email = $this->input->post("email", TRUE);
        $username = $this->input->post("username", TRUE);
        $data1 = $this->admin->cekEmail($email);
        if ($data1 == 0) {
            $data2 = $this->admin->cekUsername($username);
            if ($data2 == 0) {
                $data = [
                    'nama_user' => $nama,
                    'email_user' => $email,
                    'username' => $username
                ];
                $where = ['id_user' => $id];
                $this->admin->editData('tb_user', $data, $where);
                $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                redirect('Auth/logout');
            } else if ($username == $username_session) {
                $data = [
                    'nama_user' => $nama,
                    'email_user' => $email
                ];
                $where = ['id_user' => $id];
                $this->admin->editData('tb_user', $data, $where);
                $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                redirect('Auth/logout');
            } else {
                $this->session->set_flashdata('gagal', 'Username is already in use!');
                redirect($this->agent->referrer());
            }
        } else if ($email == $email_session) {
            $data2 = $this->admin->cekUsername($username);
            if ($data2 == 0) {
                $data = [
                    'nama_user' => $nama,
                    'username' => $username
                ];
                $where = ['id_user' => $id];
                $this->admin->editData('tb_user', $data, $where);
                $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                redirect('Auth/logout');
            } else if ($username == $username_session) {
                $data = [
                    'nama_user' => $nama
                ];
                $where = ['id_user' => $id];
                $this->admin->editData('tb_user', $data, $where);
                $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
                redirect('Auth/logout');
            } else {
                $this->session->set_flashdata('gagal', 'Username is already in use!');
                redirect($this->agent->referrer());
            }
        } else {
            $this->session->set_flashdata('gagal', 'Email is already in use!');
            redirect($this->agent->referrer());
        }
    }

    public function pagePassword()
    {
        $data['title'] = "Edit Password | Museum Tengger";
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/vpassword');
        $this->load->view('admin/footer');
    }

    public function editPassword()
    {
        $id = $this->input->post('id');
        $pass1 = $this->input->post('pass1');
        $pass2 = $this->input->post('pass2');
        if ($pass1 == $pass2) {
            $data = ['password' => md5($pass1)];
            $where = ['id_user' => $id];
            $this->admin->editData('tb_user', $data, $where);
            $this->session->set_flashdata('berhasil', 'Successfully changed the data.');
            redirect('Auth/logout');
        } else {
            $this->session->set_flashdata('gagal', 'Confirm Password does not matched!');
            redirect($this->agent->referrer());
        }
    }
}

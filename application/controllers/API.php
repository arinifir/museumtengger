<?php
defined('BASEPATH') or exit('No direct script access allowed');

class API extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('m_api', 'api');
    }
    public function login()
    {
        //cek user ada atau tidak
        $username = $this->input->post("username", TRUE);
        $pass = md5($this->input->post("password", TRUE));
        $data = $this->api->checkuser('tb_user', $username);
        if ($data) {
            if ($data['status_user'] == 1) {
                if ($data['password'] == $pass) {
                    if ($data['level_user'] == 0) {
                        $output = [
                            'status' => "success",
                            'role' => "super admin",
                            'message' =>  "berhasil login"
                        ];
                        $session_data = [
                            'id_user' => $data['id_user'],
                            'nama' => $data['nama_user'],
                            'username' => $data['username'],
                            'email' => $data['email_user'],
                            'level' => 'Super Admin'
                        ];
                        $this->session->set_userdata($session_data);
                        echo json_encode($output);
                    } elseif ($data['level_user'] == 1) {
                        $output = [
                            'status' => "success",
                            'role' => "administrator",
                            'message' =>  "berhasil login"
                        ];
                        $session_data = [
                            'id_user' => $data['id_user'],
                            'username' => $data['username'],
                            'nama' => $data['nama_user'],
                            'email' => $data['email_user'],
                            'level' => 'Administrator'
                        ];
                        $this->session->set_userdata($session_data);
                        echo json_encode($output);
                    }
                } else {
                    $output = [
                        'status' => "wrong_password",
                        'message' =>  "gagal login"
                    ];
                    echo json_encode($output);
                }
            } else {
                $output = [
                    'status' => "not_active",
                    'message' =>  "akun tidak terverifikasi"
                ];
                echo json_encode($output);
            }
        } else {
            $output = [
                'status' => "empty",
                'message' =>  "user tidak terdaftar"
            ];
            echo json_encode($output);
        }
    }
}

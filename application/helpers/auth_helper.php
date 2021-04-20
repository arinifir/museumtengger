<?php
function admin_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id_user')) {
        redirect('Auth');
    }
}

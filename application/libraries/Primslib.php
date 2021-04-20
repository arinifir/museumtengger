
<?php

class Primslib
{
    function upload_image($file, $path, $name, $format, $size)
    {
        $ci = &get_instance();
        if ($name != '') {
            $config['upload_path'] = './assets/images/'.$path;
            $config['allowed_types'] = $format;
            $config['max_size'] = $size;

            $ci->load->library('upload', $config);

            if (!$ci->upload->do_upload($file)) {
                $error = array(
                    'error' => $ci->upload->display_errors(),
                    'custom' => $ci->lang->line('Pengunggahan file' . $file . 'Gagal!')
                );
                var_dump($error);
                die;
                exit;
            } else {
                return $file = $ci->upload->data('file_name');
            }
        }
    }
}
?>
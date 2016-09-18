<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;

class UploadComponent extends Component {

    public $dir_upload = WWW_ROOT . 'upload' . DS;

    public function uploadArquivo($data) {
        if (!empty($data)) {
            $explode_img = explode('.', $data['name']);
            $name = uniqid();
            $extension = $explode_img[1];
            $filename = $name . '.' . $extension;
            $file_tmp_name = $data['tmp_name'];

            if (move_uploaded_file($file_tmp_name, $this->dir_upload . $filename)) {
                return($filename);
            } else {
                return(null);
            }
        }
    }

}

<?php 
///init.php

///...
// require_once 'core/Flasher.php';

class Flasher{
    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            unset($_SESSION['flash']);
        }
    }
}


//Class Method
// public function tambah() {
//     if($this->model('Blog_model')->buatArtikel($_POST) > 0) {
//         Flasher::setFlash('berhasil', 'ditambahkan', 'succes');
//         header('Location:' . BASE_URL . '/blog');
//         exit;
//     } else {
//         Flasher::setFlash('gagal', 'ditambahkan', 'danger');
//         header('Location:' . BASE_URL . '/blog');
//         exit;
//     }
// }
// function redirect($string) {
//     header('Location: ' . BASE_URL . '/' . $string );
//     exit;
// }
// ?>



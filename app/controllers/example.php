<?php

class Example extends Controller
{
    public function index()
    {
        $data['title'] = 'Example';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('example/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Example_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: http://..........');
            exit;
        }
    }

    public function ubah()
    {
        if ($this->model('Example_model')->ubah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: http://..........');
            exit;
        }
    }

    public function hapus()
    {
        if ($this->model('Example_model')->deletaDataAtk($_POST) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: http://..........');
            exit;
        }
    }
}

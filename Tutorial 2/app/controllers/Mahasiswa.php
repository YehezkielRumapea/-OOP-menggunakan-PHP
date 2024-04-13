<?php

class Mahasiswa  extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model ('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model ('Mahasiswa_model')->getAllMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_Model')-> tambahdatamahasiswa($_POST) > 0 ) {
            flasher::setflash('berhasil', 'ditambahkan', 'succes' );
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            if ($this->model('Mahasiswa_Model')-> tambahdatamahasiswa($_POST) > 0 ) {
                flasher::setflash('gagal', 'ditambahkan', 'danger' );
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
        }
    }
    }

}

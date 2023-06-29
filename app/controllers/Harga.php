<?php



class Harga extends Controller {
    public function index()
    {   
        $data['judul'] = 'Harga';
        $data['hrg'] = $this->model('Harga_model')->getAllHarga();
        $this->view('templates/header', $data);
        $this->view('harga/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {   
        $data['judul'] = 'Detail Harga';
        $data['hrg'] = $this->model('Harga_model')->getHargaById($id);
        $this->view('templates/header', $data);
        $this->view('harga/detail', $data);
        $this->view('templates/footer');
    }
}


<?php

class Data_WO extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_wo', 'dwo');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Wedding Organizer';
        $data['data_wo'] = $this->dwo->getAllWedding();
       
        $this->load->view('templates/header', $data);
        $this->load->view('wo/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Wedding Organizer';

        $this->form_validation->set_rules('id_wo', 'Id Wedding Organizer', 'required');
        $this->form_validation->set_rules('nama_wo', 'Wedding Organizer', 'required');
        $this->form_validation->set_rules('alamat_wo', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'Telepon', 'required');
        $this->form_validation->set_rules('layanan', 'Layanan', 'required');
        $this->form_validation->set_rules('kab_kota', 'Kabupaten/Kota', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('wo/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->dwo->tambahDataWedding();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/data_wo');
        }
    }

    public function hapus($id_wo)
    {
        $this->dwo->hapusDataWedding($id_wo);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/data_wo');
    }

}

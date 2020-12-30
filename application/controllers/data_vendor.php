<?php

class Data_Vendor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_vendor', 'dvr');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Vendor';
        $data['data_vendor'] = $this->dvr->getAllVendor();
       
        $this->load->view('templates/header', $data);
        $this->load->view('vendor/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Vendor Wedding Organizer';

        $this->form_validation->set_rules('id_vendor', 'ID Vendor', 'required');
        $this->form_validation->set_rules('nama_vendor', 'Vendor Wedding Organizer', 'required');
        $this->form_validation->set_rules('alamat_vendor', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'Telepon', 'required');
        $this->form_validation->set_rules('id_wo', 'Id Wedding Organizer', 'required');
        $this->form_validation->set_rules('nama_wo', 'Wedding Organizer', 'required');
        $this->form_validation->set_rules('nama_jenis', 'Jenis Vendor', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('vendor/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->dvr->tambahDataWedding();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/data_vendor');
        }
    }

    public function hapus($id_vendor)
    {
        $this->dvr->hapusDataWedding($id_vendor);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/data_vendor');
    }

}

<?php 
use GuzzleHttp\Client;
class Model_Vendor extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/1718040-RestfulServer/index.php/',
           
         ]);
    }


    public function getAllVendor()
    {
       
        $response = $this->_client->request('GET', 'data_vendor', [
            'query' => [
                'x-api-key' => '123456789'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getDataVendorById($id_vendor)
    {
        $response = $this->_client->request('GET', 'data_vendor', [
            'query' => [
                'x-api-key' => '123456789',
                'id_vendor' => $id_vendor
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
       
    }

    public function tambahDataVendor()
    {
   
        $data = [
            'id_vendor' =>$this->input->post('id_vendor', true),
            'nama_vendor' =>$this->input->post('nama_vendor', true),
            'alamat_vendor' =>$this->input->post('alamat_vendor', true),
            'no_telp' =>$this->input->post('no_telp', true),
            'id_wo' =>$this->input->post('id_wo', true),
            'nama_wo' =>$this->input->post('nama_wo', true),
            'nama_jenis' =>$this->input->post('nama_jenis', true),
            'x-api-key' => '123456789'
        ];
        $response = $this->_client->request('POST', 'data_vendor', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 
    }

    public function hapusDataVendor($id_vendor)
    {
        $response = $this->_client->request('DELETE', 'data_vendor', [
            'form_params' => [
                'id_vendor' => $id_vendor,
                'x-api-key' => '123456789'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;

    }

}
<?php 
use GuzzleHttp\Client;
class Model_wo extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/1718040-RestfulServer/index.php/',
           
         ]);
    }


    public function getAllWedding()
    {
       
        $response = $this->_client->request('GET', 'data_wo', [
            'query' => [
                'x-api-key' => '123456789'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getDataweddingById($id_wo)
    {
        $response = $this->_client->request('GET', 'data_wo', [
            'query' => [
                'x-api-key' => '123456789',
                'id_wo' => $id_wo
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
       
    }

    public function tambahDataWedding()
    {
   
        $data = [
            'id_wo' =>$this->input->post('id_wo', true),
            'nama_wo' =>$this->input->post('nama_wo', true),
            'alamat_wo' =>$this->input->post('alamat_wo', true),
            'no_telp' =>$this->input->post('no_telp', true),
            'layanan' =>$this->input->post('layanan', true),
            'kab_kota' =>$this->input->post('kab_kota', true),
            'x-api-key' => '123456789'
        ];
        $response = $this->_client->request('POST', 'data_wo', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 
    }

    public function hapusDataWedding($id_wo)
    {
        $response = $this->_client->request('DELETE', 'data_wo', [
            'form_params' => [
                'id_wo' => $id_wo,
                'x-api-key' => '123456789'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;

    }

}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataKelurahanModel;

class DataKelurahan extends BaseController
{
    public function __construct() {

        $this->DataKelurahanModel = new DataKelurahanModel();
    }
    public function index()
    {
        //return view('DataKelurahan/datakelurahan');
    }
    public function datakelurahan()
    {
        $a = new DataKelurahanModel();
        $b = $a->findAll();
        $data = ['datakelurahan' => $b];
        echo view('DataKelurahan/datakelurahan',$data);
    }

    public function input ()
    {
        $id_kelurahan = $this->DataKelurahanModel->idkelurahan();
        session();
        $a = new DataKelurahanModel();
        $data = [
            'id_kelurahan'=>$id_kelurahan,
            //'dropdown' => $a->dropdownasnaf(),
            'pesan_validasi' => \Config\Services::validation()
        ];
        echo view('DataKelurahan/input_datakelurahan', $data);

    }
    public function simpan() 
    {
        {
        $atur = $this->validate([
            'nama_kelurahan' => [
                'label' => 'Nama Kelurahan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong, harap diisi!'
                ]
            ],
            'nama_kecamatan' => [
                'label' => 'Nama Kecamatan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong. harap diisi!'
                ]
                ],
            'nama_kota' => [
                    'label' => 'Nama Kota',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
            ]
        ]);
        if (!$atur) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/DataKelurahan/input')->withInput();
        }
        $a = new DataKelurahanModel();
        $a->insert([
            'id_kelurahan'=>$this->request->getVar('id_kelurahan'),
            'nama_kelurahan'=>$this->request->getVar('nama_kelurahan'),
            'nama_kecamatan' => $this->request->getVar('nama_kecamatan'),
            'nama_kota' => $this->request->getVar('nama_kota')
            
        ]);
        return redirect()->to('DataKelurahan/datakelurahan');
    }
    
    }
       public function edit($id) 
       {
        $a = new DataKelurahanModel();
        $b = $a->find($id);

        $data = [
            //'dropdown' => $a->dropdownasnaf(),
            'x' => $b
        ];
        echo view('DataKelurahan/edit_datakelurahan', $data);   
       }
    public function proses_edit()
    {
        $a = new DataKelurahanModel();
        $id = $this->request->getVar('id_kelurahan');
        $a->update($id, [
            'id_kelurahan' => $this->request->getVar('id_kelurahan'),
            'nama_kelurahan'=>$this->request->getVar('nama_kelurahan'),
            'nama_kecamatan' => $this->request->getVar('nama_kecamatan'),
            'nama_kota' => $this->request->getVar('nama_kota')
        ]);
        return redirect()->to('DataKelurahan/datakelurahan');
    }

    public function hapus($id) {
        $a = new DataKelurahanModel();
        $a->delete($id);
        $data['datakelurahan'][] = $a;
        return redirect()->to('../DataKelurahan/datakelurahan');
    }
       } 
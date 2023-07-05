<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataPasienModel;
use App\Models\CetakKartuModel;

use TCPDF;
class DataPasien extends BaseController
{
    public function __construct() {
        $this->DataPasienModel = new DataPasienModel();
    }
    public function index()
    {
        return view('RegistrasiPasien/regis_pasien');
    }
    public function datapasien()
    {
        $a = new DataPasienModel();
        $b = $a->joinpasienxkelurahan();
        $data = ['regispasien' => $b];
        echo view('RegistrasiPasien/regis_pasien', $data);

    }
    public function input() {
        $id_pasien = $this->DataPasienModel->idPasien();
        session();
        $a = new DataPasienModel();
        $data = [
            'id_pasien' => $id_pasien,
            'dropdownkelurahan' => $a->dropdownkelurahan(),
            'pesan_validasi' => \Config\Services::validation()
        ];
        echo view('RegistrasiPasien/input_pasien', $data);

    }

    public function simpan() { {
            $atur = $this->validate([
                'nama_pasien' => [
                    'label' => 'Nama Pasien',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong, harap diisi!'
                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
                ],
                'no_telp' => [
                    'label' => 'No.Telepon',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
                    ],
                'RT' => [
                    'label' => 'RT',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
                ],
                'RW' => [
                    'label' => 'RW',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
                ],
                'tb_kelurahan' => [
                    'label' => 'Kelurahan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
                ],
                'tgl_lahir' => [
                    'label' => 'Tgl.Lahir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
                ],
                'jk_pasien' => [
                    'label' => 'Jenis Kelamin',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong. harap diisi!'
                    ]
                    ],

            ]);
            if (!$atur) {
                $validasi = \Config\Services::validation();
                return redirect()->to('/DataPasien/input')->withInput();
            }
        $a = new DataPasienModel();
        $a->insert([
            'id_pasien' => $this->request->getVar('id_pasien'),
            'id_kelurahan' => $this->request->getVar('tb_kelurahan'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp'),
            'RT' => $this->request->getVar('RT'),
            'RW' => $this->request->getVar('RW'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jk_pasien' => $this->request->getVar('jk_pasien'),
        ]);
        return redirect()->to('DataPasien/datapasien');
    }
    }
    public function cetakkartupasien($id)
    {
        //$id = $this->request->uri->getSegment(3);
        $a = new CetakKartuModel();
        $b = $a->find($id);
        $data = ['pasien' => $b];
        $html = view('cetakkartupasien', $data);
        // create new PDF document
        $pdf = new TCPDF("L", PDF_UNIT, "A4", true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('RS ENGGAL DAMANG');
        $pdf->SetTitle('KARTU PASIEN');
        $pdf->SetSubject('KARTU PASIEN');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $this->response->setContentType('application/pdf');
        //Close and output PDF document
        $pdf->Output('kartu_pasien.pdf', 'I');
    }

}

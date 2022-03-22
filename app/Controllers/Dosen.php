<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    function __construct()
    {
        $this->model = new \App\Models\ModelDosen();
    }
    public function hapus($id)
	{
		$this->model->delete($id);
		return redirect()->to('dosen');
	}
	public function edit($id)
	{
		return json_encode($this->model->find($id));
	}

	public function simpan()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'nama_dosen' => [
				'label' => 'nama_dosen',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
			'email' => [
				'label' => 'email',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi|valid_email',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter',
					'valid_email' => 'Email yang kamu masukkan tidak valid'
				]
			],
		];

		$validasi->setRules($aturan);
		if ($validasi->withRequest($this->request)->run()) {
			$id = $this->request->getPost('id_dosen');
			$dosen = $this->request->getPost('nama_dosen');
			$email = $this->request->getPost('email');
			$keilmuan = $this->request->getPost('kelompok_keilmuan');

			$data = [
				'id_dosen' => $id,
				'nama_dosen' => $dosen,
				'email' => $email,
				'kelompok_keilmuan' => $keilmuan
			];

			$this->model->save($data);

			$hasil['sukses'] = "Berhasil memasukkan data";
			$hasil['error'] = true;
		} else {
			$hasil['sukses'] = false;
			$hasil['error'] = $validasi->listErrors();
		}


		return json_encode($hasil);
	}
	public function index()
	{
		$jumlahBaris = 5;
		$katakunci = $this->request->getGet('katakunci');
		if ($katakunci) {
			$pencarian = $this->model->cari($katakunci);
		} else {
			$pencarian = $this->model;
		}
		$data['katakunci'] = $katakunci;
		$data['dataDosen'] = $pencarian->orderBy('id_dosen', 'desc')->paginate($jumlahBaris);
		// $data['dataDosen'] = $this->model->orderBy('id_dosen', 'desc')->paginate($jumlahBaris);
		$data['pager'] = $this->model->pager;
		$data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
		return view('dosen_view', $data);
	}
}


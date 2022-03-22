<?php

namespace App\Controllers;

class Lab extends BaseController
{
	function __construct()
	{
		$this->model = new \App\Models\ModelLab();
	}
	public function hapus($id)
	{
		$this->model->delete($id);
		return redirect()->to('lab');
	}
	public function edit($id)
	{
		return json_encode($this->model->find($id));
	}

	public function simpan()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'nama_lab' => [
				'label' => 'nama_lab',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
		];

		$validasi->setRules($aturan);
		if ($validasi->withRequest($this->request)->run()) {
			$id = $this->request->getPost('id_dosen');
			$lab = $this->request->getPost('nama_lab');
			$dosen = $this->request->getPost('ketua_lab');
			$keilmuan = $this->request->getPost('kapasitas');

			$data = [
				'id_lab' => $id,
				'nama_lab' => $lab,
				'ketua_lab' => $dosen,
				'kapasitas' => $keilmuan
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
		// $data['dataLab'] = $this->model->orderBy('id_lab', 'desc')->paginate($jumlahBaris);
		$data['dataLab'] = $pencarian->orderBy('id_lab', 'desc')->paginate($jumlahBaris);
		$data['pager'] = $this->model->pager;
		$data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
		return view('lab_view', $data);
	}
}

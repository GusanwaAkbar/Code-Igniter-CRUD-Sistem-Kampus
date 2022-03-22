<?php

namespace App\Controllers;

class Komunitas extends BaseController
{
	function __construct()
	{
		$this->model = new \App\Models\ModelKomunitas();
	}
	public function hapus($id)
	{
		$this->model->delete($id);
		return redirect()->to('komunitas');
	}
	public function edit($id)
	{
		return json_encode($this->model->find($id));
	}

	public function simpan()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			// 'nama_komunitas' => [
			// 	'label' => 'nama_komunitas',
			// 	'rules' => 'required|min_length[5]',
			// 	'errors' => [
			// 		'required' => '{field} harus diisi',
			// 		'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
			// 	]
			// ],
			'ketua_komunitas' => [
				'label' => 'ketua_komunitas',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter',
				]
			],
		];

		$validasi->setRules($aturan);
		if ($validasi->withRequest($this->request)->run()) {
			$id = $this->request->getPost('id_komunitas');
			$komunitas = $this->request->getPost('nama_komunitas');
			$ketua = $this->request->getPost('ketua_komunitas');
			$bidang = $this->request->getPost('bidang');
			$jumlah = $this->request->getPost('jumlah_anggota');

			$data = [
				'id_komunitas' => $id,
				'nama_komunitas' => $komunitas,
				'ketua_komunitas' => $ketua,
				'bidang' => $bidang,
				'jumlah_anggota' => $jumlah
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
		// $data['dataKomunitas'] = $pencarian->orderBy('id_komunitas', 'desc')->paginate($jumlahBaris);
		// $data['dataKomunitas'] = $this->model->orderBy('id_komunitas', 'desc')->paginate($jumlahBaris);
		$data['dataKomunitas'] = $pencarian->orderBy('id_komunitas', 'desc')->paginate($jumlahBaris);
		$data['pager'] = $this->model->pager;
		$data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
		return view('komunitas_view', $data);
	}
}

<?php

namespace App\Controllers;

class Kegiatan extends BaseController
{
	function __construct()
	{
		$this->model = new \App\Models\ModelKegiatan();
	}
	public function hapus($id)
	{
		$this->model->delete($id);
		return redirect()->to('kegiatan');
	}
	public function edit($id)
	{
		return json_encode($this->model->find($id));
	}

	public function simpan()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'nama_kegiatan' => [
				'label' => 'nama_kegiatan',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
					'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
		];

		$validasi->setRules($aturan);
		if ($validasi->withRequest($this->request)->run()) {
			$id = $this->request->getPost('id_kegiatan');
			$kegiatan = $this->request->getPost('nama_kegiatan');
			$komunitas = $this->request->getPost('komunitas_id');
			$dosen = $this->request->getPost('dosen_id');
			$lab = $this->request->getPost('lab_id');
			$proposal = $this->request->getPost('proposal');
			$rencana = $this->request->getPost('rencana_kegiatan');
			$peserta = $this->request->getPost('jumlah_peserta');

			$data = [
				'id_kegiatan' => $id,
				'nama_kegiatan' => $kegiatan,
				'komunitas_id' => $komunitas,
				'dosen_id' => $dosen,
				'lab_id' => $lab,
				'proposal' => $proposal,
				'rencana_kegiatan' => $rencana,
				'jumlah_peserta' => $peserta,
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
		// $data['datadosen'] = $pencarian->orderBy('id_dosen', 'desc')->paginate($jumlahBaris);
		// $data['dataKegiatan'] = $this->model->orderBy('id_Kegiatan', 'desc')->paginate($jumlahBaris);
		$data['dataKegiatan'] = $pencarian->orderBy('id_Kegiatan', 'desc')->paginate($jumlahBaris);
		$data['pager'] = $this->model->pager;
		$data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
		return view('kegiatan_view', $data);
	}
}

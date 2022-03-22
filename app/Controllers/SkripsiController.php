<?php

namespace App\Controllers;

class SkripsiController extends BaseController
{
    public function index()
    {
        $model = model(skripsimodel::class);
        
        $data["skripsi"] = $model->getSkripsi();
        
        return view('skripsi', $data);
    }

    public function index_tambahkan()
    {
        
        
        return view('tambahkan_skripsi');
    }

    public function index_sidang()
    {
        $model = model(skripsimodel::class);
        
        $data["skripsi"] = $model->getSidang();
        
        return view('skripsi_sidang', $data);
    }

    public function index_berhasil()
    {
        $model = model(skripsimodel::class);
        
        $data["skripsi"] = $model->getSidang_disetujui();
        
        return view('skripsi_berhasil', $data);
    }
   

    public function create()
    {

        $model = model(skripsimodel::class);

        if ($this->request->getMethod() === 'post')

        $model->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'judul' => $this->request->getPost('judul'),
            'link' => $this->request->getPost('link'),
            'dosen' => $this->request->getPost('dosen')
        ]);


        return redirect()->to('http://localhost:8080/skripsi');
    }

    public function naiksidang($id)
    {
        $model = model(skripsimodel::class);
        
        $model->set('status', 1, FALSE);
        $model->where('id', $id);
        $model->update();


        return redirect()->to('http://localhost:8080/sidang');

    }
    

    public function naikskripsi($id)
    {
        $model = model(skripsimodel::class);
        
        $model->set('status', 2, FALSE);
        $model->where('id', $id);
        $model->update();


        return redirect()->to('http://localhost:8080/berhasilskripsi');

    }

    public function gagalskripsi($id)
    {
        $model = model(skripsimodel::class);
        
        $model->set('status', 0, FALSE);
        $model->where('id', $id);
        $model->update();


        return redirect()->to('http://localhost:8080/skripsi');

    }
}

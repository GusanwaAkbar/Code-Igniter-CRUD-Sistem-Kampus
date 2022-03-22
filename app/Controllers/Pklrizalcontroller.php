<?php

namespace App\Controllers;

class Pklrizalcontroller extends BaseController
{
    public function index()
    {

        $model = model(rizalmodel::class);
        
        $data["pkl"] = $model->getPKL();
        
        return view('pkl', $data);

    }

    public function index_setuju()
    {

        $model = model(rizalmodel::class);
        
        $data["pkl"] = $model->getDisetujui();
        
        return view('pkl_copy', $data);
        
    }

    public function create()
    {

        $model = model(rizalmodel::class);

        if ($this->request->getMethod() === 'post')

        $model->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'semester' => $this->request->getPost('semester'),
            'perusahaan' => $this->request->getPost('perusahaan'),
            'keterangan' => $this->request->getPost('keterangan')
        ]);


        return redirect()->to('http://localhost:8080/pkl');
    }

    public function delete($id)
    {

        $model = model(rizalmodel::class);

        

        $model->delete($id);


        return redirect()->to('http://localhost:8080/pkl');
    }

    public function accept($id)
    {

        $model = model(rizalmodel::class);

        
        $model->set('is_approve',1, FALSE);
        $model->where('id', $id);
        $model->update();

        


        return redirect()->to('http://localhost:8080/pkl');
    }

}

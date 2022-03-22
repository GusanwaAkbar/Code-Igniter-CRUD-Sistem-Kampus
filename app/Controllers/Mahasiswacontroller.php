<?php

namespace App\Controllers;

class Mahasiswacontroller extends BaseController
{
    public function index()
    {

        $model = model(mahasiswamodel::class);        

        $data["mahasiswa"] = $model->getMahasiswa();
        $data["setuju"] = $model->getMahasiswa_disetujui();


        return view('tablezuy',$data);
    }

    public function setuju($id)
    {

        $model = model(mahasiswamodel::class);        

        $model->set("is_approve",1, FALSE);
        $model->where('id', $id);
        $model->update();


        return redirect()->to('http://localhost:8080/universitas_pkl');
    }




    public function create()
{

        $model = model(mahasiswamodel::class);

    if ($this->request->getMethod() === 'post') 
    
    {
        $model->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'email' => $this->request->getPost('email'),
            'linkcv' => $this->request->getPost('linkcv'),
            'linkedin' => $this->request->getPost('linkedin')
        ]);

        return redirect()->to('http://localhost:8080/universitas_pkl');
    } 
    
    else {

    }      
        

        

}
}



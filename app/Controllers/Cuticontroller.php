<?php

namespace App\Controllers;

class Cuticontroller extends BaseController
{

    


    
    public function create()
    {

            $model = model(cutimodel::class);

        if ($this->request->getMethod() === 'post') 
        
        {
            $model->save([
                'nama' => $this->request->getPost('nama'),
                'nim' => $this->request->getPost('nim'),
                'no_telp' => $this->request->getPost('no_telp'),
                'semester' => $this->request->getPost('semester'),
                'alasan' => $this->request->getPost('alasan')
            ]);

            return redirect()->to('http://localhost:8080/approvecuti');
        } 
        
        else {

        }      
            

            return redirect('cuti')->with('success', 'Data Added Successfully');	

    }

    public function index($page = 'cuti')
    {
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $model = model(cutimodel::class);
        $data['cuti'] = $model->getCuti();

        return view('cuti', $data);
    
    }

    public function index_disetujui($page = 'cuti_copy')
    {
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $model = model(cutimodel::class);
        $data['cuti'] = $model->getCuti_disetujui();

        return view('cuti_copy', $data);
    
    }

    public function setujui($id)
    {
        $model = model(cutimodel::class);

        $model->set("is_approve", 1, FALSE);
        $model->where('id', $id);
        $model->update();

        return redirect()->to('http://localhost:8080/approvecuti');

    }

    



}

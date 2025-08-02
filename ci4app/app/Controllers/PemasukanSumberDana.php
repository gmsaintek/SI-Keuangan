<?php

namespace App\Controllers;

use App\Models\PemasukanSumberdanaModel;

class PemasukanSumberDana extends BaseController
{
    public function index()
    {
        return view('pemasukan_sumberdana');
    }

    public function store()
    {
        // Get the model
        $model = new PemasukanSumberdanaModel();

        // Get POST data from the form
        $data = [
            'nama_sumber' => $this->request->getPost('nama_sumber'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
        ];

        // Insert data into the database
        if ($model->insert($data)) {
            // Redirect to the same page after successful insert
            return redirect()->to(base_url('pemasukan_sumberdana'));
        } else {
            // Handle error in case insertion fails
            return redirect()->back()->with('error', 'Failed to insert data');
        }
    }
}

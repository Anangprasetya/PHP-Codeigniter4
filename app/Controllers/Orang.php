<?php

namespace App\Controllers;

use \App\Models\OrangModel;

class Orang extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new orangModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Orang',
            'orang' => $this->orangModel->paginate(6, 'orang'),
            'pager' => $this->orangModel->pager
            // 'orang' => $this->orangModel->findAll()
        ];

        return view('orang/index', $data);
    }
}

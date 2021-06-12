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
        $currentPage = ($this->request->getVar('page_orang')) ? $this->request->getVar('page_orang') : 1;

        d($this->request->getVar('keyword'));

        $data = [
            'title' => 'Daftar Orang',
            'orang' => $this->orangModel->paginate(6, 'orang'),
            'pager' => $this->orangModel->pager,
            'currentPage' => $currentPage,
            // 'orang' => $this->orangModel->findAll()
        ];

        return view('orang/index', $data);
    }
}

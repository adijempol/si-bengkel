<?php

namespace App\Controllers;

class History extends BaseController
{
     public function index()
     {
          $data = [
               // 'title' => 'halaman admin',
               'content' => 'history/data_service'
          ];

          return view('layout/wrapper', $data);

          // return view('layout/footer');
     }
}

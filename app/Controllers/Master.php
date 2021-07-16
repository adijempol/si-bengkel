<?php

namespace App\Controllers;

class Master extends BaseController
{
     public function index()
     {
          $data = [
               // 'title' => 'halaman admin',
               'content' => 'master/stock_parts'
          ];

          return view('layout/wrapper', $data);
          // return view('layout/sidebar');
          // return view('layout/footer');
     }

     public function mekanik()
     {
          $data = [
               // 'title' => 'halaman admin',
               'content' => 'master/list_mekanik'
          ];

          return view('layout/wrapper', $data);
     }
     public function material()
     {
          $data = [
               // 'title' => 'halaman admin',
               'content' => 'master/stock_material'
          ];

          return view('layout/wrapper', $data);
     }
}

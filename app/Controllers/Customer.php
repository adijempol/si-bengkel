<?php

namespace App\Controllers;

class Customer extends BaseController
{
     public function index()
     {
          $data = [
               // 'title' => 'halaman admin',
               'content' => 'customer/cust_spk'
          ];

          return view('layout/wrapper', $data);
          // return view('layout/sidebar');
          // return view('layout/footer');
     }

     public function spk()
     {
          $data = [
               // 'title' => 'halaman admin',
               'content' => 'customer/create_spk'
          ];

          return view('layout/wrapper', $data);
     }
     public function request()
     {
          $data = [
               // 'title' => 'halaman admin',
               'content' => 'customer/req_order'
          ];

          return view('layout/wrapper', $data);
     }
     // public function request_equipment()
     // {
     //      $data = [
     //           // 'title' => 'halaman admin',
     //           'content' => 'customer/req_equipment'
     //      ];

     //      return view('layout/wrapper', $data);
     // }
}

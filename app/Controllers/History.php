<?php

namespace App\Controllers;

use App\Models\Customer_model;
use App\Models\Request_order;
use App\Models\History_model;

class History extends BaseController
{
     protected $mRequest;
     public function __construct()
     {
          $this->mRequest = service("request");
          $this->Customer_model = new Customer_model();
          $this->Request_order = new Request_order();
          $this->History_model = new History_model();
     }

     // Method yang berfungsi untuk menampilkan data berdasarkan dari id SPK
     public function index()
     {
          session();
          if (is_null(session()->get('login'))) {
               return redirect()->to(base_url('/home'));
          }
          // $dataSpk = $this->Customer_model->findAll();
          $dataSpk = $this->History_model->findAll();
          $nameUser = session()->get('name');

          $data = [
               'title' => 'Data Service',
               'user' => $nameUser,
               'dataSpk' => $dataSpk
          ];
          return view('history/data_service', $data);
     }
     public function historySearch()
     {
          // $dataSpk = $this->Customer_model->findAll();
          $dataSpk = $this->History_model->findAll();

          $nameUser = session()->get('name');

          $idSpk = $this->mRequest->getVar('id_spk');

          $db      = \Config\Database::connect();
          // $builder = $db->table('spk');
          $builder = $db->table('history');
          $builder->select('*');
          // $builder->join('req_order', 'req_order.id_spk= spk.id');
          $builder->join('req_order', 'req_order.id_spk= history.spk_id');
          // $builder->like('id', $idSpk);
          $builder->like('spk_id', $idSpk);
          $query = $builder->get()->getRowArray();
          // dd($query);
          if (is_null($query)) {
               // $dataSpkByid = $this->Customer_model->find($idSpk);
               $dataSpkByid = $this->History_model->find($idSpk);

               $data = [
                    'title' => 'Data Service',
                    'user' => $nameUser,
                    'query' => $query,
                    'dataSpk' => $dataSpk,
                    'dataSpkByid' => $dataSpkByid
               ];
               return view('history/data_service_by_id',  $data);
          }
          $data = [
               'title' => 'Data Service',
               'user' => $nameUser,
               'query' => $query,
               'dataSpk' => $dataSpk,
          ];
          // dd($data);
          return view('history/data_service', $data);
     }
}

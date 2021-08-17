<?= $this->extend('layout/wrapper'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-md-8">
                         <h2 class="text-bold"><u>SPK List</u></h2>
                    </div>
                    <div class="col-md-4 mt-5">
                         <div class="form-group col-md-6 justify-content-end" style="margin-right:90%">
                              <label for="exampleDate">Date : <?= date('d F Y'); ?></label>
                         </div>
                    </div>
               </div>
          </div><!-- /.container-fluid -->
     </section>


     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">

               <div class="flashdata" data-flashdata="<?= session()->getflashdata('flash'); ?>">

               </div>
               <?php if (session()->getFlashdata('flash')) : ?>

               <?php endif; ?>

               <div class="row">
                    <div class="col-md-12">
                         <div class="card">
                              <div class="card-body">
                                   <table class="table table-bordered table-responsive">
                                        <thead>
                                             <tr>
                                                  <th style="width: 5%">#</th>
                                                  <th style="width: 12%; text-align:center;">Plat Number</th>
                                                  <th style="width: 30%; text-align:center;">Task</th>
                                                  <th style="width: 12%; text-align:center;">Service Advisor</th>
                                                  <th style="width: 10%; text-align:center;">Mechanic</th>
                                                  <th style="width: 10%; text-align:center;">Date</th>
                                                  <th style="width: 10%; text-align:center;">Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                                             <?php foreach ($dataSpk as $spk) : ?>
                                                  <tr id="selesai">
                                                       <td><?= $i++; ?></td>
                                                       <td><?= $spk['plat_number']; ?></td>
                                                       <td><?= $spk['desc1'] . ' ,' . $spk['desc2']; ?></td>
                                                       <td><?= $spk['ser_advisor']; ?></td>
                                                       <td><?= $spk['mekanik']; ?></td>
                                                       <td><?= $spk['created_at']; ?></td>
                                                       <td class="d-flex justify-content-center">
                                                            <a href="<?= base_url('customer/deleteSpk/' . $spk['id']); ?>" class=" badge badge-pill badge-success">Complete</a>
                                                       </td>
                                                  </tr>
                                             <?php endforeach; ?>
                                        </tbody>
                                   </table>
                              </div>

                              <?= $pager->links('dataSpk', 'orang_pagination') ?>
                              <!-- /.card-body -->
                              <!-- <div class="card-footer clearfix">
                                   <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                   </ul>
                              </div> -->
                         </div>
                    </div>
     </section>
</div>
<!-- /.card -->

<?= $this->endSection('content'); ?>
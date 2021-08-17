<?= $this->extend('layout/wrapper'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h2 class="text-bold"><u>Stock Sparepart</u></h2>
                    </div>
               </div>
          </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">
               <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newParts">
                    Add New Parts
               </button>

               <div class="flash_data" data-flashdata="<?= session()->getflashdata('flash'); ?>">

               </div>

               <?php if (session()->getFlashdata('flash')) : ?>
                    <!-- <div class="alert alert-dismissible fade show alert-success col-md-4 d-flex justify-content-between " role="alert">
                         <p>
                              <?= session()->getFlashdata('pesan'); ?>
                         </p>
                         <button type="button" class="btn-closee ml-auto" data-dismiss="alert" aria-label="Close">X</button>
                    </div> -->
               <?php endif; ?>
               <div class="row">
                    <div class="col-md-8">
                         <div class="card">
                              <!-- /.card-header -->
                              <div class="card-body">
                                   <table class="table table-bordered">
                                        <thead>
                                             <tr>
                                                  <th style="width: 10px">#</th>
                                                  <th style="width: 25%; text-align: center;">ID Part</th>
                                                  <th style="width: 30%; text-align: center;">Name</th>
                                                  <th style="width: 30%; text-align: center;">Price</th>
                                                  <th style=" width: 10%; text-align: center;">Total</th>
                                                  <th style=" width: 20%; text-align: center;">Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                             <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                                             <?php foreach ($dataAllPart as $p) : ?>
                                                  <tr>
                                                       <td><?= $i++; ?></td>
                                                       <td><?= $p['kd_part']; ?></td>
                                                       <td><?= $p['name_part']; ?></td>
                                                       <td><?= $p['hr_part']; ?></td>
                                                       <td><?= $p['t_part']; ?></td>
                                                       <td class="d-flex justify-content-center"><a href="<?= base_url('master/editPart/' . $p['kd_part']); ?>" class="badge badge-pill badge-warning mr-2 tampilPart" data-toggle="modal" data-target="#newParts" data-bs-id="<?= $p['kd_part'] ?>;">Edit</a>
                                                            <a href="<?= base_url('master/deletePart/' . $p['kd_part']); ?>" class="badge badge-pill badge-danger tombol-delete">Delete</a>
                                                       </td>
                                                  </tr>
                                             <?php endforeach; ?>
                                        </tbody>
                                   </table>
                              </div>

                              <!-- Memanggil method link dengan mengisi data dari contoller method mekanik -->
                              <?= $pager->links('dataAllPart', 'orang_pagination') ?>
                         </div>
                    </div>
     </section>
</div>
<!-- /.card -->



<!-- mekanik modal -->
<div class="modal fade" id="newParts" tabindex="-1" aria-labelledby="newModalMekanikLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="newModalMekanikLabel">Add New Parts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>

               <div class="modal-body" id="modal-bodi">
                    <form action="<?= base_url(); ?>/master/addParts" method="POST">
                         <!-- <input type="hidden" name="idMekanik" id="idMekanik"> -->
                         <div class="form-group">
                              <label for="exampleInputKode">Kode</label>
                              <input type="text" class="form-control" id="kdPart" name="kd_part" placeholder="Enter kode">
                         </div>
                         <div class="form-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text" class="form-control" id="namePart" name="name_part" placeholder="Enter name">
                         </div>
                         <div class="form-group">
                              <label for="exampleInputPrice">Price</label>
                              <input type="text" class="form-control" id="hrPart" name="hr_part" placeholder="Enter price">
                         </div>
                         <div class="form-group">
                              <label for="exampleInputPrice">Total</label>
                              <input type="text" class="form-control" id="tPart" name="t_part" placeholder="Enter price">
                         </div>
               </div>

               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
               </div>
               </form>
          </div>
     </div>
</div>
<?= $this->endSection('content'); ?>
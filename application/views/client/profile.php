 <!-- Header -->
 <!-- Page content -->
 <div class="container-fluid mt-3">
     <div class="row">
         <div class="col-xl-12">
             <div class="card bg-default">
                 <div class="card-header bg-transparent">
                     <div class="row align-items-center">
                         <div class="col">
                             <h5 class="h3 text-white mb-0">Ubah Profil</h5>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <form action="<?= site_url('Member/profile_action') ?>" method="POST">
                         <div class="row">
                             <div class="col-6">
                                 <div class="form-group mb-3">
                                     <div class="input-group input-group-merge input-group-alternative">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                         </div>
                                         <input class="form-control" placeholder="Nama Member" type="text" value="<?= $user->name ?>" name="nama">
                                     </div>
                                 </div>
                                 <div class="form-group mb-3">
                                     <div class="input-group input-group-merge input-group-alternative">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                         </div>
                                         <input class="form-control" placeholder="No. Hp" type="text" name="no_hp" value="<?= $user->phone ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="col-6">
                                 <div class="form-group mb-3">
                                     <div class="input-group input-group-merge input-group-alternative">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                         </div>
                                         <input class="form-control" placeholder="<?= form_error('pass1') == true ? 'Password tidak sama' : 'Password' ?>" type="password" name="pass1">
                                     </div>
                                 </div>
                                 <div class="form-group mb-3">
                                     <div class="input-group input-group-merge input-group-alternative">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                         </div>
                                         <input class="form-control" placeholder="<?= form_error('pass2') == true ? 'Password tidak sama' : 'Konfirmasi Password' ?>" type="password" name="pass2">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <button type="submit" class="btn btn-primary my-4">Simpan perubahan</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
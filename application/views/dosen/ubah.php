<div class="container">
     <div class="row mt-5">
          <div class="col-md-5">
          <div class="card">
               <div class="card-header">
               Form Ubah Data Dosen
               </div>
               <div class="card-body">
                    <form action="" method="post">
                         <input type="hidden" name="id" value="<?=$dosen['id']; ?>">
                         <div class="form-group">
                              <label for="nip">NIP</label>
                              <input type="text" class="form-control" value="<?=$dosen ['nip'];?>" id="nip" name="nip"readonly>
                              <small class="form-text text-danger" ><?= form_error('nip')?></small>
                         </div>
               <div class="form-group">
                    <label for="namadosen">Nama Dosen</label>
                    <input type="text" class="form-control"  value="<?=$dosen ['namadosen'];?> "id="namadosen" name="namadosen">
                    <small class="form-text text-danger" ><?= form_error('namadosen')?></small>
               </div>
               <div class="row mt-2">
                    <div class="col-md-8">
                         <button type="submit" name="ubah" class="btn btn-primary float-right-end">Ubah</button>
                    </div>
               </div>
               <div class="row mt-2">
                    <div class="col-md-8">
                         <a href="<?= base_url(); ?>dosen" class="btn btn-danger float-right-end">Kembali</a>
                    </div>
               </div>
               </div>
          </div>
     </form>
          </div>
     </div>
</div>
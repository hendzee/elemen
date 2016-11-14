<?php
  foreach($data as $val){
?>
<section class="content-header">
  <h1>
    Profil Admin
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">General Elements</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Isikan data baru untuk memperbarui profil</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div>
          <input type="hidden" name="id_user" value="<?php echo $val['id_user'];?>">
          <div class="box-body">
            <div class="form-group">
              <label>Nama Depan</label>
              <input type="text" name="nama_dpn" class="form-control" placeholder="Nama Depan" value="<?php echo $val['nama_dpn'];?>">
            </div>
            <div class="form-group">
              <label>Nama Belakang</label>
              <input type="text" name="nama_blk" class="form-control" placeholder="Nama Belakang" value="<?php echo $val['nama_blk'];?>">
            </div>
            <div class="form-group">
              <label>Jabatan</label>
              <select type="text" name="jabatan" class="form-control" placeholder="Nama Depan">
                <option value="Lead Programmer">Lead Programmer </option>
                <option value="Lead Designer">Lead Designer </option>
                <option value="Money Management">Money Management </option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $val['email'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $val['password'];?>">
            </div>
            <div class="form-group">
              <label>Alamat Facebook</label>
              <input type="text" name="facebook" class="form-control" placeholder="Copy paste link facebook" value="<?php echo $val['user_fb'];?>">
            </div>
            <div class="form-group">
              <label>Alamat Twitter</label>
              <input type="text" name="twitter" class="form-control" placeholder="Copy paste link twitter" value="<?php echo $val['user_twit'];?>">
            </div>
            <div class="form-group">
              <label>Alamat Google+</label>
              <input type="text" name="google" class="form-control" placeholder="Copy paste link google+" value="<?php echo $val['user_goog'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Masukan Foto</label>
              <input type="file" name="foto" id="foto">
              <p class="help-block">Example block-level help text here.</p>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button id="submit_edit_admin" class="btn btn-primary" onclick="submit_edit_admin()">Perbarui</button>
          </div>
        </div>
      </div>
      <!-- /.box -->

      <!-- Form Element sizes -->
    </div>
    <!--/.col (left) -->
    <!-- right column -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php } ?>

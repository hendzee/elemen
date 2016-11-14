<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Tables
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hover Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID Admin</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Email</th>
              <th>Alamat Facebook</th>
              <th>ALamat Twitter</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($data as $val){?>
              <tr>
                <?php $id=$val["id_user"];?>
                <?php $str_id="\"".$id."\"";?>
                <td><?php echo $id;?></td>
                <td><?php echo $val["nama_dpn"]." ".$val["nama_blk"];?></td>
                <td><?php echo $val["jabatan"];?></td>
                <td><?php echo $val["email"];?></td>
                <td><?php echo $val["user_fb"];?></td>
                <td><?php echo $val["user_twit"];?></td>
                <td>
                  <button class="btn btn-primary" onclick='list_edit_admin(<?php echo $str_id;?>)'>Edit</button>
                  <button class="btn btn-danger" onclick='list_delete_admin(<?php echo $str_id;?>)'>Hapus</button>
                </td>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

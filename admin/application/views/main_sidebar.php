<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <?php
      $id_user = $this->session->userdata("id_user");
      $query = $this->db->query("SELECT * FROM team WHERE id_user='$id_user'");

      foreach($query->result_array() as $val){
    ?>
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url();?>../assets/images/<?php echo $val['foto'];?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $val['nama_dpn']." ".$val['nama_blk'];?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <?php } ?>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-group"></i>
          <span>Atur Admin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="add_admin"><a href="#"><i class="fa fa-circle-o"></i> Admin Baru</a></li>
          <li id="list_admin"><a href="#"><i class="fa fa-circle-o"></i> Daftar Admin</a></li>
          <li id="edit_admin"><a href="#"><i class="fa fa-circle-o"></i> Profile User</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-star"></i>
          <span>Layanan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li id="add_service"><a href="#"><i class="fa fa-circle-o"></i> Layanan Baru</a></li>
          <li id="#"><a href="#"><i class="fa fa-circle-o"></i> Daftar Layanan</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

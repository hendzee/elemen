</div>
<!-- jQuery 2.2.3 -->
<script src="<?=base_url();?>../assets/admin_plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>../assets/admin_bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?=base_url();?>../assets/admin_plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url();?>../assets/admin_plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url();?>../assets/admin_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url();?>../assets/admin_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url();?>../assets/admin_plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?=base_url();?>../assets/admin_plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url();?>../assets/admin_plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url();?>../assets/admin_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url();?>../assets/admin_plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>../assets/admin_plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>../assets/admin_dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url();?>../assets/admin_dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>../assets/admin_dist/js/demo.js"></script>
<!--sweetalert-->
<script src="<?=base_url();?>../assets/admin_plugins/sweetalert/dist/sweetalert.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url();?>../assets/admin_plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>../assets/admin_plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
  var formdata = new FormData();
  //to add admin page
  $(document).ready(function(){
    $("#add_admin").click(function(e){
      e.preventDefault();

      $.ajax({
        type:"POST",
        url: "<?=base_url()?>index.php/Admin_controller/get_content/add_admin",
        dataType:"text",

        success:function(response){
          $(".content-wrapper").html(response);
        }
      });
    });
  });

  //to edit admin page
  $(document).ready(function(){
    $("#edit_admin").click(function(e){
      e.preventDefault();

      $.ajax({
        type:"POST",
        url: "<?=base_url()?>index.php/Admin_controller/get_content_update/edit_admin/team/id_user/<?php echo $this->session->userdata("id_user");?>",
        dataType:"text",

        success:function(response){
          $(".content-wrapper").html(response);
        }
      });
    });
  });

  // to list admin
  $(document).ready(function(){
    $("#list_admin").click(function(e){
      e.preventDefault();

      $.ajax({
        type:"POST",
        url: "<?=base_url()?>index.php/Admin_controller/get_content/list_admin",
        dataType:"text",

        success:function(response){
          $(".content-wrapper").html(response);
          table_paging();
          $("th[aria-label='Aksi: activate to sort column ascending']").removeAttr("class");
        }
      });
    });
  });

  // to add service
  $(document).ready(function(){
    $("#add_service").click(function(e){
      e.preventDefault();

      $.ajax({
        type:"POST",
        url: "<?=base_url()?>index.php/Admin_controller/get_content/add_service",
        dataType:"text",

        success:function(response){
          $(".content-wrapper").html(response);                    
        }
      });
    });
  });


  function table_paging(){
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  }

  //set form admin value
  function set_admin_val(){
    var nama_dpn = $("input[name='nama_dpn']").val();
    var nama_blk = $("input[name='nama_blk']").val();
    var jabatan = $("select[name='jabatan']").val();
    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();
    var facebook = $("input[name='facebook']").val();
    var twitter = $("input[name='twitter']").val();
    var google = $("input[name='google']").val();

    formdata.append('nama_dpn', nama_dpn);
    formdata.append('nama_blk', nama_blk);
    formdata.append('jabatan', jabatan);
    formdata.append('email', email);
    formdata.append('password', password);
    formdata.append('facebook', facebook);
    formdata.append('twitter', twitter);
    formdata.append('google', google);
    formdata.append('foto', $('input[type=file]')[0].files[0]);
  }

  function submit_add_admin(){
      set_admin_val();

      if(check_admin_data() == 1){
        $.ajax({
          type: "POST",
          dataType: "text",
          url: "<?=base_url()?>index.php/Admin_controller/add_admin/",
          /**
          data: {'nama_dpn': nama_dpn, 'nama_blk': nama_blk, 'jabatan': jabatan,
            'email': email, 'password': password, 'facebook': facebook,
            'twitter': twitter, 'google': google, 'foto': foto},
          **/
          data:formdata,
          processData: false,
          contentType: false,

          success:function(response){
            swal("Sukses", "Data berhasil dimasukkan", "success");
            $(".content-wrapper").html(response);
          }
        });
      }else{
        swal("Error", "nama depan, email dan password harus diisi...", "error");
      }
  }

  function submit_edit_admin(){
    set_admin_val();
    var id_user = $("input[name='id_user']").val();

    formdata.append("id_user", id_user);

    if(check_admin_data() == 1){
      $.ajax({
        type: "POST",
        dataType: "text",
        url: "<?=base_url()?>index.php/Admin_controller/update_admin",
        /**
        data: {'nama_dpn': nama_dpn, 'nama_blk': nama_blk, 'jabatan': jabatan,
          'email': email, 'password': password, 'facebook': facebook,
          'twitter': twitter, 'google': google, 'foto': foto},
        **/
        data:formdata,
        processData: false,
        contentType: false,

        success:function(response){
          swal("Sukses", "Data berhasil diperbarui", "success");
          $(".content-wrapper").html(response);
        }
      });
    }else{
      swal("Error", "nama depan, email dan password harus diisi...", "error");
    }
  }

  function list_edit_admin(num){
    var id_data = num;

    $.ajax({
      type:"POST",
      url: "<?=base_url()?>index.php/Admin_controller/get_content_update/edit_admin/team/id_user/" + id_data,
      dataType:"text",

      success:function(response){
        $(".content-wrapper").html(response);
      }
    });
  }

  function list_delete_admin(num){
    var id_data = num;

    $.ajax({
      type:"POST",
      url: "<?=base_url()?>index.php/Admin_controller/delete_admin/" + id_data,
      dataType:"text",

      success:function(response){
        swal("Sukses", "Data berhasil dihapus", "success");
        $(".content-wrapper").html(response);
      }
    });
  }

  //reset data
  function delete_form_admin(){
    var nama_dpn = $("input[name='nama_dpn']").val("");
    var nama_blk = $("input[name='nama_blk']").val("");
    var email = $("input[name='email']").val("");
    var password = $("input[name='password']").val("");
    var facebook = $("input[name='facebook']").val("");
    var twitter = $("input[name='twitter']").val("");
    var google = $("input[name='google']").val("");
  }

  function check_admin_data(){
    var nama_dpn = $("input[name='nama_dpn']").val();
    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();

    if(nama_dpn == "" || email == "" || password == ""){
      return 0;
    }else{
      return 1;
    }
  }
</script>

</body>
</html>

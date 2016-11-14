$(document).ready(function(){
  $("#add_admin").click(function(e){
    e.preventDefault();

    $.ajax({
      type:"post",
      url: "<?php base_url()?>index.php/Admin_controller/get_content/add_admin",
      dataType:"text",

      success:function(response){
        $(".content-wrapper").html(response);
      }
    });
  });
});

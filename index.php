<!DOCTYPE html>
<html>

<?php include('chunks/head.php'); ?>
<?php include('chunks/header.php'); ?>
<?php include('chunks/aside.php'); ?> 



<body class="hold-transition skin-blue sidebar-mini" onload="main();">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
   
    
   
     <section class="content" id="contentArea">
         <!-- Tu ide sadržaj -->
         <input type="hidden" id="lastId"> 

  </section>

    

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://besoft.hr">Besoft d.o.o.</a>.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



<!-- DataTables -->
<!-- <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
<!-- iCheck 1.0.1 -->
<!-- FastClick kaže da je to polyfill to remove click delays on browsers with touch UIs. -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App  kaže da je to main.js koji bi trebao biti svuda includan-->
<script src="dist/js/adminlte.min.js"></script>


<!-- jvectormap  -->
<!-- izbrisao 2 linka o mapama -->
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>



<script src="js/createContent.js"></script>


<?php include('chunks/scripts.php'); ?>

<!-- page script -->
<!-- ako, npr. koristim dataTable, onda ide tu ispod ovog page scripta!! -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  
  /* $( document ).ready(function() {
   //Initialize Select2 Elements
   $('.select2').select2();
}); */
    
  </script> 
</body>
</html>

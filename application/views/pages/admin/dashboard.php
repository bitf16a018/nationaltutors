<?php include 'base.php'; ?>

<?php startblock('title');?>
<title>NationalTutors | Admin</title>
<?php endblock();?>

<?php startblock('body');?>
<div class="wrapper">

  <?php include 'header.php' ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'slidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php if(isset($tutor_requests_count) && $tutor_requests_count > 0) echo $tutor_requests_count; ?></h3>
              <p>Tutor Requests</p>
            </div>
            <div class="icon">
              <i class="fa fa-leaf"></i> 
            </div>
            <a href="<?php echo site_url('AdminPanel/view_tutor_requests');?>" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>27</h3>

              <p>Student Requests</p>
            </div>
            <div class="icon">
              <i class="fa fa-hand-pointer-o"></i>
            </div>
            <a href="#" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <?php include 'side_control_bar.php' ?>
 <!-- ./wrapper -->
 <?php endblock();?>
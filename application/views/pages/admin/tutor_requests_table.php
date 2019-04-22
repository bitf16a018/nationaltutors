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
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tutor-requests-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Requestee Name</th>
                    <th>Requestee Email</th>
                    <th>Date of Request</th>
                    <th>Date of Response</th>
                    <th>Request Status</th>
                    <th>Reason</th>
                  </tr>
                </thead>
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
    <div id="tutor-requests-data" style="display: block;">
      <?php if(isset($tutor_requests)) echo $tutor_requests;?>
    </div>


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

  <?php startblock('scripts');?>

  <script type="text/javascript" src="<?php echo base_url('assets/js/tutor_requests_datatable.js');?>"></script>
  <?php endblock();?>
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

          <?php if(isset($_GET['success_info']) && $_GET['success_info'] == 'approved'){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Request was Approved!</h4>
              You have succefully approved the request from a tutor.
            </div>
          <?php }else if(isset($_GET['success_info']) && $_GET['success_info'] == 'denied'){ ?>
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Request was denied!</h4>
                You have denied the request from a tutor.
              </div>
          <?php } ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tutor Requests</h3>
              <a href="<?php echo site_url('AdminPanel/view_tutor_requests/unseen'); ?>" class="btn btn-warning btn-xs" style="margin-left: 5px;">unseen</a>
              <a href="<?php echo site_url('AdminPanel/view_tutor_requests/denied'); ?>" class="btn btn-danger btn-xs" style="margin-left: 5px;">Denied</a>
              <a href="<?php echo site_url('AdminPanel/view_tutor_requests/approved'); ?>" class="btn btn-success btn-xs" style="margin-left: 5px;">Approved</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tutor-requests-table" class="table table-bordered table-striped">
               <thead>
                <tr>
                  <th>Requestee Name</th>
                  <th>Requestee Email</th>
                  <th>Date of Request</th>
                  <th>Request Status</th>
                </tr>
              </thead>
              <tbody>
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
  <div id="tutor-requests-data-div" style="display: none;">
    <?php if(isset($tutor_requests)) echo $tutor_requests;?>
  </div>
  <div id="site-url-div" style="display: none;">
    <?php echo site_url();?>
  </div>


</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="#">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>
<?php include 'side_control_bar.php' ?>
<!-- ./wrapper -->
<?php endblock();?>

<?php startblock('scripts');?>

<script type="text/javascript" src="<?php echo base_url('assets/js/tutor_requests_datatable.js');?>"></script>
<?php endblock();?>
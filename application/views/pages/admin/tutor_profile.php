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
        User Profile
        <?php if($tutor_profile_data['status'] == 'unseen'){ ?>
          <span class="label label-warning"><?php echo $tutor_profile_data['status']; ?></span>
        <?php }else if($tutor_profile_data['status'] == 'approved'){ ?>
          <span class="label label-success"><?php echo $tutor_profile_data['status']; ?></span>
        <?php }else if($tutor_profile_data['status'] == 'denied'){ ?>
          <span class="label label-danger"><?php echo $tutor_profile_data['status']; ?></span>
        <?php } ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('tutor_assets/' . $tutor_profile_data['profile_pic_path'] ); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $tutor_profile_data['name']?></h3>

              <a href="<?php echo site_url('AdminPanel/response_tutor_request/' . $tutor_profile_data['id'] . '/approved'); ?>" class="btn btn-success btn-block"><b>Approve</b></a>

              <a href="<?php echo site_url('AdminPanel/response_tutor_request/' . $tutor_profile_data['id'] . '/denied'); ?>" class="btn btn-danger btn-block"><b>Deny</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Personal</a></li>
              <li><a href="#timeline" data-toggle="tab">Preference</a></li>
              <li><a href="#settings" data-toggle="tab">Documents</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo $tutor_profile_data['email'];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Gender</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo ($tutor_profile_data['gender']=='0'?'Female':'Male');?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Father Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo $tutor_profile_data['fname'];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">CNIC</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $tutor_profile_data['cnic'];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Experience</label>

                    <!-- <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $tutor_profile_data['teaching_experience'];?>" disabled>
                    </div> -->


                    <div class="box-body">
                      <div class="progress">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="<?php if($tutor_profile_data['teaching_experience'] == '1 (no experience)') echo 'width:7%; background-color: red;'; else if($tutor_profile_data['teaching_experience'] == '2') echo 'width:25%; background-color: yellow;';else if($tutor_profile_data['teaching_experience'] == '3') echo 'width:50%; background-color: #e0f257;';else if($tutor_profile_data['teaching_experience'] == '4') echo 'width:75%; background-color: blue;';else if($tutor_profile_data['teaching_experience'] == '5 (expert)') echo 'width:100%; background-color: green;';?> ">
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $tutor_profile_data['phone'];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Alternate Phone</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $tutor_profile_data['alt_phone'];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">City</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $tutor_profile_data['city'];?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Mailing Address</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" disabled=""><?php echo $tutor_profile_data['mailing_address'];?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Permanent Address</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" disabled=""><?php echo $tutor_profile_data['permanent_address'];?></textarea>
                    </div>
                  </div>

                </form>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <div class="box-body">

                  <strong>Prefered Classes</strong>
                  <p>
                    <span class="label label-primary">:</span>  
                    <?php foreach ($tutor_profile_data['prefered_classes'] as $key => $record) {?>
                      <?php $randNum = rand(1,5); ?>
                      <?php if($randNum == 1){ ?>          
                        <span class="label label-info"><?php echo $record['class_name'] ?></span>
                      <?php }else if($randNum == 2){ ?>
                        <span class="label label-success"><?php echo $record['class_name'] ?></span>
                      <?php }else if($randNum == 3){ ?>
                        <span class="label label-warning"><?php echo $record['class_name'] ?></span>
                      <?php }else if($randNum == 4){ ?>
                        <span class="label label-primary"><?php echo $record['class_name'] ?></span>
                      <?php }else if($randNum == 5){ ?>
                        <span class="label label-danger"><?php echo $record['class_name'] ?></span>
                      <?php }?>
                    <?php }?>
                  </p>

                  <strong>Prefered Areas</strong>
                  <p>
                    <span class="label label-primary">:</span>  
                    <?php foreach ($tutor_profile_data['prefered_areas'] as $key => $record) {?>
                      <?php $randNum = rand(1,5); ?>
                      <?php if($randNum == 1){ ?>          
                        <span class="label label-info"><?php echo $record['area_name'] ?></span>
                      <?php }else if($randNum == 2){ ?>
                        <span class="label label-success"><?php echo $record['area_name'] ?></span>
                      <?php }else if($randNum == 3){ ?>
                        <span class="label label-warning"><?php echo $record['area_name'] ?></span>
                      <?php }else if($randNum == 4){ ?>
                        <span class="label label-primary"><?php echo $record['area_name'] ?></span>
                      <?php }else if($randNum == 5){ ?>
                        <span class="label label-danger"><?php echo $record['area_name'] ?></span>
                      <?php }?>
                    <?php }?>
                  </p>

                  <strong>Prefered Subjects</strong>
                  <p>
                    <span class="label label-primary">:</span>  
                    <?php foreach ($tutor_profile_data['prefered_subjects'] as $key => $record) {?>
                      <?php $randNum = rand(1,5); ?>
                      <?php if($randNum == 1){ ?>          
                        <span class="label label-info"><?php echo $record['subject_name'] ?></span>
                      <?php }else if($randNum == 2){ ?>
                        <span class="label label-success"><?php echo $record['subject_name'] ?></span>
                      <?php }else if($randNum == 3){ ?>
                        <span class="label label-warning"><?php echo $record['subject_name'] ?></span>
                      <?php }else if($randNum == 4){ ?>
                        <span class="label label-primary"><?php echo $record['subject_name'] ?></span>
                      <?php }else if($randNum == 5){ ?>
                        <span class="label label-danger"><?php echo $record['subject_name'] ?></span>
                      <?php }?>
                    <?php }?>
                  </p>


                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <a href="<?php echo site_url('AdminPanel/tutor_documents_download/' . $tutor_profile_data['id']); ?>" class="btn btn-primary btn-block"><b>Download Documents</b></a>
              </div>

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
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
    <strong>Copyright &copy; 2014-2016 <a href="#">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <?php include 'side_control_bar.php' ?>
  <!-- ./wrapper -->
  <?php endblock();?>

  <?php startblock('scripts');?>

  <script type="text/javascript" src="<?php echo base_url('assets/js/tutor_requests_datatable.js');?>"></script>
  <?php endblock();?>
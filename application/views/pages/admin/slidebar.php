<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo  base_url('assets/admin_assets/dist/img/the_ultimate_admin.jpg');?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['admin']['name'];?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li>
        <a href="<?php echo site_url("AdminPanel/view_tutor_requests");?>">
          <i class="fa fa-leaf"></i> <span>Tutor Requests</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"><?php if(isset($tutor_requests_count) && $tutor_requests_count > 0) echo $tutor_requests_count; ?></small>
          </span>
        </a>
      </li>

      <li>
        <a href="pages/widgets.html">
          <i class="fa fa-hand-pointer-o"></i> <span>Student Requests</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">27</small>
          </span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">
            <h6>Current Session : <?php foreach($get_session as $session): ?>
              <?php if($session->session_status=='1')
              echo $session->session ?>
              <?php endforeach; ?>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-ioxhost"></i>
              <p>
                Front Office
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/enquiry" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enquiry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php  echo base_url(); ?>admin/complaint" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Complaint</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/setup_front_office" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setup Front Office</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Student Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/student_details" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/student_admission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Admission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/online_admission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Online Admission</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo base_url(); ?>admin/rejected_application" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                      <p>Rejected Applications</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/student_category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <!--<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Fees Collection
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/fees_details" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fees Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/collect_fees" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collect Fees</p>
                </a>
              </li>
            </ul>
          </li>-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Academics
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/department_details" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/semester_details" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semesters/Years</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                System Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/general_settings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/session_settings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Session Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/frontcms_settings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Front End Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/profile_settings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Profile Settings</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>auth_controller/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
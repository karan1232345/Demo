  

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <?php $this->load->view("msg") ?> 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item active">Add Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php echo form_open(base_url('dashboard/edit-user/') . $this->uri->segment(3)); ?>
        <div class="row">

          <div class="col-12 form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" value="<?php echo $result->name ?>" class="form-control">
          </div>
          <div class="col-12 form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" value="<?php echo $result->email ?>" class="form-control">
          </div>
          <div class="col-12 form-group">
            <label>Phone</label>
            <input type="tel" name="phone" id="phone" value="<?php echo $result->phone ?>" class="form-control">
          </div>
          
          <div class="col-12 form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" value="<?php echo $result->password ?>" class="form-control">
          </div>
          
          <div class="col-12 form-group">
            <input type="submit" name="edit_submit" id="submit" class="btn btn-primary">
          </div>
        </div>
        <?php echo form_close() ?>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
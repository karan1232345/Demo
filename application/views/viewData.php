<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>dashboard">Add Data</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users DataTable</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Pasword</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($results as $result_key => $result_val) {?>
                  <tr>
                    <td><?php echo $result_val->name ?></td>
                    <td><?php echo $result_val->email ?></td>
                    <td><?php echo $result_val->phone ?></td>
                    <td><?php echo $result_val->password ?></td>
                    <td><a href="<?php echo base_url(); ?>dashboard/edit-user/<?php echo $result_val->id ?>" >Edit</a> | <a class="text-danger" href="<?php echo base_url('dashboard/users'); ?>?delete_user=<?php echo $result_val->id ?>" ?>Delete</a></td>
                  </tr>
                  <?php } ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
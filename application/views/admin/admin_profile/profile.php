<?php foreach($key as $data){} ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."admin"; ?>">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-danger card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url()."upload/admin/";?><?php echo $data['admin_image'];?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo ucwords($data['name']); ?></h3>

                <p class="text-muted text-center"><?php echo ucwords($data['profession']); ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted"><?php echo ucwords($data['education']); ?></p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted"><?php echo ucwords($data['address']); ?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted"><?php echo ucwords($data['skills']); ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><h2>Admin Profile</h2></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab">
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" id=form>
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Name" name="name" value="<?php echo ucwords($data['name']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?php echo ($data['email']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Mobile" maxlength="10" name="mobile" value="<?php echo ($data['mobile']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Address" name="address" value="<?php echo ucwords($data['address']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Education" name="education" value="<?php echo ucwords($data['education']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Profession</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Profession" name="profession" value="<?php echo ucwords($data['profession']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience" name="experience" ><?php echo ucwords($data['experience']); ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills" name="skills" value="<?php echo ucwords($data['skills']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Admin Image</label>
                        <div class="col-sm-10">
                          <!-- <input type="file" class="form-control" id="inputName2" name="admin_img"> -->
                          <?php
                          if(!empty($data['admin_image'])){?>
                            <!-- <img src="<?php echo base_url()."upload/admin/"; ?><?php echo $data['admin_image'];?>" width="100" height="100"> -->
                            <input type="file" class="form-control" name="admin_img" accept="image/*" onchange="loadFile(event)">
                            <img src="<?php echo base_url()."upload/admin/"; ?><?php echo $data['admin_image'];?>" height="100" width="100" id="output" >
                          <?php  
                          }else{
                          ?>    
                            <img src="<?php echo base_url()."upload/adminLogo.png"; ?>">
                          <?php  
                          }
                          ?>
                     
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Panel Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Panel Name" name="panel_name" value="<?php echo ucwords($data['panel_name']); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Panel Logo</label>
                        <div class="col-sm-10">
                          <!-- <input type="file" class="form-control" id="inputName2" name="panel_img"> -->
                          <?php
                          if(!empty($data['panel_logo'])){?>
                            <!-- <img src="<?php echo base_url()."upload/admin/"; ?><?php echo $data['panel_logo'];?>" width="100" height="100"> -->
                            <input type="file" class="form-control" name="panel_img" accept="image/*" onchange="loadFile(event)">
                            <img src="<?php echo base_url()."upload/admin/"; ?><?php echo $data['panel_logo'];?>" height="100" width="100" id="output" >
                          <?php  
                          }else{
                          ?>    
                            <img src="<?php echo base_url()."upload/adminLogo.png"; ?>">
                          <?php  
                          }
                          ?>
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
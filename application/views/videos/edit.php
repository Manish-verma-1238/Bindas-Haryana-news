<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit video Links</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."admin"; ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url()."view_videos"; ?>">Video links</a></li>
              <li class="breadcrumb-item active">Edit links</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php
    foreach($catdata as $data){}
    ?>

    <!-- Main content -->
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="tab">
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" id="form">
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Video Link:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Video link" name="link" value="<?php echo ucwords($data['video']); ?>">
                        </div>
                    </div> 
                    <div class="form-group row">   
                        <label for="inputSkills" class="col-sm-2 col-form-label">Description:</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" value="" placeholder="Description" name="description"><?php echo ucwords($data['description']) ?></textarea>
                        </div>
                    </div>    
                      <div class="form-group row ">
                        <div class="offset-sm-2 col-sm-10"       >
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                          <button type="submit" class="btn btn-danger" ><a href="<?php echo base_url('view_videos');?>" style="color:white; font-weight:bold;">Cancel</button>
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


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        console.log('manish');
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            button: "Ok",
        });
    });
</script> -->



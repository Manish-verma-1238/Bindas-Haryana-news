<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Sub-category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."admin"; ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url()."view_subcategory"; ?>">view Sub-Category</a></li>
              <li class="breadcrumb-item active">Sub-category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php foreach($category as $cat){}?> 
    
    <!-- Main content -->
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="tab">
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" id="form"> 
                        <div class="form-group row">
                            <select  class="form-control" name="cat_id" aria-label="Default select example">
                                <!-- <option >Choose one Option</option> -->
                                <option value="<?php echo $cat['catid']; ?>" selected><?php echo ucwords($cat['title']); ?></option>  
                            </select>
                        </div>  
                    <?php foreach($details as $cate){}?>    
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Head Line:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="News Headline" name="title" value="<?php echo ucwords($cate['sub_title']);  ?>" required>
                        </div>
                    </div> 
                    <div class="form-group row">   
                        <label for="inputSkills" class="col-sm-2 col-form-label">Detailed News:</label>
                        <div class="col-sm-10">
                          <textarea type="text" class="form-control" rows="8" placeholder="Detailed News" name="description" value="" required><?php echo ucwords($cate['description']);  ?></textarea>
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">News Related News:</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)">
                          <img src="<?php echo base_url()."upload/sub_category/"; ?><?php echo $cate['image'];  ?>" height="100" width="100" id="output" >
                        </div>
                    </div>    
                    <div class="form-group row">   
                        <label for="inputSkills" class="col-sm-2 col-form-label">Author:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  placeholder="Author Name" name="author" value="<?php echo ucwords($cate['author']);  ?>" required>
                        </div>
                    </div>  
                      <div class="form-group row ">
                        <div class="offset-sm-2 col-sm-10"       >
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                          <button type="submit" class="btn btn-danger" ><a href="<?php echo base_url('view_subcategory');?>" style="color:white; font-weight:bold;">Cancel</button>
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
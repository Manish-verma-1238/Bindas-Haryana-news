<style>
.switch {
  position: relative;
  display: inline-block;
  width: 44px;
  height: 20px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 14px;
  width: 14px;
  left: 0px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 36px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Videos link</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin');  ?>">Home</a></li>
              <li class="breadcrumb-item active">Videos Links</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Video Links</th>
      <th scope="col">Description</th>
      <!-- <th scope="col">Image</th> -->
      <!-- <th scope="col">Status</th> -->
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
          $i = 1;
          foreach($catdata as $data){
        ?>
                
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo ucwords($data['video']); ?></td>
      <td><?php echo ucwords($data['description']); ?></td>
      <!-- <td><img src="<?php echo base_url()."upload/category/" ?><?php echo $data['image']; ?>" width="100" height="100"></td> -->
      <!-- <td><label class="switch">
            <input type="checkbox" id="<?php ?>" onclick="status(this.id)" checked>
            <span class="slider round"></span>
          </label>
      </td> -->
      <td><button type="submit" class="btn btn-info" ><a href="<?php echo base_url('videos/edit/').$data['id']; ?>" style="color:white; font-weight:bold;">Edit</button></td>
      <td><button type="submit" name="submit" onClick="javascript: return confirm('Please confirm deletion');" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><a href="<?php echo base_url('videos/delete/').$data['id']; ?>" style="color:white; font-weight:bold;">Delete</button></td>
    </tr>
    <?php 
    $i++; 
    }
          
    ?>
  </tbody>
</table>
</div>
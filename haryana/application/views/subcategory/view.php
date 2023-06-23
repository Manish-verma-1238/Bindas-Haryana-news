<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Category   </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."admin"; ?>">Home</a></li>
              <li class="breadcrumb-item active">Sub Category </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">News Category</th>
      <th scope="col">Headline</th>
      <th scope="col">Detailed News</th>
      <th scope="col">Image</th>
      <th scope="col">Author</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        $i = 1;
        foreach($category as $data)
        {
        ?>
      
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo ucwords($data['title']); ?></td>
      <td><?php echo ucwords($data['sub_title']); ?></td>
      <td><?php echo ucwords($data['description']); ?></td>
      <td><img src="<?php echo base_url('upload/sub_category/') ?><?php echo $data['image']; ?>" width="100" height="100"></td>
      <td><?php echo ucwords($data['author']); ?></td>
      <td><button type="submit" class="btn btn-info" ><a href="<?php echo base_url('Subcategory/edit/').$data['id']; ?>" style="color:white; font-weight:bold;">Edit</button></td>
      <td><button type="submit" name="submit" onClick="javascript: return confirm('Please confirm deletion');" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><a href="<?php echo base_url('Subcategory/delete/').$data['id']; ?>"style="color:white; font-weight:bold;">Delete</button></td>
    
    </tr>
        <?php
        $i++;
        }
        ?>
  </tbody>
</table>
</div>
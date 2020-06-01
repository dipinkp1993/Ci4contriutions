
<?= $this->extend('layouts/mainlayout')?>
<?= $this->section('content')?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          <small>Image Manapulation</small>
        </h1>
        <?php if(isset($validation)):?>
        <div class="alert-danger">
        <?= $validation->listErrors() ?>
        </div>
        <?php endif;?>
  <form method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
  <label for="exampleInputPassword1">Upload File </label>
  <input type="file" multiple name="theFile[]" class="form_control" id="exampleInputPassword1">

</div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        <!-- Blog Post -->
      
        <!-- Blog Post -->
       

        <!-- Blog Post -->
        <!-- Pagination -->
       
      </div>

    

    </div>
    <!-- /.row -->

  </div>
  </div>
  <!-- /.container -->
<?= $this->endSection() ?>
  <!-- Footer -->
 


<?= $this->extend('layouts/mainlayout')?>
<?= $this->section('content')?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          <small>Secondary Text</small>
        </h1>
        <?php if(isset($validation)):?>
        <div class="alert-danger">
        <?= $validation->listErrors() ?>
        </div>
        <?php endif;?>
  <form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= set_value('email');?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Categories</label>
    <select class="form-control" name="category">
    <option value="er">Select One</option>
    <?php foreach($categories as $cat):?>
    <option value="<?= $cat ?>"><?= $cat ?></option>
    <?php endforeach;?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" name="date" class="form-control" id="exampleInputPassword1" >
  </div>
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
 

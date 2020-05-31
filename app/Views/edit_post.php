
<?= $this->extend('layouts/mainlayout')?>
<?= $this->section('content')?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?= $posttitle ?></h1>

      
        <hr>

        <!-- Date/Time -->
        
        <h2>Blog form</h2>
  <form method="POST">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" value="<?= $post['title'];?>">
    </div>
    <div class="form-group">
      <label for="pwd">Content:</label>
      <textarea class="form-control" id="content"  name="content"><?= $post['content'];?>></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
        <hr>

        <!-- Preview Image -->
       

        <!-- Comment with nested comments -->
       
      </div>

      <!-- Sidebar Widgets Column -->
    

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <?= $this->endSection() ?>
  <!-- Footer -->
  

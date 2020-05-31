
<?= $this->extend('layouts/mainlayout')?>
<?= $this->section('content')?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4"><?= (isset($title)?$title:'The Blogs So far.........' );?>
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        <?php foreach ($posts as $post ):?>
        <?= view_cell('\App\Libraries\Blog::postItem',['title'=>$post]);?>
        <?php endforeach ?>

        <!-- Blog Post -->
       

        <!-- Blog Post -->
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

    <?= $this->include('layouts/sidebar.php');?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?= $this->endSection() ?>
  <!-- Footer -->
 

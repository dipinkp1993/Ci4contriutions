
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
          <div class="card mb-4">
          <img class="card-img-top" src="<?= base_url('images/pimage.png');?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?= $post->title?></h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="/blog/post/<?= $post->post_id?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on ><?= $post->post_created_at?> by
            <a href="#"><?= $post->email?></a>
          </div>
        </div>
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
 

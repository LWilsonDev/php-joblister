
<?php include 'inc/header.php'; ?>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Find a Job</h1>
      <form method="GET" action="index.php">
        <select name='category' class='form-control'>
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
        <button tyoe='submit' class='btn btn-lg btn-success'>Find</button>
      </form>
    </div>
  </div>

  <div class="container">
    <h3><?php echo $title; ?></h3>
   <?php foreach($jobs as $job): ?>

    <div class="row">
      <div class="col-md-10">
        <h4><?php echo $job->job_title; ?></h4>
        <p><?php echo $job->description; ?></p>

      </div>
      <div class="col-md-2">
        <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">View details &raquo;</a>
      </div>

    </div>
<?php endforeach; ?>


    </div>

    <hr>




<?php include 'inc/footer.php'; ?>

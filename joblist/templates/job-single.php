<?php include 'inc/header.php'; ?>

<div class='container mt-4'>
  <h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>

  <p>Posted by <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></p>
  <hr />
  <p class='lead'>
    <?php echo $job->description; ?>
  </p>
  <ul class='list-group'>
    <li class='list-group-item'>
      <strong>Company: </strong><?php echo $job->company; ?>
    </li>
    <li class='list-group-item'>
      <strong>Salary: </strong><?php echo $job->salary; ?>
    </li>
    <li class='list-group-item'>
      <strong>Contact email: </strong><?php echo $job->contact_email; ?>
    </li>
  </ul>
<hr />
<a href='index.php'>Go Back</a>
</div>


<?php include 'inc/footer.php'; ?>

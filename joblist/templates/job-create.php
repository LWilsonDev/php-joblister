<?php include 'inc/header.php'; ?>
<div class='container mt-4'>


  <h2 class='page-header'>Create Job Listing</h2>
<form method='POST' action='create.php'>
  <div class='form-group'>
      <label>Company</label>
      <input class='form-control' name='company'/>
  </div>
  <div class='form-group'>
      <label>Category</label>
      <select name='category' class='form-control'>
          <option value="0">Choose Category</option>
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
          <?php endforeach; ?>
      </select>
  </div>
  <div class='form-group'>
      <label>Job Title</label>
      <input class='form-control' name='job_title'/>
  </div>
  <div class='form-group'>
      <label>Description</label>
      <textarea class='form-control' name='description'></textarea>
  </div>
  <div class='form-group'>
      <label>Location</label>
      <input class='form-control' name='location'/>
  </div>
  <div class='form-group'>
      <label>Salary</label>
      <input class='form-control' name='salary'/>
  </div>
  <div class='form-group'>
      <label>Contact Name</label>
      <input class='form-control' name='contact_user'/>
  </div>
  <div class='form-group'>
      <label>Contact Email</label>
      <input class='form-control' name='contact_email'/>
  </div>
  <button type='submit' value='submit' name='submit' class='btn btn-success mb-4'>Submit</button>
</form>
</div>
<?php include 'inc/footer.php'; ?>

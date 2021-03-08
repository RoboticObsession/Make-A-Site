<?php
include "includes/header.php";
?>
<br>
<div class="container">
<h1>Site Builder</h1>
<form action="/your-site.php" method="get">
  <div class="mb-3">
    <label for="title" class="form-label">Site Title <span class="badge bg-danger">Required</span></label>
    <input class="form-control" id="title" name="title" required>
  </div>
  <div class="mb-3">
    <label for="logo" class="form-label">Site Logo (URL)</label>
    <input class="form-control" id="logo" name="logo">
  </div>
  <br>
  <div class="mb-3">
    <label for="nav-name" class="form-label">Navbar Link (Name)</label>
    <input class="form-control" id="nav-name" name="nav-name">
  </div>
  <div class="mb-3">
    <label for="nav-link" class="form-label">Navbar Link</label>
    <input class="form-control" id="nav-link" name="nav-link">
  </div>
  <br>
  <div class="mb-3">
    <label for="section1-name" class="form-label">Section 1 (Name) <span class="badge bg-danger">Required</span></label>
    <input class="form-control" id="section1-name" name="section1-name" required>
  </div>
  <div class="mb-3">
    <label for="section1-text" class="form-label">Section 1 (Text) <span class="badge bg-danger">Required</span></label>
    <textarea class="form-control" id="section1-text" name="section1-text" required></textarea>
  </div>
  <div class="mb-3">
    <label for="section1-image" class="form-label">Section 1 (Image URL)</label>
    <input class="form-control" id="section1-image" name="section1-image">
  </div>
  <br>
  <div class="mb-3">
    <label for="section2-name" class="form-label">Section 2 (Name)</label>
    <input class="form-control" id="section2-name" name="section2-name">
  </div>
  <div class="mb-3">
    <label for="section2-text" class="form-label">Section 2 (Text)</label>
    <textarea class="form-control" id="section2-text" name="section2-text"></textarea>
  </div>
  <div class="mb-3">
    <label for="section2-image" class="form-label">Section 2 (Image URL)</label>
    <input class="form-control" id="section2-image" name="section2-image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
include "includes/footer.php";
?>

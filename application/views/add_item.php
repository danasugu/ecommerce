<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  <title>Shop</title>
</head>
<body>
 <div class="container">
<dic class="col-6">
     <div class="row">
     
     <h1>Add item:</h1>
  <?=form_open_multipart()?>
     <form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
   <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" min="0" step="0.01" id="price" name="price">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" id="image">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Add new</button>
</form>
   </div>
</dic>
 </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>
</html>
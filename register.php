<?php include "header.php"?>
<?php include 'admin/db.php' ?>
<?php include 'admin/functions.php' ?>
<?php  handleRequstesRegister();?>
<form action="" method="post">
  <div class="center">
    
  <div class="mb-3">
    <label for="text" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
  </div>

</form>

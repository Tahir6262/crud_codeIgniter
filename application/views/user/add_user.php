
<?php $this->load->view("includes/header")?>

    <div class="container">
    <div class="row">
    <div class="card">
  <div class="card-body">
    <h5 class="card-title">Add User</h5>
    <form method="post" action="<?=base_url()?>user/add">
  <div class="mb-3">
    <label for="username" class="form-label">User name</label>
    <input type="text" name="username"placehlder="username" class="form-control" id="username" aria-describedby="emailHelp">
   
  <div class="mb-3">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email"placehlder="email" class="form-control" id="mobile" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="text" name="mobile"placehlder="mobile" class="form-control" id="mobile" aria-describedby="emailHelp">
    </div>

  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="password"placehlder="addres"name="address"class="form-control" id="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if($this->session->flashdata('success')){
?>
<div class="alert alert-success" role="alert">
 successfuly added
</div>
<?php
}
?>
<?php
if($this->session->flashdata('error')){
?>
<div class="alert alert-danger" role="alert">
 failed!
</div>
<?php
}
?>
  </div>
</div>
      
      </div>
    </div> 
<?php $this->load->view("includes/footer")?>
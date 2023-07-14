
<?php $this->load->view("includes/header")?>

    <div class="container">
    <div class="row">
    <div class="card">
  <div class="card-body">
    <h5 class="card-title">User List</h5>
    <table class ="table table-bordered">
        <thead>
            <tr>
                
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Options</th>
            </tr>

        </thead>
      <tbody>
        <?php foreach($users as $row) { ?>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['username']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['mobile']?></td>
        <td><?=$row['address']?></td>
        <td>
            <a href="<?=base_url()?>user/edit/<?=$row['id']?>"class="btn btn-sm btn-primary">Edit</a>
            <a href="<?=base_url()?>user/delete/<?=$row['id']?>"class="btn btn-sm btn-danger">Delete</a>

        </td>
       
      </tr>
      <?php } ?>
  
      </tbody>
    </table>

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
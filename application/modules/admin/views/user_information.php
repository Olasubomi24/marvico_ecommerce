

<div class="container lg-12 pt-5">
    <div class="card border mb-3">
    <div class="card-header border bg-primary mb-3 text-white">Home Page</div>
    <?php if ($success = $this->session->flashdata('sucess_msg')): ?>
    <div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close mx-auto" data-bs-dismiss="alert" ></button>
  <?php echo $success  ?><a href="" class="alert-link"></a>.
</div>
<?php endif; ?>

<table class="table table-hover">

  <tbody>
    <tr class="table-active">
    <th scope="row">S/N</th>
      <th scope="row">First Name</th>
      <th>Last Name</td>
      <th>Email</td>
      <th>Action</td>
    </tr>
   
<?php $i = 1; foreach($user_information as $user_info) { ?>
  <tr>
    <td scope="row"><?php echo $i; ?></td>
    <td><?php echo $user_info['first_name']?></td>
    <td><?php echo $user_info['last_name']?></td>
    <td><?php echo $user_info['email']?></td>
  <td>
  <a href="<?php echo site_url('admin/view_more/' .base64_encode($user_info['staff_id'])); ?>">
    <i class="text-primary fa fa-edit">View More</i>
  </a>
  <br>
  </a>
</td>
  </tr>
<?php $i++; } ?>

  </tbody>
</table>
</div>
</div>
<?php
$this->load->view('footer')

?>
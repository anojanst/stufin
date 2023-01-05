<?php $this->load->view('dashboard/common/header.php')?>

<?php $this->load->view('dashboard/common/sidebar.php')?>
        
<div class="content-wrapper p-3">
    <?php $this->load->view('dashboard/sections/error') ?>
 
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Admin Form</h3>
                </div>
                <div class="card-body"> 
                    <form action="<?php echo base_url('admin/user/'.$action.'/');  ?><?php echo $data->id ?>" method="POST" name="addForm" onsubmit="return validateForm()" >
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Full Name" name='name' value="<?php echo $data->fullName; ?>"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name='email' value="<?php echo $data->email; ?>"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="tel" class="form-control" id="exampleInputNumber" placeholder="Enter Phone Number" name='phone' value="<?php echo $data->phone; ?>"  required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password' <?php  if($action != 'update'): echo 'required'; endif;?>>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name='confirm_password'   <?php  if($action != 'update'): echo 'required'; endif;?>>
                            </div>
                            <div class="form-group col-lg-4">
                                <label></label>
                                <?php  if($action == 'update'):?>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="update">Update</button>
                                <?php else : ?>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Add</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>

                    <hr class="mt-5" />

                    <h3>Admin List</h3>

                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>              
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <td><?php echo $user->fullName; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td><?php echo $user->phone ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-warning" href="<?php echo base_url('admin/user/loadupdate/');?><?php echo $user->id ?>">Edit</a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url('admin/user/delete/');?><?php echo $user->id ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function validateForm(){
        var password1 = document.forms["addForm"]["password"].value;
        var password2 = document.forms["addForm"]["confirm_password"].value;
        if (password1 != password2) {
            alert("Passwords does not match!");
            return false;
        }
    }
</script>

<?php $this->load->view('dashboard/common/footer.php')?>
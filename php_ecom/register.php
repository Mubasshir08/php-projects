<?php 
session_start(); 
include('includes/header.php');
?>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php 
                        unset($_SESSION['message']);
                        } 
                    ?>
                <div class="card-header">
                    <h1>Register</h1>
                </div>
                <div class="card-body">
                    <form action="functions/authcode.php" method=  "post">
                    <div class="form-group mb-3">
                        <label >Name</label>
                        <input type="text" name = "name" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group mb-3">
                        <label> Phone </label>
                        <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group mb-3">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
                    </div>
                    
                    <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>     

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<title>Registration</title>

<form class = "container" action="registration.php" method = "post">
    <h1 class="text-center my-4">Sign up</h1>
    <div class="mb-3">
        <input type="text" class="form-control" name="user_id" placeholder="*Username" required>
        <div class="form-text">Username</div>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="user_password" placeholder="*Password" required>
        <div class="form-text"> Password must be 8-20 characters long, contain letters and numbers, and must not contain spaces nor special characters.</div>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
        <div class="form-text"> Confirm Password</div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="nrp" placeholder="*NRP" required>
        <div class="form-text"> NRP must be 10 characters long and only contain numbers.</div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="*Full Name" required>
        <div class="form-text">Full Name</div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="no_telp" placeholder="Phone Number">
        <div class="form-text">Phone Number</div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <div class="form-text">Email</div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="Alamat" placeholder="Address">
        <div class="form-text">Address</div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="TTL" placeholder="TTL">
        <div class="form-text">TTL</div>
    </div>
    <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>

<div class="text-center py-5">Already have account? <a href="../login/sign_in.php">Sign in</a></div>
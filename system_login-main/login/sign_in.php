<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<title>Login</title>

<form class = "container" action="login.php" method = "post">
    <h1 class="text-center my-4">Sign in</h1>
    <div class="mb-3">
        <input type="text" class="form-control" name="user_id" placeholder="Username" required>
        <div class="form-text">Username</div>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="user_password" placeholder="Password" required>
        <div class="form-text">Password</div>
    </div>
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>

<div class="text-center py-5">Don't have an account? <a href="../register/sign_up.php">Sign up</a></div>
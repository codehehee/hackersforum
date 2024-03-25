<?php include 'includes/header.php'; ?>

<div class="login-form">
    <h3>Login</h3>
    <form action="login_logic.php" method="post">
        <!-- Login form inputs -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-secondary">Login</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>


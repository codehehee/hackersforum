<?php include 'includes/header.php'; ?>
<div class="register-form">
    <h3>Register</h3>
                <form >
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-secondary" onclick="submitPost()">Register</button>
                </form>
</div>
<script>
    function submitPost() {
        alert('User limit reached.');
    }
</script>

<?php include 'includes/footer.php'; ?>


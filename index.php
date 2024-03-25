<?php 
include 'includes/header.php'; 

// Check if the PHPSESSID cookie is set (user is logged in)
if (!isset($_SESSION['user'])) {
    // User is not logged in, display the promotional text
    ?>
    <div class="container mt-4">
        <h1 class="display-4">Join Our Cybersecurity Community: Unlock Exclusive Benefits!</h1>
        <p>Welcome to Hacker's Hub, Your Gateway to Cybersecurity Expertise!</p>
        <p>As a valued member of our cybersecurity forum, you're already part of a dynamic and knowledgeable community. But did you know you can enhance your experience even further? <strong>Register now</strong> and unlock a world of exclusive benefits:</p>
        <ul>
            <li><strong>Personalized Experience:</strong> Create a profile, track your posts, and engage with topics that matter most to you.</li>
            <li><strong>Instant Updates:</strong> Stay ahead of the curve with notifications on the latest threads, trends, and cybersecurity news.</li>
            <li><strong>Networking Opportunities:</strong> Connect with fellow cybersecurity enthusiasts, experts, and professionals.</li>
            <li><strong>Advanced Search Capabilities:</strong> Find exactly what you're looking for with ease, using our enhanced search features.</li>
            <li><strong>Access to a Wealth of Knowledge:</strong> As a registered member, you gain exclusive access to our extensive archive of messages. Dive into years of valuable discussions, expert insights, and solutions to complex cybersecurity challenges.</li>
            <li><strong>Have a Voice:</strong> Share your insights, ask questions, and contribute to the community.</li>
            <li><strong>Continuous Learning:</strong> Engage in specialized forums and threads that cater to all levels, from beginners to seasoned experts.</li>
            <li><strong>Enhanced Security:</strong> We value your privacy and security. Registration ensures a secure and tailored experience.</li>
        </ul>
        <p><strong>Registering is quick, easy, and free!</strong> Join us today and be a part of shaping the future of cybersecurity. Your expertise and insights are what make Hacker's Hub a premier destination for cybersecurity discussion and knowledge sharing.</p>
        <a class="btn btn-secondary" href="/register.php">Register Now</a>
    </div>
    <?php
} else {
    // User is logged in, display the original content
    ?>
    <div class="jumbotron mt-4 text-green">
        <h1 class="display-4">Welcome to Hackers' Hub!</h1>
        <p class="lead">The ultimate destination for cybersecurity experts, ethical hackers, and IT professionals.</p>
        <hr class="my-4" style="border-color: white;">
        <p>Engage in cutting-edge discussions, share insights, and explore the vast world of cybersecurity. Dive into topics ranging from penetration testing to digital forensics, and enhance your hacking skills with fellow enthusiasts.</p>
        <a class="btn btn-secondary btn-lg" href="/forum.php" role="button">Start Exploring</a>
    </div>

    <div class="container text-dark">
        <!-- Additional content such as latest posts, popular topics, etc. can go here -->
    </div>
    <?php
}

include 'includes/footer.php'; 
?>


<?php 
include 'includes/header.php'; 

// Assuming session_start() is already called in header.php
$username = isset($_SESSION['user']) ? $_SESSION['user'] : 'Guest';

// Function to get message history for a user
function getMessageHistory($username) {
    $messages = [];
    // Assuming you have a file called messages.csv where messages are stored
    if (($handle = fopen("messages.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[0] == $username) {
                // Assuming the third column is the date in format HH:MM DD-MM-YYYY
                $messages[] = ['message' => $data[1], 'date' => $data[2]]; 
            }
        }
        fclose($handle);
    }
    return $messages;
}

// Get message history
$messageHistory = getMessageHistory($username);
?>

<div class="container">
    <h2>Profile Page</h2>
    <p>Username: <?php echo htmlspecialchars($username); ?></p>

    <h3>Archived Messages</h3>
    <?php if (count($messageHistory) > 0): ?>
        <ul>
            <?php foreach ($messageHistory as $entry): ?>
                <li>
                    <strong><?php echo htmlspecialchars($entry['date']); ?>:</strong>
                    <?php echo htmlspecialchars($entry['message']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No message history.</p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>


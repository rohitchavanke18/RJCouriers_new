<?php
$input_id = $_POST['track_id'];
$found = false;
$lines = file("bookings.txt");

foreach ($lines as $line) {
    list($track_id, $sender, $receiver, $status) = explode("|", trim($line));
    if ($track_id === $input_id) {
        echo "<h3>Tracking ID: $track_id</h3>";
        echo "Current Status: $status<br><br>";
        $found = true;
        break;
    }
}
if (!$found) {
    echo "<h3>No tracking info found for ID: $input_id</h3>";
}
echo "<a href='index.html'>Back</a>";
?>

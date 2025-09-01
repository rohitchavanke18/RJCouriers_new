<?php
$sender = $_POST['sender'];
$phone = $_POST['phone'];
$receiver = $_POST['receiver'];
$distance = $_POST['distance'];

$price = $distance * 15;
$track_id = "RJC" . rand(1000, 9999);

// Save data in a file (simple monolithic storage simulation)
file_put_contents("bookings.txt", "$track_id|$sender|$receiver|In Warehouse\n", FILE_APPEND);

echo "<h3>Booking Confirmed!</h3>";
echo "Sender: $sender, Phone: $phone, Receiver: $receiver, Price: ₹$price, Tracking ID: $track_id<br><br>";
echo "<a href='index.html'>Back</a>";
?>

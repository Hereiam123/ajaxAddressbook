<?php include ('core/init.php'); ?>

<?php

$db=new Database;

if(isset($_POST))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $contact_group=$_POST['contact_group'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zipcode=$_POST['zipcode'];
    $notes=$_POST['notes'];

    //Run Query
    $db->query("INSERT INTO `contacts` (first_name,last_name,email,
                phone,contact_group,address1,address2,city,state,zipcode,notes)
                VALUES ('$first_name','$last_name','$email','$phone','$contact_group',
                '$address1','$address2','$city','$state','$zipcode','$notes')");

    //Assign results
    $contacts=$db->resultset();
}

?>
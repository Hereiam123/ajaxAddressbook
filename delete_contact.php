<?php include ('core/init.php'); ?>

<?php

$db=new Database;

if(isset($_POST))
{
    //Run Query
    $db->query("DELETE FROM `contacts` WHERE id = :id");

    $db->bind(':id',$_POST['id']);

    if($db->execute()){
        echo "Contact deleted";
    }
    else{
        echo "Contact not deleted";
    }
}

?>
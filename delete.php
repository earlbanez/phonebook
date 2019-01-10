<?php

  
  include('config.php');

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from contacts where id = ".$contact_id;
  if (mysqli_query($conn, $delete)) {
    header('location: index.php');
  }else {
    echo "Error: " .$insert_contacts. "<br>" . mysqli_error($conn);
  }


?>
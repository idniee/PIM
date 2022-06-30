<?php
    $server="";
    $username="";
    $password="";
    $dbname="";

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Msg = $_POST['Msg'];

       if(empty($UserName) || empty($Email) || empty($Phone) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "aduhscsr@gmail.com";

           if(mail($to,$Phone,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>

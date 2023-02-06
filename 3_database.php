<?php

$connection = mysqli_connect('localhost','root','');

$create_db = "CREATE DATABASE IF NOT EXISTS `user_db`";

if(mysqli_query($connection,$create_db))
   {
 
    $connection = mysqli_connect('localhost','root','','user_db');

    $createTble = mysqli_query($connection,"
    create table IF NOT EXISTS `user_tb`(`id` int(11) primary key auto_increment,`username` varchar(24),`email` varchar(24))
    ");
    if($createTble)
    {
        $insert = mysqli_query($connection,"INSERT INTO `user_tb` (`id`,`username`,`email`) VALUES('prince','princerwigimba07@gmail.com')");
        if($insert)
        {
            echo "User recorded successfully";
        }
        else
            echo "user fail to be inserted";
        
    }
    }
else{
    echo "some error occurred";

}
?>
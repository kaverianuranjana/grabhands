<?php

/**
 * @author 
 * @copyright 2014
 */

$host="localhost"; // Host name 
$username="root";
$password="crucio"; // Mysql username 
 // Mysql password 
$db_name="test"; // Database name 
$tbl_name="register"; // Table name
 
// Connect to server and select databse.
$a=mysql_connect($host, $username,$password) or die("cannot connect");
mysql_select_db($db_name);
if(!$a)
    echo("byebye"); 
else
    echo("done");


//if(isset($_POST['submit']))
 //{
        echo("hello");
      $user=$_POST['orgname'];
      $pass=$_POST['pwd'];
      echo("hello");
      $org_type=$_POST['type'];
      if($org_type == "NGO")
      {
          $type=0;
      }
      else
      {
          $type=1;
      }
      $mail=$_POST['email'];
      $phone=$_POST['tel'];
      $address=$_POST['add'];
      include('config.php');
      $Query=mysql_query("SELECT user from register where user='$user')");
      $show=mysql_num_rows($Query);
      if($show > 0)
      {
          echo("user exist");
      }
      else
      {
          $query=mysql_query("INSERT INTO register values('$user','$pass','$mail','$phone','$address','$type');");
          if ($query)
          {
              echo("succesfully submitted");
          }
          else
          {
              echo("something went wrong try later or now again");
          }
        }
        header("Location: login.html")
        //}
?>
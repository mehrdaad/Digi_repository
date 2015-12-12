<?php
session_start();
include('controler.php');
if(isset($_GET['from']) && isset($_GET['id']))
{
    $res=query("INSERT INTO `bascket`(`stuff_id`, `stuff_table`, `User_id`, `buying_state`) VALUES ('".$_GET['id']."','".$_GET['from']."','".$_SESSION['id']."','در سبد خرید')");
    header('location: '.$_GET['url']);
}
else if(isset($_GET['action']) && $_GET['action']=='delete' && isset($_GET['id']))
{
    $res=query("DELETE FROM `bascket` WHERE buying_id=".$_GET['id']);
    header('location: '.$_GET['url']);
}
else if(isset($_GET['action']) && $_GET['action']=='update' && isset($_GET['id']) && isset($_GET['nstatus']))
{
    $res=query("UPDATE `bascket` SET `buying_state`='".$_GET['nstatus']."' where buying_id=".$_GET['id']);
    echo "UPDATE `bascket` SET `buying_state`='".$_GET['nstatus']."' where buying_id=".$_GET['id'];
    header('location: '.$_GET['url']);
}
else if(isset($_POST['sub']))
{
    $res=query("UPDATE `bascket` SET `buying_state`='خریداری شده' where User_id=".$_POST['user_id']);
    header("location: bank.php?sum_price=".$_POST['sum_price']);
}
  

?>
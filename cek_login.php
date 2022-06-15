<?php 
// mengaktifkan session pada php
session_start();


include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];



$login = mysqli_query($koneksi,"select * from tb_login where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);


	if($data['level']=="admin"){


		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
	
		header("location:index.php");


	}else if($data['level']=="operator"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "operator";
	
		header("location:index.php");


	}else{
		
	}

	
}


?>
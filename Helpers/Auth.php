<?php

namespace Helpers;

class Auth{
	static function check(){
		session_start();
		if(isset($_SESSION['student'])){
			return $_SESSION['student'];
		}else{
			header("location:index.php");
		}
	}
}
<?php

function check_username($name){
	if(!empty($name)){
		if(strlen($name) > 3 && strlen($name) <= 75){
			if(!preg_match('/[^a-zA-Z\s]/',$name)){
				//name = true;
				$name=1;
				return $name;
			}
			else {
				return "Name Can Contain Only Alphabets.";
				
			}
		}
		else {
			return "Name must be between 3 to 75 chars long.";
			
		}
	}
	else {

		return "Name Is Required.";
		
	}
}

function check_eid($eid){
	if(!empty($eid)){
		if(filter_var($eid, FILTER_VALIDATE_EMAIL)){
		
			$eid=1;
			return $eid;
		}
		else {
			return "Invalid Email Address";
			
		}
	}
	else {
		return "Email Can Not be Blank !!.";
		
	}
}


function check_mo_no($mo_no){
	if(!empty($mo_no)){
		if(strlen($mo_no) >= 8 && strlen($mo_no) <= 15){
			if(!preg_match('/[^0-9\d]/',$mo_no)){
				
				$mo_no=1;
				return $mo_no;
			}
			else {
				return "Mobile Number Can Contain Only Digits.";
				
			}
		}
		else {
			return "Mobile Number must be between 8 to 15 chars long.";
			
		}
	}
	else {
		return "Mobile Number Can Not Be Blank.";
		
	}
}


function check_password($password, $confirmpassword){
	if(!empty($password) && !empty($confirmpassword)){

	if ($password != $confirmpassword) {
			return" Error... Passwords do not match"; 
			
		}
		else {
			if($password==null || $password="" || $confirmpassword==null || $confirmpassword==""){
			return "Passwords can not be empty"; 

			}else{
				
			$password=1;
			return $password;
			}
		}
	}else{
		return" Error... Passwords do not match";
	}
}

// Replace Function
function filter_me($s){
	if(!empty($s)){

$searchArray = array("update", "select","delete", "truncate","union","case","when","then","if","else","end","!","#","","^","&","*","(",")","{","}","[","]",";",":","'",">","<","/","|",',',"\\");

$replaceArray = array("XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX", "XXrplXX", "XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX", "XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX","XXrplXX");

$intoString = $s;

$string= str_ireplace($searchArray, $replaceArray, $intoString);

return $string;
	}

}
?>

<?php

class Login
{

	private $error = "";
 
	public function evaluate($data)
	{
		// Read if the user exists in the database
		$email = addslashes($data['email']);
		$password = $data['password'];
	
		$query = "select * from users where email = '$email' limit 1";
	
		$DB = new CONNECTION_DB();
		$result = $DB->read($query);
	
		if ($result) {
			$row = $result[0];
	
			if (password_verify($password, $row['password'])) {
				// Password is correct
				$_SESSION['Bisuconnect_stud_ID'] = $row['stud_ID'];
			} else {
				$this->error .= "Wrong password<br>";
			}
		} else {
			$this->error .= "Invalid email, please signup first<br>";
		}
	
		return $this->error;
	}

	public function check_login($id)  //chck if not numeric redirect,if numeric retrieve user_data
	{

		if(is_numeric($_SESSION['Bisuconnect_stud_ID']))
		{
			$query = "SELECT * FROM users where stud_ID = '$id' LIMIT 1 ";

			$DB = new CONNECTION_DB();
			$result = $DB->read($query);

			if($result)
			{
				$user_data = $result[0];
				return  $user_data;
			}else{
				//no user found redirect to login
				header("Location: Login_page.php");
				die;
			}	

		}else{
			header("Location: Login_page.php");
			die;
		
		}

	}



/*	private function hash_text($text){

		$text = hash("sha1", $text);
		return $text;
	}


	public function check_login($id,$redirect = true)
	{
		if(is_numeric($id))
		{

			$query = "select * from users where userid = '$id' limit 1 ";

			$DB = new CONNECTION_DB();
			$result = $DB->read($query);

			if($result)
			{

				$user_data = $result[0];
				return $user_data;
			}else
			{
				if($redirect){
					header("Location: ".ROOT."login");
					die;
				}else{

					$_SESSION['mybook_userid'] = 0;
				}
			}
 
			 
		}else
		{
			if($redirect){
				header("Location: ".ROOT."login");
				die;
			}else{
				$_SESSION['mybook_userid'] = 0;
			}
		}

	}
	*/
 
}
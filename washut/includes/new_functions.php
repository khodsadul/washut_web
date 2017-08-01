<?php
		ob_start();


		function redirect_to($location = NULL)
		{
			if($location!=NULL)
			{
				header("Location: {$location}");
				echo "You are being redirected to $location, if not use this link <a href='$location'>$location</a>";
				exit;
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}

		function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

		function get_hashed_password($string)
		{
			return hash('sha256', $string, true);
		}
		function check_password($userpwd,$dbpwd)
		{
			if (hash('sha256', $userpwd, true) == $dbpwd)
				return true;
			else
				return false;
		}

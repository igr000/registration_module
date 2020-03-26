<!DOCTYPE html>
<!------------------------------------------------------------------------------
-- Registration_message page lets the user know whether his/her registration ---
-- has been successful or not. -------------------------------------------------
--------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ---------------------------------------------------
------------------------------------------------------------------------------->
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<!-- Displays 'Registration Successful' or 'Registration Failed' -->
	<h1><?php echo $title; ?></h1>
	<!-- Displays ''Please check your email to activate your account' or 'Something went wrong. Please try again later.' -->
	<em><?php echo $message; ?></em>

</body>
</html>
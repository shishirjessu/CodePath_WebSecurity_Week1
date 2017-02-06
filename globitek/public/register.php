<?php
  require_once('../private/initialize.php');

  // Set default values for all variables the page needs.
  $db = db_connect();
  $first_name = $last_name = $email = $username = "";
  $errors = array();
  $sql = "";

  // if this is a POST request, process the form

  // Confirm that POST values are present before accessing them.
  if (is_post_request())
  {
	  
	  $first_name = $_POST['first_name'];
	  $last_name = $_POST['last_name'];
	  $email = $_POST['email'];
	  $username = $_POST['username'];
	  
	  // Perform Validations
	  if (is_blank($first_name))
		  array_push($errors, "First name cannot be blank.");
	  else if(!has_length($first_name, ['min' => 2, 'max' => 255]))
		  array_push($errors, "First name must be between 2 and 255 characters");
	  else if (!check_names($first_name, "name"))
		  array_push($errors, "First name contains invalid characters");
	  
	  if (is_blank($last_name))
		  array_push($errors, "Last name cannot be blank.");
	  else if(!has_length($last_name, ['min' => 2, 'max' => 255]))
		  array_push($errors, "Last name must be between 2 and 255 characters");
	  else if (!check_names($last_name, "name"))
		  array_push($errors, "Last name contains invalid characters");
	  
	  if (is_blank($email))
		  array_push($errors, "Email cannot be blank.");
	  else if (!check_names($email, "email"))
		  array_push($errors, "Email contains invalid characters");
	  else if (!has_valid_email_format($email))
		  array_push($errors, "Email format is invalid");
	  else if(!has_length($last_name, ['min' => 0, 'max' => 255]))
		  array_push($errors, "Email cannot exceed 255 characters");
	  
	  
	  if (is_blank($username))
		  array_push($errors, "Username cannot be blank.");
	  else if (!check_names($username, "username"))
		  array_push($errors, "Username contains invalid characters");
	  else if(!has_length($username, ['min' => 8, 'max' => 255]))
		  array_push($errors, "Username must be between 8 and 255 characters");
	  else if(!unique_username($username, $db))
		  array_push($errors, "Username is already taken");
	  
	  // if there were no errors, submit data to database
       if (empty($errors)){
      
       $sql = 'insert into globitek.users (first_name, last_name, email, username) values (\'' . $first_name . '\', \'' . $last_name . '\', \'' . $email . '\', \'' . $username . '\');';

      // For INSERT statments, $result is just true/false
         $result = db_query($db, $sql);
		 
         if($result) {
         db_close($db);
         header("Location: registration_success.php");

        } 
	   else {
           // The SQL INSERT statement failed.
           // Just show the error, not the form
           echo db_error($db);
           db_close($db);
           exit;
        }
     }
	  
  }
  
?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    echo display_errors($errors);
  ?>

  <!-- TODO: HTML form goes here -->
  <form method="post" action="">
    <p>First name:</p>
    <input type="input" name="first_name" value="<?php echo ($first_name); ?>">
    <p>Last name:</p>
    <input type="input" name="last_name" value="<?php echo ($last_name); ?>">
    <p>Email:</p>
    <input type="input" name="email" value="<?php echo ($email); ?>">
    <p>Username:</p>
    <input type="input" name="username" value="<?php echo ($username); ?>">
    <input name="submit" type="submit" value="Submit">
  </form>
  

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>

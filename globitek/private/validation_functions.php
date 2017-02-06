<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return empty($value);
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    return strlen($value) >= $options['min'] 
		&& strlen($value) <= $options['max'];
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    return (strpos($value, "@") !== false);
  }
  
  function check_names($value, $type)
  {
	  if ($type == 'name')
		  return preg_match('/\A[A-Za-z\s\-,\.\']+\Z/', $value);
	  else if ($type == 'username')
		  return preg_match('/\A[A-Za-z0-9\_]+\Z/', $value);
	  else if($type == 'email')
		  return preg_match('/\A[A-Za-z0-9\_\@\.]+\Z/', $value);
  }
  
  function unique_username($name, $db)
  {
	  $sql = "select 1 from globitek.users where username = '$name' limit 1";
	  return db_query($db, $sql) -> num_rows == 0;
  }
  

?>

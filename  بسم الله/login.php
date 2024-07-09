<?php
<?php include 'log in.html'; ?>
// Retrieve the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Perform the verification process (e.g., check against a database)
if ($username === 'admin' && $password === 'password') {
  // Send the login information to the website maker (you can customize this part)
  $to = 'mohamedghazali637@gmail.com';
  $subject = 'pasta website';
  $message = "Username: $username\nPassword: $password";
  mail($to, $subject, $message);

  // Redirect to the index page or any other desired page
  header('Location: "home.html"');
  exit;
} else {
   
  // If the verification fails, you can display an error message or redirect to an error page
  echo 'please make sure that you entred the right info ';
}
?>
<?php
session_name('auth');
session_start([
  'cookie_lifetime'=>100
]);
$error = false;


$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

// $fp = fopen('./data/users.txt','r');
// while ($data = fgetcsv($fp)) {
//   echo $data[1]== sha1($password) ? 'true' : 'false';
//   echo $data[0]== 'admin' ? 'true' : 'false';
//   echo $_SESSION['loggedin'] ? 'true' : 'false';
// }
if ($username && $password ) {
  $_SESSION['loggedin']=false;
  $_SESSION['user']= false;
  $_SESSION['role']= false;
  $fp = fopen('./data/users.txt','r');
  while ($data= fgetcsv($fp)) {
    if ($data[0]== $username && $data[1] == sha1($password)) {
      $_SESSION['loggedin']=true;
      $_SESSION['user']= $username;
      $_SESSION['role']= $data[2];
      header('location:index.php');
    }
  }
  if (!$_SESSION['loggedin']) {
    $error = true;
    
  }
  // fclose($fp);

}



// if ($_GET['logout']) {
//   $_SESSION['loggedin']=false;
//   header('Location: auth.php');
//   exit;
// }

if (isset($_GET['logout'])) {
  $_SESSION['loggedin']=false;
  $_SESSION['user']= false;
  $_SESSION['role']= false;
  session_destroy();
  header('location:index.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Document</title>
</head>
<body>
  <main class='w-2/6 mx-auto'>
    <section class="mt-8">
        <h2 class='text-center text-4xl font-bold'>Simple Auth Example</h2>
        <?php

          if (true==$_SESSION['loggedin']) {
            echo "Hello Admin, Welcome";
          }else{
            echo 'Hello Stranger, Login Below';
          }

          
        ?>
        <!-- <p class='text-center mt-4'>Hello Stranger, Login Below</p> -->
    </section>
    <section class='mt-12'>
      <?php

        if ($error) {
          echo "<p class='border-l border-red-500 mb-4'>Username and Password do not match</p>";
        }

      if ($_SESSION['loggedin']==false):
      ?>
      <form action="" class='grid' method="POST">
      <label for="username">Username</label>
      <input class='border px-2 py-2 rounded mb-3' type="text" name="username" id="username"/>
      <label for="password">Password</label>
      <input class='border px-2 py-2 rounded mb-3' type="password" name="password" id="password">

      <button type='submit' class='bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 transition duration-300 ease-in-out w-full mt-4 text-center font-bold cursor-pointer'>Submit</button>
      </form>

      <?php
        else:
      ?>
      <form action="auth.php" class='grid' method="GET">
        <input type="hidden" name="logout" value='1'>
      <button type='submit' class='bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 transition duration-300 ease-in-out w-full mt-4 text-center font-bold cursor-pointer'>Log Out</button>
      </form>
      <?php
        endif;
      ?>

    </section>

  </main>


</body>
</html>
<?php
session_start([
  'cookie_lifetime'=>300
]);
$error = false;

if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username']=='admin' && $_POST['password']=='admin') {
    $_SESSION['loggedin']=true;
  }else{
    $error=true;
    $_SESSION['loggedin']=false;
  }
}

// if ($_GET['logout']) {
//   $_SESSION['loggedin']=false;
//   header('Location: auth.php');
//   exit;
// }

if (isset($_POST['logout'])) {
  $_SESSION['loggedin']=false;
  session_destroy();
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
      <form action="auth.php" class='grid' method="POST">
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
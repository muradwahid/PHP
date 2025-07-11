<?php
session_name('auth'); // Set your session name
session_start(); 
?>

<div class="flex gap-3 mt-8 bg-blue-400 px-3 py-2 rounded-lg justify-between mb-5">
  <div  class="flex gap-3 ">
  <a class='hover:text-white transition duration-300 ease-in-out cursor-pointer' href="/8.crud/index.php/?task=report">All Students</a>
  <?php if(hasPrivilege()):?>
  <a class='hover:text-white transition duration-300 ease-in-out cursor-pointer' href="/8.crud/index.php/?task=add">Add New Student</a>
  <?php endif; ?>
  <?php if (isAdmin()): ?>
  <a class='hover:text-white transition duration-300 ease-in-out cursor-pointer' href="/8.crud/index.php/?task=seed">Seed</a>
  <?php endif; ?>
  </div>

    <div class='hover:text-white transition duration-300 ease-in-out cursor-pointer'>
    <?php if(!$_SESSION['loggedin']): ?>
        <a href='/8.crud/auth.php'>Log In</a>
    <?php else: ?>
        <a href='/8.crud/auth.php?logout=true'>Log Out (<?php echo $_SESSION['role'] ?>)</a>
      <?php endif; ?>
    </div>
</div>
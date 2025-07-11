<?php
  require_once("./inc/functions.php");
  $info='';
  $task = $_GET['task'] ?? 'report';
  $error = $_GET['error']?? '0';

  if ('delete'==$task) {
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
    if ($id>0) {
      deleteStudent($id);
      header("location: /8.crud/index.php?task=report");
    }
  }

  if ('seed'== $task) {
    seed();
    $info = 'Database seeded successfully.';
  }
  $fname = '';
  $lname = '';
  $roll = '';
  // $id ='';
  if (isset($_POST['submit'])) {
    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

    if ($id) {
      //update the existing student
      if ($fname !='' && $lname !='' && $roll !='') {
        $result= updateStudent($id,$fname,$lname,$roll);
        if($result){
          header("location: /8.crud/index.php?task=report");
        }
        else {
          // header("location: /8.crud/index.php?task=add&error=1");
          $error = 1;
        }
      }
    }else {
      // add a new students
      if ($fname !='' && $lname !='' && $roll !='') {
        $result=addStudent($fname,$lname,$roll);
        if($result){
          header("location: /8.crud/index.php?task=report");
        }
        else {
          // header("location: /8.crud/index.php?task=add&error=1");
          $error = 1;
        }
      }
    }
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
  <div class="container">
    <div class="w-1/2 mx-auto mt-10">
      <h2 class='text-center'>Project 2 - CRUD</h2>
      <p class='text-center'>A sample project to perform CRUD operations using plain files and PHP.</p>
      <?php include_once('./inc/templates/nav.php') ?>
      <hr/>

      <?php
        if ($info != "") {
          echo "<p> $info </p>";
        };
      ?>
      <?php if('1' == $error):?>
        <div class="w-1/2 mx-auto mt-10">
          <blockquote class='border-l-4 border-indigo-500 pl-4'>
            Duplicate roll number found. Please try again with a different roll number.
          </blockquote>
        </div>
      <?php endif;?>
      
      <?php if('report'==$task): ?>
      <div class="w-1/2 mx-auto mt-10">
        <?php
          generateReport();
        ?>
      </div>
      
      <?php endif; ?>


      <?php if($task =='add'):  ?>
          <div class="w-1/2 mx-auto mt-10">
            <form action="/8.crud/index.php?task=add" class="flex flex-col" method="POST">
                <label for="fname">First Name</label>
                <input class='border rounded py-2 px-2 w-full mb-4' type='text' name='fname' id='fname' value="<?php echo $fname; ?>" />
                <label for="lname">Last Name</label>
                <input class='border rounded py-2 px-2 w-full mb-4' type="text" name="lname" id="lname" value="<?php echo $lname ?>"/>
                <label for="roll">Roll</label>
                <input class='border rounded py-2 px-2 w-full mb-4' type="number" name="roll" id="roll" value="<?php echo $roll; ?>" />
                <button type='submit' class='bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow cursor-pointer' value='save' name='submit'>Save</button>
            </form>
          </div>
      <?php endif;?>

      <?php if($task == 'edit'):  
        $id= filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
        $student= getStudent($id);
        if($student):
        ?>
          <div class="w-1/2 mx-auto mt-10">
            <form action="/8.crud/index.php?task=edit&id=<?php echo $id?>" class="flex flex-col" method="POST">
              <input type="hidden" id='id' name="id" value="<?php echo $id?>" />
                <label for="fname">First Name</label>
                <input class='border rounded py-2 px-2 w-full mb-4' type='text' name='fname' id='fname' value="<?php echo $student['fname']; ?>" />
                <label for="lname">Last Name</label>
                <input class='border rounded py-2 px-2 w-full mb-4' type="text" name="lname" id="lname" value="<?php echo $student['lname'] ?>"/>
                <label for="roll">Roll</label>
                <input class='border rounded py-2 px-2 w-full mb-4' type="number" name="roll" id="roll" value="<?php echo $student['roll']; ?>" />
                <button type='submit' class='bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow cursor-pointer' value='save' name='submit'>Update</button>
            </form>
          </div>
      <?php
    endif; 
  endif;
?>

    </div>
  </div>
</body>
<script type='text/javascript' src="/8.crud/assets/js/script.js"></script>
</html>
<?php include_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Document</title>
</head>
<body>
    <div class="w-[500px] mx-auto">
      <div>
        <h2 class="mt-8 text-center">Form</h2>
        <p>
          <?php
          $fname='';
          $lname ='';
          $checked ='';
          if (isset($_REQUEST['checkbox']) && $_REQUEST['checkbox'] ==1) {
            $checked="checked";
          }
          ?>
          <?php if (isset($_GET['fname']) && !empty($_GET['fname'])): ?>
            <?php
            // $fname= htmlspecialchars($_REQUEST['fname']);
            $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS)
            ?>
          <?php endif;  ?>
          <?php if(isset($_GET['lname']) && !empty($_GET['lname'])){ 
            // $lname = htmlspecialchars($_REQUEST['lname']);
            $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
          };?>
          <p>
          First Name : <?php echo $fname ?>
          <br/>
          Last Name : <?php echo $lname?>
          </p>
        </p>
      </div>
        <form method="POST ">
          <label for="fname">First Name</label>
          <input class="mb-4 w-full border-2 border-indigo-600" type="text" name="fname" id="fname" value="<?php echo $fname?>">
          <label for="lname">Last Name</label>
          <input class="w-full border-2 border-indigo-600" type="text" name="lname" id="lname" value="<?php echo $lname?>">
          <label class="inline-block" for="checkbox">

          <input class="mt-4" type="checkbox" name="checkbox" id="checkbox" value="1" <?php echo $checked ?>> 
            checkbox
          </label>
          <br/><br/>
          
          <label class="font-bold inline-block">Select Some Fruits</label><br/>

          <input class="inline-block" type="checkbox" value='orange' name="fruits[]" <?php isChecked('fruits','orange') ?> />
          <label class="inline-block">Orange</label><br/>
          <input class="inline-block" type="checkbox" value='mango' name="fruits[]" <?php isChecked('fruits','mango') ?>/>
          <label class="inline-block">Mango</label ><br/>
          <input class="inline-block" type="checkbox" value='banana' name="fruits[]"<?php isChecked('fruits','banana') ?> >
          <label class="inline-block">Banana</label><br/>
          <input class="inline-block" type="checkbox" value='lemon' name="fruits[]" <?php isChecked('fruits','lemon') ?>/>
          <label class="inline-block">Lemon</label><br/>
          
          <input class="bg-sky-500/75 py-2 px-4 mt-4 text-white rounded block" type="submit" value="Submit"/>
        </form>
    </div>
</body>
</html>
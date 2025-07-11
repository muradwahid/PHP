<?php 
  $fruits=['Mango','orange','Banana','apple','lemon','peach'];
  include_once "selectFunctions.php";
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
  <div class='w-[500px] mt-8 mx-auto border-2 border-red-500 p-8'>
  <div class='text-center'>
    <h2>Select/Dropdowns</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus aliquam delectus consectetur nam aliquid architecto nemo, molestiae illum adipisci quo culpa nobis animi incidunt, corrupti laudantium dolor praesentium! Labore, ipsa?</p>
  </div>

  <div class="mt-8 mb-8">
    <?php
          // $fruitsSecond = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
          // if (count($fruitsSecond)>0) {
          //   echo "You have selected: " . join(", ",$fruitsSecond);
          // }
      $fruitsSecond = $_POST['fruits'] ?? array();
      if (count($fruitsSecond)>0) {
        echo "You have selected: " . join(", ",$fruitsSecond);
      }
      // if (isset($_POST['fruits']) && $_POST['fruits']!='') {
      //   printf('You have selected: %s',filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING));
      // }
    ?>
  </div>

  <div>
    <form method="POST">
      <label for="fruits mb-2">Select Some Fruits</label>
      <br/>
      <select class="mt-2 border-2 h-[200px]" name="fruits[]" id="fruits" multiple>
        <option value="" disabled selected>Select Some Fruits</option>
        <?php displayOptions($fruits,$fruitsSecond);?>
      </select>
      <input type="submit" class="bg-orange-600 text-white py-2 px-4" value="Submit">
    </form>
  </div>
  </div>
</body>
</html>
<?php
$allowedTypes = array(
  'image/png',
  'image/jpg',
  'image/jpeg'
);
  if ($_FILES['photo']) {
    $totalFiles = count($_FILES['photo']['name']);
    for ($i=0; $i <$totalFiles ; $i++) {
      if (in_array($_FILES['photo']['type'][$i],$allowedTypes) !==false && $_FILES['photo']['size'][$i]< 5*1024*1024) {
        move_uploaded_file($_FILES['photo']['tmp_name'][$i],"./files/". $_FILES['photo']['name'][$i]);
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
    <div class="w-[500px] mx-auto mt-8">
      <div class="">
        <h2 class="text-center mb-2">File Upload</h2>

        <pre>
            <p>
                <?php 
                  print_r($_POST);
                  print_r($_FILES);
                ?>
            </p>
          </pre>
      </div>
      <div class="">
        <form method="POST" enctype="multipart/form-data">
          <label for="fname">First Name</label><br/>
          <input class="w-full border border-blue" type="text" name="fname" id="fname"/><br/>
          <label for="lname">Last Name</label><br/>
          <input class="w-full border border-blue" type="text" name="lname" id="lname"/><br/>
          <label for="photo">Photo</label><br/>
          <input class="mt-4 mb-4" type="file" name="photo[]" id="photo"/><br/>
          <input class="mt-4 mb-4" type="file" name="photo[]" id="photo"/><br/>

          <button class="py-2 px-4 bg-blue-600 text-white" type="submit">Submit</button>
        </form>
      </div>
    </div>
</body>
</html>
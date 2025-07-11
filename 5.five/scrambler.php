<?php
include_once './scramblerFunc.php';
  $task='encode';
  if(isset($_GET['task']) && $_GET['task']!==''){
    $task = $_GET['task'];

  };

  $key = 'abcdefghijklmnopqrstuvwxyz1234567890';
  if ('key' === $task) {
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('',$key_original);
  }else if (isset($_POST['key']) && $_POST['key']!=='') {
    $key = $_POST['key'];  }
    $scrambledData='';
    if ('encode'== $task) {
      $data = $_POST['data'] ?? '';
      if ($data != '') {
        $scrambledData = scramblerData($data,$key);
      }
    }
    if ('decode'== $task) {
      $data = $_POST['data'] ?? '';
      if ($data != '') {
        $scrambledData = decodeData($data,$key);
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
  <div class="w-[400px] mx-auto">
    <div>
      <h2>Data Scrambler</h2>
      <p class="my-2">Use this application to scramble your data</p>
      <div class="mb-2">
        <a href="/scrambler.php?task=encode" class='text-sky-500/90'>Encode</a>|
        <a href="/scrambler.php?task=decode" class='text-sky-500/90'>Decode</a>|
        <a href="/scrambler.php?task=key" class='text-sky-500/90'>Generate Key</a>
      </div>
    </div>
    <div>
      <form method="POST" action="scrambler.php<?php if('decode'===$task){echo"?task=decode";} ?>">
        <label class="font-bold " for="key">Key</label> <br/>
        <input type="text" name="key" id="key" class="w-full py-2 px-3 border border-purple-500 mb-4" <?php displayKey($key); ?>><br/>
        <label for="data" class="font-bold mt-2">Data</label> <br/>
        <textarea name="data" id="data" class="w-full py-2 px-3 border border-purple-500 mb-4"><?php if(isset($_POST['data'])){echo $_POST['data'];} ?></textarea><br/>
        <label for="result" class="font-bold mt-2">Result</label> <br/>
        <textarea name="result" id="result" class="w-full py-2 px-3 border border-purple-500 mb-4"> <?php echo $scrambledData;?></textarea>

        <button type="submit" class="capitalize bg-purple-500 py-2 px-4 text-white mt-2">Do it for me</button>
      </form>
    </div>
  </div>
</body>
</html>
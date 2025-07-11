<?php
define("DB_NAME",'/home/murad-wahid/Desktop/PHP/8.crud/data/db.txt');
function seed (){
  $data = array(
    array(
      'id'=>1,
      'fname'=>'kamal',
      'lname'=>'khan',
      'roll'=>'11',
    ),
    array(
      'id'=>2,
      'fname'=>'sajid',
      'lname'=>'khan',
      'roll'=>'12',
    ),
    array(    
      'id'=>3,  
      'fname'=>'sana',
      'lname'=>'khan',
      'roll'=>'13',
    ),
    array(   
      'id'=>4,   
      'fname'=>'sana',
      'lname'=>'khan',
      'roll'=>'14',
    ),
    array(   
      'id'=>5,   
      'fname'=>'Ripon',
      'lname'=>'ahmed',
      'roll'=>'15',
    ),
  );
  $serializedData = serialize($data);
  file_put_contents(DB_NAME,$serializedData,LOCK_EX);

}

function generateReport (){
  $serializedData = file_get_contents(DB_NAME);
  $students = unserialize($serializedData);
  ?>
<table class="min-w-full divide-y divide-gray-200 border border-gray-300">
  <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Name</th>
          <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Roll</th>
          <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Action</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
      <?php
      foreach($students as $student){
        ?>
        <tr>
          <td class="px-4 py-2 whitespace-nowrap"><?php printf("%s %s",$student['fname'],$student['lname']) ?></td>
          <td class="px-4 py-2 whitespace-nowrap"><?php printf("%s",$student['roll'])?></td>
          <td class="px-4 py-2 whitespace-nowrap">
            <?php echo sprintf('<a href="/8.crud/index.php/?task=edit&id=%s" class="text-blue-600 hover:underline">Edit</a> | <a href="/8.crud/index.php/?task=delete&id=%s" class="text-red-600 hover:underline delete">Delete</a>', $student['id'], $student['id']); ?>
          </td>
        </tr>
        <?php
      }
      ?>
      </tbody>
    </table>
  <?php
}


function addStudent($fname,$lname,$roll){
  $found= false;
  $serializedData= file_get_contents(DB_NAME);
  $students = unserialize($serializedData);
  foreach ($students as $_student) {
    if ((string)$_student['roll'] === (string)$roll) {
      $found = true;
      break;
    }
  }
  if (!$found) {
    $newId = getNewId($students);
    $student = array(
      'id'=>$newId,
      'fname'=>$fname,
      'lname'=>$lname,
      'roll'=>$roll
    );
  
    array_push($students,$student);
    $serializedData = serialize($students);
    file_put_contents(DB_NAME,$serializedData,LOCK_EX);
    return true;
  }
  return false;
}

function getStudent($id){

  $serializedData= file_get_contents(DB_NAME);
  $students = unserialize($serializedData);
  foreach($students as $student){
    if($student['id'] == $id){
      return $student;
    }
  }
  return false;
}


function updateStudent ($id,$fname,$lname,$roll){
  $found= false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $student) {
      if ($student['roll']==$roll && $student['id'] != $id) {
        $found =true;
        break;
      }
    }

    if (!$found) {
      $students[$id - 1]['fname'] = $fname;
      $students[$id - 1]['lname'] = $lname;
      $students[$id - 1]['roll'] = $roll;
      $serializedData = serialize($students);
      file_put_contents(DB_NAME,$serializedData,LOCK_EX);
      return true;
    }

    return false;

}

function deleteStudent ($id){
  $serializedData = file_get_contents(DB_NAME);
  $students = unserialize($serializedData);
  foreach ($students as $offset=>$_student) {
    if ($_student['id']== $id) {
      unset($students[$offset]);
      // return $student;
    }
  }
  $serializedData = serialize($students);
  file_put_contents(DB_NAME,$serializedData,LOCK_EX);
}

function getNewId($students){
  $maxId = max(array_column($students,'id'));
  return $maxId+1;
}
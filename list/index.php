<?php

error_reporting(E_ALL);

if (!empty($_POST['add'])) {
   setcookie('submit', $_POST['add'], time() + 3600, '/');
   echo 'Кука создана';
}

if (!empty($_POST['delete'])) {
   setcookie('submit', $_POST['add'], time() - 3600, '/');
   echo 'Кука удаленна';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Task list</title>
</head>

<body>
   <form action="" method="POST">

      <h1>Task list</h1>
      <hr>
      <div>
         <p>
            <input type="text" name="add">
            <button type=submit name="submit" value=''>ADD TASK</button>
         </p>
      </div>

      <div>
         <p>

            <input type="reset" name="remove_all" value=" REMOVE ALL" class="b2">
            <input type="submit" name="ready_all" value=" READY ALL" class="b2">
         </p>
         <div class="block_item">
            <div class="donat"></div>
         </div>
      </div>
      <hr>

      <p> <?php echo $_POST['add']; ?> </p>
      <div>
         <input type="submit" name="unready" value="UNREADY" class="b2">
         <input type="submit" name="delete" value="DELETE" class="b2">
         <div class="block_item">
            <div class="donat1"></div>
         </div>
         <d1>
      </div>
      <hr>
   </form>
</body>

</html>
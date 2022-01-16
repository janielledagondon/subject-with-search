<html>
  <head>
    <title>Create Subject</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/styles/tailwind.css" rel="stylesheet">
  </head>
  <body>
    <ul class="flex border-b">
      <li class="mr-1">
        <a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
        hover:text-blue-800" href="index.php">Student Information</a>
      </li>
      <li class="mr-1 -mb-px">
        <a class="inline-block px-4 py-2 font-semibold text-blue-700 bg-white border-t border-l
        border-r rounded-t" href="create.php">Create</a>
      </li>
      <li class="mr-1">
        <a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
        hover:text-blue-800" href="read.php">Read</a>
      </li>
      <li class="mr-1">
        <a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
        hover:text-blue-800" href="search.php">Search</a>
      </li>
      <li class="mr-1">
        <a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
        hover:text-blue-800" href="edit.php">Edit</a>
      </li>
      <li class="mr-1">
        <a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
        hover:text-blue-800" href="update.php">Update</a>
      </li>
      <li class="mr-1">
        <a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
        hover:text-blue-800" href="delete.php">Delete</a>
      </li>
    </ul>
    <form class="m-5" method="POST" action="create.php">
      Subject Code:
      <input class="mt-2 border-2" type="text" name="sc" /> <br />
      Subject Description:
      <input class="mt-2 border-2" type="text" name="desc" /> <br />
      Subject Units:
      <input class="mt-2 border-2" type="text" name="units" /> <br />
      <input class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4
      rounded" type="submit" value="Save" />
    </form>
    <?php
      require 'rb.php';
      require 'subject_class.php';
      R::setup('mysql:host=sql302.epizy.com;dbname=epiz_30788103_Subject', 'epiz_30788103','imwclIzfem');
      if(isset($_POST['sc']) && isset($_POST['desc']) && isset($_POST['units'])){
        $sc = $_POST['sc'];
        $desc = $_POST['desc'];
        $units = $_POST['units'];
        $subject = R::dispense('subject');
        $subject->setSubject($sc, $desc, $units);
        $id = R::store($subject);
        echo "<p> Subject Successfully Saved</p>";
      }
      R::close();
      ?>
  </body>
</html>

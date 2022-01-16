<html>
<head>
<title>Update Subject</title>
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
<li class="mr-1">
<a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
hover:text-blue-800" href="create.php">Create</a>
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
<li class="mr-1 -mb-px">
<a class="inline-block px-4 py-2 font-semibold text-blue-700 bg-white border-t border-l
border-r rounded-t" href="update.php">Update</a>
</li>
<li class="mr-1">
<a class="inline-block px-4 py-2 font-semibold text-gray-400 bg-white
hover:text-blue-800" href="delete.php">Delete</a>
</li>
</ul>
<?php
$sc = "";
$desc = "";
$units = "";
require 'rb.php';
require 'subject_class.php';
R::setup('mysql:host=localhost;dbname=id17923844_subjectdb', 'id17923844_user',
'2^FJC@yt}8}jlACH');
if(isset($_POST['sc'])){
$sc = $_POST['sc'];
$subject = R::find('subject', ' sc = ' . $sc);
foreach($subject as $subj){
$sc = $subj->getSectionCode();
$desc = $subj->getDescription();
$units = $subj->getUnits();
}
}
?>
<form class="mt-0 ml-5" method="POST" action="update.php">
<input class="mt-2 border" type="hidden" name="sc_old" value="<?php echo $sc;?>" />
<br />
Section Code:
<input class="mt-2 border" type="text" name="sc" value="<?php echo $sc;?>" />
<br />
Subject Description:
<input class="mt-2 border" type="text" name="desc" value="<?php echo $desc;?>" />
<br />
Subject Units:
<input class="mt-2 border" type="text" name="units" value="<?php echo $units;?>" />
<br />
<input class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4
rounded" type="submit" value="Update" />
</form>
<?php
if(isset($_POST['sc_old'])){
$sc_old = $_POST['sc_old'];
$sc = $_POST['sc'];
$desc = $_POST['desc'];
$units = $_POST['units'];
$subject = R::find('subject', ' sc = ' . $sc_old);
foreach($subject as $subj){
$subj->setSubject($sc, $desc, $units);
$id = R::store($subj);
echo "<br /> Subject Successfully Saved";
}
}
R::close();
?>
</body>
</html>

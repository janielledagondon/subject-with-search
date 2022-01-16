<html>
<head>
<title>Read All Subjects</title>
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
<li class="mr-1 -mb-px">
<a class="inline-block px-4 py-2 font-semibold text-blue-700 bg-white border-t border-l
border-r rounded-t" href="read.php">Read</a>
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
<?php
require 'rb.php';
require 'subject_class.php';
R::setup('mysql:host=localhost;dbname=id17923844_subjectdb', 'id17923844_user',
'2^FJC@yt}8}jlACH');
$subject = R::findAll('subject');
echo "<table border='1' class='fixed'>";
echo "<tr>";
echo "<td>Section Code</td>";
echo "<td>Description</td>";
echo "<td>Units</td>";
echo "</tr>";
foreach($subject as $subj){
echo "<tr>";
echo "<td>" . $subj->getSectionCode() . "</td>";
echo "<td>" . $subj->getDescription() . "</td>";
echo "<td>" . $subj->getUnits() . "</td>";
echo "</tr>";
}
echo "</table>";
R::close();
?>
</body>
</html>

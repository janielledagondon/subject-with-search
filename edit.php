<html>
<head>
<title>Edit Subject</title>
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
<li class="mr-1 -mb-px">
<a class="inline-block px-4 py-2 font-semibold text-blue-700 bg-white border-t border-l
border-r rounded-t">Edit</a>
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
<form class="m-5" method="POST" action="update.php">
Section Code:
<input class="mt-2 border-2" type="text" name="sc" /> <br />
<input class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4
rounded" type="submit" value="Edit" />
</form>
</body>
</html>

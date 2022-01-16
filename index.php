<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <!-- navbar -->
    <nav class="bg-neutral-800"> <!-- bg-neutral-900 -->
        <div class="px-8 mx-auto">
            <div class="flex justify-between">
                <div class="flex space-x-2">
                    <!-- logo -->
                    <div>
                        <a href="/" class="flex items-center py-5 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center h-6 w-6 mr-1 text-fuchsia-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                            <span class="text-center font-semibold text-fuchsia-300">Student Information</span>
                        </a>
                    </div>

                    <!-- primary navbar -->
                    <div class="flex space-x-1 items-center">
                        <a href="read.php" class="py-5 px-2 text-gray-200 hover:text-yellow-400 hover:underline">All Subjects</a>
                    </div>
                </div>

                <!-- secondary navbar -->
                <div class="flex items-center space-x-1">
                    <a href="create.php">
                        <span class="py-2 px-3 bg-yellow-500 text-gray-900 rounded shadow-gray-900">Create Subject</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
    </nav>
    <!-- student information page -->
    <div class="py-12 text-center">
        <h3 class="font-extrabold text-4xl">Angel Janielle R. Dagondon</h3>
        <p class="font-medium">BSIT-3</p>
        <p class="font-light">CDO, Philippines</p>
    </div>
</body>
</html>

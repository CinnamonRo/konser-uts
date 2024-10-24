<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/styles/input.css" rel="stylesheet">
    <title>Your Title Here</title> <!-- Add a title to your document -->
</head>

<body>
    <div class="flex z-10 top-0 flex-items justify-between items-center py-4 px-6 bg-dark-teal sticky">
        <a href="index.php?page=home">
            <div class="flex items-center flex-shrink-0 text-slate-300 mr-6">
                <img src="#" alt="logo" class="mr-2" />
                <span class="font-semibold text-xl tracking-tight">Nama</span>
            </div>
        </a>
        <!-- nanti bakal diubah pas login-->
        <div class="flex items-center"> <!-- Changed from flex-items to items -->
            <a href="index.php?page=login" class="text-lg mx-2 text-slate-300 hover:text-white transition-color ease-in-out duration-200">
                Login
            </a>
            <span class="text-slate-300">|</span>
            <a href="index.php?page=signup" class="text-lg mx-2 text-slate-300 hover:text-white transition-color ease-in-out duration-200">
                Sign Up
            </a>
        </div>
    </div>
</body>

</html>
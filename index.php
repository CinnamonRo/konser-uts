<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <?php
    // Get the page from the URL parameter or determine it from the direct URL
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Set a base path for the pages
    $base_path = 'pages/';

    require './includes/header.php';

    // Determine the path for the requested page
    $page_path = $base_path . $page . '.php';

    // Check if the requested page file exists; if not, load a 404 page
    if (file_exists($page_path)) {
        require $page_path;
    } else {
        require $base_path . '404.php'; // Load the 404 error page if the file doesn't exist
    }
    ?>
</body>

</html>
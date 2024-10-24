<?php
require_once './includes/dbConnect.php';

// Initialize messages
$success_message = '';
$error_message = '';

// Start session to check if user is already logged in
session_start();

// Redirect if user is already logged in
if (isset($_SESSION['user_id'])) {
    $success_message = "You are already logged in!";
    // Optionally redirect to another page if needed
    // header('Location: index.php?page=home');
    // exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error_message = "All fields are required!";
    } else {
        $db = new DbConnect();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM users WHERE user_nama = :user_nama");
        $stmt->bindParam(':user_nama', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $stmt->rowCount() > 0) {
            if (password_verify($password, $user['user_password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_nama'] = $user['user_nama'];
                $_SESSION['user_email'] = $user['user_email'];
                $_SESSION['role'] = $user['role'];
                
                if($user['role'] === 'admin' ){
                    echo "login as admin";
                }else{
                    echo "login as user";
                }
                // Successful login, show success message
                $success_message = "Login successful! Welcome " . $_SESSION['user_nama'];
            } else {
                $error_message = "Invalid username or password!";
            }
        } else {
            $error_message = "Invalid username or password!";
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/styles/input.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="min-w-screen flex items-center justify-center">
        <div class="w-full max-w-xs">
            <form method="POST" action="" class="shadow-md rounded px-8 pt-6 pb-8 mb-4 bg-light-teal">
                <p class="text-center text-white text-lg font-bold">Login</p>
                
                <!-- Show Success or Error Message -->
                <?php if (!empty($success_message)): ?>
                    <p class="text-center text-lime-500 pb-3"><?php echo $success_message; ?></p>
                <?php elseif (!empty($error_message)): ?>
                    <p class="text-center text-red-500 pb-3"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Username <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Username"
                        required />
                </div>

                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Password <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        name="password"
                        type="password"
                        placeholder="******************"
                        required />
                </div>

                <div class="mb-6 flex items-center justify-between">
                    <a href="index.php?page=forgotpassword" class="text-sky-600/75 text-xs font-semibold font-serif hover:text-sky-600">
                        Forgot Password
                    </a>
                    <a href="index.php?page=signup" class="text-sky-600/75 text-xs font-semibold font-serif hover:text-sky-600">
                        Sign Up
                    </a>
                </div>

                <div class="flex items-center justify-center">
                    <button class="bg-lm-teal text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Login
                    </button>
                </div>
            </form>
            <a href="./includes/logout.php" >out</a>
            <p class="text-center text-gray-500 text-xs">
                &copy;2024 Kelompok Bahagia
            </p>
        </div>
    </div>
</body>

</html>

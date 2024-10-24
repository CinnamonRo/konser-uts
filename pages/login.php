<?php
require_once './includes/dbConnect.php';

// Initialize messages
$success_message = '';
$error_message = '';

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

        if ($stmt->rowCount() > 0) {
            if (password_verify($password, $user['user_password'])) {
                session_start();

                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_nama'] = $user['user_nama'];
                $_SESSION['user_email'] = $user['user_email'];
                $_SESSION['user_role'] = $user['user_role'];

                header('Location: index.php?page=home');
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
        <div class="w-full max-w-xs ">
            <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4 bg-light-teal">
                <p class="text-center text-white text-lg font-bold">Login</p>
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
                    <a
                        href="index.php?page=forgotpassword"
                        class="text-sky-600/75 text-xs font-semibold font-serif hover:text-sky-600">
                        Forgot Password
                    </a>
                    <a
                        href="index.php?page=signup"
                        class="text-sky-600/75 text-xs font-semibold font-serif hover:text-sky-600">
                        Sign Up
                    </a>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-lm-teal text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Login
                    </button>
                </div>
            </form>

            <p class="text-center text-gray-500 text-xs">
                &copy;2024 Kelompok Bahagia
            </p>

        </div>
    </div>
</body>

</html>
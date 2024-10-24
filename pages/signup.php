<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/styles/input.css" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    <?php
    // Include the database connection class
    require_once 'DbConnect.php';

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $name = $_POST['user_nama'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];
        $repassword = $_POST['repassword'];

        // Validate form data
        if (empty($name) || empty($email) || empty($password) || empty($repassword)) {
            echo "All fields are required!";
            exit;
        }

        // Check if password and re-password match
        if ($password !== $repassword) {
            echo "Passwords do not match!";
            exit;
        }

        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create a database connection
        $db = new DbConnect();
        $conn = $db->connect();

        // Check if the username already exists
        $stmt = $conn->prepare("SELECT COUNT(*) as total FROM users WHERE user_nama = :user_nama");
        $stmt->bindParam(':user_nama', $name);
        $stmt->execute();
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser['total'] > 0) {
            echo "Username already exists!";
            exit;
        }

        // Check if the email is already registered
        $checkEmailStmt = $conn->prepare("SELECT * FROM users WHERE user_email = :email");
        $checkEmailStmt->bindParam(':email', $email);
        $checkEmailStmt->execute();

        if ($checkEmailStmt->rowCount() > 0) {
            echo "Email is already registered!";
            exit;
        }

        // Function to check if user_id exists
        function idExists($conn, $id)
        {
            $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE user_id = ?");
            $stmt->execute([$id]);
            return $stmt->fetchColumn() > 0;
        }

        // Get the current count of users to generate the next user ID
        $stmt = $conn->query("SELECT COUNT(*) as total FROM users");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $newIdNumber = $result['total'] + 1;

        // Initialize user_id and check for uniqueness
        $user_id = sprintf("C%03d", $newIdNumber);
        while (idExists($conn, $user_id)) {
            $newIdNumber++; // Increment to find the next unique ID
            $user_id = sprintf("C%03d", $newIdNumber); // Reformat the new ID
        }

        // Prepare the SQL query for insertion
        $sql = "INSERT INTO users (user_id, user_nama, user_email, user_password) 
            VALUES (:user_id, :user_nama, :user_email, :user_password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_nama', $name);
        $stmt->bindParam(':user_email', $email);
        $stmt->bindParam(':user_password', $hashedPassword);

        // Execute the query and check if it was successful
        if ($stmt->execute()) {
            echo "User registered successfully with ID: $user_id";
            // Redirect to login or a success page
            header("Location: welcome.php");
            exit;
        } else {
            echo "There was an error registering the user.";
        }
    }
    ?>
    <div class="min-w-screen min-h-screen flex items-center justify-center">
        <div class="w-full max-w-xs">
            <form
                class="shadow-md rounded px-8 pt-6 pb-8 mb-4 bg-light-teal">
                <p class="text-center text-white text-lg font-bold">
                    Create Account
                </p>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Username <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username"
                        type="text"
                        placeholder="Username"
                        name="user_nama"

                        required />
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Email <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 focus:invalid:text-pink-500 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email"
                        type="email"
                        placeholder="email"
                        name="user_email"

                        required />
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Password <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        type="password"
                        placeholder="******************"
                        required />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Re-Password <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="repassword"
                        type="password"
                        placeholder="******************"
                        required />
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-lm-teal text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" // Change to submit type>
                        Create
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
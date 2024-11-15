<?php
session_start();

// Database connection
$servername = "localhost"; // Change if necessary
$db_username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "garage"; // Change to your database name

$conn = new mysqli($servername, $db_username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php"); // Redirect to a dashboard or home page
            exit();
        } else {
            // Invalid password
            $error_message = "Invalid " . $username . " or " . $password . "!";
        }
    } else {
        // User not found
        $error_message = "Invalid username or password!";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Garage Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <style>
        /* Custom styling for the page */
        body {
            background-color: #f3f4f6;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .form-container input {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px;
            width: 100%;
            margin-bottom: 16px;
            outline: none;
            transition: all 0.3s;
        }

        .form-container input:focus {
            border-color: #4f46e5;
        }

        .form-container button {
            background-color: #4f46e5;
            color: white;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-container button:hover {
            background-color: #3730a3;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 12px;
        }

        /* Animated background */
        .bg-gradient {
            background: linear-gradient(90deg, #4f46e5, #7dd3fc);
            background-size: 200% 200%;
            animation: gradient 4s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 200% 0;
            }

            50% {
                background-position: 0 100%;
            }

            100% {
                background-position: 200% 0;
            }
        }
    </style>
</head>

<body class="bg-gradient">
    <div class="flex justify-center items-center min-h-screen">
        <div class="form-container">
            <h2>Login to Garage Management System</h2>
            <form action="login.php" method="POST">
                <div>
                    <label for="username" class="text-lg text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div>
                    <label for="password" class="text-lg text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <input type="submit" value="Login"
                    class="w-full py-3 bg-indigo-500 text-white rounded-md hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 transition-all duration-300">
            </form>

            <?php if (isset($error_message)): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <script>
        // GSAP Animation on load
        gsap.from(".form-container", {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power4.out",
        });

        // Focus animation on form elements
        const inputs = document.querySelectorAll('input, button');
        inputs.forEach(input => {
            input.addEventListener("focus", () => {
                gsap.to(input, {
                    scale: 1.05,
                    borderColor: "#4f46e5",
                    duration: 0.3
                });
            });

            input.addEventListener("blur", () => {
                gsap.to(input, {
                    scale: 1,
                    borderColor: "#e2e8f0",
                    duration: 0.3
                });
            });
        });
    </script>
</body>

</html>
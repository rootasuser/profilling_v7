<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../node_modules/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/portal.css" type="text/css" />
    <title>SDO Teacher Tracker - Portal</title>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid px-4">
            <span class="navbar-brand text-white fw-semibold">Teacher Tracker System</span>
            <button id="darkModeToggle" class="btn btn-outline-light rounded-circle">
                <i id="lightIcon" class="bi bi-brightness-high"></i>
                <i id="darkIcon" class="bi bi-moon d-none"></i>
            </button>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="form-container rounded shadow p-4" style="width: 350px;">
            <div class="text-center mb-4">
                <img src="logo.png" alt="Logo" class="img-fluid mb-3" style="height: 60px;">
                <h1 class="h5 fw-bold">Welcome to Teacher Tracker System - SDO Bayawan</h1>
            </div>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                <i id="togglePassword" class="bi bi-eye-slash" style="cursor: pointer;"></i> Show Password
                </div>
                <button type="submit" class="btn btn-primary w-100">Log In</button>
            </form>
        </div>
    </div>

    <script type="module" src="../assets/js/initialize.js"></script>

    
</body>
</html>

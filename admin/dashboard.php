<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="Windel Navales (DevWin)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../node_modules/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="../assets/css/body.css" rel="stylesheet" />
    <link href="../assets/css/wrapper.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>
<body class="bg-light">
    <!-- Wrapper -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-3">
                <h4>ADMIN PANEL</h4>
                <img src="../assets/images/logo.jpg" alt="Logo" class="img-fluid rounded-circle my-2">
            </div>
            <hr class="text-white">
            <div class="list-group list-group-flush">
                <a href="?page=dashboard" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
                <a href="?page=employee" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="bi bi-person"></i> Employees
                </a>
                <a href="?page=records" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="bi bi-file-earmark-text"></i> Records
                </a>
                <a href="?page=account" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="bi bi-person-gear"></i> Account
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-light rounded-circle" id="sidebarToggle" style="background-color: transparent; font-size: 25px;">
                    <i class="bi bi-chevron-left"></i>
                </button>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggleTop">
                        <i class="bi bi-list"></i>
                    </button>
                    <span class="navbar-brand text-white">Admin</span>
                </div>
            </nav>
            <!-- Main Content -->
            <div class="container-fluid py-4">
                <h4 class="mt-4">Dashboard</h4>
                <p>Welcome to the Teacher Tracker System</p>
                <hr>

                <!-- Content Cards -->
                <div class="row">
                    <?php 
                    if (isset($_GET['page'])) {
                        $page = htmlspecialchars($_GET['page']); // Sanitize input
                        switch ($page) {
                            case 'dashboard':
                                include 'includes/dashboard.php';
                                break;
                            case 'employee':
                                include 'includes/employee.php';
                                break;
                            case 'records':
                                include 'includes/records.php';
                                break;
                            case 'account':
                                include 'includes/account.php';
                                break;
                            default:
                                include 'includes/dashboard.php';
                                break;
                        }
                    } else {
                        include 'includes/dashboard.php'; // Fallback
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/toggle.js"></script>
</body>
</html>

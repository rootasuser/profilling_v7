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
    <link href="../assets/css/account.css" rel="stylesheet" />
    <title>Dashboard</title>

</head>
<body>
    <!-- SIDEBAR and NAVBAR inside the wrapper -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark border-none" id="sidebar-wrapper">
            <div class="sidebar-heading bg-dark text-white">
                ADMIN PANEL
                <img src="../assets/images/logo.jpg" alt="Logo" class="img-fluid rounded-circle">
            </div>
            <hr class="text-white">
            <div class="list-group list-group-flush bg-dark text-white">
                <a href="?page=dashboard" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-house-door"></i> <span>Dashboard</span>
                </a>
                <a href="?page=employee" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-person"></i> <span>Employees</span> 
                </a>
                <a href="?page=records" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-file-earmark-text"></i> <span>Records</span>
                </a>
                <a href="?page=account" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-person-gear"></i> <span>Account</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
                </a>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-light rounded-circle" id="sidebarToggle" style="border: none; box-shadow: none; background-color: transparent; color: #ffffff; font-size: 25px;">
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
                    <span class="navbar-brand text-white fs-6">admin</span>
                </div>
            </nav>
            <!-- Main Content -->
            <div class="container-fluid">
          
                <!-- Content Cards -->
                <div class="row mt-5">

                <?php
                    // Whitelist of allowed pages
                    $allowedPages = ['dashboard', 'employee', 'records', 'account'];

                    // Determine the requested page or default to 'dashboard'
                    $page = $_GET['page'] ?? 'dashboard';

                    // Validate the page against the whitelist
                    $page = in_array($page, $allowedPages, true) ? $page : 'dashboard';

                    // Include the corresponding file
                    include "includes/$page.php";
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

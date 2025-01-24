<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="Windel Navales (DevWin)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../node_modules/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="../assets/css/wrapper.css" rel="stylesheet" />
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
                <a href="#" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-house-door"></i> <span>Dashboard</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-person"></i> <span>Employees</span> 
                </a>
                <a href="#" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-file-earmark-text"></i> <span>Records</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-gear"></i> <span>Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-3 bg-dark text-white">
                    <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
                </a>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-light rounded-circle" id="sidebarToggle">
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
                    <span class="navbar-brand text-white">admin</span>
                </div>
            </nav>
            <!-- Main Content -->
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <p>Welcome to the Teacher Tracker System</p>

                <!-- Content Cards -->
                <div class="row">
    <!-- Employees Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark fw-bolder text-uppercase mb-1">
                            Employees</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1000</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-lines-fill fa-3x text-gray-300 opacity-75" style="font-size: 50px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schools Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark fw-bolder text-uppercase mb-1">
                            Schools</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1000</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-building fa-3x text-gray-300 opacity-75" style="font-size: 50px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Subjects Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark fw-bolder text-uppercase mb-1">
                            Subjects</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-book fa-3x text-gray-300 opacity-75" style="font-size: 50px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Positions Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark fw-bolder text-uppercase mb-1">
                            Positions</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">30</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-badge fa-3x text-gray-300 opacity-75" style="font-size: 50px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/toggle.js"></script>
    
</body>
</html>

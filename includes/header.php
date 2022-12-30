<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-md" style="background-color:black;color:#fff;border-color: #080808;padding-bottom:0 0 4.5rem ; font-family: 'Montserrat', sans-serif; ">
    
    <p class="text-primary" style="padding-top: 10px;"><a class="navbar-brand"  style="color:#D6E4E5; font-family: 'Montserrat', sans-serif;" href="http://localhost/school-management-website/index.php">ERP Model.</a></p>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fa fa-bars text-primary" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <?php

        if ($_SESSION["user_category"] == "guest") {
            echo '
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#our-services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="./login.php">Login</a>
                    </li>
                </ul>
            ';
        }

        if ($_SESSION["user_category"] == "admin") {
            echo '
                <ul class="navbar-nav text-center">
                    <li class="nav-item p-2">
                        <a class="nav-link" href="../admin/admin.php">Dashboard</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-primary" href="../logout.php">Logout</a>
                    </li>
                </ul>
            ';
        }

        if ($_SESSION["user_category"] == "student") {
            echo '
                <ul class="navbar-nav text-center">
                    <li class="nav-item p-2">
                        <a class="nav-link" href="./student/dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            ';
        }

        if ($_SESSION["user_category"] == "teacher") {
            echo '
                <ul class="navbar-nav text-center">
                    <li class="nav-item p-2">
                        <a class="nav-link" href="./teacher/grade.php">Grade</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="./teacher/attendance.php">Attendance</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="./profile.php">Profile</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            ';
        }

        if ($_SESSION["user_category"] == "accountant") {
            echo '
                <ul class="navbar-nav text-center">
                    <li class="nav-item p-2">
                        <a class="nav-link" href="./accountant/index.php">Dashboard</a>
                    </li>
                    
                     <li class="nav-item p-2">
                        <a class="nav-link text-light" href="./accountant/fees.php">Fees</a>
                    </li>
                    <li class="nav-item p-2">
                    <a class="nav-link text-light" href="./accountant/payments.php">Payments</a>
                </li>
                <li class="nav-item p-2">
                <a class="nav-link text-light" href="./accountant/receipts.php">Receipts</a>
            </li>
                    
                    <li class="nav-item p-2">
                        <a class="nav-link text-primary" href="./logout.php">Logout</a>
                    </li>
                </ul>
            ';
        }
        ?>
    </div>
</nav>

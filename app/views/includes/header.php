<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Center Dashboard</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
    
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img width="20%" src="public/assets/images/logo.svg">
        </div>

    

        <!-- Navigation Links -->
        <nav class="nav-links">
            <a href="callcenter/menu"><i class="fas fa-home"></i> Dashboard</a>
            <a href="/tasks"><i class="fas fa-phone-alt"></i> Calls</a>
            <a href="/clients"><i class="fas fa-users"></i> Clients</a>
            <a href="/reports"><i class="fas fa-chart-line"></i> Reports</a>
        </nav>

        <!-- Profile & Settings -->
        <div class="profile">
            
            <span>Admin</span>
            <div class="dropdown">
                <button class="dropdown-btn"><img src="public/assets/icons/caret-down-solid.svg" alt="Icon" width="20" height="20"></button>
                <div class="dropdown-content">
                    <a href="/settings"><i class="fas fa-user-cog"></i> Settings</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </div>
    </header>






    
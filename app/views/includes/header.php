<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Center Dashboard</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Font Awesome Icons -->
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <h1>📞 Call Center</h1>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search..." id="searchInput">
            <button type="submit"><i class="fas fa-search"></i></button>
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
                <button class="dropdown-btn"><i class="fas fa-cog"></i></button>
                <div class="dropdown-content">
                    <a href="/settings"><i class="fas fa-user-cog"></i> Settings</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </div>
    </header>

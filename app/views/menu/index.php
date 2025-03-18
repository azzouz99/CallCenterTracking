<?php include '../app/views/includes/header.php'; ?>





<div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- <div class="profile">
                <img src="/assets/img/user.png" alt="Profile Picture">
                <h3>Michael</h3>
                <p>info@example.com</p>
                <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div> -->
            <nav>
                <a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a>
                <a href="#"><i class="fas fa-th"></i> App</a>
                <a href="#"><i class="fas fa-chart-line"></i> Reports</a>
                <a href="#"><i class="fas fa-users"></i> Clients</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <header class="top-bar">
                <input type="text" placeholder="Search...">
                <div class="user-options">
                    <i class="fas fa-bell"></i>
                    
                </div>
            </header>

            <!-- First Row: Stats Cards -->
            <section class="stats">
                <div class="stat-card">
                    <i class="fas fa-user-check"></i>
                    <h2>Clients Called</h2>
                    <p>1,200</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-phone-alt"></i>
                    <h2>Total Calls</h2>
                    <p>3,400</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-headset"></i>
                    <h2>Number of Agents</h2>
                    <p>45</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-phone-slash"></i>
                    <h2>Missed Calls</h2>
                    <p>230</p>
                </div>
            </section>

            <!-- Second Row: Line Chart -->
            <section class="charts">
                <div class="chart-full-width">
                    <h3>Call Evolution Over Time</h3>
                    <canvas id="callsEvolutionChart"></canvas>
                </div>
            </section>

            <!-- Third Row: Column Chart and Donut Chart -->
            <section class="charts-grid">
                <div class="chart-container">
                    <h3>Agent Performance</h3>
                    <canvas id="agentPerformanceChart"></canvas>
                </div>
                <div class="chart-container">
                    <h3>Call Distribution</h3>
                    <canvas id="callDistributionChart"></canvas>
                </div>
            </section>
        </main>
    </div>
    <script src="public/assets/js/chart.js"></script>
    <script src="public/assets/js/dashboard.js"></script>

<?php include '../app/views/includes/footer.php'; ?>
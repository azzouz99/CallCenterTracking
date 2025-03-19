<?php include '../app/views/includes/header.php'; ?>
<div class="dashboard-container">

<?php include 'sidebar.php'; ?>
        <!-- Main Content -->
        <main class="content">
            <header class="top-bar">
      
            </header>

            <!-- First Row: Stats Cards -->
            <section  class="stats">
                <div  class="stat-card">
                <img src="public/assets/icons/user-tick-svgrepo-com.svg" alt="Icon" width="45" height="45">
                    <h2>Agents connectés</h2>
                    <p>4</p>
                </div>
                <div class="stat-card">
                <img src="public/assets/icons/incoming-call-svgrepo-com.svg" alt="Icon" width="40" height="40">
                    <h2>Appels entrants</h2>
                    <p>3,400</p>
                </div>
                <div class="stat-card">
                <img src="public/assets/icons/outgoing-call-svgrepo-com.svg" alt="Icon" width="40" height="40">
                    <h2>Appels sortants</h2>
                    <p>45</p>
                </div>
                <div class="stat-card">
                <img src="public/assets/icons/phone-slash-solid.svg" alt="Icon" width="40" height="40">
                    <h2>Appels manqués</h2>
                    <p>230</p>
                </div>
            </section>

            <!-- Second Row: Line Chart -->
            <section class="charts">
                <div class="chart-full-width">
                    <h3>Évolution des appels au fil du temps</h3>
                    <canvas id="callsEvolutionChart" style="height: 300px;"></canvas>
                </div>
            </section>

            <!-- Third Row: Column Chart and Donut Chart -->
            <section class="charts-grid">
                <div class="chart-container">
                    <h3>Performance des agents</h3>
                    <canvas id="agentPerformanceChart"></canvas>
                </div>
                <div class="chart-container">
                    <h3>Distribution des appels</h3>
                    <canvas id="callDistributionChart"></canvas>
                </div>
            </section>

        </main>
    </div>
    <script src="public/assets/js/chart.js"></script>
    <script src="public/assets/js/dashboard.js"></script>

<?php include '../app/views/includes/footer.php'; ?>
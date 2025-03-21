
<?php require_once __DIR__ . "/../includes/header.php"; ?>
<div class="dashboard-container">
<?php include 'sidebar.php'; ?>

<main class="content">
            <header class="top-bar">
      
            </header>
<h2>📊 Agent: Ali Ben Ali</h2>

<section class="stats">
    <div class="stat-card">
        <h2>Total Calls</h2>
        <p>2500</p>
    </div>
    <div class="stat-card">
        <h2>Missed Calls</h2>
        <p>60</p>
    </div>
    <div class="stat-card">
        <h2>Avg Call Duration</h2>
        <p>20 min</p>
    </div>
</section>
<section class="charts">
<div class="chart-full-width">
<canvas id="agentCallsChart" style="height: 300px;"></canvas>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('agentCallsChart').getContext('2d');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                label: "Calls Over Time",
                data: [10, 20, 30, 50, 40, 60],
                borderColor: "#3498db",
                fill: false
            }]
        },
        options: {
            responsive: true
        }
    });
</script>

<?php require_once __DIR__ . "/../includes/footer.php"; ?>




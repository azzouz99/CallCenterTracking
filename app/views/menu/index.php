<?php include '../app/views/includes/header.php'; ?>

<main class="dashboard">
    <h2>📊 Dashboard</h2>
    <p>Welcome, <strong>Admin</strong></p>

    <!-- KPI Cards -->
    <section class="stats">
        <div class="card">
            <h3>Total Calls</h3>
            <p id="totalCalls">450</p>
        </div>
        <div class="card">
            <h3>Completed Calls</h3>
            <p id="completedCalls">320</p>
        </div>
        <div class="card">
            <h3>Pending Follow-ups</h3>
            <p id="pendingCalls">130</p>
        </div>
    </section>

    <!-- Charts Section -->
    <section class="charts">
        <div class="chart-container">
            <h3>Agent Call Performance</h3>
            <canvas id="agentChart"></canvas>
        </div>
        <div class="chart-container">
            <h3>Loan Requests Follow-Up</h3>
            <canvas id="loanChart"></canvas>
        </div>
    </section>

    <!-- Recent Calls -->
    <section class="recent">
        <h3>Recent Client Interactions</h3>
        <table>
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Call Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>March 15, 2025</td>
                    <td>✅ Completed</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>March 14, 2025</td>
                    <td>⏳ Follow-up Pending</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js for graphs -->
<script src="public/assets/js/dashboard.js"></script> <!-- JavaScript for charts -->

<?php include '../app/views/includes/footer.php'; ?>

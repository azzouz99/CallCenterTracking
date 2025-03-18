document.addEventListener("DOMContentLoaded", function() {
    // Line Chart: Call Evolution
    const callsEvolutionCtx = document.getElementById("callsEvolutionChart").getContext("2d");
    new Chart(callsEvolutionCtx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Total Calls",
                data: [150, 200, 300, 400, 500, 600, 700, 800, 750, 650, 550, 400],
                borderColor: "#3498db",
                fill: false
            }]
        }
    });

    // Bar Chart: Agent Performance
    const agentPerformanceCtx = document.getElementById("agentPerformanceChart").getContext("2d");
    new Chart(agentPerformanceCtx, {
        type: "bar",
        data: {
            labels: ["Agent 1", "Agent 2", "Agent 3", "Agent 4", "Agent 5"],
            datasets: [{
                label: "Calls Handled",
                data: [50, 80, 60, 90, 70],
                backgroundColor: "#1abc9c"
            }]
        }
    });

    // Donut Chart: Call Distribution
    const callDistributionCtx = document.getElementById("callDistributionChart").getContext("2d");
    new Chart(callDistributionCtx, {
        type: "doughnut",
        data: {
            labels: ["Answered", "Missed", "Voicemail"],
            datasets: [{
                data: [75, 15, 10],
                backgroundColor: ["#2ecc71", "#e74c3c", "#f1c40f"]
            }]
        }
    });
});

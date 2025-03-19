document.addEventListener("DOMContentLoaded", function() {
    // Line Chart: Call Evolution
    const callsEvolutionCtx = document.getElementById("callsEvolutionChart").getContext("2d");

    new Chart(callsEvolutionCtx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "Total des appels",
                    data: [150, 200, 300, 400, 500, 600, 700, 800, 750, 650, 550, 400],
                    borderColor: "#3498db",
                    fill: false,
                    tension: 0.3
                },
                {
                    label: "Appels entrants",
                    data: [120, 180, 250, 350, 450, 550, 650, 750, 700, 600, 500, 350],
                    borderColor: "#2ecc71",
                    fill: false,
                    tension: 0.3
                },
                {
                    label: "Appels sortants",
                    data: [50, 90, 150, 200, 250, 300, 350, 400, 370, 320, 290, 200],
                    borderColor: "#f1c40f",
                    fill: false,
                    tension: 0.3
                },
                {
                    label: "Appels entrants manqués",
                    data: [20, 30, 45, 60, 75, 85, 95, 100, 90, 80, 70, 55],
                    borderColor: "#e74c3c", /* Red */
                    borderDash: [5, 5], /* Dotted Line */
                    fill: false,
                    tension: 0.3
                },
                {
                    label: "Appels sortants manqués",
                    data: [10, 20, 30, 40, 50, 60, 70, 80, 75, 65, 55, 40],
                    borderColor: "#ff6347", /* Orange-Red */
                    borderDash: [5, 5], /* Dotted Line */
                    fill: false,
                    tension: 0.3
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    
    
    

    // Bar Chart: Agent Performance
    const agentPerformanceCtx = document.getElementById("agentPerformanceChart").getContext("2d");
    new Chart(agentPerformanceCtx, {
        type: "bar",
        data: {
            labels: ["Agent 1", "Agent 2", "Agent 3", "Agent 4", "Agent 5"],
            datasets: [{
                label: "Appels traités",
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

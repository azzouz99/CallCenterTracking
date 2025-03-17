// Sample Data
const agentData = {
    labels: ["Agent 1", "Agent 2", "Agent 3", "Agent 4"],
    datasets: [{
        label: "Calls Handled",
        data: [50, 40, 35, 60],
        backgroundColor: ["#4CAF50", "#FFC107", "#2196F3", "#FF5722"]
    }]
};

const loanData = {
    labels: ["Car Loan", "Home Loan", "Personal Loan"],
    datasets: [{
        label: "Follow-ups",
        data: [30, 50, 20],
        backgroundColor: ["#673AB7", "#FF9800", "#3F51B5"]
    }]
};

// Render Charts
new Chart(document.getElementById("agentChart"), { type: "bar", data: agentData });
new Chart(document.getElementById("loanChart"), { type: "pie", data: loanData });

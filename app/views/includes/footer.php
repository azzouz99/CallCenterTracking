<footer class="main-footer">
        <p>&copy; <?php echo date('Y'); ?> BTL. All rights reserved.</p>
    </footer>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleAgents = document.getElementById("toggleAgents");
        const agentList = document.getElementById("agentList");

        toggleAgents.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default anchor behavior
            agentList.classList.toggle("hidden"); // Show/Hide the list
        });
    });
</script>



</body>
</html>

<div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleSidebar = document.getElementById("toggleSidebar");
            const sidebar = document.getElementById("sidebar");
    
            toggleSidebar.addEventListener("click", function() {
                sidebar.classList.toggle("active");
            });
        });
    </script>
</div>
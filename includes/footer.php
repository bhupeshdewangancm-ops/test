</div>

<footer class="footer">
    <div class="d-flex justify-content-between align-items-center">
        <span>
            © <?= date('Y') ?> Gym Management System
        </span>

        <span>
            Admin Panel
        </span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const currentUrl = window.location.pathname;

        document.querySelectorAll('.sidebar-menu a').forEach(function (link) {

            const href = link.getAttribute('href');

            if (!href || href === '#') {
                return;
            }

            if (currentUrl.includes(href)) {
                link.classList.add('active');
            }
        });

    });
</script>

</body>
</html>
    </main>
</div>

<nav class="mobile-bottom-nav">

    <a href="<?= $baseUrl ?>/dashboard/index.php">
        <i class="fa-solid fa-house"></i>
        <span>Home</span>
    </a>

    <a href="<?= $baseUrl ?>/attendance/today.php">
        <i class="fa-solid fa-calendar-check"></i>
        <span>Attendance</span>
    </a>

    <a href="<?= $baseUrl ?>/workouts/current.php" class="main-nav">
        <i class="fa-solid fa-dumbbell"></i>
        <span>Workout</span>
    </a>

    <a href="<?= $baseUrl ?>/subscriptions/current.php">
        <i class="fa-solid fa-crown"></i>
        <span>Plan</span>
    </a>

    <a href="<?= $baseUrl ?>/profile/index.php">
        <i class="fa-solid fa-user"></i>
        <span>Profile</span>
    </a>

</nav>

<style>
.mobile-bottom-nav{display:none}
@media(max-width:767px){
    .mobile-bottom-nav{position:fixed;display:flex;align-items:center;justify-content:space-around;bottom:0;left:0;right:0;height:62px;background:#fff;border-top:1px solid #e5e7eb;z-index:2000}
    .mobile-bottom-nav a{width:20%;height:55px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:3px;text-decoration:none;color:#9ca3af;font-size:7px}
    .mobile-bottom-nav a i{font-size:14px}
    .mobile-bottom-nav a.main-nav{color:#2563eb}
    .mobile-bottom-nav a.main-nav i{background:#2563eb;color:#fff;width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-top:-18px;border:4px solid #f5f7fb}
}
</style>

</body>
</html>
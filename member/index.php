<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gym Member App</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body{background:#020617}
.no-scrollbar::-webkit-scrollbar{display:none}
.no-scrollbar{-ms-overflow-style:none;scrollbar-width:none}
.safe-bottom{padding-bottom:90px}
</style>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen">

<div class="max-w-md mx-auto min-h-screen bg-slate-900 safe-bottom">

<!-- HEADER -->
<header class="sticky top-0 z-40 bg-slate-950 border-b border-slate-800 px-4 py-3">

<div class="flex items-center justify-between">

<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-green-500/10 border border-green-500/30 flex items-center justify-center text-green-400">
<i class="fa-solid fa-dumbbell"></i>
</div>

<div>
<div class="text-sm font-bold text-white">SEBA24 GYM</div>
<div class="text-[11px] text-slate-400">Member App</div>
</div>
</div>

<div class="flex items-center gap-2">

<button onclick="openPage('notifications')" class="relative w-10 h-10 rounded-full bg-slate-900 border border-slate-800">
<i class="fa-regular fa-bell text-slate-300"></i>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
</button>

<button onclick="openPage('more')" class="w-10 h-10 rounded-full bg-green-500/10 border border-green-500/30 text-green-400 font-bold text-xs">
RS
</button>

</div>
</div>

</header>

<main class="p-4">

<!-- ================================================= -->
<!-- HOME -->
<!-- ================================================= -->

<section id="page-home" class="page space-y-4">

<div>
<p class="text-xs text-slate-400">Good Morning,</p>
<h1 class="text-xl font-bold">Rahul Sharma 👋</h1>
</div>

<!-- MEMBERSHIP -->
<div class="bg-gradient-to-br from-slate-950 to-green-950 border border-green-500/20 rounded-2xl p-5">

<div class="flex justify-between">

<div>
<span class="text-[10px] uppercase px-2 py-1 rounded bg-green-500/10 text-green-400">
Active Membership
</span>

<h2 class="font-bold mt-3">Monthly VIP Plan</h2>
<p class="text-xs text-slate-400 mt-1">MEM-0001 • Raipur Main Branch</p>
</div>

<div class="text-right">
<div class="text-2xl font-bold text-green-400">12</div>
<div class="text-[10px] text-slate-400">Days Left</div>
</div>

</div>

<div class="mt-4 pt-4 border-t border-slate-800 flex justify-between text-xs">
<div>
<span class="text-slate-500 block">START DATE</span>
<span>01 Aug 2026</span>
</div>

<div class="text-right">
<span class="text-slate-500 block">EXPIRY DATE</span>
<span class="text-yellow-400">30 Aug 2026</span>
</div>
</div>

</div>

<!-- ATTENDANCE SCANNER -->
<div class="bg-slate-950 border border-slate-800 rounded-2xl p-5">

<div class="flex justify-between items-center mb-4">
<div>
<p class="text-xs text-slate-400">Today's Attendance</p>
<h3 class="font-bold mt-1">Not Checked In</h3>
</div>

<div class="w-10 h-10 rounded-full bg-yellow-500/10 text-yellow-400 flex items-center justify-center">
<i class="fa-solid fa-clock"></i>
</div>
</div>

<button onclick="openPage('scanner')" class="w-full bg-green-500 hover:bg-green-600 text-slate-950 font-bold py-3.5 rounded-xl">
<i class="fa-solid fa-qrcode mr-2"></i>
Scan Gym QR
</button>

<p class="text-[10px] text-slate-500 text-center mt-3">
You must be inside the gym location to mark attendance.
</p>

</div>

<!-- QUICK STATS -->
<div class="grid grid-cols-2 gap-3">

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<i class="fa-solid fa-calendar-check text-green-400"></i>
<p class="text-xs text-slate-400 mt-3">This Month</p>
<div class="text-xl font-bold">18 Visits</div>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<i class="fa-solid fa-weight-scale text-blue-400"></i>
<p class="text-xs text-slate-400 mt-3">Latest Weight</p>
<div class="text-xl font-bold">74.2 kg</div>
<span class="text-[10px] text-green-400">↓ 1.8 kg</span>
</div>

</div>

<!-- TODAY WORKOUT -->
<div class="bg-slate-950 border border-slate-800 rounded-2xl p-5">

<div class="flex justify-between items-center">

<div>
<p class="text-xs text-purple-400 font-semibold">TODAY'S WORKOUT</p>
<h3 class="font-bold mt-1">Chest & Triceps</h3>
<p class="text-xs text-slate-400 mt-1">6 Exercises • Approx 60 min</p>
</div>

<button onclick="openPage('workout')" class="bg-purple-500/10 border border-purple-500/20 text-purple-400 px-3 py-2 rounded-xl text-xs">
View
</button>

</div>

</div>

<!-- PAYMENT DUE -->
<div class="bg-slate-950 border border-red-500/20 rounded-2xl p-5">

<div class="flex justify-between">

<div>
<p class="text-xs text-slate-400">Payment Due</p>
<div class="text-2xl font-bold mt-1">₹2,500</div>
<p class="text-xs text-red-400 mt-1">Due on 20 Aug 2026</p>
</div>

<div class="w-11 h-11 bg-red-500/10 text-red-400 rounded-xl flex items-center justify-center">
<i class="fa-solid fa-wallet"></i>
</div>

</div>

<button onclick="openPage('membership')" class="w-full mt-4 border border-slate-700 py-2.5 rounded-xl text-sm">
View Payment
</button>

</div>

<!-- ANNOUNCEMENT -->
<div class="bg-blue-500/10 border border-blue-500/20 rounded-2xl p-4 flex gap-3">

<i class="fa-solid fa-bullhorn text-blue-400 mt-1"></i>

<div>
<p class="text-xs font-semibold text-blue-400">Gym Announcement</p>
<p class="text-xs text-slate-300 mt-1">
Gym will open at 8:00 AM tomorrow due to maintenance.
</p>
</div>

</div>

</section>

<!-- ================================================= -->
<!-- QR SCANNER -->
<!-- ================================================= -->

<section id="page-scanner" class="page hidden space-y-5">

<div class="flex items-center gap-3">
<button onclick="openPage('home')" class="w-9 h-9 bg-slate-950 rounded-lg">
<i class="fa-solid fa-arrow-left"></i>
</button>

<div>
<h2 class="font-bold">Scan Gym QR</h2>
<p class="text-xs text-slate-400">Scan branch QR to mark attendance</p>
</div>
</div>

<div class="bg-black rounded-3xl h-96 flex items-center justify-center relative overflow-hidden border border-slate-800">

<div class="absolute inset-8 border-2 border-green-400 rounded-3xl"></div>

<div class="text-center">
<i class="fa-solid fa-camera text-4xl text-slate-500"></i>
<p class="text-xs text-slate-500 mt-3">Camera Preview</p>
</div>

<div class="absolute bottom-6 left-0 right-0 text-center">
<span class="text-xs bg-black/60 px-3 py-2 rounded-lg">
Place QR inside the frame
</span>
</div>

</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex items-center gap-3">
<i class="fa-solid fa-location-dot text-green-400"></i>

<div>
<p class="text-sm font-medium">Location Verification</p>
<p class="text-xs text-slate-400">
GPS and geofence verification required
</p>
</div>
</div>

</div>

</section>

<!-- ================================================= -->
<!-- WORKOUT -->
<!-- ================================================= -->

<section id="page-workout" class="page hidden space-y-5">

<div>
<h2 class="text-xl font-bold">My Workout</h2>
<p class="text-sm text-slate-400">Your assigned workout routine</p>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-5">

<div class="flex justify-between">
<div>
<p class="text-xs text-purple-400">CURRENT PLAN</p>
<h3 class="font-bold mt-1">Muscle Gain</h3>
</div>

<span class="text-xs text-green-400">Active</span>
</div>

<div class="mt-4 pt-4 border-t border-slate-800 text-xs">
Trainer: <span class="text-white font-medium">Rahul Sharma</span>
</div>

</div>

<div class="flex gap-2 overflow-x-auto no-scrollbar">

<button class="bg-green-500 text-slate-950 px-4 py-2 rounded-full text-xs font-bold">Mon</button>
<button class="bg-slate-950 px-4 py-2 rounded-full text-xs">Tue</button>
<button class="bg-slate-950 px-4 py-2 rounded-full text-xs">Wed</button>
<button class="bg-slate-950 px-4 py-2 rounded-full text-xs">Thu</button>
<button class="bg-slate-950 px-4 py-2 rounded-full text-xs">Fri</button>
<button class="bg-slate-950 px-4 py-2 rounded-full text-xs">Sat</button>

</div>

<div class="space-y-3">

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">

<div>
<span class="text-[10px] text-blue-400">CHEST</span>
<h3 class="font-semibold mt-1">Flat Bench Press</h3>
<p class="text-xs text-slate-400 mt-1">3 Sets × 12, 10, 8 Reps</p>
<p class="text-xs text-slate-500 mt-1">Rest: 60 sec</p>
</div>

<button class="text-red-400">
<i class="fa-brands fa-youtube text-xl"></i>
</button>

</div>

</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">

<div>
<span class="text-[10px] text-blue-400">UPPER CHEST</span>
<h3 class="font-semibold mt-1">Incline Dumbbell Press</h3>
<p class="text-xs text-slate-400 mt-1">3 Sets × 12 Reps</p>
<p class="text-xs text-slate-500 mt-1">Rest: 60 sec</p>
</div>

<button class="text-red-400">
<i class="fa-brands fa-youtube text-xl"></i>
</button>

</div>

</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">

<div>
<span class="text-[10px] text-purple-400">TRICEPS</span>
<h3 class="font-semibold mt-1">Cable Tricep Pushdown</h3>
<p class="text-xs text-slate-400 mt-1">4 Sets × 15 Reps</p>
<p class="text-xs text-slate-500 mt-1">Rest: 45 sec</p>
</div>

<button class="text-red-400">
<i class="fa-brands fa-youtube text-xl"></i>
</button>

</div>

</div>

</div>

</section>

<!-- ================================================= -->
<!-- PROGRESS -->
<!-- ================================================= -->

<section id="page-progress" class="page hidden space-y-5">

<div>
<h2 class="text-xl font-bold">My Progress</h2>
<p class="text-sm text-slate-400">Track your body measurements</p>
</div>

<div class="grid grid-cols-2 gap-3">

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<p class="text-xs text-slate-400">Weight</p>
<div class="text-xl font-bold mt-1">74.2 kg</div>
<span class="text-xs text-green-400">-1.8 kg</span>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<p class="text-xs text-slate-400">BMI</p>
<div class="text-xl font-bold mt-1">24.2</div>
<span class="text-xs text-green-400">Normal</span>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<p class="text-xs text-slate-400">Chest</p>
<div class="text-xl font-bold mt-1">40.5 in</div>
<span class="text-xs text-green-400">+0.5 in</span>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<p class="text-xs text-slate-400">Waist</p>
<div class="text-xl font-bold mt-1">32 in</div>
<span class="text-xs text-green-400">-1.0 in</span>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<p class="text-xs text-slate-400">Biceps</p>
<div class="text-xl font-bold mt-1">14.8 in</div>
<span class="text-xs text-green-400">+0.8 in</span>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">
<p class="text-xs text-slate-400">Height</p>
<div class="text-xl font-bold mt-1">175 cm</div>
</div>

</div>

<h3 class="font-semibold">Measurement History</h3>

<div class="bg-slate-950 border border-slate-800 rounded-2xl divide-y divide-slate-800">

<div class="p-4 flex justify-between">
<div>
<p class="text-sm">01 Aug 2026</p>
<p class="text-xs text-slate-400">Waist 32 • Biceps 14.8</p>
</div>
<span class="font-bold text-green-400">74.2 kg</span>
</div>

<div class="p-4 flex justify-between">
<div>
<p class="text-sm">01 Jul 2026</p>
<p class="text-xs text-slate-400">Waist 32.5 • Biceps 14.6</p>
</div>
<span class="font-bold">75 kg</span>
</div>

<div class="p-4 flex justify-between">
<div>
<p class="text-sm">01 Jun 2026</p>
<p class="text-xs text-slate-400">Joining Measurement</p>
</div>
<span class="font-bold">76 kg</span>
</div>

</div>

</section>

<!-- ================================================= -->
<!-- ATTENDANCE -->
<!-- ================================================= -->

<section id="page-attendance" class="page hidden space-y-5">

<div>
<h2 class="text-xl font-bold">Attendance</h2>
<p class="text-sm text-slate-400">Your gym attendance history</p>
</div>

<div class="grid grid-cols-3 gap-2">

<div class="bg-slate-950 rounded-xl p-3 text-center border border-slate-800">
<div class="font-bold text-green-400">18</div>
<div class="text-[10px] text-slate-400">Visits</div>
</div>

<div class="bg-slate-950 rounded-xl p-3 text-center border border-slate-800">
<div class="font-bold">24h</div>
<div class="text-[10px] text-slate-400">Gym Time</div>
</div>

<div class="bg-slate-950 rounded-xl p-3 text-center border border-slate-800">
<div class="font-bold">1h 20m</div>
<div class="text-[10px] text-slate-400">Avg Visit</div>
</div>

</div>

<!-- CALENDAR -->
<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between mb-4">
<button><i class="fa-solid fa-chevron-left"></i></button>
<h3 class="font-semibold">August 2026</h3>
<button><i class="fa-solid fa-chevron-right"></i></button>
</div>

<div class="grid grid-cols-7 gap-2 text-center text-xs">

<div class="text-slate-500">M</div>
<div class="text-slate-500">T</div>
<div class="text-slate-500">W</div>
<div class="text-slate-500">T</div>
<div class="text-slate-500">F</div>
<div class="text-slate-500">S</div>
<div class="text-slate-500">S</div>

<div></div>
<div></div>
<div></div>
<div></div>

<div class="py-2 rounded bg-green-500 text-slate-950">1</div>
<div class="py-2">2</div>
<div class="py-2">3</div>

<div class="py-2 rounded bg-green-500 text-slate-950">4</div>
<div class="py-2 rounded bg-green-500 text-slate-950">5</div>
<div class="py-2 rounded bg-green-500 text-slate-950">6</div>
<div class="py-2 rounded bg-green-500 text-slate-950">7</div>
<div class="py-2 rounded bg-green-500 text-slate-950">8</div>
<div class="py-2">9</div>
<div class="py-2">10</div>

<div class="py-2 rounded bg-green-500 text-slate-950">11</div>
<div class="py-2 rounded bg-green-500 text-slate-950">12</div>
<div class="py-2 rounded bg-green-500 text-slate-950">13</div>
<div class="py-2 rounded bg-green-500 text-slate-950">14</div>
<div class="py-2 rounded bg-green-500 text-slate-950">15</div>
<div class="py-2">16</div>
<div class="py-2">17</div>

</div>

<div class="flex gap-4 mt-4 text-[10px]">
<span><span class="inline-block w-2 h-2 bg-green-500 rounded mr-1"></span>Present</span>
<span class="text-slate-400">No Visit</span>
</div>

</div>

<h3 class="font-semibold">Recent Attendance</h3>

<div class="space-y-3">

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">
<div>
<p class="font-semibold text-sm">07 Aug 2026</p>
<p class="text-xs text-slate-400 mt-1">Raipur Main Branch</p>
</div>

<span class="text-xs text-green-400">Completed</span>
</div>

<div class="grid grid-cols-3 mt-4 text-xs">
<div>
<span class="text-slate-500 block">CHECK IN</span>
07:15 AM
</div>

<div>
<span class="text-slate-500 block">CHECK OUT</span>
08:30 AM
</div>

<div>
<span class="text-slate-500 block">DURATION</span>
1h 15m
</div>
</div>

</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">
<div>
<p class="font-semibold text-sm">06 Aug 2026</p>
<p class="text-xs text-slate-400 mt-1">Raipur Main Branch</p>
</div>

<span class="text-xs text-green-400">Completed</span>
</div>

<div class="grid grid-cols-3 mt-4 text-xs">
<div>
<span class="text-slate-500 block">CHECK IN</span>
07:10 AM
</div>

<div>
<span class="text-slate-500 block">CHECK OUT</span>
08:20 AM
</div>

<div>
<span class="text-slate-500 block">DURATION</span>
1h 10m
</div>
</div>

</div>

</div>

</section>

<!-- ================================================= -->
<!-- MEMBERSHIP -->
<!-- ================================================= -->

<section id="page-membership" class="page hidden space-y-5">

<div>
<h2 class="text-xl font-bold">Membership</h2>
<p class="text-sm text-slate-400">Subscription & payment details</p>
</div>

<div class="bg-slate-950 border border-green-500/20 rounded-2xl p-5">

<span class="text-xs text-green-400">ACTIVE PLAN</span>
<h3 class="text-lg font-bold mt-2">Monthly VIP Plan</h3>

<div class="grid grid-cols-2 gap-4 mt-5 text-sm">

<div>
<span class="text-xs text-slate-500">START DATE</span>
<p>01 Aug 2026</p>
</div>

<div>
<span class="text-xs text-slate-500">EXPIRY DATE</span>
<p>30 Aug 2026</p>
</div>

<div>
<span class="text-xs text-slate-500">PLAN AMOUNT</span>
<p>₹5,000</p>
</div>

<div>
<span class="text-xs text-slate-500">DISCOUNT</span>
<p>₹500</p>
</div>

<div>
<span class="text-xs text-slate-500">NET AMOUNT</span>
<p>₹4,500</p>
</div>

<div>
<span class="text-xs text-slate-500">PAID</span>
<p class="text-green-400">₹2,000</p>
</div>

</div>

<div class="mt-5 bg-red-500/10 border border-red-500/20 p-4 rounded-xl flex justify-between">
<div>
<p class="text-xs text-slate-400">Amount Due</p>
<p class="text-xl font-bold">₹2,500</p>
</div>

<div class="text-right">
<p class="text-xs text-slate-400">Due Date</p>
<p class="text-sm text-red-400">20 Aug 2026</p>
</div>
</div>

<button class="w-full mt-4 bg-green-500 text-slate-950 py-3 rounded-xl font-bold">
Pay ₹2,500
</button>

</div>

<h3 class="font-semibold">Payment History</h3>

<div class="space-y-3">

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">
<div>
<p class="font-medium">REC-00001</p>
<p class="text-xs text-slate-400">01 Aug 2026 • UPI</p>
</div>

<span class="text-green-400 font-bold">₹2,000</span>
</div>

<div class="flex justify-between mt-3">
<span class="text-xs text-green-400">Success</span>
<button class="text-xs text-blue-400">View Receipt</button>
</div>

</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">
<div>
<p class="font-medium">REC-00002</p>
<p class="text-xs text-slate-400">15 Jul 2026 • Cash</p>
</div>

<span class="text-green-400 font-bold">₹1,500</span>
</div>

<div class="flex justify-between mt-3">
<span class="text-xs text-green-400">Success</span>
<button class="text-xs text-blue-400">View Receipt</button>
</div>

</div>

</div>

<h3 class="font-semibold">Subscription History</h3>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-4">

<div class="flex justify-between">
<div>
<p class="font-medium">Quarterly Plan</p>
<p class="text-xs text-slate-400">01 May 2026 - 31 Jul 2026</p>
</div>

<span class="text-xs text-slate-400">Expired</span>
</div>

</div>

</section>

<!-- ================================================= -->
<!-- NOTIFICATIONS -->
<!-- ================================================= -->

<section id="page-notifications" class="page hidden space-y-5">

<div>
<h2 class="text-xl font-bold">Notifications</h2>
<p class="text-sm text-slate-400">Latest updates from your gym</p>
</div>

<div class="space-y-3">

<div class="bg-slate-950 border border-yellow-500/20 rounded-2xl p-4 flex gap-3">
<i class="fa-solid fa-ticket text-yellow-400 mt-1"></i>
<div>
<p class="text-sm font-medium">Membership Expiring Soon</p>
<p class="text-xs text-slate-400 mt-1">Your membership will expire in 12 days.</p>
<p class="text-[10px] text-slate-500 mt-2">Today, 09:30 AM</p>
</div>
</div>

<div class="bg-slate-950 border border-red-500/20 rounded-2xl p-4 flex gap-3">
<i class="fa-solid fa-wallet text-red-400 mt-1"></i>
<div>
<p class="text-sm font-medium">Payment Due</p>
<p class="text-xs text-slate-400 mt-1">₹2,500 payment is pending.</p>
<p class="text-[10px] text-slate-500 mt-2">Yesterday</p>
</div>
</div>

<div class="bg-slate-950 border border-purple-500/20 rounded-2xl p-4 flex gap-3">
<i class="fa-solid fa-dumbbell text-purple-400 mt-1"></i>
<div>
<p class="text-sm font-medium">Workout Updated</p>
<p class="text-xs text-slate-400 mt-1">Your trainer updated your workout plan.</p>
<p class="text-[10px] text-slate-500 mt-2">05 Aug 2026</p>
</div>
</div>

</div>

</section>

<!-- ================================================= -->
<!-- MORE -->
<!-- ================================================= -->

<section id="page-more" class="page hidden space-y-5">

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-5 flex items-center gap-4">

<div class="w-14 h-14 bg-green-500/10 border border-green-500/30 rounded-full flex items-center justify-center text-green-400 font-bold">
RS
</div>

<div>
<h3 class="font-bold">Rahul Sharma</h3>
<p class="text-xs text-slate-400">MEM-0001</p>
<span class="text-[10px] text-green-400">Active Member</span>
</div>

</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">

<button onclick="openPage('attendance')" class="w-full p-4 border-b border-slate-800 flex justify-between">
<span><i class="fa-solid fa-calendar-check w-6 text-green-400"></i> Attendance</span>
<i class="fa-solid fa-chevron-right text-slate-500"></i>
</button>

<button onclick="openPage('membership')" class="w-full p-4 border-b border-slate-800 flex justify-between">
<span><i class="fa-solid fa-ticket w-6 text-purple-400"></i> Membership</span>
<i class="fa-solid fa-chevron-right text-slate-500"></i>
</button>

<button onclick="openPage('trainer')" class="w-full p-4 border-b border-slate-800 flex justify-between">
<span><i class="fa-solid fa-user-tie w-6 text-blue-400"></i> My Trainer</span>
<i class="fa-solid fa-chevron-right text-slate-500"></i>
</button>

<button onclick="openPage('profile')" class="w-full p-4 border-b border-slate-800 flex justify-between">
<span><i class="fa-solid fa-user w-6 text-yellow-400"></i> My Profile</span>
<i class="fa-solid fa-chevron-right text-slate-500"></i>
</button>

<button onclick="openPage('notifications')" class="w-full p-4 border-b border-slate-800 flex justify-between">
<span><i class="fa-solid fa-bell w-6 text-red-400"></i> Notifications</span>
<i class="fa-solid fa-chevron-right text-slate-500"></i>
</button>

<button class="w-full p-4 flex justify-between">
<span><i class="fa-solid fa-headset w-6 text-cyan-400"></i> Help & Support</span>
<i class="fa-solid fa-chevron-right text-slate-500"></i>
</button>

</div>

<button class="w-full bg-red-500/10 border border-red-500/20 text-red-400 py-3 rounded-xl">
<i class="fa-solid fa-right-from-bracket mr-2"></i>
Logout
</button>

</section>

<!-- ================================================= -->
<!-- TRAINER -->
<!-- ================================================= -->

<section id="page-trainer" class="page hidden space-y-5">

<div>
<h2 class="text-xl font-bold">My Trainer</h2>
<p class="text-sm text-slate-400">Your assigned fitness trainer</p>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl p-6 text-center">

<div class="w-20 h-20 mx-auto rounded-full bg-blue-500/10 border border-blue-500/30 flex items-center justify-center">
<i class="fa-solid fa-user-tie text-3xl text-blue-400"></i>
</div>

<h3 class="font-bold text-lg mt-4">Amit Verma</h3>
<p class="text-sm text-slate-400">Strength & Conditioning Trainer</p>

<div class="grid grid-cols-2 gap-3 mt-5">

<div class="bg-slate-900 p-3 rounded-xl">
<p class="text-[10px] text-slate-500">EXPERIENCE</p>
<p class="font-medium text-sm">7 Years</p>
</div>

<div class="bg-slate-900 p-3 rounded-xl">
<p class="text-[10px] text-slate-500">ASSIGNED SINCE</p>
<p class="font-medium text-sm">01 Aug 2026</p>
</div>

</div>

<button class="w-full mt-5 bg-green-500 text-slate-950 py-3 rounded-xl font-bold">
<i class="fa-solid fa-phone mr-2"></i>
Contact Trainer
</button>

</div>

</section>

<!-- ================================================= -->
<!-- PROFILE -->
<!-- ================================================= -->

<section id="page-profile" class="page hidden space-y-5">

<div>
<h2 class="text-xl font-bold">My Profile</h2>
<p class="text-sm text-slate-400">Personal information</p>
</div>

<div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden text-sm">

<div class="p-4 border-b border-slate-800">
<span class="text-xs text-slate-500">FULL NAME</span>
<p class="mt-1">Rahul Sharma</p>
</div>

<div class="p-4 border-b border-slate-800">
<span class="text-xs text-slate-500">PHONE</span>
<p class="mt-1">+91 9876543210</p>
</div>

<div class="p-4 border-b border-slate-800">
<span class="text-xs text-slate-500">EMAIL</span>
<p class="mt-1">rahul@gmail.com</p>
</div>

<div class="p-4 border-b border-slate-800">
<span class="text-xs text-slate-500">BLOOD GROUP</span>
<p class="mt-1">O+</p>
</div>

<div class="p-4 border-b border-slate-800">
<span class="text-xs text-slate-500">BRANCH</span>
<p class="mt-1">Raipur Main Branch</p>
</div>

<div class="p-4 border-b border-slate-800">
<span class="text-xs text-slate-500">EMERGENCY CONTACT</span>
<p class="mt-1">+91 9876500000</p>
</div>

<div class="p-4">
<span class="text-xs text-slate-500">MEDICAL INFORMATION</span>
<p class="mt-1 text-slate-300">
Mild lower back pain. Avoid heavy deadlifts without trainer supervision.
</p>
</div>

</div>

<button class="w-full border border-slate-700 py-3 rounded-xl">
Change Password
</button>

</section>

</main>

<!-- ================================================= -->
<!-- MOBILE BOTTOM NAV -->
<!-- ================================================= -->

<nav class="fixed bottom-0 left-1/2 -translate-x-1/2 max-w-md w-full h-16 bg-slate-950 border-t border-slate-800 z-50">

<div class="grid grid-cols-5 h-full">

<button onclick="openPage('home')" id="nav-home" class="nav-btn text-green-400 flex flex-col items-center justify-center">
<i class="fa-solid fa-house"></i>
<span class="text-[9px] mt-1">Home</span>
</button>

<button onclick="openPage('workout')" id="nav-workout" class="nav-btn text-slate-500 flex flex-col items-center justify-center">
<i class="fa-solid fa-dumbbell"></i>
<span class="text-[9px] mt-1">Workout</span>
</button>

<button onclick="openPage('scanner')" class="flex items-center justify-center">

<div class="w-14 h-14 -mt-7 rounded-full bg-green-500 text-slate-950 border-4 border-slate-900 flex flex-col items-center justify-center shadow-lg">
<i class="fa-solid fa-qrcode text-lg"></i>
<span class="text-[8px] font-bold">SCAN</span>
</div>

</button>

<button onclick="openPage('progress')" id="nav-progress" class="nav-btn text-slate-500 flex flex-col items-center justify-center">
<i class="fa-solid fa-chart-line"></i>
<span class="text-[9px] mt-1">Progress</span>
</button>

<button onclick="openPage('more')" id="nav-more" class="nav-btn text-slate-500 flex flex-col items-center justify-center">
<i class="fa-solid fa-bars"></i>
<span class="text-[9px] mt-1">More</span>
</button>

</div>

</nav>

<script>
function openPage(page) {
    document.querySelectorAll('.page').forEach(function(section) {
        section.classList.add('hidden');
    });

    const selectedPage = document.getElementById('page-' + page);

    if (selectedPage) {
        selectedPage.classList.remove('hidden');
    }

    document.querySelectorAll('.nav-btn').forEach(function(button) {
        button.classList.remove('text-green-400');
        button.classList.add('text-slate-500');
    });

    let navPage = page;

    if (
        page === 'attendance' ||
        page === 'membership' ||
        page === 'trainer' ||
        page === 'profile' ||
        page === 'notifications'
    ) {
        navPage = 'more';
    }

    const activeNav = document.getElementById('nav-' + navPage);

    if (activeNav) {
        activeNav.classList.remove('text-slate-500');
        activeNav.classList.add('text-green-400');
    }

    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>

</body>
</html>
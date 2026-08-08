<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym SaaS Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="hidden md:flex flex-col w-64 bg-slate-950 border-r border-slate-800">
            <div class="flex items-center justify-center h-16 border-b border-slate-800">
                <span class="text-xl font-bold tracking-wider text-green-400"><i class="fa-solid fa-dumbbell mr-2"></i> GYM MASTER</span>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg bg-green-500/10 text-green-400 border border-green-500/20">
                    <i class="fa-solid fa-chart-pie w-5 mr-3"></i> Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-200 transition">
                    <i class="fa-solid fa-users w-5 mr-3"></i> Members
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-200 transition">
                    <i class="fa-solid fa-tags w-5 mr-3"></i> Gym Plans
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-200 transition">
                    <i class="fa-solid fa-code-branch w-5 mr-3"></i> Branches
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-200 transition">
                    <i class="fa-solid fa-dumbbell w-5 mr-3"></i> Exercises
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-200 transition">
                    <i class="fa-solid fa-credit-card w-5 mr-3"></i> Payments
                </a>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex flex-col flex-1 h-full overflow-hidden">
            
            <!-- Top Navbar -->
            <header class="flex items-center justify-between h-16 px-6 bg-slate-950 border-b border-slate-800">
                <div class="flex items-center">
                    <button class="md:hidden text-slate-400 hover:text-slate-200 focus:outline-none">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                    <span class="ml-4 md:ml-0 text-lg font-semibold text-slate-200">Dashboard Overview</span>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-slate-400 hover:text-slate-200"><i class="fa-regular fa-bell text-xl"></i></button>
                    <div class="flex items-center space-x-3">
                        <div class="w-9 h-9 rounded-full bg-green-500/20 border border-green-500 flex items-center justify-center text-green-400 font-bold">
                            BO
                        </div>
                        <span class="text-sm font-medium text-slate-200 hidden sm:inline">Gym Owner</span>
                    </div>
                </div>
            </header>

            <!-- Scrollable Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-slate-900">
                
                <!-- Welcome Section -->
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-white">Welcome Back, Gym Owner! 👋</h1>
                    <p class="text-sm text-slate-400 mt-1">Here is what's happening in your gym today.</p>
                </div>

                <!-- KPI Summary Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Card 1 -->
                    <div class="bg-slate-950 border border-slate-800 rounded-xl p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-slate-400">Total Members</span>
                            <div class="w-10 h-10 rounded-lg bg-blue-500/10 text-blue-400 flex items-center justify-center">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-2xl font-bold text-white">1,248</span>
                            <span class="ml-2 text-xs font-semibold text-green-400">+12% this month</span>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-slate-950 border border-slate-800 rounded-xl p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-slate-400">Today's Check-ins</span>
                            <div class="w-10 h-10 rounded-lg bg-green-500/10 text-green-400 flex items-center justify-center">
                                <i class="fa-solid fa-check-to-slot"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-2xl font-bold text-white">145</span>
                            <span class="ml-2 text-xs font-semibold text-slate-400">Active today</span>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-slate-950 border border-slate-800 rounded-xl p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-slate-400">Expiring Soon</span>
                            <div class="w-10 h-10 rounded-lg bg-yellow-500/10 text-yellow-400 flex items-center justify-center">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-2xl font-bold text-white">8</span>
                            <span class="ml-2 text-xs font-semibold text-yellow-400">Next 3 days</span>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-slate-950 border border-slate-800 rounded-xl p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-slate-400">Monthly Revenue</span>
                            <div class="w-10 h-10 rounded-lg bg-purple-500/10 text-purple-400 flex items-center justify-center">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-2xl font-bold text-white">₹84,500</span>
                            <span class="ml-2 text-xs font-semibold text-green-400">+8% vs last mo</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Action Toolbar -->
                <div class="mb-8">
                    <h2 class="text-lg font-semibold text-white mb-4">Quick Actions</h2>
                    <div class="flex flex-wrap gap-4">
                        <button class="flex items-center px-4 py-2.5 bg-green-500 hover:bg-green-600 text-slate-950 font-semibold rounded-lg text-sm transition">
                            <i class="fa-solid fa-user-plus mr-2"></i> Add New Member
                        </button>
                        <button class="flex items-center px-4 py-2.5 bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold rounded-lg text-sm transition border border-slate-700">
                            <i class="fa-solid fa-tags mr-2"></i> Create Plan
                        </button>
                        <button class="flex items-center px-4 py-2.5 bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold rounded-lg text-sm transition border border-slate-700">
                            <i class="fa-solid fa-code-branch mr-2"></i> Add Branch
                        </button>
                        <button class="flex items-center px-4 py-2.5 bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold rounded-lg text-sm transition border border-slate-700">
                            <i class="fa-solid fa-receipt mr-2"></i> Collect Payment
                        </button>
                    </div>
                </div>

                <!-- Subscriptions Expiring Table -->
                <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-sm">
                    <div class="p-5 border-b border-slate-800 flex items-center justify-between">
                        <h3 class="font-semibold text-white"><i class="fa-solid fa-clock-rotate-left mr-2 text-yellow-400"></i> Subscriptions Expiring Soon</h3>
                        <span class="text-xs bg-yellow-500/10 text-yellow-400 border border-yellow-500/20 px-2.5 py-1 rounded-full font-medium">Action Required</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-900/50 text-slate-400 text-xs uppercase tracking-wider border-b border-slate-800">
                                    <th class="py-3 px-5">Member Name</th>
                                    <th class="py-3 px-5">Plan</th>
                                    <th class="py-3 px-5">Expiry Date</th>
                                    <th class="py-3 px-5 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800 text-sm">
                                <tr class="hover:bg-slate-900/40 transition">
                                    <td class="py-4 px-5 font-medium text-white">Rahul Sharma</td>
                                    <td class="py-4 px-5 text-slate-300">Monthly Cardio + Weights</td>
                                    <td class="py-4 px-5 text-yellow-400 font-medium">05 Aug 2026</td>
                                    <td class="py-4 px-5 text-right">
                                        <button class="px-3 py-1 bg-green-500/10 hover:bg-green-500/20 text-green-400 border border-green-500/20 rounded-lg text-xs font-semibold transition">Renew</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-900/40 transition">
                                    <td class="py-4 px-5 font-medium text-white">Priya Verma</td>
                                    <td class="py-4 px-5 text-slate-300">Annual VIP Membership</td>
                                    <td class="py-4 px-5 text-yellow-400 font-medium">07 Aug 2026</td>
                                    <td class="py-4 px-5 text-right">
                                        <button class="px-3 py-1 bg-green-500/10 hover:bg-green-500/20 text-green-400 border border-green-500/20 rounded-lg text-xs font-semibold transition">Renew</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>
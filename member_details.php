<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Details & Progress - Gym Panel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex flex-col">

    <!-- Top Navigation / Header -->
    <header class="flex items-center justify-between h-16 px-6 bg-slate-950 border-b border-slate-800 sticky top-0 z-10">
        <div class="flex items-center space-x-3">
            <a href="/members" class="text-slate-400 hover:text-white transition">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <span class="text-lg font-bold text-white flex items-center">
                Member 360° Profile
            </span>
            <span class="text-xs font-mono bg-slate-800 text-slate-300 px-2.5 py-1 rounded border border-slate-700">
                MEM-0001
            </span>
        </div>

        <!-- Quick Actions for Staff -->
        <div class="flex items-center space-x-3">
            <button class="px-3.5 py-1.5 bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 rounded-lg text-xs font-semibold transition flex items-center">
                <i class="fa-solid fa-plus mr-1.5 text-purple-400"></i> Add Body Metric
            </button>
            <button class="px-3.5 py-1.5 bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 rounded-lg text-xs font-semibold transition flex items-center">
                <i class="fa-solid fa-pen-to-square mr-1.5 text-blue-400"></i> Edit Profile
            </button>
            <button class="px-4 py-1.5 bg-green-500 hover:bg-green-600 text-slate-950 font-bold rounded-lg text-xs transition shadow-lg shadow-green-500/10 flex items-center">
                <i class="fa-solid fa-rotate mr-1.5"></i> Renew Plan
            </button>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 max-w-7xl w-full mx-auto space-y-6">

        <!-- SECTION 1: Top Profile Overview Card -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl p-6 shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <!-- Avatar & Identity -->
                <div class="flex items-center space-x-5">
                    <div class="w-20 h-20 rounded-full bg-green-500/10 border-2 border-green-500/30 flex items-center justify-center font-bold text-green-400 text-2xl shrink-0">
                        RS
                    </div>
                    <div>
                        <div class="flex items-center space-x-3">
                            <h1 class="text-2xl font-bold text-white">Rahul Sharma</h1>
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-500/10 text-green-400 border border-green-500/20">
                                <i class="fa-solid fa-circle text-[6px] mr-1.5"></i> Active
                            </span>
                        </div>
                        <div class="text-sm text-slate-400 mt-1 flex flex-wrap items-center gap-x-4 gap-y-1">
                            <span><i class="fa-solid fa-phone mr-1 text-slate-500"></i> +91 9876543210</span>
                            <span><i class="fa-solid fa-envelope mr-1 text-slate-500"></i> rahul.sharma@example.com</span>
                            <span><i class="fa-solid fa-building mr-1 text-slate-500"></i> Raipur Main Branch</span>
                        </div>
                        <div class="mt-2.5 flex items-center space-x-2 text-xs">
                            <span class="bg-slate-900 border border-slate-800 px-2.5 py-1 rounded text-slate-300 font-mono">
                                RFID: RF-8821
                            </span>
                            <span class="bg-slate-900 border border-slate-800 px-2.5 py-1 rounded text-slate-300 font-mono">
                                Biometric ID: BIO-102
                            </span>
                            <span class="bg-slate-900 border border-slate-800 px-2.5 py-1 rounded text-slate-300">
                                Joined: 02 May 2026
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Current Active Package Mini-Card -->
                <div class="bg-slate-900/80 border border-slate-800 rounded-xl p-4 md:w-80 shrink-0">
                    <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold mb-1">
                        Current Active Subscription
                    </div>
                    <div class="text-base font-bold text-white">Monthly Cardio + Weights</div>
                    <div class="flex items-center justify-between text-xs mt-2 pt-2 border-t border-slate-800">
                        <span class="text-slate-400">Expires On:</span>
                        <span class="text-green-400 font-semibold">02 Sep 2026 (30 Days Left)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 2: Body Measurements & Progress Stats -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Latest Measurement KPI Cards (Left 2 Columns) -->
            <div class="lg:col-span-2 bg-slate-950 border border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between border-b border-slate-800 pb-3 mb-4">
                    <h2 class="font-semibold text-white flex items-center">
                        <i class="fa-solid fa-heart-pulse text-purple-400 mr-2.5"></i> Latest Body Measurements
                    </h2>
                    <span class="text-xs text-slate-400">Last recorded: <span class="text-white font-medium">01 Aug 2026</span></span>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <!-- Weight -->
                    <div class="bg-slate-900/60 border border-slate-800/80 p-3.5 rounded-xl">
                        <div class="text-xs text-slate-400">Weight</div>
                        <div class="text-xl font-bold text-white mt-1">74.2 <span class="text-xs font-normal text-slate-400">kg</span></div>
                        <div class="text-[11px] text-green-400 mt-1"><i class="fa-solid fa-arrow-down mr-1"></i> -1.8 kg (30d)</div>
                    </div>

                    <!-- Height -->
                    <div class="bg-slate-900/60 border border-slate-800/80 p-3.5 rounded-xl">
                        <div class="text-xs text-slate-400">Height</div>
                        <div class="text-xl font-bold text-white mt-1">175 <span class="text-xs font-normal text-slate-400">cm</span></div>
                        <div class="text-[11px] text-slate-500 mt-1">Fixed</div>
                    </div>

                    <!-- BMI -->
                    <div class="bg-slate-900/60 border border-slate-800/80 p-3.5 rounded-xl">
                        <div class="text-xs text-slate-400">BMI</div>
                        <div class="text-xl font-bold text-white mt-1">24.2</div>
                        <div class="text-[11px] text-green-400 mt-1">Normal Weight</div>
                    </div>

                    <!-- Chest -->
                    <div class="bg-slate-900/60 border border-slate-800/80 p-3.5 rounded-xl">
                        <div class="text-xs text-slate-400">Chest</div>
                        <div class="text-xl font-bold text-white mt-1">40.5 <span class="text-xs font-normal text-slate-400">in</span></div>
                        <div class="text-[11px] text-green-400 mt-1"><i class="fa-solid fa-arrow-up mr-1"></i> +0.5 in</div>
                    </div>

                    <!-- Waist -->
                    <div class="bg-slate-900/60 border border-slate-800/80 p-3.5 rounded-xl">
                        <div class="text-xs text-slate-400">Waist</div>
                        <div class="text-xl font-bold text-white mt-1">32.0 <span class="text-xs font-normal text-slate-400">in</span></div>
                        <div class="text-[11px] text-green-400 mt-1"><i class="fa-solid fa-arrow-down mr-1"></i> -1.0 in</div>
                    </div>

                    <!-- Biceps -->
                    <div class="bg-slate-900/60 border border-slate-800/80 p-3.5 rounded-xl">
                        <div class="text-xs text-slate-400">Biceps</div>
                        <div class="text-xl font-bold text-white mt-1">14.8 <span class="text-xs font-normal text-slate-400">in</span></div>
                        <div class="text-[11px] text-green-400 mt-1"><i class="fa-solid fa-arrow-up mr-1"></i> +0.3 in</div>
                    </div>
                </div>
            </div>

            <!-- Body Progress Chart / Timeline (Right Column) -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                <div class="flex items-center justify-between border-b border-slate-800 pb-3 mb-4">
                    <h3 class="font-semibold text-white text-sm"><i class="fa-solid fa-chart-line text-green-400 mr-2"></i> Progress Summary</h3>
                    <span class="text-xs text-slate-400">Last 3 Months</span>
                </div>

                <!-- Simple Progress Log Timeline -->
                <div class="space-y-4 my-auto">
                    <div class="flex items-center justify-between text-xs border-b border-slate-800/60 pb-2">
                        <div>
                            <span class="text-white font-medium">01 Aug 2026</span>
                            <div class="text-slate-400">74.2 kg • BMI 24.2</div>
                        </div>
                        <span class="text-green-400 font-semibold">-0.8 kg</span>
                    </div>

                    <div class="flex items-center justify-between text-xs border-b border-slate-800/60 pb-2">
                        <div>
                            <span class="text-white font-medium">01 Jul 2026</span>
                            <div class="text-slate-400">75.0 kg • BMI 24.5</div>
                        </div>
                        <span class="text-green-400 font-semibold">-1.0 kg</span>
                    </div>

                    <div class="flex items-center justify-between text-xs">
                        <div>
                            <span class="text-white font-medium">02 Jun 2026</span>
                            <div class="text-slate-400">76.0 kg • BMI 24.8</div>
                        </div>
                        <span class="text-slate-400 font-semibold">Base (Join)</span>
                    </div>
                </div>

                <a href="#" class="mt-4 block text-center py-2 bg-slate-900 hover:bg-slate-800 text-xs text-purple-400 rounded-lg border border-slate-800 transition">
                    View Complete Progress History <i class="fa-solid fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- SECTION 3: Detailed Info & Subscription History Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- Complete Personal & Medical Information (1 Column) -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-6 shadow-sm space-y-4">
                <div class="border-b border-slate-800 pb-3">
                    <h3 class="font-semibold text-white text-sm"><i class="fa-solid fa-file-medical text-blue-400 mr-2"></i> Profile & Medical Info</h3>
                </div>

                <div class="space-y-3 text-xs">
                    <div class="flex justify-between">
                        <span class="text-slate-400">Gender:</span>
                        <span class="text-white font-medium capitalize">Male</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-400">Date of Birth:</span>
                        <span class="text-white font-medium">14 Oct 1998 (27 Yrs)</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-400">Blood Group:</span>
                        <span class="text-white font-medium">O+</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-400">Emergency Contact:</span>
                        <span class="text-white font-medium">+91 9876500000 (Father)</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-400">Assigned Trainer:</span>
                        <span class="text-white font-medium">Vikram Singh</span>
                    </div>
                    <div class="pt-2 border-t border-slate-800">
                        <span class="text-slate-400 block mb-1">Medical History:</span>
                        <p class="text-slate-300 bg-slate-900 p-2.5 rounded-lg border border-slate-800">
                            Mild Lower Back Pain (2024). Recommended to avoid heavy deadlifts without supervision.
                        </p>
                    </div>
                    <div class="pt-2 border-t border-slate-800">
                        <span class="text-slate-400 block mb-1">Residential Address:</span>
                        <p class="text-slate-300">
                            House No. 42, Shankar Nagar, Near Civil Lines, Raipur, CG - 492001
                        </p>
                    </div>
                </div>
            </div>

            <!-- Subscription & Payment History Table (2 Columns) -->
            <div class="lg:col-span-2 bg-slate-950 border border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between border-b border-slate-800 pb-3 mb-4">
                        <h3 class="font-semibold text-white text-sm"><i class="fa-solid fa-clock-rotate-left text-yellow-400 mr-2"></i> Subscription History</h3>
                        <span class="text-xs text-slate-400">3 Total Records</span>
                    </div>

                    <!-- History Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-900/60 text-slate-400 text-[11px] uppercase tracking-wider border-b border-slate-800">
                                    <th class="py-2.5 px-3">Plan Name</th>
                                    <th class="py-2.5 px-3">Start Date</th>
                                    <th class="py-2.5 px-3">End Date</th>
                                    <th class="py-2.5 px-3">Amount Paid</th>
                                    <th class="py-2.5 px-3">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800 text-xs">
                                <!-- Active Plan -->
                                <tr class="hover:bg-slate-900/40">
                                    <td class="py-3 px-3 font-semibold text-white">Monthly Cardio + Weights</td>
                                    <td class="py-3 px-3 text-slate-300">03 Aug 2026</td>
                                    <td class="py-3 px-3 text-slate-300">02 Sep 2026</td>
                                    <td class="py-3 px-3 font-mono text-green-400">₹1,500</td>
                                    <td class="py-3 px-3">
                                        <span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-green-500/10 text-green-400 border border-green-500/20">
                                            Active
                                        </span>
                                    </td>
                                </tr>

                                <!-- Expired Plan 1 -->
                                <tr class="hover:bg-slate-900/40 text-slate-400">
                                    <td class="py-3 px-3">Monthly Cardio + Weights</td>
                                    <td class="py-3 px-3">03 Jul 2026</td>
                                    <td class="py-3 px-3">02 Aug 2026</td>
                                    <td class="py-3 px-3 font-mono">₹1,500</td>
                                    <td class="py-3 px-3">
                                        <span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-slate-800 text-slate-400 border border-slate-700">
                                            Expired
                                        </span>
                                    </td>
                                </tr>

                                <!-- Expired Plan 2 -->
                                <tr class="hover:bg-slate-900/40 text-slate-400">
                                    <td class="py-3 px-3">Monthly Cardio + Weights</td>
                                    <td class="py-3 px-3">02 Jun 2026</td>
                                    <td class="py-3 px-3">02 Jul 2026</td>
                                    <td class="py-3 px-3 font-mono">₹1,500</td>
                                    <td class="py-3 px-3">
                                        <span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-slate-800 text-slate-400 border border-slate-700">
                                            Expired
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Footer Summary / Note -->
                <div class="mt-4 pt-3 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                    <span>Total Lifetime Value: <span class="text-white font-semibold">₹4,500</span></span>
                    <span>Payment Mode Preference: <span class="text-white">UPI / Online</span></span>
                </div>
            </div>

        </div>

    </main>

</body>
</html>
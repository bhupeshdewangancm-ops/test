<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Master - Gym SaaS Panel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex flex-col">

    <!-- Top Header / Navbar -->
    <header class="flex items-center justify-between h-16 px-6 bg-slate-950 border-b border-slate-800 sticky top-0 z-10">
        <div class="flex items-center space-x-3">
            <span class="text-lg font-bold text-white flex items-center">
                <i class="fa-solid fa-user-check text-green-400 mr-2.5"></i> Attendance Log & Live Feed
            </span>
            <span class="text-xs bg-slate-800 text-slate-300 px-2.5 py-1 rounded-full border border-slate-700">
                03 Aug 2026 (Today)
            </span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Export Excel Button -->
            <button class="px-3.5 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 rounded-lg text-xs font-semibold transition flex items-center">
                <i class="fa-solid fa-file-excel mr-1.5 text-green-400"></i> Export Report
            </button>
            <!-- Manual Check-in Button (Triggers Modal) -->
            <button onclick="document.getElementById('manualCheckinModal').classList.remove('hidden')" 
                class="flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-green-500/10">
                <i class="fa-solid fa-plus mr-2"></i> + Manual Check-in
            </button>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 max-w-7xl w-full mx-auto space-y-6">

        <!-- KPI Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
            <!-- Card 1: Today's Total Check-ins -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Today's Check-ins</span>
                    <div class="text-xl font-bold text-white mt-1">145 <span class="text-xs font-normal text-slate-400">Members</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-green-500/10 border border-green-500/20 text-green-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-check-to-slot"></i>
                </div>
            </div>

            <!-- Card 2: Currently Inside Gym -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Currently Inside</span>
                    <div class="text-xl font-bold text-blue-400 mt-1">38 <span class="text-xs font-normal text-slate-400">Active Now</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 text-blue-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>

            <!-- Card 3: Morning Shift Count -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Morning Shift</span>
                    <div class="text-xl font-bold text-yellow-400 mt-1">82 <span class="text-xs font-normal text-slate-400">Check-ins</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-sun"></i>
                </div>
            </div>

            <!-- Card 4: Average Workout Duration -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Avg. Duration</span>
                    <div class="text-xl font-bold text-purple-400 mt-1">68 <span class="text-xs font-normal text-slate-400">Minutes</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-purple-500/10 border border-purple-500/20 text-purple-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-stopwatch"></i>
                </div>
            </div>
        </div>

        <!-- Search & Filter Toolbar -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4 shadow-sm">
            <!-- Search Box -->
            <div class="relative flex-1 max-w-md">
                <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                <input type="text" placeholder="Search by Member Name, Phone, or Card/RFID..."
                    class="w-full pl-10 pr-4 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition">
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap items-center gap-3">
                <!-- Date Filter -->
                <input type="date" value="2026-08-03"
                    class="px-3 py-1.5 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">

                <!-- Branch Filter -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="">All Branches</option>
                    <option value="1">Raipur Main Branch</option>
                    <option value="2">Bhilai Branch</option>
                </select>

                <!-- Shift Filter -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="">All Shifts</option>
                    <option value="morning">Morning Shift (5 AM - 12 PM)</option>
                    <option value="evening">Evening Shift (4 PM - 10 PM)</option>
                </select>

                <!-- Mode Filter -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="">All Verification Modes</option>
                    <option value="rfid">RFID Card</option>
                    <option value="biometric">Biometric</option>
                    <option value="manual">Manual Entry</option>
                </select>
            </div>
        </div>

        <!-- Attendance Live Feed Table Card -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900/60 text-slate-400 text-[11px] uppercase tracking-wider border-b border-slate-800">
                            <th class="py-3.5 px-5">Member Details</th>
                            <th class="py-3.5 px-5">Branch / Shift</th>
                            <th class="py-3.5 px-5">Check-in Time</th>
                            <th class="py-3.5 px-5">Check-out Time</th>
                            <th class="py-3.5 px-5">Duration</th>
                            <th class="py-3.5 px-5">Mode</th>
                            <th class="py-3.5 px-5">Status</th>
                            <th class="py-3.5 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800 text-sm">
                        
                        <!-- ROW 1: Active (Inside Gym) -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5">
                                <div class="flex items-center space-x-3">
                                    <div class="w-9 h-9 rounded-full bg-green-500/10 border border-green-500/30 flex items-center justify-center font-bold text-green-400 text-xs">
                                        RS
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white">Rahul Sharma</div>
                                        <div class="text-xs text-slate-400">MEM-0001 • +91 9876543210</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <div class="text-slate-200 font-medium">Raipur Main Branch</div>
                                <div class="text-[11px] text-yellow-400">Morning Batch</div>
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-green-400 font-semibold">
                                07:15 AM
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-slate-500">
                                -- : --
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300">
                                <span class="font-semibold text-white">45 mins</span> (Ongoing)
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    <i class="fa-solid fa-id-card mr-1"></i> RFID
                                </span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5 animate-pulse"></i> Inside Gym
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <!-- Manual Check-out Action -->
                                    <button title="Mark Check-out" class="px-2.5 py-1 bg-yellow-500/10 hover:bg-yellow-500/20 text-yellow-400 border border-yellow-500/20 rounded text-xs font-semibold transition">
                                        Check-out Now
                                    </button>
                                    <button title="Delete Entry" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 2: Completed Workout -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5">
                                <div class="flex items-center space-x-3">
                                    <div class="w-9 h-9 rounded-full bg-blue-500/10 border border-blue-500/30 flex items-center justify-center font-bold text-blue-400 text-xs">
                                        PV
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white">Priya Verma</div>
                                        <div class="text-xs text-slate-400">MEM-0002 • +91 9800011223</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <div class="text-slate-200 font-medium">Bhilai Branch</div>
                                <div class="text-[11px] text-yellow-400">Morning Batch</div>
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-slate-300">
                                06:30 AM
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-slate-300">
                                07:45 AM
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300">
                                <span class="font-semibold text-white">1 hr 15 mins</span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                    <i class="fa-solid fa-fingerprint mr-1"></i> Biometric
                                </span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-800 text-slate-400 border border-slate-700">
                                    <i class="fa-solid fa-check mr-1.5"></i> Checked Out
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Edit Entry" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Delete Entry" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 3: Manual Entry Check-in -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5">
                                <div class="flex items-center space-x-3">
                                    <div class="w-9 h-9 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center font-bold text-slate-300 text-xs">
                                        AK
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white">Amit Kumar</div>
                                        <div class="text-xs text-slate-400">MEM-0003 • +91 9988776655</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <div class="text-slate-200 font-medium">Raipur Main Branch</div>
                                <div class="text-[11px] text-yellow-400">Morning Batch</div>
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-green-400 font-semibold">
                                07:40 AM
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-slate-500">
                                -- : --
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300">
                                <span class="font-semibold text-white">20 mins</span> (Ongoing)
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                    <i class="fa-solid fa-user-pen mr-1"></i> Manual
                                </span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5 animate-pulse"></i> Inside Gym
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Mark Check-out" class="px-2.5 py-1 bg-yellow-500/10 hover:bg-yellow-500/20 text-yellow-400 border border-yellow-500/20 rounded text-xs font-semibold transition">
                                        Check-out Now
                                    </button>
                                    <button title="Delete Entry" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="px-5 py-4 border-t border-slate-800 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 text-xs text-slate-400">
                <div>
                    Showing <span class="text-white font-medium">3</span> of <span class="text-white font-medium">145</span> attendance logs today
                </div>
                <div class="flex items-center space-x-1">
                    <button class="px-3 py-1.5 bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded text-slate-400 hover:text-white transition disabled:opacity-50" disabled>
                        Previous
                    </button>
                    <button class="px-3 py-1.5 bg-green-500/20 border border-green-500/30 text-green-400 rounded font-medium">
                        1
                    </button>
                    <button class="px-3 py-1.5 bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded text-slate-300 hover:text-white transition">
                        2
                    </button>
                    <button class="px-3 py-1.5 bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded text-slate-300 hover:text-white transition">
                        Next
                    </button>
                </div>
            </div>
        </div>

    </main>

    <!-- ========================================================================= -->
    <!-- MANUAL CHECK-IN MODAL (Hidden by default, open on button click) -->
    <!-- ========================================================================= -->
    <div id="manualCheckinModal" class="hidden fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-slate-950 border border-slate-800 rounded-2xl max-w-lg w-full p-6 shadow-2xl relative">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-4">
                <h3 class="text-base font-semibold text-white flex items-center">
                    <i class="fa-solid fa-user-check text-green-400 mr-2"></i> Manual Member Check-in
                </h3>
                <button onclick="document.getElementById('manualCheckinModal').classList.add('hidden')" 
                    class="text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form action="/api/gym/attendance/check-in" method="POST" class="space-y-4">
                <!-- Member Select / Auto-complete -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Select Member (By Code or Phone) *</label>
                    <select name="member_id" required
                        class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white focus:outline-none focus:border-green-500 transition">
                        <option value="">-- Search & Select Member --</option>
                        <option value="1">Rahul Sharma (MEM-0001 • 9876543210)</option>
                        <option value="2">Priya Verma (MEM-0002 • 9800011223)</option>
                        <option value="3">Amit Kumar (MEM-0003 • 9988776655)</option>
                    </select>
                </div>

                <!-- Branch & Shift Row -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Branch *</label>
                        <select name="branch_id" required
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white focus:outline-none focus:border-green-500 transition">
                            <option value="1">Raipur Main Branch</option>
                            <option value="2">Bhilai Branch</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Shift / Batch *</label>
                        <select name="shift" required
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white focus:outline-none focus:border-green-500 transition">
                            <option value="morning">Morning Shift</option>
                            <option value="evening">Evening Shift</option>
                        </select>
                    </div>
                </div>

                <!-- Custom Check-in Time (Optional override) -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Date *</label>
                        <input type="date" name="attendance_date" value="2026-08-03" required
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white focus:outline-none focus:border-green-500 transition">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Check-in Time *</label>
                        <input type="time" name="check_in_time" value="08:00" required
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white focus:outline-none focus:border-green-500 transition">
                    </div>
                </div>

                <!-- Remarks / Notes -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Remarks (Optional)</label>
                    <input type="text" name="remarks" placeholder="e.g. RFID card forgotten at home"
                        class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition">
                </div>

                <!-- Modal Actions -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-800">
                    <button type="button" onclick="document.getElementById('manualCheckinModal').classList.add('hidden')"
                        class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-lg text-sm font-semibold transition">
                        Cancel
                    </button>
                    <button type="submit" 
                        class="px-6 py-2 bg-green-500 hover:bg-green-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-green-500/20">
                        Mark Check-in
                    </button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members List - Gym SaaS Panel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex flex-col">

    <!-- Top Header & Breadcrumb -->
    <header class="flex items-center justify-between h-16 px-6 bg-slate-950 border-b border-slate-800 sticky top-0 z-10">
        <div class="flex items-center space-x-3">
            <span class="text-lg font-bold text-white flex items-center">
                <i class="fa-solid fa-users text-green-400 mr-2.5"></i> Members Directory
            </span>
            <span class="text-xs bg-slate-800 text-slate-300 px-2.5 py-1 rounded-full border border-slate-700">
                1,248 Total Members
            </span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Add Member Button -->
            <a href="/members/create" class="flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-green-500/10">
                <i class="fa-solid fa-user-plus mr-2"></i> + Add New Member
            </a>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 max-w-7xl w-full mx-auto space-y-6">

        <!-- Search & Filter Toolbar -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4 shadow-sm">
            <!-- Search Box -->
            <div class="relative flex-1 max-w-md">
                <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                <input type="text" placeholder="Search by Name, Phone, or Member Code (e.g. MEM-0001)..."
                    class="w-full pl-10 pr-4 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition">
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap items-center gap-3">
                <!-- Branch Filter -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="">All Branches</option>
                    <option value="1">Raipur Main Branch</option>
                    <option value="2">Bhilai Branch</option>
                </select>

                <!-- Status Filter -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="">All Status</option>
                    <option value="active">Active Members</option>
                    <option value="expired">Expired Subscription</option>
                    <option value="inactive">Inactive</option>
                </select>

                <!-- Sort By -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="latest">Latest Joined</option>
                    <option value="name_asc">Name (A-Z)</option>
                    <option value="expiry_soon">Expiring Soon</option>
                </select>
            </div>
        </div>

        <!-- Members Table Card -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900/60 text-slate-400 text-[11px] uppercase tracking-wider border-b border-slate-800">
                            <th class="py-3.5 px-5">Member Details</th>
                            <th class="py-3.5 px-5">Member Code / RFID</th>
                            <th class="py-3.5 px-5">Branch</th>
                            <th class="py-3.5 px-5">Active Package</th>
                            <th class="py-3.5 px-5">Expiry Date</th>
                            <th class="py-3.5 px-5">Status</th>
                            <th class="py-3.5 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800 text-sm">
                        
                        <!-- ROW 1: Active Member -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5">
                                <div class="flex items-center space-x-3">
                                    <div class="w-9 h-9 rounded-full bg-green-500/10 border border-green-500/30 flex items-center justify-center font-bold text-green-400 text-xs">
                                        RS
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white">Rahul Sharma</div>
                                        <div class="text-xs text-slate-400">+91 9876543210</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-slate-300">
                                <div>MEM-0001</div>
                                <span class="text-[10px] text-slate-500">RFID: RF-8821</span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300">Raipur Main Branch</td>
                            <td class="py-4 px-5 text-xs">
                                <span class="text-slate-200 font-medium">Monthly Cardio + Wt</span>
                                <div class="text-[11px] text-slate-500">30 Days Plan</div>
                            </td>
                            <td class="py-4 px-5 text-xs font-medium text-slate-300">
                                02 Sep 2026
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5"></i> Active
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <!-- View Details -->
                                    <button title="View Profile" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-slate-300 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                    </button>
                                    <!-- Edit Profile -->
                                    <button title="Edit Member" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <!-- Renew Package -->
                                    <button title="Renew Subscription" class="px-2.5 py-1 bg-green-500/10 hover:bg-green-500/20 text-green-400 border border-green-500/20 rounded text-xs font-semibold transition">
                                        Renew
                                    </button>
                                    <!-- Delete -->
                                    <button title="Soft Delete" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 2: Expiring Soon Member -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5">
                                <div class="flex items-center space-x-3">
                                    <div class="w-9 h-9 rounded-full bg-blue-500/10 border border-blue-500/30 flex items-center justify-center font-bold text-blue-400 text-xs">
                                        PV
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white">Priya Verma</div>
                                        <div class="text-xs text-slate-400">+91 9800011223</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-slate-300">
                                <div>MEM-0002</div>
                                <span class="text-[10px] text-slate-500">RFID: N/A</span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300">Bhilai Branch</td>
                            <td class="py-4 px-5 text-xs">
                                <span class="text-slate-200 font-medium">Annual VIP Membership</span>
                                <div class="text-[11px] text-slate-500">365 Days Plan</div>
                            </td>
                            <td class="py-4 px-5 text-xs font-semibold text-yellow-400">
                                05 Aug 2026 <span class="text-[10px] block text-yellow-500">(2 days left)</span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5"></i> Expiring Soon
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="View Profile" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-slate-300 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                    </button>
                                    <button title="Edit Member" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Renew Subscription" class="px-2.5 py-1 bg-yellow-500/10 hover:bg-yellow-500/20 text-yellow-400 border border-yellow-500/30 rounded text-xs font-semibold transition">
                                        Renew Now
                                    </button>
                                    <button title="Soft Delete" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 3: Expired / Inactive Member -->
                        <tr class="hover:bg-slate-900/40 transition opacity-75">
                            <td class="py-4 px-5">
                                <div class="flex items-center space-x-3">
                                    <div class="w-9 h-9 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center font-bold text-slate-400 text-xs">
                                        AK
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white">Amit Kumar</div>
                                        <div class="text-xs text-slate-400">+91 9988776655</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-5 font-mono text-xs text-slate-300">
                                <div>MEM-0003</div>
                                <span class="text-[10px] text-slate-500">RFID: RF-1102</span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300">Raipur Main Branch</td>
                            <td class="py-4 px-5 text-xs">
                                <span class="text-slate-400 font-medium">Quarterly Gold Plan</span>
                                <div class="text-[11px] text-slate-500">90 Days Plan</div>
                            </td>
                            <td class="py-4 px-5 text-xs font-medium text-red-400">
                                15 Jul 2026 <span class="text-[10px] block text-red-500">(Expired)</span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5"></i> Expired
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="View Profile" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-slate-300 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                    </button>
                                    <button title="Edit Member" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Renew Subscription" class="px-2.5 py-1 bg-green-500/10 hover:bg-green-500/20 text-green-400 border border-green-500/20 rounded text-xs font-semibold transition">
                                        Renew
                                    </button>
                                    <button title="Soft Delete" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Pagination Footer -->
            <div class="px-5 py-4 border-t border-slate-800 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 text-xs text-slate-400">
                <div>
                    Showing <span class="text-white font-medium">1</span> to <span class="text-white font-medium">10</span> of <span class="text-white font-medium">1,248</span> members
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
                        3
                    </button>
                    <button class="px-3 py-1.5 bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded text-slate-300 hover:text-white transition">
                        Next
                    </button>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch Master - Gym SaaS Panel</title>
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
                <i class="fa-solid fa-code-branch text-blue-400 mr-2.5"></i> Branch Master
            </span>
            <span class="text-xs bg-slate-800 text-slate-300 px-2.5 py-1 rounded-full border border-slate-700">
                Multi-Branch Tenant
            </span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Add New Branch Button (Triggers Modal in real app) -->
            <button onclick="document.getElementById('addBranchModal').classList.remove('hidden')" 
                class="flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-blue-500/10">
                <i class="fa-solid fa-plus mr-2"></i> + Add New Branch
            </button>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 max-w-7xl w-full mx-auto space-y-6">

        <!-- KPI Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Card 1: Total Branches -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-5 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Total Branches</span>
                    <div class="text-2xl font-bold text-white mt-1">3 <span class="text-xs font-normal text-slate-400">Locations</span></div>
                </div>
                <div class="w-11 h-11 rounded-lg bg-blue-500/10 border border-blue-500/20 text-blue-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-building"></i>
                </div>
            </div>

            <!-- Card 2: Active Branches -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-5 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Active Branches</span>
                    <div class="text-2xl font-bold text-green-400 mt-1">3 <span class="text-xs font-normal text-slate-400">Operational</span></div>
                </div>
                <div class="w-11 h-11 rounded-lg bg-green-500/10 border border-green-500/20 text-green-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
            </div>

            <!-- Card 3: Inactive Branches -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-5 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Inactive Branches</span>
                    <div class="text-2xl font-bold text-slate-400 mt-1">0 <span class="text-xs font-normal text-slate-500">Disabled</span></div>
                </div>
                <div class="w-11 h-11 rounded-lg bg-slate-800/60 border border-slate-700 text-slate-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-store-slash"></i>
                </div>
            </div>
        </div>

        <!-- Search & Filter Toolbar -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 shadow-sm">
            <!-- Search Box -->
            <div class="relative flex-1 max-w-md">
                <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                <input type="text" placeholder="Search branch by Name, City, or Phone..."
                    class="w-full pl-10 pr-4 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
            </div>

            <!-- Filters -->
            <div class="flex items-center space-x-3">
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>

        <!-- Branches Table Card -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900/60 text-slate-400 text-[11px] uppercase tracking-wider border-b border-slate-800">
                            <th class="py-3.5 px-5">ID</th>
                            <th class="py-3.5 px-5">Branch Name</th>
                            <th class="py-3.5 px-5">Contact Details</th>
                            <th class="py-3.5 px-5">Address</th>
                            <th class="py-3.5 px-5">Status</th>
                            <th class="py-3.5 px-5">Created On</th>
                            <th class="py-3.5 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800 text-sm">
                        
                        <!-- ROW 1 -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5 font-mono text-xs text-slate-400">#1</td>
                            <td class="py-4 px-5">
                                <div class="font-semibold text-white flex items-center">
                                    <i class="fa-solid fa-location-dot text-blue-400 mr-2 text-xs"></i>
                                    Raipur Main Branch
                                </div>
                                <span class="text-[11px] text-slate-500">Headquarters</span>
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <div class="text-slate-200 font-medium"><i class="fa-solid fa-phone mr-1 text-slate-500"></i> +91 9800000001</div>
                                <div class="text-slate-400 mt-0.5"><i class="fa-solid fa-envelope mr-1 text-slate-500"></i> raipur@seba24gym.com</div>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300 max-w-xs truncate">
                                Shankar Nagar, Civil Lines, Raipur, Chhattisgarh
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5"></i> Active
                                </span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-400">
                                01 Aug 2026
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <!-- Edit Button -->
                                    <button title="Edit Branch" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <!-- Toggle Status -->
                                    <button title="Mark Inactive" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-yellow-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-power-off text-xs"></i>
                                    </button>
                                    <!-- Delete Button (Soft Delete) -->
                                    <button title="Delete Branch" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 2 -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5 font-mono text-xs text-slate-400">#2</td>
                            <td class="py-4 px-5">
                                <div class="font-semibold text-white flex items-center">
                                    <i class="fa-solid fa-location-dot text-blue-400 mr-2 text-xs"></i>
                                    Bhilai Branch
                                </div>
                                <span class="text-[11px] text-slate-500">City Center</span>
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <div class="text-slate-200 font-medium"><i class="fa-solid fa-phone mr-1 text-slate-500"></i> +91 9800000002</div>
                                <div class="text-slate-400 mt-0.5"><i class="fa-solid fa-envelope mr-1 text-slate-500"></i> bhilai@seba24gym.com</div>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300 max-w-xs truncate">
                                Civic Center, Near Supela Market, Bhilai
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5"></i> Active
                                </span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-400">
                                01 Aug 2026
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Edit Branch" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Mark Inactive" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-yellow-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-power-off text-xs"></i>
                                    </button>
                                    <button title="Delete Branch" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 3 -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5 font-mono text-xs text-slate-400">#3</td>
                            <td class="py-4 px-5">
                                <div class="font-semibold text-white flex items-center">
                                    <i class="fa-solid fa-location-dot text-blue-400 mr-2 text-xs"></i>
                                    Raipur VIP Road Branch
                                </div>
                                <span class="text-[11px] text-slate-500">Premium Club</span>
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <div class="text-slate-200 font-medium"><i class="fa-solid fa-phone mr-1 text-slate-500"></i> +91 9900000001</div>
                                <div class="text-slate-400 mt-0.5"><i class="fa-solid fa-envelope mr-1 text-slate-500"></i> vip@seba24gym.com</div>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300 max-w-xs truncate">
                                Main VIP Road, Near Airport, Raipur
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                    <i class="fa-solid fa-circle text-[6px] mr-1.5"></i> Active
                                </span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-400">
                                01 Aug 2026
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Edit Branch" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Mark Inactive" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-yellow-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-power-off text-xs"></i>
                                    </button>
                                    <button title="Delete Branch" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="px-5 py-4 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                <div>Showing <span class="text-white font-medium">3</span> of <span class="text-white font-medium">3</span> branches</div>
                <div class="text-slate-500">Soft Delete Enabled</div>
            </div>
        </div>

    </main>

    <!-- ========================================================================= -->
    <!-- ADD NEW BRANCH MODAL (Hidden by default, open on button click) -->
    <!-- ========================================================================= -->
    <div id="addBranchModal" class="hidden fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-slate-950 border border-slate-800 rounded-2xl max-w-lg w-full p-6 shadow-2xl relative">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-4">
                <h3 class="text-base font-semibold text-white flex items-center">
                    <i class="fa-solid fa-code-branch text-blue-400 mr-2"></i> Create New Branch
                </h3>
                <button onclick="document.getElementById('addBranchModal').classList.add('hidden')" 
                    class="text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Modal Form (Matches gym_branches table structure) -->
            <form action="/api/gym/gym-branches" method="POST" class="space-y-4">
                <!-- Branch Name -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Branch Name *</label>
                    <input type="text" name="name" placeholder="e.g. City Center Branch" required
                        class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
                </div>

                <!-- Phone & Email Row -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Phone Number</label>
                        <input type="tel" name="phone" placeholder="9800000000"
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Email Address</label>
                        <input type="email" name="email" placeholder="branch@gym.com"
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition">
                    </div>
                </div>

                <!-- Address -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Full Address</label>
                    <textarea name="address" rows="2" placeholder="Building, Street, Landmark, City..."
                        class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 transition"></textarea>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Status</label>
                    <select name="status" class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white focus:outline-none focus:border-blue-500 transition">
                        <option value="active">Active (Operational)</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <!-- Modal Actions -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-800">
                    <button type="button" onclick="document.getElementById('addBranchModal').classList.add('hidden')"
                        class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-lg text-sm font-semibold transition">
                        Cancel
                    </button>
                    <button type="submit" 
                        class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-blue-500/20">
                        Save Branch
                    </button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member (API Synchronized) - Gym SaaS Panel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased h-screen w-screen overflow-hidden flex flex-col">

    <!-- Top Navbar (Compact) -->
    <header class="flex items-center justify-between h-12 px-6 bg-slate-950 border-b border-slate-800 shrink-0">
        <div class="flex items-center space-x-3">
            <a href="#" class="text-slate-400 hover:text-white transition"><i class="fa-solid fa-arrow-left"></i></a>
            <span class="text-base font-semibold text-slate-200">Add New Member (Compact Single Screen)</span>
            <span class="text-[11px] bg-green-500/10 text-green-400 border border-green-500/20 px-2 py-0.5 rounded-full font-medium">
                SaaS API Connected
            </span>
        </div>
        <div class="text-xs text-slate-400">
            <i class="fa-solid fa-database text-blue-400 mr-1"></i> Auto Member Code: <span class="text-green-400 font-mono">MEM-AUTO</span>
        </div>
    </header>

    <!-- Main Form Content Area (No Scroll Grid) -->
    <main class="flex-1 p-3 overflow-hidden flex items-center justify-center">
        <form action="#" method="POST" class="w-full max-w-7xl h-full flex flex-col justify-between">
            
            <!-- 3-Column Compact Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 flex-1">
                
                <!-- ========================================================
                     COLUMN 1: Core Member Profile (`members` table)
                     ======================================================== -->
                <div class="bg-slate-950 border border-slate-800 rounded-xl p-3.5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between border-b border-slate-800 pb-2 mb-2.5">
                            <h2 class="text-xs font-semibold uppercase tracking-wider text-green-400">
                                <i class="fa-solid fa-user mr-1.5"></i> 1. Core Profile (members)
                            </h2>
                            <span class="text-[10px] text-slate-500">* Required</span>
                        </div>

                        <div class="space-y-2">
                            <!-- Name -->
                            <div>
                                <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Full Name (name) *</label>
                                <input type="text" name="name" placeholder="Rahul Sharma" required
                                    class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-green-500">
                            </div>

                            <!-- Phone & Gender -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Phone *</label>
                                    <input type="tel" name="phone" placeholder="9876543210" required
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-green-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Gender</label>
                                    <select name="gender"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white focus:outline-none focus:border-green-500">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Email Address</label>
                                <input type="email" name="email" placeholder="rahul@example.com"
                                    class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-green-500">
                            </div>

                            <!-- DOB & Blood Group -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Date of Birth (dob)</label>
                                    <input type="date" name="dob"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white focus:outline-none focus:border-green-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Blood Group</label>
                                    <input type="text" name="blood_group" placeholder="e.g. O+, B+"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-green-500">
                                </div>
                            </div>

                            <!-- Hardware IDs (RFID & Biometric) -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">RFID Card No</label>
                                    <input type="text" name="rfid_card_no" placeholder="Optional"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-green-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Biometric ID</label>
                                    <input type="text" name="biometric_id" placeholder="Optional"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-green-500">
                                </div>
                            </div>

                            <!-- Joining Date & Status -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Joining Date</label>
                                    <input type="date" name="joining_date" value="2026-08-03"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white focus:outline-none focus:border-green-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Account Status</label>
                                    <select name="status"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-green-400 font-medium focus:outline-none focus:border-green-500">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="blocked">Blocked</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer hint -->
                    <div class="pt-1.5 border-t border-slate-800/80 text-[10px] text-slate-400 flex items-center justify-between">
                        <span>Code Generator:</span>
                        <span class="text-green-400">Auto MEM-XXXX</span>
                    </div>
                </div>

                <!-- ========================================================
                     COLUMN 2: Membership Package (`member_subscriptions` table)
                     ======================================================== -->
                <div class="bg-slate-950 border border-slate-800 rounded-xl p-3.5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between border-b border-slate-800 pb-2 mb-2.5">
                            <h2 class="text-xs font-semibold uppercase tracking-wider text-blue-400">
                                <i class="fa-solid fa-id-card mr-1.5"></i> 2. Package & Branch (Optional)
                            </h2>
                        </div>

                        <div class="space-y-2.5">
                            <!-- Branch Assignment -->
                            <div>
                                <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Assign Branch (branch_id)</label>
                                <select name="branch_id"
                                    class="w-full px-2.5 py-1.5 bg-slate-900 border border-slate-700 rounded text-xs text-white focus:outline-none focus:border-blue-500">
                                    <option value="">-- Select Branch --</option>
                                    <option value="1">Raipur Main Branch</option>
                                    <option value="2">Bhilai Branch</option>
                                </select>
                            </div>

                            <!-- Plan Selection -->
                            <div>
                                <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Select Gym Package (plan_id)</label>
                                <select name="plan_id"
                                    class="w-full px-2.5 py-1.5 bg-slate-900 border border-slate-700 rounded text-xs text-white focus:outline-none focus:border-blue-500">
                                    <option value="">-- Select Package --</option>
                                    <option value="1">Monthly Cardio + Weights - ₹1,500</option>
                                    <option value="2">Quarterly Gold Plan - ₹4,000</option>
                                    <option value="3">Annual VIP Membership - ₹12,000</option>
                                </select>
                            </div>

                            <!-- Duration & Trainer -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Duration (Days)</label>
                                    <input type="number" name="duration_days" placeholder="30" value="30"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-blue-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Assign Trainer ID</label>
                                    <input type="number" name="trainer_id" placeholder="Optional"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-blue-500">
                                </div>
                            </div>

                            <!-- Package Summary Card -->
                            <div class="bg-slate-900/80 border border-slate-800 rounded-lg p-2.5 space-y-1 text-[11px]">
                                <div class="flex justify-between text-slate-400">
                                    <span>Subscription Start:</span>
                                    <span class="text-white font-medium">03 Aug 2026</span>
                                </div>
                                <div class="flex justify-between text-slate-400">
                                    <span>Subscription End:</span>
                                    <span class="text-yellow-400 font-medium">02 Sep 2026</span>
                                </div>
                                <div class="flex justify-between text-slate-400">
                                    <span>Freeze Status:</span>
                                    <span class="text-green-400 font-medium">Active (is_frozen = 0)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer hint -->
                    <div class="pt-1.5 border-t border-slate-800/80 text-[10px] text-slate-400 flex items-center justify-between">
                        <span>Subscription Status:</span>
                        <span class="text-blue-400">Auto Active</span>
                    </div>
                </div>

                <!-- ========================================================
                     COLUMN 3: Initial Body Metrics (`member_body_metrics` table)
                     ======================================================== -->
                <div class="bg-slate-950 border border-slate-800 rounded-xl p-3.5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between border-b border-slate-800 pb-2 mb-2.5">
                            <h2 class="text-xs font-semibold uppercase tracking-wider text-yellow-400">
                                <i class="fa-solid fa-heart-pulse mr-1.5"></i> 3. Day-1 Body Metrics (Optional)
                            </h2>
                        </div>

                        <div class="space-y-2">
                            <!-- Weight & Height -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Weight (in kg)</label>
                                    <input type="number" step="0.1" name="weight" placeholder="e.g. 72.5"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-yellow-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Height (in cm)</label>
                                    <input type="number" step="0.1" name="height" placeholder="e.g. 175"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-yellow-500">
                                </div>
                            </div>

                            <!-- BMI & Chest -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">BMI</label>
                                    <input type="number" step="0.1" name="bmi" placeholder="e.g. 23.5"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-yellow-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Chest (inches)</label>
                                    <input type="number" step="0.1" name="chest" placeholder="e.g. 40"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-yellow-500">
                                </div>
                            </div>

                            <!-- Waist & Biceps -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Waist (inches)</label>
                                    <input type="number" step="0.1" name="waist" placeholder="e.g. 32"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-yellow-500">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Biceps (inches)</label>
                                    <input type="number" step="0.1" name="biceps" placeholder="e.g. 14"
                                        class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-yellow-500">
                                </div>
                            </div>

                            <!-- Medical History -->
                            <div>
                                <label class="block text-[11px] font-medium text-slate-300 mb-0.5">Medical History / Notes</label>
                                <textarea name="medical_history" rows="2" placeholder="Any injuries, diabetes, BP, etc."
                                    class="w-full px-2.5 py-1 bg-slate-900 border border-slate-700 rounded text-xs text-white placeholder-slate-500 focus:outline-none focus:border-yellow-500"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Action Footer -->
                    <div class="space-y-1.5 pt-2 border-t border-slate-800">
                        <button type="submit" 
                            class="w-full py-2.5 bg-green-500 hover:bg-green-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-green-500/20 flex items-center justify-center">
                            <i class="fa-solid fa-check-circle mr-2"></i> Save Member & Package
                        </button>
                        <a href="#" class="block text-center text-xs text-slate-400 hover:text-slate-200 transition">
                            Cancel & Return to Dashboard
                        </a>
                    </div>
                </div>

            </div>

        </form>
    </main>

</body>
</html>
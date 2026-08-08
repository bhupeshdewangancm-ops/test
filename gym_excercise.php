<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Master (With Days) - Gym SaaS Panel</title>
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
                <i class="fa-solid fa-dumbbell text-green-400 mr-2.5"></i> Exercise Master
            </span>
            <span class="text-xs bg-slate-800 text-slate-300 px-2.5 py-1 rounded-full border border-slate-700">
                Day-Wise Workout Directory
            </span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Add New Exercise Button (Triggers Modal) -->
            <button onclick="document.getElementById('addExerciseModal').classList.remove('hidden')" 
                class="flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-green-500/10">
                <i class="fa-solid fa-plus mr-2"></i> + Add New Exercise
            </button>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 max-w-7xl w-full mx-auto space-y-6">

        <!-- KPI Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
            <!-- Card 1: Total Exercises -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Total Workouts</span>
                    <div class="text-xl font-bold text-white mt-1">4 <span class="text-xs font-normal text-slate-400">Items</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-green-500/10 border border-green-500/20 text-green-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
            </div>

            <!-- Card 2: Target Muscle Groups -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Muscle Groups</span>
                    <div class="text-xl font-bold text-blue-400 mt-1">4 <span class="text-xs font-normal text-slate-400">Categories</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 text-blue-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-person-running"></i>
                </div>
            </div>

            <!-- Card 3: Days Scheduled -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Active Days</span>
                    <div class="text-xl font-bold text-yellow-400 mt-1">6 <span class="text-xs font-normal text-slate-400">Days/Wk</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
            </div>

            <!-- Card 4: Video Tutorials -->
            <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Video Guides</span>
                    <div class="text-xl font-bold text-purple-400 mt-1">2 <span class="text-xs font-normal text-slate-400">Linked</span></div>
                </div>
                <div class="w-10 h-10 rounded-lg bg-purple-500/10 border border-purple-500/20 text-purple-400 flex items-center justify-center text-base">
                    <i class="fa-solid fa-video"></i>
                </div>
            </div>
        </div>

        <!-- Search & Filter Toolbar (With Day Filter) -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4 shadow-sm">
            <!-- Search Box -->
            <div class="relative flex-1 max-w-md">
                <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                <input type="text" placeholder="Search exercise by Name or Target Muscle..."
                    class="w-full pl-10 pr-4 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition">
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap items-center gap-3">
                <!-- NEW: Filter By Day -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-yellow-400 font-medium focus:outline-none focus:border-green-500">
                    <option value="">All Workout Days</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Daily">Daily / Regular</option>
                </select>

                <!-- Muscle Group Filter -->
                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="">All Muscle Groups</option>
                    <option value="Chest">Chest</option>
                    <option value="Back">Back</option>
                    <option value="Legs">Legs</option>
                    <option value="Shoulders">Shoulders</option>
                    <option value="Arms">Arms / Biceps</option>
                </select>

                <select class="px-3 py-2 bg-slate-900 border border-slate-700 rounded-lg text-xs text-white focus:outline-none focus:border-green-500">
                    <option value="id_desc">Sort by: Latest</option>
                    <option value="name_asc">Name: A to Z</option>
                </select>
            </div>
        </div>

        <!-- Exercises Table Card -->
        <div class="bg-slate-950 border border-slate-800 rounded-xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900/60 text-slate-400 text-[11px] uppercase tracking-wider border-b border-slate-800">
                            <th class="py-3.5 px-5">ID</th>
                            <th class="py-3.5 px-5">Exercise Name</th>
                            <th class="py-3.5 px-5">Day Scheduled</th>
                            <th class="py-3.5 px-5">Target Muscle</th>
                            <th class="py-3.5 px-5">Instructions Guide</th>
                            <th class="py-3.5 px-5">Video Demo</th>
                            <th class="py-3.5 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800 text-sm">
                        
                        <!-- ROW 1: Flat Bench Press (Monday) -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5 font-mono text-xs text-slate-400">#1</td>
                            <td class="py-4 px-5">
                                <div class="font-semibold text-white">Flat Bench Press</div>
                                <span class="text-[11px] text-slate-500">Compound Movement</span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                    <i class="fa-solid fa-calendar-day text-[10px] mr-1.5"></i> Monday
                                </span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    <i class="fa-solid fa-crosshairs text-[10px] mr-1.5"></i> Chest
                                </span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300 max-w-xs truncate">
                                Lie on the bench and press barbell upward with controlled motion.
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <a href="https://youtube.com/example1" target="_blank" class="inline-flex items-center text-green-400 hover:text-green-300 font-medium">
                                    <i class="fa-brands fa-youtube text-red-500 mr-1.5 text-sm"></i> Watch Demo
                                </a>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Edit Exercise" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Soft Delete Exercise" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 2: Barbell Squats (Wednesday) -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5 font-mono text-xs text-slate-400">#2</td>
                            <td class="py-4 px-5">
                                <div class="font-semibold text-white">Barbell Squats</div>
                                <span class="text-[11px] text-slate-500">Lower Body Core</span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                    <i class="fa-solid fa-calendar-day text-[10px] mr-1.5"></i> Wednesday
                                </span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                    <i class="fa-solid fa-crosshairs text-[10px] mr-1.5"></i> Legs
                                </span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300 max-w-xs truncate">
                                Keep back straight, squat down until thighs are parallel to floor.
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <a href="https://youtube.com/example2" target="_blank" class="inline-flex items-center text-green-400 hover:text-green-300 font-medium">
                                    <i class="fa-brands fa-youtube text-red-500 mr-1.5 text-sm"></i> Watch Demo
                                </a>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Edit Exercise" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Soft Delete Exercise" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 3: Incline Dumbbell Press (Monday) -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5 font-mono text-xs text-slate-400">#3</td>
                            <td class="py-4 px-5">
                                <div class="font-semibold text-white">Incline Dumbbell Press</div>
                                <span class="text-[11px] text-slate-500">Upper Chest</span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                    <i class="fa-solid fa-calendar-day text-[10px] mr-1.5"></i> Monday
                                </span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                    <i class="fa-solid fa-crosshairs text-[10px] mr-1.5"></i> Upper Chest
                                </span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300 max-w-xs truncate">
                                Press dumbbells upward on an incline bench at 30-45 degrees.
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <span class="text-slate-500 italic">No video linked</span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Edit Exercise" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Soft Delete Exercise" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- ROW 4: Lat Pulldown (Tuesday) -->
                        <tr class="hover:bg-slate-900/40 transition">
                            <td class="py-4 px-5 font-mono text-xs text-slate-400">#4</td>
                            <td class="py-4 px-5">
                                <div class="font-semibold text-white">Lat Pulldown</div>
                                <span class="text-[11px] text-slate-500">Upper Back & Lats</span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                    <i class="fa-solid fa-calendar-day text-[10px] mr-1.5"></i> Tuesday
                                </span>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                    <i class="fa-solid fa-crosshairs text-[10px] mr-1.5"></i> Back
                                </span>
                            </td>
                            <td class="py-4 px-5 text-xs text-slate-300 max-w-xs truncate">
                                Pull bar down to upper chest while squeezing back muscles.
                            </td>
                            <td class="py-4 px-5 text-xs">
                                <span class="text-slate-500 italic">No video linked</span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <button title="Edit Exercise" class="p-1.5 bg-slate-900 hover:bg-slate-800 text-blue-400 rounded border border-slate-700 transition">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    </button>
                                    <button title="Soft Delete Exercise" class="p-1.5 bg-slate-900 hover:bg-red-500/20 text-red-400 rounded border border-slate-700 transition">
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
                <div>Showing <span class="text-white font-medium">4</span> of <span class="text-white font-medium">4</span> exercises</div>
                <div class="text-slate-500">Soft Delete & Day Allocation Enabled</div>
            </div>
        </div>

    </main>

    <!-- ========================================================================= -->
    <!-- ADD / EDIT EXERCISE MODAL (Updated with Workout Day Option) -->
    <!-- ========================================================================= -->
    <div id="addExerciseModal" class="hidden fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-slate-950 border border-slate-800 rounded-2xl max-w-lg w-full p-6 shadow-2xl relative">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-4">
                <h3 class="text-base font-semibold text-white flex items-center">
                    <i class="fa-solid fa-dumbbell text-green-400 mr-2"></i> Create New Exercise
                </h3>
                <button onclick="document.getElementById('addExerciseModal').classList.add('hidden')" 
                    class="text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Modal Form (Added name="day_of_week") -->
            <form action="/api/gym/exercises" method="POST" class="space-y-4">
                <!-- Exercise Name -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Exercise Name *</label>
                    <input type="text" name="name" placeholder="e.g. Overhead Shoulder Press" required
                        class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition">
                </div>

                <!-- NEW: Workout Day & Target Muscle Row -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Workout Day *</label>
                        <select name="day_of_week" required
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white focus:outline-none focus:border-green-500 transition">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Daily">Daily / Warmup</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Target Muscle *</label>
                        <input type="text" name="target_muscle" placeholder="Shoulders, Chest, Back..." required
                            class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition">
                    </div>
                </div>

                <!-- Video Tutorial URL -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Video Tutorial URL</label>
                    <input type="url" name="video_url" placeholder="https://youtube.com/..."
                        class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition">
                </div>

                <!-- Instructions -->
                <div>
                    <label class="block text-xs font-medium text-slate-300 mb-1">Instructions / Form Guide</label>
                    <textarea name="instructions" rows="3" placeholder="Explain proper posture, breathing, and technique..."
                        class="w-full px-3.5 py-2 bg-slate-900 border border-slate-700 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-green-500 transition"></textarea>
                </div>

                <!-- Modal Actions -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-800">
                    <button type="button" onclick="document.getElementById('addExerciseModal').classList.add('hidden')"
                        class="px-5 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-lg text-sm font-semibold transition">
                        Cancel
                    </button>
                    <button type="submit" 
                        class="px-6 py-2 bg-green-500 hover:bg-green-600 text-slate-950 font-bold rounded-lg text-sm transition shadow-lg shadow-green-500/20">
                        Save Exercise
                    </button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
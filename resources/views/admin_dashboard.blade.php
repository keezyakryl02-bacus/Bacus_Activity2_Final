<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Faith & Fashion Co.</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-100 font-sans antialiased text-stone-800">

    <nav class="bg-white border-b border-stone-200 px-8 py-4 flex justify-between items-center shadow-xs">
        <div class="flex items-center space-x-3">
            <span class="text-xl">⚜️</span>
            <div>
                <h1 class="font-serif font-bold text-stone-900 tracking-wide uppercase text-sm">Faith & Fashion Co.</h1>
                <p class="text-[10px] text-stone-400 font-serif italic tracking-widest">Woven with Purpose</p>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <span class="bg-stone-100 border border-stone-300 text-stone-700 text-xs px-3 py-1 rounded-full font-medium">System Administrator</span>
            <button onclick="exitAdminView()" class="text-xs text-stone-500 hover:text-stone-900 underline font-medium cursor-pointer">
                Back to Mobile View
            </button>
        </div>

        <script>
            function exitAdminView() {
                // Clear out the admin authentication tags causing the redirect loop
                localStorage.removeItem('saved_session_token');
                localStorage.removeItem('active_user_role');
                localStorage.removeItem('active_user_name');
                localStorage.removeItem('active_user_id');

                // Now safe to navigate back without being trapped
                window.location.href = "/mobile-app";
            }
        </script>

    </nav>

    <main class="max-w-6xl mx-auto p-8 space-y-6">

        <div class="border-b border-stone-200 pb-4">
            <h2 class="text-xl font-serif font-bold text-stone-800">Control Panel Overview</h2>
            <p class="text-xs text-stone-400 mt-0.5">Manage authenticated user roles and storefront inventory records.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white border border-stone-200 rounded-2xl p-5 shadow-xs">
                <span class="text-[10px] uppercase tracking-wider text-stone-400 font-bold block mb-1">Registered Accounts</span>
                <div class="flex items-baseline space-x-2">
                    <span class="text-2xl font-bold text-stone-900 font-mono">3</span>
                    <span class="text-xs text-stone-400">Active Profiles</span>
                </div>
            </div>
            <div class="bg-white border border-stone-200 rounded-2xl p-5 shadow-xs">
                <span class="text-[10px] uppercase tracking-wider text-stone-400 font-bold block mb-1">Total Catalog Items</span>
                <div class="flex items-baseline space-x-2">
                    <span class="text-2xl font-bold text-stone-900 font-mono">4</span>
                    <span class="text-xs text-stone-400">Products Listed</span>
                </div>
            </div>
            <div class="bg-white border border-stone-200 rounded-2xl p-5 shadow-xs">
                <span class="text-[10px] uppercase tracking-wider text-stone-400 font-bold block mb-1">Inventory Alert Status</span>
                <div class="flex items-baseline space-x-2">
                    <span class="text-2xl font-bold text-emerald-700 font-mono">0</span>
                    <span class="text-xs text-stone-400">Out of Stock</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6">

            <div class="bg-white border border-stone-200 rounded-2xl shadow-xs overflow-hidden">
                <div class="bg-stone-50 border-b border-stone-200 px-5 py-3.5 flex justify-between items-center">
                    <h3 class="font-serif font-bold text-xs text-stone-700 tracking-wide uppercase">User Account Scopes</h3>
                </div>
                <div class="p-5 overflow-x-auto">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="border-b border-stone-200 text-stone-400 uppercase tracking-wider text-[10px]">
                                <th class="pb-3 pl-2 font-bold">ID</th>
                                <th class="pb-3 font-bold">Username/Email</th>
                                <th class="pb-3 font-bold">Assigned Role</th>
                                <th class="pb-3 pr-2 font-bold text-right">System Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100 font-medium">
                            <tr class="hover:bg-stone-50/50">
                                <td class="py-3 pl-2 font-mono text-stone-500">1</td>
                                <td class="py-3 text-stone-800">keezya@fashion.com</td>
                                <td class="py-3"><span class="bg-amber-50 border border-amber-200 text-amber-900 text-[10px] font-bold px-2.5 py-0.5 rounded-md uppercase tracking-wide">Admin</span></td>
                                <td class="py-3 pr-2 text-right text-stone-400 italic text-[11px]">Active Operator</td>
                            </tr>
                            <tr class="hover:bg-stone-50/50">
                                <td class="py-3 pl-2 font-mono text-stone-500">2</td>
                                <td class="py-3 text-stone-800">kent@test.com</td>
                                <td class="py-3"><span class="bg-stone-100 border border-stone-300 text-stone-600 text-[10px] font-bold px-2.5 py-0.5 rounded-md uppercase tracking-wide">Customer</span></td>
                                <td class="py-3 pr-2 text-right"><button class="text-red-600 hover:underline cursor-pointer">Revoke Session</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white border border-stone-200 rounded-2xl shadow-xs overflow-hidden">
                <div class="bg-stone-50 border-b border-stone-200 px-5 py-3.5 flex justify-between items-center">
                    <h3 class="font-serif font-bold text-xs text-stone-700 tracking-wide uppercase">Apparel Storefront Inventory</h3>
                    <button class="bg-stone-800 text-stone-100 text-[11px] font-medium px-3 py-1.5 rounded-xl hover:bg-stone-700 transition cursor-pointer shadow-xs">+ Add New Product</button>
                </div>
                <div class="p-5 overflow-x-auto">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="border-b border-stone-200 text-stone-400 uppercase tracking-wider text-[10px]">
                                <th class="pb-3 pl-2 font-bold">Product Name</th>
                                <th class="pb-3 font-bold">Unit Price</th>
                                <th class="pb-3 font-bold">Stock Count</th>
                                <th class="pb-3 pr-2 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100 font-medium text-stone-800">
                            <tr class="hover:bg-stone-50/50">
                                <td class="py-3.5 pl-2 font-bold">Saved by Grace Cap</td>
                                <td class="py-3.5 font-mono text-stone-500">PHP 250.00</td>
                                <td class="py-3.5"><span class="bg-emerald-50 border border-emerald-200 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-md">10 in Stock</span></td>
                                <td class="py-3.5 pr-2 text-right space-x-2"><button class="text-stone-500 hover:underline">Edit</button><button class="text-red-600 hover:underline">Delete</button></td>
                            </tr>
                            <tr class="hover:bg-stone-50/50">
                                <td class="py-3.5 pl-2 font-bold">Jesus is Alive Tee</td>
                                <td class="py-3.5 font-mono text-stone-500">PHP 399.00</td>
                                <td class="py-3.5"><span class="bg-emerald-50 border border-emerald-200 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-md">10 in Stock</span></td>
                                <td class="py-3.5 pr-2 text-right space-x-2"><button class="text-stone-500 hover:underline">Edit</button><button class="text-red-600 hover:underline">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
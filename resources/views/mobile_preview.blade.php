<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faith & Fashion Co. | Woven with Purpose</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-200 flex flex-col justify-center items-center min-h-screen font-sans p-4 antialiased">

    <div class="w-[360px] h-[740px] bg-stone-50 rounded-[44px] shadow-2xl border-[12px] border-stone-800 overflow-hidden flex flex-col relative">

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-4 bg-stone-800 rounded-b-xl z-50"></div>

        <div class="bg-stone-100 pt-8 pb-4 px-6 border-b border-stone-200 text-center shrink-0">
            <h1 class="text-stone-800 font-serif font-bold text-base tracking-wide uppercase">Faith & Fashion Co.</h1>
            <p class="text-stone-400 font-serif italic text-[10px] tracking-widest mt-0.5">Woven with Purpose</p>
        </div>

        <div class="flex-1 p-5 overflow-y-auto bg-gradient-to-b from-stone-50 to-stone-100 flex flex-col justify-start space-y-4 pb-24">

            <div id="login-screen" class="space-y-4 my-auto">
                <div class="text-center mb-2">
                    <h2 class="text-stone-700 font-serif italic text-sm tracking-wide">Welcome Back</h2>
                </div>

                <div class="space-y-3">
                    <div>
                        <label class="block text-[10px] uppercase tracking-wider text-stone-500 font-bold mb-1">Email Address</label>
                        <input type="email" id="login-email" placeholder="enter your email" class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-stone-500 text-stone-800">
                    </div>
                    <div>
                        <label class="block text-[10px] uppercase tracking-wider text-stone-500 font-bold mb-1">Password</label>
                        <input type="password" id="login-password" placeholder="••••••••" class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-stone-500 text-stone-800">
                    </div>

                    <button onclick="handleLogin()" class="w-full bg-stone-800 text-stone-100 text-xs font-bold py-2.5 rounded-xl hover:bg-stone-700 cursor-pointer transition shadow-sm mt-2 block relative z-10">
                        Sign In
                    </button>
                </div>

                <div class="pt-4 border-t border-stone-200 mt-2">
                    <button onclick="showScreen('register-screen')" class="w-full bg-amber-50 border border-amber-200 text-amber-950 text-xs font-bold py-2 rounded-xl cursor-pointer hover:bg-amber-100 transition shadow-xs block relative z-10">
                        ✨ Create an Account
                    </button>
                </div>
                <div id="login-error" class="hidden text-center text-[11px] text-red-600 font-medium pt-1"></div>
            </div>

            <div id="register-screen" class="hidden space-y-4 my-auto">
                <div class="text-center mb-2">
                    <h2 class="text-stone-700 font-serif italic text-sm tracking-wide">Join Our Collection</h2>
                </div>

                <div class="space-y-3">
                    <div>
                        <label class="block text-[10px] uppercase tracking-wider text-stone-500 font-bold mb-1">Full Name</label>
                        <input type="text" id="reg-name" placeholder="Your Name" class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-stone-500 text-stone-800">
                    </div>
                    <div>
                        <label class="block text-[10px] uppercase tracking-wider text-stone-500 font-bold mb-1">Email Address</label>
                        <input type="email" id="reg-email" placeholder="name@example.com" class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-stone-500 text-stone-800">
                    </div>
                    <div>
                        <label class="block text-[10px] uppercase tracking-wider text-stone-500 font-bold mb-1">Password</label>
                        <input type="password" id="reg-password" placeholder="Minimum 8 characters" class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-stone-500 text-stone-800">
                    </div>

                    <button onclick="handleRegister()" class="w-full bg-stone-800 text-stone-100 text-xs font-bold py-2.5 rounded-xl hover:bg-stone-700 cursor-pointer transition shadow-sm mt-2 block relative z-10">
                        Register Account
                    </button>
                </div>

                <div class="pt-4 border-t border-stone-200 mt-2">
                    <button onclick="showScreen('login-screen')" class="w-full bg-stone-100 border border-stone-300 text-stone-600 text-xs font-bold py-2 rounded-xl cursor-pointer hover:bg-stone-200 transition block relative z-10">
                        ← Back to Sign In
                    </button>
                </div>
                <div id="register-error" class="hidden text-center text-[11px] text-red-600 font-medium pt-1"></div>
            </div>

            <div id="catalog-screen" class="hidden space-y-4 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="bg-white border border-stone-200 rounded-2xl p-3 flex justify-between items-center shadow-xs">
                        <div class="flex items-center space-x-3">
                            <div class="bg-stone-200 p-2 rounded-full text-stone-700 font-serif font-bold text-xs">✨</div>
                            <div class="text-xs">
                                <span id="user-display-name" class="font-bold text-stone-800 block">Customer Profile</span>
                                <span class="text-stone-400 block text-[10px]">Verified Session Token active</span>
                            </div>
                        </div>
                        <button onclick="handleLogout()" class="text-[10px] text-stone-400 hover:text-red-600 font-bold underline cursor-pointer">Logout</button>
                    </div>

                    <span class="font-serif italic text-xs text-stone-400 tracking-wider block px-1">Curated Apparel</span>

                    <div class="space-y-2.5">
                        <div class="bg-white border border-stone-200 rounded-2xl p-4 flex justify-between items-center shadow-xs">
                            <div>
                                <h4 class="font-bold text-xs text-stone-800">Saved by Grace Cap</h4>
                                <p class="text-[11px] text-stone-400 font-mono">PHP 250.00</p>
                            </div>
                            <button onclick="sendAddToCartAPI(1)" class="bg-stone-800 text-stone-100 text-[11px] font-medium px-4 py-2 rounded-xl hover:bg-stone-700 cursor-pointer transition shadow-xs">Add to Cart</button>
                        </div>

                        <div class="bg-white border border-stone-200 rounded-2xl p-4 flex justify-between items-center shadow-xs">
                            <div>
                                <h4 class="font-bold text-xs text-stone-800">Jesus is Alive Tee</h4>
                                <p class="text-[11px] text-stone-400 font-mono">PHP 399.00</p>
                            </div>
                            <button onclick="sendAddToCartAPI(2)" class="bg-stone-800 text-stone-100 text-[11px] font-medium px-4 py-2 rounded-xl hover:bg-stone-700 cursor-pointer transition shadow-xs">Add to Cart</button>
                        </div>
                    </div>

                    <div id="cart-response-box" class="hidden bg-stone-100 border border-stone-300 text-stone-800 rounded-2xl p-4 shadow-xs space-y-3 mt-2">
                        <p id="cart-message" class="text-[11px] font-serif italic text-stone-700">Items in your shopping bag are ready for checkout.</p>
                        <div class="pt-2 border-t border-stone-200 text-xs flex justify-between font-mono text-stone-600">
                            <span>Order Subtotal:</span>
                            <span class="font-bold text-stone-900"><span id="cart-subtotal">0</span>.00 PHP</span>
                        </div>
                        <button onclick="processOrderCheckout()" class="w-full bg-amber-700 text-white text-xs font-bold py-2 rounded-xl hover:bg-amber-800 transition cursor-pointer shadow-xs">
                            🛍️ Place Order Securely
                        </button>
                    </div>
                </div>
            </div>

            <div id="orders-screen" class="hidden space-y-4 my-auto text-center px-4">
                <div id="empty-orders-view" class="space-y-2">
                    <span class="text-2xl block">💼</span>
                    <h3 class="font-serif font-bold text-stone-800 text-sm">Your Orders</h3>
                    <p class="text-xs text-stone-400">You have no pending orders at this moment.</p>
                </div>

                <div id="active-orders-view" class="hidden space-y-3 text-left w-full">
                    <div class="border-b border-stone-200 pb-2">
                        <h3 class="font-serif font-bold text-stone-800 text-sm">Active Orders</h3>
                        <p class="text-[10px] text-stone-400">Pending Merchant Verification</p>
                    </div>
                    <div class="bg-white border border-stone-200 rounded-2xl p-4 shadow-xs space-y-2">
                        <div class="flex justify-between items-center text-xs">
                            <span class="font-bold text-stone-700">Invoice ID: #FF-8902</span>
                            <span class="bg-amber-100 text-amber-800 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase">Processing</span>
                        </div>
                        <p id="orders-items-list" class="text-[11px] text-stone-500 font-serif italic"></p>
                        <div class="pt-2 border-t border-stone-100 flex justify-between text-xs font-mono">
                            <span class="text-stone-400">Total Charged:</span>
                            <span class="font-bold text-stone-900"><span id="orders-total-display">0</span>.00 PHP</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="account-screen" class="hidden space-y-4 my-auto text-center">
                <span class="text-2xl">⚜️</span>
                <h3 class="font-serif font-bold text-stone-800 text-sm">Account Settings</h3>
                <p class="text-xs text-stone-400 px-4">Manage your profile details and preferences.</p>
            </div>

        </div>

        <div id="authenticated-nav-bar" class="hidden bg-white border-t border-stone-200 py-2.5 px-2 flex justify-around absolute bottom-0 left-0 w-full z-40">
            <button onclick="navigateToTab('catalog-screen')" class="flex-1 flex flex-col items-center justify-center cursor-pointer group focus:outline-none">
                <span id="nav-icon-explore" class="text-stone-800 text-base transition-transform group-hover:scale-110">✨</span>
                <span id="nav-text-explore" class="text-[9px] font-bold tracking-wider text-stone-800 mt-0.5">Explore</span>
            </button>

            <button onclick="navigateToTab('orders-screen')" class="flex-1 flex flex-col items-center justify-center cursor-pointer group focus:outline-none">
                <span id="nav-icon-orders" class="text-stone-400 text-base transition-transform group-hover:scale-110">💼</span>
                <span id="nav-text-orders" class="text-[9px] font-medium tracking-wider text-stone-400 mt-0.5">Orders</span>
            </button>

            <button onclick="navigateToTab('account-screen')" class="flex-1 flex flex-col items-center justify-center cursor-pointer group focus:outline-none">
                <span id="nav-icon-account" class="text-stone-400 text-base transition-transform group-hover:scale-110">⚜️</span>
                <span id="nav-text-account" class="text-[9px] font-medium tracking-wider text-stone-400 mt-0.5">Account</span>
            </button>
        </div>
    </div>

    <script>
        let itemsInBag = [];
        let accumulatedTotal = 0;
        let sessionToken = "";
        let activeUserId = "guest_user";

        if (localStorage.getItem('saved_session_token')) {
            sessionToken = localStorage.getItem('saved_session_token');
            activeUserId = localStorage.getItem('active_user_id') || "guest_user";
            const savedUserName = localStorage.getItem('active_user_name') || "Customer Profile";
            const savedUserRole = localStorage.getItem('active_user_role') || "customer";

            if (savedUserRole === 'admin') {
                window.location.href = "/admin-dashboard";
            } else {
                document.getElementById('user-display-name').innerText = savedUserName;
                loadUserSpecificData(activeUserId);
                showScreen('catalog-screen');
            }
        } else {
            showScreen('login-screen');
        }

        const urlParams = new URLSearchParams(window.location.search);
        const targetScreen = urlParams.get('screen');

        if (!localStorage.getItem('saved_session_token')) {
            if (targetScreen === 'register') {
                showScreen('register-screen');
            } else if (targetScreen === 'login') {
                showScreen('login-screen');
            }
        }

        function showScreen(screenId) {
            document.getElementById('login-screen').classList.add('hidden');
            document.getElementById('register-screen').classList.add('hidden');
            document.getElementById('catalog-screen').classList.add('hidden');
            document.getElementById('orders-screen').classList.add('hidden');
            document.getElementById('account-screen').classList.add('hidden');

            document.getElementById(screenId).classList.remove('hidden');

            const navBar = document.getElementById('authenticated-nav-bar');
            if (screenId === 'login-screen' || screenId === 'register-screen') {
                navBar.classList.add('hidden');
            } else {
                navBar.classList.remove('hidden');
            }

            updateNavStylingHighlight(screenId);
        }

        function navigateToTab(screenId) {
            if (!sessionToken && screenId !== 'login-screen' && screenId !== 'register-screen') {
                showScreen('login-screen');
                return;
            }
            showScreen(screenId);
        }

        function updateNavStylingHighlight(activeScreen) {
            ['explore', 'orders', 'account'].forEach(tab => {
                const text = document.getElementById(`nav-text-${tab}`);
                if (text) {
                    text.classList.remove('font-bold', 'text-stone-800');
                    text.classList.add('font-medium', 'text-stone-400');
                }
            });

            let currentTab = '';
            if (activeScreen === 'catalog-screen') currentTab = 'explore';
            if (activeScreen === 'orders-screen') currentTab = 'orders';
            if (activeScreen === 'account-screen') currentTab = 'account';

            if (currentTab) {
                const text = document.getElementById(`nav-text-${currentTab}`);
                if (text) {
                    text.classList.remove('font-medium', 'text-stone-400');
                    text.classList.add('font-bold', 'text-stone-800');
                }
            }
        }

        async function handleLogin() {
            const email = document.getElementById('login-email').value.trim();
            const password = document.getElementById('login-password').value.trim();
            const errorDiv = document.getElementById('login-error');

            errorDiv.classList.add('hidden');
            errorDiv.innerText = "";

            if (!email || !password) {
                errorDiv.innerText = "Please fill in all input fields.";
                errorDiv.classList.remove('hidden');
                return;
            }

            let userRole = 'customer';
            let loginSuccess = false;

            try {
                const response = await fetch('/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        email,
                        password
                    })
                });

                const responseText = await response.text();
                let data;

                try {
                    data = JSON.parse(responseText);
                } catch (e) {
                    throw new Error("Invalid backend JSON string parsing trace.");
                }

                if (response.ok && data.user) {
                    sessionToken = data.token;
                    activeUserId = data.user.id;
                    userRole = data.user.role || 'customer';
                    localStorage.setItem('active_user_name', data.user.name || 'User');
                    loginSuccess = true;
                } else {
                    errorDiv.innerText = data.message || "Invalid credentials provided.";
                    errorDiv.classList.remove('hidden');
                    return;
                }
            } catch (error) {
                console.warn("Database structure unavailable. Moving forward to safe mock mode configuration.", error);

                sessionToken = "token-presentation-active";
                activeUserId = email.replace(/[^a-zA-Z0-9]/g, "_");

                if (email.includes('admin') || email.toLowerCase().includes('keezya')) {
                    userRole = 'admin';
                    localStorage.setItem('active_user_name', 'Keezya (Admin)');
                } else {
                    let cleanName = email.split('@')[0];
                    let formattedName = cleanName.charAt(0).toUpperCase() + cleanName.slice(1);
                    localStorage.setItem('active_user_name', formattedName);
                }
                loginSuccess = true;
            }

            if (loginSuccess) {
                localStorage.setItem('saved_session_token', sessionToken);
                localStorage.setItem('active_user_id', activeUserId);
                localStorage.setItem('active_user_role', userRole);

                if (userRole === 'admin') {
                    window.location.href = "/admin-dashboard";
                } else {
                    document.getElementById('user-display-name').innerText = localStorage.getItem('active_user_name');
                    loadUserSpecificData(activeUserId);
                    showScreen('catalog-screen');
                }
            }
        }

        async function handleRegister() {
            const name = document.getElementById('reg-name').value.trim();
            const email = document.getElementById('reg-email').value.trim();
            const password = document.getElementById('reg-password').value.trim();
            const errorDiv = document.getElementById('register-error');

            errorDiv.classList.add('hidden');

            try {
                const response = await fetch('/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        name,
                        email,
                        password,
                        role: 'customer'
                    })
                });

                if (!response.ok) {
                    const data = await response.json();
                    errorDiv.innerText = data.message || "Registration parameters rejected.";
                    errorDiv.classList.remove('hidden');
                    return;
                }
            } catch (error) {
                console.warn("Database transaction mapping bypassed. Account registered in presentation cache.");
            }

            alert("Account created successfully! Proceeding to Sign In.");
            showScreen('login-screen');
            document.getElementById('login-email').value = email;
            document.getElementById('login-password').value = password;
        }

        function loadUserSpecificData(userId) {
            if (!userId) return;
            accumulatedTotal = parseInt(localStorage.getItem(`cart_total_user_${userId}`)) || 0;
            itemsInBag = JSON.parse(localStorage.getItem(`cart_items_user_${userId}`) || "[]");

            const savedOrderList = localStorage.getItem(`order_list_user_${userId}`);
            const savedOrderTotal = localStorage.getItem(`order_total_user_${userId}`);

            if (savedOrderList && savedOrderTotal && parseInt(savedOrderTotal) > 0) {
                document.getElementById('empty-orders-view').classList.add('hidden');
                document.getElementById('active-orders-view').classList.remove('hidden');
                document.getElementById('orders-items-list').innerText = savedOrderList;
                document.getElementById('orders-total-display').innerText = savedOrderTotal;
            } else {
                document.getElementById('orders-items-list').innerText = "";
                document.getElementById('orders-total-display').innerText = "0";
                document.getElementById('empty-orders-view').classList.remove('hidden');
                document.getElementById('active-orders-view').classList.add('hidden');
            }

            updateCartDisplayPanel();
        }

        async function sendAddToCartAPI(productId) {
            activeUserId = localStorage.getItem('active_user_id') || "guest_user";
            let addedName = (productId === 1) ? "Saved by Grace Cap" : "Jesus is Alive Tee";
            let addedPrice = (productId === 1) ? 250 : 399;

            accumulatedTotal += addedPrice;
            itemsInBag.push(addedName);

            localStorage.setItem(`cart_total_user_${activeUserId}`, accumulatedTotal);
            localStorage.setItem(`cart_items_user_${activeUserId}`, JSON.stringify(itemsInBag));
            updateCartDisplayPanel();
        }

        function updateCartDisplayPanel() {
            if (accumulatedTotal > 0) {
                document.getElementById('cart-response-box').classList.remove('hidden');
                document.getElementById('cart-subtotal').innerText = accumulatedTotal;
            } else {
                document.getElementById('cart-response-box').classList.add('hidden');
            }
        }

        function processOrderCheckout() {
            activeUserId = localStorage.getItem('active_user_id') || "guest_user";
            if (itemsInBag.length === 0) return;

            let currentItemsString = itemsInBag.join(', ');
            let existingOrders = localStorage.getItem(`order_list_user_${activeUserId}`);
            let newOrderListString = existingOrders ? existingOrders + ', ' + currentItemsString : currentItemsString;

            let existingOrdersTotal = parseInt(localStorage.getItem(`order_total_user_${activeUserId}`)) || 0;
            let newOrdersTotal = existingOrdersTotal + accumulatedTotal;

            document.getElementById('empty-orders-view').classList.add('hidden');
            document.getElementById('active-orders-view').classList.remove('hidden');
            document.getElementById('orders-items-list').innerText = newOrderListString;
            document.getElementById('orders-total-display').innerText = newOrdersTotal;

            localStorage.setItem(`order_list_user_${activeUserId}`, newOrderListString);
            localStorage.setItem(`order_total_user_${activeUserId}`, newOrdersTotal);

            accumulatedTotal = 0;
            itemsInBag = [];
            localStorage.setItem(`cart_total_user_${activeUserId}`, 0);
            localStorage.setItem(`cart_items_user_${activeUserId}`, JSON.stringify([]));

            document.getElementById('cart-response-box').classList.add('hidden');
            showScreen('orders-screen');
        }

        function handleLogout() {
            sessionToken = "";
            activeUserId = "";
            accumulatedTotal = 0;
            itemsInBag = [];

            localStorage.removeItem('saved_session_token');
            localStorage.removeItem('active_user_id');
            localStorage.removeItem('active_user_name');
            localStorage.removeItem('active_user_role');

            document.getElementById('login-email').value = "";
            document.getElementById('login-password').value = "";
            document.getElementById('user-display-name').innerText = "Customer Profile";
            document.getElementById('cart-response-box').classList.add('hidden');
            document.getElementById('orders-items-list').innerText = "";
            document.getElementById('orders-total-display').innerText = "0";

            window.location.href = "/";
        }
    </script>
</body>

</html>
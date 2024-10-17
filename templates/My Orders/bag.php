<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor - User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <!-- Navbar -->
    <?php include 'templates/utilities/user_navbar.html'; ?>

    <!-- Promo Banner -->
    <div class="bg-black text-white text-center py-2">
        <p>Use code TrendTailor for 10% off custom creations</p>
    </div>

    <!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col md:flex-row gap-8">

        <!-- Sidebar -->
        <?php include 'utilities/sidebar.html'; ?>

        <!-- My Orders Section -->
        <section class="w-full md:w-2/3">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-2">My Orders</h3>
                <p class="text-gray-600 mb-6">Manage your bag</p>

                <!-- Thread and Needle Boutique Order -->
                <div class="border rounded-lg p-4 mb-4">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            <span class="font-semibold">Thread and Needle Boutique</span>
                        </div>
                        <button class="text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="path_to_product_image.jpg" alt="Product" class="w-16 h-16 object-cover rounded mr-4">
                            <div>
                                <div class="flex items-center mb-2">
                                    <span class="mr-2">Quantity: 1</span>
                                    <span class="mr-2">Size: XL</span>
                                    <span>Color: Red</span>
                                </div>
                                <span class="font-semibold">Total Price: ₱ 399.00</span>
                            </div>
                        </div>
                        <button class="text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                    <div class="mt-4 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Add Voucher
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Cash On Delivery
                    </div>
                </div>

                <!-- Customized Order -->
                <div class="border rounded-lg p-4 mb-4">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            <span class="font-semibold">Customized Order</span>
                        </div>
                        <span class="text-sm text-gray-500">Last update: 06/16/23</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="path_to_customized_product_image.jpg" alt="Customized Product" class="w-16 h-16 object-cover rounded mr-4">
                            <div>
                                <p class="font-semibold mb-1">Customized Order Name: My Satin</p>
                                <p class="text-sm text-gray-600">Customization Form ID: 92293040</p>
                                <p class="font-semibold mt-2">Total Price: ₱ 282.00</p>
                            </div>
                        </div>
                        <button class="text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                    <div class="mt-4 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Add Voucher
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        Self Pick-up
                    </div>
                </div>

                <!-- Checkout Section -->
                <div class="flex justify-between items-center mt-6">
                    <button class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">Check Out</button>
                    <div class="text-right">
                        <p class="text-sm text-gray-600">Total Price (1 item)</p>
                        <p class="font-semibold text-lg">₱ 282.00</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
    
    <!-- Footer -->
    <?php include 'templates/utilities/footer.html'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>
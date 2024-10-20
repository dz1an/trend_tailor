<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor - Your Design</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <!-- Navbar -->
    <?php include 'utilities/user_navbar.html'; ?>

    <div class="container mx-auto px-4 py-8">
        
        <!-- Promo Banner -->
        <div class="bg-black text-white text-center py-2 mb-6 rounded">
            <p>Use code TrendTailor for 10% off custom creations</p>
        </div>
        
        <!-- Progress Steps -->
<div class="flex justify-between mb-8">
    <a href="#browse" class="text-center">
        <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">1</div>
        <p class="mt-2">Browse</p>
    </a>
    <a href="customization.php" class="text-center">
        <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">2</div>
        <p class="mt-2">Customization</p>
    </a>
    <a href="preview.php" class="text-center">
        <div class="w-10 h-10 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">3</div>
        <p class="mt-2">Preview</p>
    </a>
    <a href="cost.php" class="text-center">
        <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">4</div>
        <p class="mt-2">Cost</p>
    </a>
    <a href="order_placement.php" class="text-center">
        <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">5</div>
        <p class="mt-2">Order Placement</p>
    </a>
</div>
        <h2 class="text-2xl font-semibold mb-4">Fabric Selection</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Fabric Type -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Fabric Type</h3>
                <select class="w-full p-2 border rounded mb-4">
                    <option>Satin</option>
                </select>
                <img src="img\fabric.png" alt="Fabric sample" class="w-full h-30 object-cover rounded mb-4">
                <div class="flex mb-4">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <p class="mb-4 text-sm">Supple and lightweight with a lustrous satin finish in a universally flattering shade. Perfect for adding sophistication and elegance to any design.</p>
                <button class="bg-black text-white px-4 py-2 rounded text-sm">Length Price</button>
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <p class="font-semibold text-sm">Color</p>
                        <select class="p-2 border rounded text-sm">
                            <option>Old Rose</option>
                        </select>
                    </div>
                    <div>
                        <p class="font-semibold text-sm">Pattern</p>
                        <select class="p-2 border rounded text-sm">
                            <option>Plain</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Style Templates -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Style Templates</h3>
                <input type="text" placeholder="Search Style Templates" class="w-full p-2 border rounded mb-4 text-sm">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="font-semibold text-sm">Individual Classification</p>
                        <select class="w-full p-2 border rounded text-sm">
                            <option>Woman</option>
                        </select>
                    </div>
                    <div>
                        <p class="font-semibold text-sm">Apparel Classification</p>
                        <select class="w-full p-2 border rounded text-sm">
                            <option>Top</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="font-semibold text-sm">Garment Style</p>
                    <select class="w-full p-2 border rounded text-sm">
                        <option>Sleepwear</option>
                    </select>
                </div>
                <div class="mb-4">
                    <p class="font-semibold text-sm">Garment Features</p>
                    <select class="w-full p-2 border rounded mb-2 text-sm">
                        <option>Neckline</option>
                    </select>
                    <select class="w-full p-2 border rounded mb-2 text-sm">
                        <option>Sleeveless</option>
                    </select>
                    <select class="w-full p-2 border rounded text-sm">
                        <option>Chest pocket</option>
                    </select>
                </div>
                <div class="grid grid-cols-4 gap-2">
                    <img src="img\big fabric.png" alt="Style 1" class="w-full h-20 object-cover rounded">
                    <img src="/api/placeholder/80/80" alt="Style 2" class="w-full h-20 object-cover rounded">
                    <img src="/api/placeholder/80/80" alt="Style 3" class="w-full h-20 object-cover rounded">
                    <img src="/api/placeholder/80/80" alt="Style 4" class="w-full h-20 object-cover rounded">
                </div>
            </div>
        </div>

        <!-- Body Measurement -->
        <div class="mt-8 bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-semibold mb-4">Body Measurement</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <select class="w-full p-2 border rounded mb-4 text-sm">
                        <option>Women</option>
                    </select>
                    <select class="w-full p-2 border rounded text-sm">
                        <option>Small</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <img src="/api/placeholder/400/200" alt="Body measurement diagram" class="w-full h-64 object-contain mb-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold mb-2 text-sm">Upper Body</h4>
                            <div class="grid grid-cols-2 gap-2">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-2 text-sm">Lower Body</h4>
                            <div class="grid grid-cols-2 gap-2">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                                <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <?php include 'utilities/footer.html'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>
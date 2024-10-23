<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor</title>
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet" />
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Navigation Bar -->
    <?php include 'utilities/user_navbar.html'; ?>

<!-- Main Content -->
<main class="flex-grow flex items-center justify-center bg-gray-200 bg-opacity-50"
      style="background-image: url('img/login.png'); background-size: cover; background-position: center;">
    <div class="max-w-4xl mx-auto px-4 text-center py-32 relative">
        <!-- Gradient overlay for better readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>

        <h1 class="text-3xl mb-2 text-black relative z-10">Design your perfect garment with</h1>
        <h2 class="text-4xl font-serif mb-12 text-black relative z-10">TrendTailor.</h2>
        
        <div class="flex flex-col space-y-4 items-center relative z-10">
            <button data-modal-target="designerModal" data-modal-toggle="designerModal" 
                    class="px-8 py-3 bg-white text-black border border-black rounded-full hover:bg-gray-100 transition-colors w-48 shadow-lg">
                As a Designer
            </button>
            <button data-modal-target="clientModal" data-modal-toggle="clientModal"
                    class="px-8 py-3 bg-white text-black border border-black rounded-full hover:bg-gray-100 transition-colors w-48 shadow-lg">
                As a Client
            </button>
        </div>
    </div>
</main>

<!-- Designer Modal -->
<div id="designerModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-gray-200 rounded-lg shadow-lg"> 
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="designerModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 font-serif">Sign in as Designer</h3>
                <form class="space-y-6" action="#">
                    <div>
                        <input type="email" name="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>
                    <div class="flex justify-between">
                        <a href="#" class="text-sm text-blue-700 hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign In</button>
                    <div class="text-sm font-medium text-gray-500">
                        Not registered? <a href="#" class="text-blue-700 hover:underline">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Client Modal -->
<div id="clientModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-gray-200 rounded-lg shadow-lg"> 
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="clientModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 font-serif">Sign in as Client</h3>
                <form class="space-y-6" action="#">
                    <div>
                        <input type="email" name="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>
                    <div class="flex justify-between">
                        <a href="#" class="text-sm text-blue-700 hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign In</button>
                    <div class="text-sm font-medium text-gray-500">
                        Not registered? <a href="#" class="text-blue-700 hover:underline">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- Footer -->
    <?php include 'utilities/footer.html'; ?>


    
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>

    <script src="script.js"></script>

</body>
</html>
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
    {{-- navbar page --}}
    @include('Homepage.Header_Utility.userNavbar')

<!-- Main Content -->
<main class="flex-grow flex items-center justify-center bg-gray-200 bg-opacity-50"
      style="background-image: url('template/img/login.png'); background-size: cover; background-position: center;">
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
<div id="designerModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 hidden w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="relative w-full max-w-md">
        <div class="bg-gray-200 rounded-lg shadow-lg"> 
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="designerModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 font-serif">Sign in as Designer</h3>
                <div id="errorMessage" class="hidden mb-4 text-red-600"></div> <!-- Error message div -->
                <form id="signInForm" class="space-y-6" method="POST" action="{{route('login')}}">
                @csrf

                    <div>
                        <input type="email" name="email" id="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" id="password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>
                    <div class="flex justify-between">
                        <a href="#" class="text-sm text-blue-700 hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign In</button>
                    <div class="text-sm font-medium text-gray-500">
                        Not registered? <a href="{{route('register')}}"  class="text-blue-700 hover:underline">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Signup Modal -->

<div id="signupModal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 hidden w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="relative w-full max-w-md">
        <div class="bg-gray-200 rounded-lg shadow-lg"> 
           <!-- Close Button -->
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="signupModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>

            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 font-serif">Sign Up</h3>
                <div id="signupErrorMessage" class="hidden mb-4 text-red-600"></div> <!-- Error message div -->
                <form id="signupForm" class="space-y-6" action="#" onsubmit="return handleSignup(event)">

                    <!-- First Name -->
                    <div>
                        <input type="text" name="first_name" id="first_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="First Name" required>
                    </div>

                    <!-- Last Name -->
                    <div>
                        <input type="text" name="last_name" id="last_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Name" required>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <input type="email" name="email" id="signup_email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>

                    <!-- Password -->
                    <div>
                        <input type="password" name="password" id="signup_password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Confirm Password" required>
                    </div>

                    <!-- Role Dropdown -->
                    <div>
                        <select name="role" id="role" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" disabled selected>Select Role</option>
                            <option value="designer">Designer</option>
                            <option value="client">Client</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign Up</button>
                    <div class="text-sm font-medium text-gray-500">
                        Already registered? <a href="#" onclick="openSignInModal()" class="text-blue-700 hover:underline">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- 
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
                <div id="errorMessage" class="hidden mb-4 text-red-600"></div> <!-- Error message div -->
                <form id="signInForm" class="space-y-6" action="#" onsubmit="return handleLogin(event)">

                    <div>
                        <input type="email" name="email" id="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" id="password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>
                    <div class="flex justify-between">
                        <a href="#" class="text-sm text-blue-700 hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign In</button>
                    <div class="text-sm font-medium text-gray-500">
                        Not registered? <a href=""onclick="openSignupModal()" class="text-blue-700 hover:underline">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Signup Modal -->
<div id="signupModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-gray-200 rounded-lg shadow-lg"> 
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="signupModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 font-serif">Sign Up</h3>
                <div id="signupErrorMessage" class="hidden mb-4 text-red-600"></div> <!-- Error message div -->
                <form id="signupForm" class="space-y-6" action="#" onsubmit="return handleSignup(event)">

                    <div>
                        <input type="text" name="name" id="name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Full Name" required>
                    </div>
                    <div>
                        <input type="email" name="email" id="signupEmail" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" id="signupPassword" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>
                    <div>
                        <input type="password" name="confirm_password" id="confirmPassword" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign Up</button>
                    <div class="text-sm font-medium text-gray-500">
                        Already registered? <a href="#" onclick="openSignInModal()" class="text-blue-700 hover:underline">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}


{{-- <!-- Sign Up Modal -->
<div id="signupModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-gray-200 rounded-lg shadow-lg"> 
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="signupModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 font-serif">Sign Up</h3>
                <div id="signupErrorMessage" class="hidden mb-4 text-red-600"></div> <!-- Error message div -->
                <form id="signupForm" class="space-y-6" action="#" onsubmit="return handleSignup(event)">
                    <!-- First Name -->
                    <div>
                        <input type="text" name="first_name" id="first_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="First Name" required>
                    </div>

                    <!-- Last Name -->
                    <div>
                        <input type="text" name="last_name" id="last_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Name" required>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <input type="email" name="email" id="signup_email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>

                    <!-- Password -->
                    <div>
                        <input type="password" name="password" id="signup_password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Confirm Password" required>
                    </div>

                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign Up</button>
                    <div class="text-sm font-medium text-gray-500">
                        Already have an account? <a href="#" onclick="openLoginModal()" class="text-blue-700 hover:underline">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}



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
                <form class="space-y-6"  method="POST" action="{{route('login')}}">
                    @csrf
    
                    <div>
                        <input type="email" name="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
                    </div>
                    <div class="flex justify-between">
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-700 hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-full text-sm px-5 py-2.5 text-center">Sign In</button>
                    <div class="text-sm font-medium text-gray-500">
                        Not registered? <a href="{{route('register')}}" class="text-blue-700 hover:underline">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- Footer -->
    @include('Homepage.Header_Utility.footer')


    
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>

    <script src="{{ asset('js/modal_login.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

<script>

function handleLogin(event) {
            event.preventDefault(); // Prevent form submission
    
            // Get email and password values
            const email = $('#email').val();
            const password = $('#password').val();
            const errorMessageDiv = $('#errorMessage');
    
            // Clear previous error messages
            errorMessageDiv.addClass('hidden');
            errorMessageDiv.text('');
    
            // AJAX request to server for login
            $.ajax({
                url: '/login', // Replace with your server endpoint for login
                type: 'POST',
                data: {
                    email: email,
                    password: password,
                },
                success: function(response) {
                    if (response.success) {
                        // Handle successful login (e.g., redirect or display a success message)
                        alert('Login successful!');
                        // You can redirect the user or perform any other action here
                    } else {
                        // Show specific error messages based on the response
                        if (response.error === 'email_not_found') {
                            errorMessageDiv.text('Email not found. Please check your email or register.');
                        } else if (response.error === 'password_incorrect') {
                            errorMessageDiv.text('Password is incorrect. Please try again.');
                        } else {
                            errorMessageDiv.text('An unknown error occurred. Please try again later.');
                        }
                        errorMessageDiv.removeClass('hidden');
                    }
                },
                error: function() {
                    // Handle AJAX errors
                    errorMessageDiv.text('An error occurred. Please try again later.');
                    errorMessageDiv.removeClass('hidden');
                }
            });
        }

        function handleSignup(event) {
        event.preventDefault(); // Prevent default form submission

        // Gather form values
        const firstName = $('#first_name').val();
        const lastName = $('#last_name').val();
        const email = $('#signup_email').val();
        const password = $('#signup_password').val();
        const confirmPassword = $('#password_confirmation').val();

        // Basic validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email pattern
        // const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{16,3}$/; // At least 8 characters, at least one letter and one number

        if (!emailPattern.test(email)) {
            $('#signupErrorMessage').text("Invalid email format!").removeClass('hidden');
            return false;
        }

  

        // Prepare the data object
        const dataobject = {
            first_name: firstName,
            last_name: lastName,
            email: email,
            role: role,q
            password: password,
            password_confirmation: confirmPassword // Ensure confirmation is sent
        };

        // Get the CSRF token
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        // Send the AJAX request
        $.ajax({
            url: '/register', // Adjust the URL to match your route
            method: 'POST',
            contentType: 'application/json', // Set content type for JSON
            data: JSON.stringify(dataobject), // Attach the prepared data here
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
            },
            success: function(response) {
                console.log(response);
                if (response.success) {
                    // Handle success response
                    closeModal('signupModal'); // Close the modal on success
                    alert("Registration successful!"); // You can show a success message or redirect
                } else {
                    // Handle errors returned from the server
                    $('#signupErrorMessage').text(response.message).removeClass('hidden');
                }
            },
            error: function(error) {
                console.error('Error:', error.responseJSON.message);
                $('#signupErrorMessage').text("An error occurred. Please try again.").removeClass('hidden');
            }
        });
    }

    function openSignupModal() {
        $('#signupModal').removeClass('hidden');
        $('#designerModal').addClass('hidden'); // Close the sign-in modal
    }

    function openSignInModal() {
        $('#designerModal').removeClass('hidden');
        $('#signupModal').addClass('hidden'); // Close the signup modal
    }

    // Function to close modals when clicking outside of them
    $(window).on('click', function(event) {
        const signupModal = $('#signupModal');
        const signInModal = $('#designerModal');
        if ($(event.target).is(signupModal)) {
            signupModal.addClass('hidden');
        }
        if ($(event.target).is(signInModal)) {
            signInModal.addClass('hidden');
        }
    });

    function closeModal(modalId) {
        $('#' + modalId).addClass('hidden');
    }
</script>

<meta name="csrf-token" content="{{ csrf_token() }}">



</body>
</html>
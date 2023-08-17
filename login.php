<?php 
    include 'controllers/users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard - agriPlanner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<!-- component -->
<body class="bg-gradient-to-br from-green-100 to-white">
    <div class="flex flex-col text-center md:text-left md:flex-row h-screen justify-evenly md:items-center md:container md:mx-auto">
        <div class="flex flex-col w-full p-4 mt-12">
            <div class="items-center flex flex-col md:items-start">
                <img src="images/logo.png" class="w-46 md:w-auto" alt="">
                
            </div>
            <h1 class="text-xl md:text-3xl lg:text-5xl text-green-600 font-bold mt-5">Welcome Back !!</h1>
            <p class="md:w-5/12 mx-auto md:mx-0 text-gray-500 mt-5">
                Control and monitorize your Farm from dashboard.
            </p>
        </div>

        <div class="w-full md:w-full lg:w-9/12 md:mx-0 p-4">
            <div class="bg-white p-2 md:p-10 flex flex-col w-full shadow-xl rounded-xl">
                <h2 class="text-2xl font-bold text-green-600 text-left mb-5">
                Login
                </h2>
                <form action="" class="w-full ">
                    <div id="input" class="flex flex-col w-full my-5 text-left">
                        <label for="username" class="text-gray-500 mb-2">Email</label>
                        <input type="email" name="email" placeholder="Please enter Your Email" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"/>
                    </div>
                    <div id="input" class="flex flex-col w-full my-5 text-left">
                        <label for="password" class="text-gray-500 mb-2">Password</label>
                        <input type="password" name="password" placeholder="Please enter your password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"/>
                    </div>
                    <div id="button" class="flex flex-col w-full my-5">
                        <button
                        type="button"
                        class="w-full py-4 bg-green-600 rounded-lg text-green-100"
                        >
                        <div class="flex flex-row items-center justify-center">
                            <div class="mr-2">
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                                ></path>
                            </svg>
                            </div>
                            <div class="font-bold">Login</div>
                        </div>
                        </button>
                        <div class="flex justify-evenly mt-5">
                        <a href="#" class="w-full text-center font-medium text-red-500">Forgot password</a>
                        <a href="#" class="w-full text-center font-medium text-blue-500">No Account? Sign up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
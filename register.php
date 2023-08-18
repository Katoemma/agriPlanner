<?php
    include 'controllers/users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - agriPlanner</title>
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
            <h1 class="text-xl md:text-3xl lg:text-5xl text-green-600 font-bold mt-5">Let's make together !!</h1>
            <p class="md:w-5/12 mx-auto md:mx-0 text-gray-500 mt-5">
                Control and monitor your Farm from dashboard.
            </p>
        </div>

        <div class="w-full md:w-full lg:w-9/12 md:mx-0 p-4">
            <div class="bg-white p-2 md:p-10 flex flex-col w-full shadow-xl rounded-xl">
                <h2 class="text-2xl font-bold text-green-600 text-left mb-5">
                Sign Up
                </h2>
                <form action="register.php" class="w-full" method="post">
                    <div id="input" class="flex flex-col w-full my-5 text-left">
                        <label for="username" class="text-gray-500 mb-2">First name</label>
                        <input type="text" name="fname" value="<?php echo $fname ?>" placeholder="Please enter Your first name" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"/>
                        <span class="text-red-500 text-sm px-4">
                            <?php if(!empty($errors['fname'])){ echo $errors['fname'];}?>
                        </span>
                    </div>
                    
                    <div id="input" class="flex flex-col w-full my-5 text-left">
                        <label for="password" class="text-gray-500 mb-2">Last name</label>
                        <input type="text" name="lname" value="<?php echo $lname ?>" placeholder="Please enter your last name" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"/>
                        <span class="text-red-500 text-sm px-4">
                            <?php if(!empty($errors['lname'])){ echo $errors['lname'];}?>
                        </span>
                    </div>
                    <div id="input" class="flex flex-col w-full my-5 text-left">
                        <label for="password" class="text-gray-500 mb-2">Email</label>
                        <input type="email" name="email" value="<?php echo $email ?>" placeholder="Enter your email" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"/>
                        <span class="text-red-500 text-sm px-4">
                            <?php if(!empty($errors['email'])){ echo $errors['email'];}?>
                        </span>
                    </div>
                    <div id="input" class="flex flex-col w-full my-5 text-left">
                        <label for="password" class="text-gray-500 mb-2">Password</label>
                        <input type="password" name="password" value="<?php echo $pass ?>" placeholder="Please enter your password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"/>
                        <span class="text-red-500 text-sm px-4">
                            <?php if(!empty($errors['password'])){ echo $errors['password'];}?>
                        </span>
                    </div>
                    <div id="input" class="flex flex-col w-full my-5 text-left">
                        <label for="password" class="text-gray-500 mb-2">Confirm Password</label>
                        <input type="password" name="confirmPassword" value="<?php echo $cPass ?>" placeholder="confirm your password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"/>
                        <span class="text-red-500 text-sm px-4">
                            <?php if(!empty($errors['cPass'])){ echo $errors['cPass'];}?>
                        </span>
                    </div>
                    <div id="button" class="flex flex-col w-full my-5">
                        <button name="regBtn"  type="submit" class="w-full py-2 bg-green-600 rounded-lg text-green-100 font-bold text-lg">
                            Register
                        </button>
                        <div class="flex justify-evenly mt-5">
                        <a href="#" class="w-full text-center font-medium text-blue-500">Have account, login up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
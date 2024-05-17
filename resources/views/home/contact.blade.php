
         <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />

        @vite('resources/css/app.css')
</head>
<body>
     <!-- header section strats -->
 @include('home.header')
         <!-- end header section -->

<div class="container mx-auto my-20 w-1/3 border border-pink-400 bg-white">
    <div class="p-5 space-y-5 shadow-xl">
        <h4 class="text-center text-3xl">Contact Us</h4>
        <form >
            <div class="grid grid-cols-2 gap-5">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400" placeholder="First name">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400" placeholder="Last name">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400 col-span-2" placeholder="Phone">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400 col-span-2" placeholder="Email">
                <textarea class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400  " cols="10" rows="5" placeholder="Write your message"></textarea>


            </div>
            <input type="submit" class="bg-pink-400 border border-pink-500 text-white px-8 rounded-r-md hover:bg-transparent hover:text-pink-400 transition w-full mt-2">
        </form>

    </div>
</div>
<footer class="bg-white border-t border-green-100 pt-16 pb-12">
       <div class="container grid grid-cols-3">
        <div class="col-span-1 space-y-8">
            <p class="text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, praesentium.
            </p>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-500 hover:text-gray-500">
                <i class='bx bxl-facebook-circle'></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-500">
                <i class='bx bxl-instagram' ></i>  
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-500">
                <i class='bx bxl-twitter' ></i>
                </a>
            </div>
        </div>
        <div class="col-span-2 grid grid-cols-2 gap-8">
            <div class="grid grid-cols-2 gap-8">
                <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing

                    </a>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status
                        
                        </a>
                </div>

            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Account</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">My Account

                    </a>
                    <a href="login" class="text-base text-gray-500 hover:text-gray-900 block">Login/Register
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Cart
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Wishlist
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Shop
                        
                        </a>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
                <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">COMPANY</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">About

                    </a>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Blog
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Jobs
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Press
                        
                        </a>
                </div>

            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">LEGAL</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Claim

                    </a>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Privacy
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Policy
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Terms
                        
                        </a>
                </div>

            </div>
        </div>
       </div>
       </div>
    </footer>
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white">@ KOSHNAR - All Rights Reserved</p>
            <div>
                <img src="./image/methods.png" class="h-5">
            </div>
        </div>
    </div>
</body>
</html>
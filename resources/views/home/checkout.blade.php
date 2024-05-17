<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        @vite('resources/css/app.css')
    <title>CheckOut</title>
    <style>
       

    </style>
</head>
<body>
     <!-- header section strats -->
     @include('home.header')
         <!-- end header section -->

@if(session()->has('message'))
<div id="popupContainer" class="fixed bottom-16 right-96 z-50">
    <div id="popupMessage" class="w-full block text-center  bg-pink-400 border border-pink-500 text-white px-4 py-3 rounded-md hover:bg-transparent hover:text-pink-400 transition">
        {{ session()->get('message') }}
    </div>
</div>
<script>
    // Automatically close the popup after 3 seconds (adjust the delay as needed)
    setTimeout(function() {
        closePopup();
    }, 3000);

    function closePopup() {
        var popupContainer = document.getElementById('popupContainer');
        popupContainer.style.display = 'none';
    }
</script>
@endif

    <div class="container py-4 flex items-center gap-3">
        <a href="home" class="text-pink-400 text-base">Home
        <i class='bx bx-home'></i>
        </a>
        <span class="text-sm text-gray-400">
        <i class='bx bx-chevron-right'></i>
        </span>
        <a href="checkout" class="text-gray-600 font-medium">Checkout</a>
    </div>


    <div class="container grid grid-cols-12 items-start pb-16 pt-4">

    <div class="col-span-8 border border-gray-200 p-4 rounded">
        <h3 class="text-lg font-medium capitalize mb-4">checkout</h3>
        <form>
        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                
                <div>
                    <label class="text-gray-600 mb-2">First Name <span class="text-pink-600"></span></label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Last Name <span class="text-pink-600"></span></label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
               
             </div>
            </div>
            <div>
                    <label class="text-gray-600 mb-2">Company Name </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Country/Region <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Street Address<span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Town/City <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Zip Code<span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Phone Number <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Email Address <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
        </div>
        
    </div>
    </form>
    <div class="col-span-4 border border-gray-200 p-4 rounded">
        <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">Order Summary</h4>
        <div class="space-y-2">
            <div class="flex justify-between">
                <div>
                <h5 class="text-gray-800 font-medium">Puma Hudy</h5>
                <p class="text-sm text-gray-600">Size: M</p>
                </div>
            <p class="text-gray-600">x2</p>
            
            </div>
        </div>
        <div class="flex justify-between border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">
            <p>Total Amount </p>
            <p>${{$totalPrice}}</p>

        </div>
        <div class="flex justify-between border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">
            <p>Shipping</p>
            <p>Free</p>

        </div>
        <!-- <div class="flex justify-between border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">
            <p class="font-semibold">Total</p>
            <p>$46.00</p>

        </div> -->
        <!-- <div class="flex justify-between items-center border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">Bank
                 <input type="radio" name="bank" id="bank" >
                
        <img src="./image/methods.png" class="h-4">
        </div>   -->
        <div class="flex justify-between items-center border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">cash
                 <input type="radio" name="bank" id="bank" >
                
        <img src="./image/cash.jpg" class="h-10">
        </div>
        <div class="flex items-center mb-4 mt-2">
        <form method="get" action="{{ route('place_order') }}">
       @csrf
       <button type="submit" class=" w-full block text-center  bg-pink-400 border border-pink-500 text-white px-4 py-3 rounded-md hover:bg-transparent hover:text-pink-400 transition">Place Order</button>
       
       </form>
        
        </div>
     
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

</html
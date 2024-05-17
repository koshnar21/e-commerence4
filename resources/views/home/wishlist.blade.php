<script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />

        @vite('resources/css/app.css')


     <!-- header section strats -->
 @include('home.header')
         <!-- end header section -->


<div class="container py-4 flex items-center gap-3">
        <a href="home" class="text-pink-400 text-base">Home
        <i class='bx bx-home'></i>
        </a>
        <span class="text-sm text-gray-400">
        <i class='bx bx-chevron-right'></i>
        </span>
        <a href="Wishlist" class="text-gray-600 font-medium">Wishlist</a>
    </div>

    <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">
        <div class="col-span-3">
            <div class="px-4 py-3 shadow flex items-center gap-4">
                <div class="flex-shrink-0">
                <img src="./image/photo.jpg" class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
            </div>
            <div class="flex-grow">
                <p class="text-gray-600">Hello,</p>
                <h4 class="text-gray-800 font-medium">
                    Koshnar Kamal
                </h4>
            </div>
        </div>
        <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
            <div class="space-y-1 pl-8">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-id-card'></i>
                    </span>
                    Manage Account
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   Profile Info
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                    Manage Address
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                    Change Password
                </a>
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-gift' ></i>
                    </span>
                   My Order History
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   My Returns
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   My Cancellation
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   My Reviews
                </a>
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-id-card'></i>
                    </span>
                 Payment Method
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   Voucher
                </a>
              
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-heart' ></i>
                    </span>
                   Wishlist
                </a>
               
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-log-out'></i>
                    </span>
                   Log Out
                </a>
               
            </div>


        </div>
        </div>

        <div class="col-span-9 space-y-4">
            <div class="flex items-center justify-between gap-6 p-4 border-gray-200 rounded">
                <div class="w-28">
                    <img src="./image/tishirt1.png" class="w-full">
                </div>
                <div class="1/3">
                    <h2 class="text-gray-800 text-xl font-medium uppercase">
                        Nike`s T-shirt
                    </h2>
                    <p class="text-gray-500 text-sm">
                        Availability: <span class="text-green-600">In Stock</span>
                    </p>
                </div>
                <div class="text-pink-400 text-lg font-semibold">$23.00</div>
                <a href="checkout" class="px-6 py-2 text-center text-sm text-white bg-pink-400 border border-pink-600 rounded hover:bg-transparent hover:text-pink-500 transition uppercase font-roboto font-medium">Add to card</a>
                <div class="text-gray-600 cursor-pointer hover:text-pink-500">
                <i class='bx bxs-trash-alt' ></i>
            
            </div>
            </div>
            <div class="flex items-center justify-between gap-6 p-4 border-gray-200 rounded">
                <div class="w-28">
                    <img src="./image/longnike.jpg" class="w-full">
                </div>
                <div class="1/3">
                    <h2 class="text-gray-800 text-xl font-medium uppercase">
                        Long Nike`s
                    </h2>
                    <p class="text-gray-500 text-sm">
                        Availability: <span class="text-red-600">Out of Stock</span>
                    </p>
                </div>
                <div class="text-pink-400 text-lg font-semibold">$30.00</div>
                <a href="checkout" class=" cursor-not-allowed px-6 py-2 text-center text-sm text-white bg-red-400 border border-pink-600 rounded  transition uppercase font-roboto font-medium">Add to card</a>
                <div class="text-gray-600 cursor-pointer hover:text-pink-500">
                <i class='bx bxs-trash-alt' ></i>
            
            </div>
            </div>
        </div>
    

    </div>
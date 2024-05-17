
         
         <!-- ************************************************************************************8 -->


         <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">     
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.tailwindcss.com"></script>
       

        @vite('resources/css/app.css')
    </head>
    <body class= "bg-[#fbfbfb]">
  



<body >
    <header class="py-4 shadow-sm">
        <div class="container flex items-center justify-between">
            <a href="">
                <img src="images/logo.kr.jpg" class="w-32 rounded-lg ">
            </a>
            <!-- <form action="{{url('product_search')}}" method="get" class="w-full max-w-xl relative flex" @csrf>
    <span class="absolute left-4 top-3 text-xl text-gray-400">
        <i class='bx bx-search-alt-2'></i>
    </span>
    <input type="text" class="w-full border border-pink-500 border-r-0 pl-12 py-4 px-3 rounded-l-md focus:outline-none" placeholder="search">
    <button class="bg-pink-400 border border-pink-500 text-white px-12 py-0 rounded-r-md hover:bg-transparent hover:text-pink-400 transition">Search</button>
</form> -->
                   
                <div class="flex items-center justify-center">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="border border-gray-300 rounded-l-md py-2 px-10 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="absolute left-4 top-3 text-xl text-gray-400">
                       <i class='bx bx-search-alt-2'></i>
                      </span>
                        </div>
                    </div>
                    <button type="submit" class="bg-pink-500 text-white rounded-r-md px-4 py-2 hover:bg-pink-600 focus:outline-none focus:bg-pink-600">Search</button>
                </div>




                <div class="flex items center space-x-4">
                     <a href="{{url('wishlist')}}" class="text-center text-gray-700 hover:text-pink-400 transition relative "> 
                        <div class="text-2xl"> 
                        <i class='bx bx-heart'></i> 
                        </div> 
                        <div class="text-xs leading-3">Wishlist</div> 
                        <span class="absolute right-0 -top-1 2-5 h-5 rounded-full flex items-center justify-center bg-pink-400 text-white text-sm"></span> 
                     </a> 
                    <a href="{{url('show_cart')}}" class="text-center text-gray-700 hover:text-pink-400 transition relative ">
                        <div class="text-2xl">
                        <i class='bx bx-cart' ></i>
                        </div>
                        <div class="text-xs leading-3">Cart</div>
                        <span class="absolute right-0 -top-1 2-5 h-5 rounded-full flex items-center justify-center bg-pink-400 text-white text-sm"></span>
                    </a>
                     <a href="useracc" class="text-center text-gray-700 hover:text-pink-400 transition relative ">
                        <div class="text-2xl">
                        <i class='bx bx-user' ></i>    
                    </div>
                        <div class="text-xs leading-3">User</div>
                        <span class="absolute right-0 -top-1 2-5 h-5 rounded-full flex items-center justify-center bg-pink-400 text-white text-sm"></span>
                    </a> 
                </div>
        </div>
    </header>
    <nav class="bg-gray-800">
        <div class="container flex">
            <div class="px-8 py-4 bg-pink-400 flex items-center cursor-pointer relative group">
                <span class="text-white">
                <i class='bx bx-menu'></i>
                </span>
                <span class="capitalize ml-2 text-white">All categories</span>
                <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./image/pullover.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                        Men`s Clothing
                    </span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./image/dress.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                        Women`s Clothing
                    </span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./image/sport.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                        Sport`s Clothing
                    </span>
                    </a><a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./images/guitar.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                    Musical`s
                    </span>
                    </a>

                </div>
            </div>
            <div class="flex items-center justify-between flex-grow pl-12">
            <div class="flex items-center space-x-6 capitalize">
    <li><a href="/" class="text-gray-200 hover:text-white transition">Home</a></li>
    <li><a href="{{url('contact')}}" class="text-gray-200 hover:text-white transition">Contact</a></li>
    <li><a href="/" class="text-gray-200 hover:text-white transition">About</a></li>
    <!-- <li><a href="login" class="text-gray-200 hover:text-white transition">Sign Up</a></li> -->


                <!-- <a href="login" class="text-gray-200 hover:text-white transition">Login</a> -->
                <li class="nav-item">
                           <a class="text-gray-200 hover:text-white transition" href="{{url('show_cart')}}">Card</a>
                        </li>
                        </div>
                        <!-- mn  -->
                        {{-- @if (Route::has('login')) --}}
                        @auth
                        <li class="nav-item">
                           <a class="btn btn-primary  custom-btn" href="{{ route('logout') }}">logout</a>
                        
    
                          

                        </li>
                        @else
                <div class="flex items-center space-x-4">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                    </li>
                </div>
                @endauth

                        
            </div>
        </div>
    </nav>
    
<div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('/images/nav.png');">
<div class="container">
    <h1 class="text-6xl text-white font-medium mb-4 capitalize">best collection <br> contact us</h1>
    <p class="text-white text-lg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, porro hic. Exercitationem,<br> quae corrupti! Magnam at, cumque sed nulla corrupti ad,
    </p>
    <div class="mt-12">
        <a href="#" class="bg-pink-500 border border-pink-500 text-white px-8 py-3 font-medium rounded-md hover:text-pink-600">shop now</a>
    </div>
</div>




    


   
   
          
        

</body>
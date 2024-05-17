<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
        
     

      <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50%; padding:4%">
                  <!-- <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$product->id)}}" class="option1">
                           Product Detail
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div> -->
                     <div class="img-box " padding="3%">
                        <img src="product/{{$product->image}}" alt="">
                     </div>
                     <div class="container grid grid-cols-2 gap-8">
        <!-- <div>
        <img src="product/{{$product->image}} " class="w-10/12">
        <div class="grid  grid-cols-4 gap-4 mt-4">
        <img src="./image/jacket.jpeg " class="w-full cursor-pointer border border-pink-500">
        

        </div> -->
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>


                        @if($product->discount_price!=null)
                        <h6 style=" color:red;">
                        Discount price <br/>
                         ${{$product->discount_price}}
                         </h6>

                         <h6 style="text-decoration:line-through; color:blue;">
                         price <br/>
                        ${{$product->price}}
                      </h6>
                     

                        @else
                        <h6 style=" color:blue;" >
                        price <br/>
                        ${{$product->price}}
                        </h6>
                        @endif
                     
                        <h6  > Product Category:  {{$product->category}}</h6>
                        <h6  > Product Details:   {{$product->description}}</h6>
                        <h6  > Available Quantity: {{$product->quantity}}</h6>
                        <form action="{{url('add_cart',$product->id)}}" method="get">
                           @csrf
                           <div class="row">
                           <div class="col-md-4">
                              <input type="number" name="quantity" value="1" min="1" style="width:100px;">
                           </div>
                           <div class="col-md-4">
                             <input type="submit"  value="Add to card" >
                             </div>

                         </div>
                          </form>

                     </div>
                  </div>
                  </div>
                  <!-- ================================================================== -->
                  <!-- <div class="container grid grid-cols-2 gap-8">
        <div> -->
        <!-- <img src="product/{{$product->image}} " class="w-10/12">
        <div class="grid  grid-cols-4 gap-4 mt-4">
        <img src="./image/jacket.jpeg " class="w-full cursor-pointer border border-pink-500">
        

        </div>
        </div> -->
        <!-- <div>
            <h2 class="text-3xl font-medium uppercase mb-2"> {{$product->title}}</h2>
            <div class="flex items-center mb-4">
            <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(123 Reviews)</div>
        </div> -->
        <!-- <div class="space-y-2">
        <p class="text-gray-800 font-semibold">
            <span>availability</span>
            <span class="text-green-500">In Stock</span>
        </p>
        <p class="space-x-2">
            <span class="text-gray-800 font-semibold">Describtion</span>
            <span class="text-gray-600"> {{$product->description}}</span>
        </p>
        <p class="space-x-2">
            <span class="text-gray-800 font-semibold">Category:</span>
            <span class="text-gray-600">{{$product->category}}</span>
        </p>
         <p class="space-x-2">
            <span class="text-gray-800 font-semibold">Br:</span>
            <span class="text-gray-600">bewjsk789</span>
        </p>
        </div> -->
        <!-- <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
            <p class="text-2xl text-red-500 font-semibold">$23.00</p>
            <p class="text-base text-gray-400 line-through">$32.00</p>
           
        </div>
        @if($product->discount_price!=null)
                        <p  class=" text-red-500 font-semibold">
                        Discount price <br/>
                         ${{$product->discount_price}}
                         </p>

                         <h6 style="text-decoration:line-through; color:blue;">
                         price <br/>
                        ${{$product->price}}
                      </h6>
                     

                        @else
                        <<p class="text-base text-gray-400 line-through" >
                        price <br/>
                        ${{$product->price}}
                      </p>
                        @endif -->

        <!-- ==================== -->
        
        <!-- <div class="p-4">
        @if($product->discount_price!=null)
                        <p  class=" text-red-500 font-semibold">
                        Discount price <br/>
                         ${{$product->discount_price}}
                         </p>

                         <h6 style="text-decoration:line-through; color:blue;">
                         price <br/>
                        ${{$product->price}}
                      </h6>
                     

                        @else
                        <<p class="text-base text-gray-400 line-through" >
                        price <br/>
                        ${{$product->price}}
                      </p>
                        @endif
        <h3 class="uppercase text-gray-800 font-medium text-xl">Size</h3>
                    <div class="flex flex-row my-3">
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">XL</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">XXL</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">L</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">M</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">S</a></div>
                    </div>
                    <h3 class="uppercase text-gray-800 font-medium text-xl">color</h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="mt-4">
                    <h3 class="uppercase text-gray-800 font-medium text-xl">Quantity :{{$product->quantity}}</h3>
                  
                    </div>
                    <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
                        <a href="" class="bg-pink-600 border border-pink-800 text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-pink-800 transition">
                        <i class='bx bx-cart'></i>Add to Cart
                        </a>
                        <a href="" class="bg-pink-600 border border-pink-800 text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-pink-800 transition">
                        <i class='bx bx-heart'></i>Wishlist
                        </a>
                    </div>
                    <div class="flex gap-3 mt-4">
                        <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                        <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                        <i class='bx bxl-twitter' ></i>
                                            </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                        <i class='bx bxl-instagram' ></i>  
                                          </a>
                    </div>

    </div> -->
    </div>
    </div>

    </div>
    </div>
    </div>
      
      <!-- header section strats -->
         @include('home.footer')
         <!-- end header section -->
      
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
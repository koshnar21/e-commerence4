<!-- <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           Product Detail
                           </a>
                          <form action="{{url('add_cart',$products->id)}}" method="post">
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
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>


                        @if($products->discount_price!=null)
                        <h6 style=" color:red;">
                        Discount price <br/>
                         ${{$products->discount_price}}
                         </h6>

                         <h6 style="text-decoration:line-through; color:blue;">
                         price <br/>
                        ${{$products->price}}
                      </h6>
                     

                        @else
                        <h6 style=" color:blue;" >
                        price <br/>
                        ${{$products->price}}
                        </h6>
                        @endif
                     </div>
                  </div>
                 
               </div>
               @endforeach
               
      </section> -->

      <!-- ============================================================================================ -->
    
<!-- ============================================================ -->

<center><h2 class="text-7xl font-semibold mt-24 mb-10  justify-center">Our Products</h2></center>
<div class="flex flex-wrap justify-center mb-24">
@foreach($product as $products)
<div class="shadow-lg rounded-lg mx-4 my-3" style="width: 350px;  ">
                 <a href="{{url('product_details',$products->id)}}">
            <img src="product/{{$products->image}}" class="rounded-tl-lg rounded-tr-lg" style="width: 100%; height: 200px; object-fit: cover;">
        </a>
        <center><h2 class="text-5xl font-semibold my-3  justify-center"><a href="{{url('product_details',$products->id)}}">{{$products->title}}</a></h2></center>
        <hr/>
                <div class="p-5">
                    <h3><a href="#">Long Sleeve Jersey Nike</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    
                    <div class="mt text-2xl mx-5 ">
                @if($products->discount_price != null)
                <h6 class="text-red-500 font-semibold">
                    Discounted Price: ${{$products->discount_price}}
                </h6>
                <h6 class="text-blue-500 line-through">
                    Original Price: ${{$products->price}}
                </h6>
                @else
                <h6 class="text-blue-500 font-semibold">
                    Price: ${{$products->price}}
                </h6>
                @endif
            </div>
            
            <form action="{{ url('add_cart', $products->id) }}" method="get" class="text-center">
                @csrf
                <div class="flex  flex-col items-center justify-center py-0 ">
                    <input type="number" name="quantity" value="1" min="1" class="w-64 mt-3 border border-gray-300 rounded-l-lg py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:border-purple-500">
                    <div class="flex  flex-wrap">
                        
                    <center>
                        <button type="submit" class="bg-pink-600 rounded-r-lg py-6 px-24 mb-2 text-gray-50 self-start items-center flex flex-row text-sm hover:bg-purple-700 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                            </button>
        
                            <a href="{{url('product_details',$products->id)}}" class="bg-purple-600 rounded-r-lg py-6 px-24 text-gray-50 self-start my-1 items-center flex flex-row text-sm hover:bg-purple-700 ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-2 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg> 
                                View Details
                            </a></div>
                        </center>
                
          
                </div>
                
            </form>
            </div>     
            </div>
            @endforeach
            </div>
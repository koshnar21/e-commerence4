<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>


  <style type="text/css">
.tdesign{
  border: 2px solid white;
  width: 70%;
  margin: auto;
  padding-top: 50px;
  text-align: center;

}
.h{
  background-color: skyblue;
}
.img{
        width:150px;
        height: 100px;
      }



  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->


        <div class="main-panel">
            <div class="content-wrapper">
<h1 style="text-align: center; font-size: 25px;font-weight: bold; padding-bottom: 40px;">All Order</h1>


<div style="padding-left: 400px; padding-bottom: 30px;">
  <form action="{{url('search')}}" method="get">
    @csrf

  <input type="text" name="search" placeholder="Search for something" style="color:black;">
  <input type="submit" value="search" class="btn btn-outline-primary" >
  </form>
</div>

<table class="tdesign">
    <tr class="h">
        <th style="padding: 10px;">Name</th>
        <th style="padding: 10px;">email</th>
        <th style="padding: 10px;">address</th>
        <th style="padding: 10px;">phone</th>
        <th style="padding: 10px;">product title</th>
        <th style="padding: 10px;">quantity</th>
        <th style="padding: 10px;">price</th>
        <th style="padding: 10px;">payment status</th>
        <th style="padding: 10px;">delivery status</th>
        <th style="padding: 10px;">image</th>
        <th style="padding: 10px;">Delivered</th>
       
    </tr>
    @forelse($order as $order)
    <tr >
  
        <td>{{$order->name}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->product_title}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->price}}</td>
        <td>{{$order->payment_status}}</td>
        <td>{{$order->delivery_status}}</td>
        <td><img src="/product/{{$order->image}}" class="img"></td>
       
        <td><a href="{{url('delivered',$order->id)}}" class="btn btn-primary">Delivered</a></td>
        <td>
        @if($order->delivery_status =='processing')  
        
        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product Delivered !!')" class="btn btn-primary">Delivered</a>
        @else
        <p style="color: green;">Delivered</p>






        @endif
      </td>



        

    </tr>
    @empty
    <div>
    <tr>
      <td colspan="16">No data not found</td>
    </tr>
    </div>
    @endforelse
</table>





            </div>
        </div>
        
    <!-- container-scroller -->
    
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-M6N9xdQzAGHo7k5cQsMxK1PdGEddIbKWjr5z8NajSHQ5fPFSj9bGJYoGJ2ZdEdAj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyDE8vFQy5lFOnhZ2gCbVDBXuPktWbNIq6" crossorigin="anonymous"></script>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
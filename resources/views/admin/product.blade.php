<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align:center;
            padding-top:3%;
        }
        .font_size{
            font-size:40px;
            padding-bottom:40px;
        }
        label{
            display: inline-block;
            width:200px;
        }
        .div_design{
            padding-bottom:15px;
        }

        .text-color{
            color: black;
        }
    </style>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            <div class="div_center">
            @if(session()->has('message'))
                <div id="myAlert" class="alert alert-success">
                    
                    {{session()->get('message')}}
                </div>
                <script>
                    function closeAlert() {
                        document.getElementById('myAlert').style.display = 'none';
                    }

                    // Automatically close after 3 seconds (adjust the delay as needed)
                    setTimeout(function() {
                        closeAlert();
                    }, 5000);
                </script>
                @endif
                <h1 class="font_size"> Add Product</h1>

                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="div_design">
                        <label> Product Title :</label>
                        <input class="text-color" type="text" name="title" 
                        placeholder="write a title " required="">
                    </div>
                    <div class="div_design">
                        <label> Product Description :</label>
                        <input class="text-color" type="text" name="description"
                        placeholder="write a description " required="">
                    </div>
                    <div class="div_design">
                        <label> Product Price :</label>
                        <input class="text-color" type="text" name="price" 
                        placeholder="enter a price " required="">
                    </div>
                    <div class="div_design">
                        <label> Product Discount :</label>
                        <input class="text-color" type="text"  name="dis_price"
                        placeholder="enter a price " >
                    </div>
                    <div class="div_design">
                        <label> Product Quantity :</label>
                        <input class="text-color" type="number" min="0"
                        name="quantity" placeholder="enter a price " required="">
                    </div>
                    <div class="div_design">
                        <label> Product Category :</label>
                        <select class="text-color" name="category" required="">
                            <option value="" selected="">Add a category here</option>
                            @foreach($category as $category)
                            <option>{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="div_design"> 
                    <label> Product image :</label>
                        <input type="file"  name="image" required="" >
                    </div>
                    <div class="div_design">
                    
                        <input type="submit"  name="submit" value="Add Product" class="btn btn-primary">
                    </div>


    </form>


            </div>
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
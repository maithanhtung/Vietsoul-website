@extends('client_template')
@section('content')

<section id="myCart" class="pfblock">
    <div class="container">

        <div class="pfblock-header wow fadeInUp animated">
            <h2 class="pfblock-title">My cart</h2>
            <div class="pfblock-line"></div>
            <div class="pfblock-subtitle">
                All selected items
            </div>
        </div>

        <div class="pfblock-header wow fadeInUp animated">
            <div class="pfblock-subtitle">
                <div class="notice-nothing">
                    <?php
                      if (Session::has('products')){
                        $products = session('products');
                      }
                      else {
                        echo "<p>";
                        echo "Your cart is now empty!";
                        echo "</p>";
                      }
                    ?>
                </div>
            </div>
        </div>


         @if((Session::has('products')))
         <div class="pfblock-subtitle">
            <table class="table table-responsive table-striped table-hover">

                   <!-- Table Headings -->
                   <thead>
                       <th>Code</th>
                       <th>Name</th>
                       <th>Price</th>
                       <!-- <th>Description</th> -->
                       <!-- <th>Number</th> -->
                       <th>&nbsp</th>
                   </thead>

                   <!-- Table Body -->
                   <tbody>
                       @foreach ($products as $product)
                           <tr>
                               <!-- Product Information -->
                               <td class="table-text">
                                   <div>{{ $product->product_code }}</div>
                               </td>

                               <td class="table-text">
                                   <div>{{ $product->product_name }}</div>
                               </td>

                               <td class="table-text">
                                   <div>$ {{ $product->product_price }}</div>
                               </td>

                             <!--  <td class="table-text">
                                   <div>{{ $product->product_description }}</div>

                               <td class="table-text">
                                   <div>{{ $product->product_number }}</div>
                               </td> -->

                               <td>
                                   <a href="./client_delcart/{{ $product }}"><img src="asstoets/icon/remove.png" class="remove-icon" title="Remove this item from shopping cart"></a>
                               </td>

                           </tr>
                       @endforeach
                   </tbody>
            </table>
        </div>
          @endif
        <br>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <a href="./client_allProduct"><button class="btn btn-lg btn-block wow fadeInUp animated">Continue to shopping</button></a>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4"></div>

                <div class="col-xs-12 col-sm-4 col-md-4">
           	        <a href="./client_order"><button class="btn btn-lg btn-block wow fadeInUp animated checkOut-btn">Check out</button></a>
                </div>
            </div>

        </div>
</section>
@stop



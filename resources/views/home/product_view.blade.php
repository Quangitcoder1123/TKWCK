<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             All <span>products</span>
          </h2>
          <div>
            <form action="{{ url('search_product') }}" method="POST">
               @csrf
               <input style="width:500px" type="text" placeholder="Search For SomeThing" name="search">
               <input type="submit" value="Search">
            </form>
          </div>
       </div>
       @if(session()->has('message'))
       <div class="alert alert-success">
           {{ session()->get('message')}}
       </div>
       @endif
       
       <div class="row">
         @foreach ($product as $products)
            
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{ url('product_details',$products->id) }}" class="option1">
                        Product Details
                     </a>
                     <form action="{{ url('add_cart',$products->id) }}" method="POST">
                        @csrf
                        <div class="row">
                           <div class="col-md-4">

                        <input type="number" name="quantity" value="1" min="1">
                     </div>
                     <div class="col-md-4">

                        <input type="submit" value="Thêm vào giỏ hàng">
                     </div>
                     </div>
                     </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="product/{{ $products->image }}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
{{ $products->title }}      
             </h5>
             @if($products->discount_price!=null)
             <h6 style="color: red">
               Discount price
               <br>

               {{$products->discount_price }}
            </h6>
            <h6 style="text-decoration: line-through">
             Giá
             <br>
               ${{ $products->price }}
            </h6>
            @else
                   <h6 style="color: blue">
                     Giá
             <br>
                     {{$products->price }}
                   </h6>
            @endif
                </div>
             </div>
          </div>
          @endforeach
          <span>
            { !!$product->withQueryString()->links('pagination::bootstrap-5')!! }
          </span>
    </div>
 </section>
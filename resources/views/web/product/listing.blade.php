@extends("web.layout.layout")

@section("title")
	Product Listing
@endsection

@section("content")
	
	<!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ Asset('img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ URL('web') }}">Home</a>
                            <span>Product Listing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                
                <h4> Product Listing <a style="float: right;" href="{{ URL('web/product/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Add Product</button><a/></h4>

                <div class="row">
                    {{ $list->links() }}

                </div>
                
                <div class="row">
                

                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Image</th>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Description</th>
                          <th scope="col">Action</th>

                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($list as $row)
                            <tr>
                              <th scope="row">{{ $row->id }}</th>
                              <td><img width="200px" height="200px" src="{{ Asset($row->display_image) }}" alt="{{ $row->name }}" /></td>
                              <td>{{ $row->name }}</td>
                              <td>{{ $row->price }}</td>
                              <td>{{ $row->qty }}</td>
                              <td>{{ $row->description }}</td>
                              <td>
                                  
                                  <a href="{{ URL('web/product/'.$row->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                                  &nbsp;&nbsp;&nbsp;&nbsp;
                                  <a href="{{ URL('web/product',$row->id) }}"><i class="fa fa-remove"></i></a>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
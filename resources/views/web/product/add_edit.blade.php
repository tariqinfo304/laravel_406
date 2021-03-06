@extends("web.layout.layout")

@section("title")
	{{ $title }}
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
                            <span>{{ $title }}</span>
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
                <h4>

                @if(!empty($id))
                Edit
                @else
                Add
                @endif
                 

                Product</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if(!empty($id))
                     <form action="{{ URL('web/product',$id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $id}}"/>
                        @method("put")
                @else
                     <form action="{{ URL('web/product') }}" method="POST" enctype="multipart/form-data">
                @endif
           

                    @csrf()
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Product Name<span>*</span></p>
                                        <input value="{{ !empty($id) ? $obj->name : old('name') }}" name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Price<span>*</span></p>
                                        <input value="{{ !empty($id) ? $obj->price : old('price') }}" name="price" type="text">

                                        @error("price")
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Quantity<span>*</span></p>
                                <input value="{{ !empty($id) ? $obj->qty :  old('qty') }}"  name="qty" type="number">
                            </div>
                            <div class="checkout__input">
                                <p>Description<span>*</span></p>
                                <input  value="{{ !empty($id) ? $obj->description : old('description') }}" name="description" type="text">
                            </div>

                             @if(empty($id))
                            <div class="checkout__input">
                                <p>Display Image<span>*</span></p>
                                <input  name="display_image" type="file"/>
                            </div>
                            <div class="checkout__input">
                                <p>Other Images<span></span></p>
                                <input  name="product_images[]" type="file" multiple/>
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-12 col-md-12">
                            @if(!empty($id))
                <input class="btn btn-primary" type="submit" value="Edit Product" />
                @else
                <input class="btn btn-primary" type="submit" value="Add Product" />
                @endif
                             
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
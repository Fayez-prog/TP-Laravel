@extends('layouts.home')

@section('content')
@include('layouts.banner')

<!-- collections -->
<div class="new-collections">
    <div class="container">
        <h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
        <p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        <div class="new-collections-grids">
            @foreach ($products as $product)
            <div class="col-md-3 new-collections-grid">
                <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="new-collections-grid1-image">
                        <a href="{{ route('single')}}" class="product-image">
                            <img src="/storage/uploads/{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid rounded product-image">
                        </a>
                        <div class="new-collections-grid1-image-pos">
                            <a href="{{ route('single')}}">Quick View</a>
                        </div>
                        <div class="new-collections-grid1-right">
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="{{ asset('images/2.png')}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="{{ asset('images/2.png')}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="{{ asset('images/2.png')}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="{{ asset('images/1.png')}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="{{ asset('images/1.png')}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <h4><a href="{{ route('single')}}">{{ $product->title }}</a></h4>
                    <p>{{ $product->category->name }}</p>
                    <div class="new-collections-grid1-left simpleCart_shelfItem">
                        <p><span class="item_price">{{ $product->price }}</span><a class="item_add" href="#">add to cart</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //collections -->

<!-- new-timer -->
<div class="timer">
    <div class="container">
        <div class="timer-grids">
            <div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3><a href="{{ route('products') }}">sunt in culpa qui officia deserunt mollit</a></h3>
                <div class="rating">
                    <div class="rating-left">
                        <img src="{{ asset('images/2.png')}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="{{ asset('images/2.png')}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="{{ asset('images/2.png')}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="{{ asset('images/2.png')}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                        <img src="{{ asset('images/1.png')}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
                    <p><i>$580</i> <span class="item_price">$550</span></p>
                    <h4>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</h4>
                    <p><a class="item_add timer_add" href="#">add to cart</a></p>
                </div>
                <div id="counter"></div>
                <script src="{{ asset('js/jquery.countdown.js')}}"></script>
                <script src="{{ asset('js/script.js')}}"></script>
            </div>
            <div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
                <div class="timer-grid-right1">
                    <img src="{{ asset('images/17.jpg')}}" alt=" " class="img-responsive" />
                    <div class="timer-grid-right-pos">
                        <h4>Special Offer</h4>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //new-timer -->

<!-- collections-bottom -->
<div class="collections-bottom">
    <div class="container">
        <div class="collections-bottom-grids">
            <div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
                <h3>45% Offer For <span>Women & Children's</span></h3>
            </div>
        </div>

        <div class="newsletter animated wow slideInUp" data-wow-delay=".5s">
            <h3>Newsletter</h3>
            <p>Join us now to get all news and special offers.</p>
            <form>
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <input type="email" value="Enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email address';}" required="">
                <input type="submit" value="Join Us">
            </form>
        </div>
    </div>
</div>
<!-- //collections-bottom -->

@include('layouts.footer')

@endsection
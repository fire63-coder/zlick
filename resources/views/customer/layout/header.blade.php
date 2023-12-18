<div class="header">
    <div class="container">
        <div class="row inner">
            <div class="col-md-4 logo">
                <a href="index.php"><img src="{{asset('frontend/assets/uploads/logo.png')}}" alt="logo image"></a>
            </div>
            <div class="col-md-5 right">
                <ul>
                    <li><a href="{{route('customer.login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
                    <li><a href="{{route('customer.registration')}}"><i class="fa fa-user-plus"></i> Register</a></li>
                    <li><a href="{{route('customer.cart')}}"><i class="fa fa-shopping-cart"></i> Cart ($0.00)</a></li>
                </ul>
            </div>
            <div class="col-md-3 search-area">
                <form class="navbar-form navbar-left" role="search" action="search-result.php" method="get">
                    <input type="hidden" name="_csrf" value="305e2e05d29f55b50a14ad09db8b623c" />
                    <div class="form-group">
                        <input type="text" class="form-control search-top" placeholder="Search Product" name="search_text">
                    </div>
                    <button type="submit" class="btn btn-danger">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>

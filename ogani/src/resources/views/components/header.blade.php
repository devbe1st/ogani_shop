<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{ route('home.index') }}"><img src="{{ asset('user/img/logo.png') }}" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="{{ route('user.favourite') }}"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="{{ route('user.cart') }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{ asset('user/img/language.png') }}" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            @auth
                <a href="{{ route('logout') }}"><i class="fa fa-user"></i> Logout</a>
            @endauth
            @guest
                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
            @endguest
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('home.shop') }}">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="{{ route('home.shop-details', ['id' => 1 ]) }}">Shop Details</a></li>
                    <li><a href="{{ route('user.cart') }}">Shoping Cart</a></li>
                    <li><a href="{{ route('user.checkout') }}">Check Out</a></li>
                    <li><a href="{{ route('home.blog-details', ['id' => 1 ]) }}">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="{{ route('home.blog') }}">Blog</a></li>
            <li><a href="{{ route('home.contact') }}">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{ asset('user/img/language.png') }}" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">VietNamese</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__language mr-0">
                            @auth
                                <div><i class="fa fa-user"></i> {{ Auth::user()->name }}</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">My orders</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn m-0 d-block btn-logout">Logout</button>
                                    </form>
                                </li>
                            </ul>
                            @endauth
                            @guest
                                <div class="header__top__right__auth">
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ route('home.index') }}"><img src="{{ asset('user/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                        <li><a href="{{ route('home.shop') }}">Shop</a></li>
                        <li><a href="{{ route('home.blog') }}">Blog</a></li>
                        <li><a href="{{ route('home.contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="{{ route('user.favourite') }}"><i class="fa fa-heart"></i> <span>0</span></a></li>
                        <li><a href="{{ route('user.cart') }}"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
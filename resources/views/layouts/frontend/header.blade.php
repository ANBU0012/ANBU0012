<div class="header-top">
    <div class="wrap">
        <div class="header-top-left">
            <h1>Ninh Cuong Education</h1>
            <div class="clear"></div>
        </div>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="login.html">Account</a></li> |
                <li><a href="{{ url('/login') }}">Log In</a></li> |
                <li><a href="{{ url('/register') }}">Sign Up</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a class="logo-title" href="{{ url('/') }}"> <h1 >NCE</h1> </a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a href="index.html">Home</a></li>
                    <li><a class="color4" href="#">Khóa Học</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col0">
                                    <div class="h_nav">
                                        <h4>Học lập trình</h4>
                                        <ul>
                                            <li><a href="womens.html">Lập trình web</a></li>
                                            <li><a href="womens.html">Lập trình Java</a></li>
                                            <li><a href="womens.html">Lập trình C#</a></li>
                                            <li><a href="womens.html">Lập trình Python</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col0">
                                    <div class="h_nav">
                                        <h4>Học Ngoại Ngữ</h4>
                                        <ul>
                                            <li><a href="womens.html">Tiếng Anh</a></li>
                                            <li><a href="womens.html">Tiếng Nhật</a></li>
                                            <li><a href="womens.html">Tiếng Hàn</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li><a class="color7" href="other.html">MUA</a></li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <form class="search" type="get" action="{{ url('/search') }}">
                <input type="search" name="query" class="textbox" id="search-input">
                <button class="search-button" type="submit"> Tìm kiếm </button>
                <div id="response"> </div>
            </form>

        </div>
        <div class="clear"></div>
    </div>
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Not so breaking news</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/fonts/font.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" media="screen"/>
</head>
<body>
<div class="body_wrapper">
    <div class="center">
        <div class="header_area">
            <div class="logo floatleft"><a href="/"><img src="/css/images/logo.png" style="height:100px;" alt=""/></a></div>

            <div class="social_plus_search floatright">
                {{--<div class="social">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#" class="twitter"></a></li>--}}
                        {{--<li><a href="#" class="facebook"></a></li>--}}
                        {{--<li><a href="#" class="feed"></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="search">
                    {!! Form::open(['method'=>'GET','url'=>'search','class'=>'navbar-form navbar-left','role'=>'search']) !!}
                    <div class="input-group custom-search-form">
                        <input type="text" name="search" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button style="padding: 8px 14px;" type="submit" class="btn btn-default">
                                <i class="icon-search"></i>
                            </button>
                        </span>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <ul id="nav">
                <li><a href="/category/health">Health</a></li>
                <li><a href="/category/travel">Travel</a></li>
                <li><a href="/category/tips-and-how-to">Tips</a></li>
                <li><a href="/category/technology">Technology</a></li>
                <li><a href="/category/seniors">For seniors</a></li>
                <li><a href="/category/seasonal">Seasonal</a></li>
                <li><a href="/category/recreation">Recreation</a></li>
                <li><a href="/category/real-estate">Real Estate</a></li>
                <li><a href="/category/money">Money</a></li>
                <li><a href="#">Other Categories</a>
                    <ul>
                        <li><a href="/category/pets">Pets</a></li>
                        <li><a href="/category/parenting">Parenting</a></li>
                        <li><a href="/category/food">Food</a></li>
                        <li><a href="/category/internet">Internet</a></li>
                        <li><a href="#">More</a></li>
                                <li><a href="/category/human-interest">Human interest</a></li>
                                <li><a href="/category/home">Home</a></li>
                                <li><a href="/category/holiday">Holiday</a></li>
                                <li><a href="/category/hispanic">Hispanic</a></li>
                                <li><a href="/category/general">General</a></li>
                                <li><a href="/category/fashion">Fashion</a></li>
                                <li><a href="/category/family">Family</a></li>
                                <li><a href="/category/environment">Environment</a></li>
                                <li><a href="/category/entertaining">Entertaining</a></li>
                                <li><a href="/category/education">Education</a></li>
                                <li><a href="/category/computers">Computers</a></li>
                                <li><a href="/category/community">Community</a></li>
                                <li><a href="/category/career">career</a></li>
                                <li><a href="/category/business">Business</a></li>
                                <li><a href="/category/auto">Auto</a></li>
                    </ul>
                </li>
            </ul>
        </div>
<div class="single_sidebar">
    <div class="popular">
        <h2 class="title">Popular</h2>
        <ul>
            <li>
                <div class="single_popular">
                    <h3>{{$popular[0]['title']}}<a href="/post/{{$popular[0]['id']}}" class="readmore"><br/>Read
                            More</a></h3>
                </div>
            </li>
            <li>
                <div class="single_popular">
                    <h3>{{$popular[1]['title']}}<a href="/post/{{$popular[1]['id']}}" class="readmore"><br/>Read
                            More</a></h3>
                </div>
            </li>
            <li>
                <div class="single_popular">
                    <h3>{{$popular[2]['title']}}<a href="/post/{{$popular[2]['id']}}" class="readmore"><br/>Read
                            More</a></h3>
                </div>
            </li>
            <li>
                <div class="single_popular">
                    <h3>{{$popular[3]['title']}}<a href="/post/{{$popular[3]['id']}}" class="readmore"><br/>Read
                            More</a></h3>
                </div>
            </li>
            <li>
                <div class="single_popular">
                    <h3>{{$popular[4]['title']}}<a href="/post/{{$popular[4]['id']}}" class="readmore"><br/>Read
                            More</a></h3>
                </div>
            </li>
        </ul>
       </div>
</div>
{{--<div class="single_sidebar"><img src="images/add1.png" alt=""/></div>--}}
{{--<div class="single_sidebar">--}}
{{--<h2 class="title">ADD</h2>--}}
{{--<img src="images/add2.png" alt=""/></div>--}}
</div>
</div>
<div class="footer_top_area">
    <div class="inner_footer_top"></div>
</div>
<div class="footer_bottom_area">
    <div class="footer_menu">
        <ul id="f_menu">
            <li><a href="/category/health">Health</a></li>
            <li><a href="/category/travel">Travel</a></li>
            <li><a href="/category/tips-and-how-to">Tips</a></li>
            <li><a href="/category/technology">Technology</a></li>
            <li><a href="/category/seniors">For seniors</a></li>
            <li><a href="/category/seasonal">Seasonal</a></li>
            <li><a href="/category/recreation">Recreation</a></li>
            <li><a href="/category/real-estate">Real Estate</a></li>
            <li><a href="/category/money">Money</a></li>
            <li><a href="/category/internet">Internet</a></li>
        </ul>
    </div>
    <div class="copyright_text">
        <p>Copyright &copy; 2017 </p>
    </div>
</div>
</div>
</div>
<script type="text/javascript" src="/js/jquery-min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="/js/selectnav.min.js"></script>
<script type="text/javascript">
    selectnav('nav', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    selectnav('f_menu', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true
    });
</script>
</body>
</html>

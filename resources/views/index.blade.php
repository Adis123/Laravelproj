@include('header')
<div class="slider_area">
    <div class="slider">
        <ul class="bxslider">
            <li><img src="/css/images/1.jpg" alt=""
                     title="Social media is not about the exploitation of technology but service to community."/></li>
            <li><img src="/css/images/2.jpg" alt=""
                     title="Education is the most powerful weapon which you can use to change the world."/></li>
            <li><img src="/css/images/3.jpg" alt=""
                     title="The greatest self is a peaceful smile, that always sees the world smiling back."/></li>
        </ul>
    </div>
</div>
<div class="content_area">
    <div class="main_content floatleft">
        <div class="left_coloum floatleft">
            <div class="single_left_coloum_wrapper">
                <h2 class="title">Latest articles</h2>

                <div class="single_left_coloum floatleft sidebar-box">
                    <h3>{{$data[0]['title']}}</h3>
                    <p>{{$data[0]['shorttext']}}</p>
                    <p class="read-more"><a href="/post/{{$data[0]['id']}}" class="button">Read More</a></p>
                </div>
                <div class="single_left_coloum floatleft sidebar-box">
                    <h3>{{$data[1]['title']}}</h3>
                    <p>{{$data[1]['shorttext']}}</p>
                    <p class="read-more"><a href="/post/{{$data[1]['id']}}" class="button">Read More</a></p>
                </div>
                <div class="single_left_coloum floatleft sidebar-box">
                    <h3>{{$data[2]['title']}}</h3>
                    <p>{{$data[2]['shorttext']}}</p>
                    <p class="read-more"><a href="/post/{{$data[2]['id']}}" class="button">Read More</a></p>
                </div>
            </div>
            <div class="single_left_coloum_wrapper">
                <h2 class="title">From around the world</h2>

                <div class="single_left_coloum floatleft sidebar-box">
                    <h3>{{$data[3]['title']}}</h3>
                    <p>{{$data[3]['shorttext']}}</p>
                    <p class="read-more"><a href="/post/{{$data[3]['id']}}" class="button">Read More</a></p>
                </div>
                <div class="single_left_coloum floatleft sidebar-box">
                    <h3>{{$data[4]['title']}}</h3>
                    <p>{{$data[4]['shorttext']}}</p>
                    <p class="read-more"><a href="/post/{{$data[4]['id']}}" class="button">Read More</a></p>
                </div>
                <div class="single_left_coloum floatleft sidebar-box">
                    <h3>{{$data[5]['title']}}</h3>
                    <p>{{$data[5]['shorttext']}}</p>
                    <p class="read-more"><a href="/post/{{$data[5]['id']}}" class="button">Read More</a></p>
                </div>
            </div>
            <div class="row" style="margin:0">
                <h2 class="title">Other news</h2>

                <div class="col-md-6 floatleft sidebar-box">
                    <a href="/post/{{$data[6]['id']}}"><h3 style="color: red;">{{$data[6]['title']}}</h3></a>
                    <p>{{$data[6]['shorttext']}}</p>
                    <p class="read-more"></p>
                </div>
                <div class="col-md-6 floatleft sidebar-box">
                    <a href="/post/{{$data[7]['id']}}"><h3 style="color: red;">{{$data[7]['title']}}</h3></a>
                    <p>{{$data[7]['shorttext']}}</p>
                    <p class="read-more"></p>
                </div>
                <div class="col-md-6 floatleft sidebar-box">
                    <a href="/post/{{$data[8]['id']}}"><h3 style="color: red;">{{$data[8]['title']}}</h3></a>
                    <p>{{$data[8]['shorttext']}}</p>
                    <p class="read-more"></p>
                </div>
                <div class="col-md-6 floatleft sidebar-box">
                    <a href="/post/{{$data[9]['id']}}"><h3 style="color: red;">{{$data[9]['title']}}</h3></a>
                    <p>{{$data[9]['shorttext']}}</p>
                    <p class="read-more"></p>
                </div>
            </div>
        </div>
        <div class="right_coloum floatright">
            <div class="single_right_coloum">
                <h2 class="title">from the desk</h2>
                <ul>
                    <li>
                        <div class="single_cat_right_content sidebar-box" style="max-height: 80px;">
                            <h3>{{$popular[5]['title']}}</h3>
                            <p>{{$popular[5]['shorttext']}}</p>
                            <p class="read-more"></p>
                        </div>
                        <a href="/post/{{$popular[5]['id']}}" class="readmore"><br/>Read
                            More</a>
                    </li>
                    <li>
                        <div class="single_cat_right_content sidebar-box" style="max-height: 80px;">
                            <h3>{{$popular[6]['title']}}</h3>
                            <p>{{$popular[6]['shorttext']}}</p>
                            <p class="read-more"></p>
                        </div>
                        <a href="/post/{{$popular[6]['id']}}" class="readmore"><br/>Read
                            More</a>
                    </li>
                    <li>
                        <div class="single_cat_right_content sidebar-box" style="max-height: 80px;">
                            <h3>{{$popular[7]['title']}}</h3>
                            <p>{{$popular[7]['shorttext']}}</p>
                            <p class="read-more"></p>
                        </div>
                        <a href="/post/{{$popular[7]['id']}}" class="readmore"><br/>Read
                            More</a>
                    </li>
                </ul>
                </div>
        </div>
    </div>
@include('newsletter')
@include('footer')



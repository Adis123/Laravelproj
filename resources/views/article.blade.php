@include('header')
        <div class="content_area">
            <div class="main_content floatleft">
                <div class="col-md-12"><h1> {{$title}}</h1></div>
            <div class="row">
                <div class="col-md-4"><img src="{{$imagelink}}"/> </div>

                <div class="col-md-8">
                    <span class="articletext">{{$shorttext}}</span>
                </div>
            </div>

            </div>
               @include('newsletter')
                @include('footer')
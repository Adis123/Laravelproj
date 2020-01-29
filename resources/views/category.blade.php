@include('header')


<div class="content_area">
    <div class="main_content floatleft">
        @foreach ($data as $dat)
            <div class="row">
                <div class="col-md-4"><img src="{{$dat['imagelink']}}"/></div>
                <div class="col-md-8">
                    <a href="/post/{{$dat['id']}}">
                        <h2> {{ $dat['title'] }} </h2></a>

                <div>
                    <p>{{$dat['shorttext']}}</p></div>
            </div>
    </div>
        @endforeach
        {{$data->links()}}

    </div>
@include('newsletter')
@include('footer')
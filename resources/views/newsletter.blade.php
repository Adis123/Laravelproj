<div class="sidebar floatright">
    <div class="single_sidebar"></div>


{!! Form::open(
array(
'route' => 'newsletter.store',
'class' => 'form')
) !!}
<div class="single_sidebar">
    <div class="news-letter">
        <h2>Sign Up for Newsletter</h2>
        <p>Sign up to receive our free newsletters!</p>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                There were some problems.<br /> <br/>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->
        <form action="#" method="post">
            {!! Form::label('Name') !!}
            {!! Form::text('name', null,
              array(
                'class'=>'form-control',
                'placeholder'=>'List Name'
              )) !!}
            {!! Form::label('Email') !!}
            {!! Form::text('email', null,
              array(
                'class'=>'form-control',
                'placeholder'=>'List Email'
              )) !!}

            <div class="form-group">
                {!! Form::submit('Submit!',
                  array('class'=>'btn btn-primary'
                )) !!}
            </div>
        </form>
        <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
    </div>
</div>
{!! Form::close() !!}
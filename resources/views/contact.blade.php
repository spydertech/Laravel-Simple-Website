@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <p>Consectetuer elit adipiscing commodo duis vitae, proin volutpat et nam est condimentum. Id tortor convallis. Orci id. Conubia tristique ante tortor condimentum sem. Quis tortor interdum quam. Sapien adipiscing aliquam. Facilisis imperdiet vivamus, vel dapibus et purus rutrum, wisi donec sodales molestie pede eu odio, tempor ut.</p>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your Name'])}}
        </div>
        <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'youremail@email.com'])}}
        </div>
        <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Your Message'])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection
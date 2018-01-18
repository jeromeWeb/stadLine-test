@extends('welcome')

@section('section')

    <div class="bet clearfix">
        @include('components/bet/input-bet')
    </div>

    <div class="bet clearfix">
       @include('components/bet/input-betResult')
    </div>

@endsection

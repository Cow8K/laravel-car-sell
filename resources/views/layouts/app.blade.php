@extends('layouts.clean')

@section('subContent')
    @include('layouts.partials.header')
    @yield('content')
    <footer></footer>
@endsection

@extends('layouts.body')

@push('meta')

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | Dashboard</title>

@endpush
@push('style')
    <!-- write your custom css code -->
@endpush
@push('script')
    <!-- write your custom js script code -->
@endpush

@push('header')
    @include('layouts.header')
@endpush

@push('menu')
    @include('layouts.leftmenu')
@endpush

@push('footer')
    @include('layouts.footer')
@endpush

@section('content')
	<h1>Dashboard</h1>
@endsection
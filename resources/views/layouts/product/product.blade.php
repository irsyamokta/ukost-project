@extends('master')
@section('product')
    @include('layouts.navigation.sidebar')
    @include('layouts.navigation.bottombarproduct')
    @include('layouts.navigation.paybottombar')
    @include('layouts.navigation.breadcrumb')
    @include('layouts.product.gallery.gallery')
    @include('layouts.product.info.info')
@endsection

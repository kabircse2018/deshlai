@extends('frontend.master')

@section('content')

@include('frontend.slider.index')

@include('frontend.section.poem.index')

@include('frontend.section.golosorgom.index')



<!--ads start-->
@include('frontend.ads.index')
<!--ads end-->

@include('frontend.section.exhibition.index')


@endsection


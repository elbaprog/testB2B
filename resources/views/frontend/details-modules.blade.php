@extends('frontend.layout.main')
@section('main')
@foreach($modules as $module)
            <div class="page-header theme-bg-dark py-5 text-center position-relative">
                <div class="theme-bg-shapes-right"></div>
                <div class="theme-bg-shapes-left"></div>
                <div class="container">
                    <h1 class="page-heading single-col-max mx-auto">{{$module['title']}}</h1>
                </div>
            </div><!--//page-header-->
            <br>
            <div class="container" style="text-align: center;color: black;">
                {!! $module['description'] !!}
            </div>

                @endforeach
@endsection
@extends('frontend.layout.main')
@section('main')
<div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
	    </div>
    </div><!--//page-header-->
   <!-- resources/views/categorys.blade.php -->
<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                @foreach($categorys as $category)
                    <div class="col-12 col-lg-6 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <img src="{{ asset($category->category_image) }}" style="width: 60px; height: 50px;">
                                    <span class="card-title-text">{{ $category->category }}</span>
                                </h5>
                                <a class="card-link-mask" href="{{ route('category', $category->id) }}"></a>

                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                @endforeach
            </div><!--//row-->
        </div><!--//docs-overview-->
    </div><!--//container-->
</div><!--//page-content-->

				   
@endsection
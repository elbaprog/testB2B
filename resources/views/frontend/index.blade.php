@extends('frontend.layout.main')
@section('main')
<div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
		    <div class="page-intro single-col-max mx-auto">Search for manual</div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100">
		            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
             </div>
	    </div>
    </div><!--//page-header-->
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
							        <span class="card-title-text">{{ $category->category}}</span>
							    </h5>
							    <!-- <div class="card-text"  style="text-align: center;" >
								    Manual për përdorimin e AppMed gjatë regjistrimit dhe vizitës së pacientëve në klinikë
								</div> -->
							    <a class="card-link-mask" href="index1.html"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
                    @endforeach
				   
@endsection
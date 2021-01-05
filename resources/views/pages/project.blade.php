<?php $gallery ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Projects</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Projects</a>
			</div>
		</div>
	</div>
</div>



 <div class="container" style="margin-top:40px;">
            <h2 style="color:black;padding:40px;text-align:center;font-weight:bold; font-size:45px;">Our Projects</h2>
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    
                @foreach( $Projects as $gallery)

                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="{{ asset('storage/gallery/'.$gallery->image)}}" data-src="{{ asset('storage/gallery/'.$gallery->image)}}" data-sub-html="<h4>{{ $gallery->name }}</h4><p>{{ $gallery->description }} </p>">
                        <a href="">
                            <img class="img-responsive" src="{{ asset('storage/gallery/'.$gallery->image)}}">
                        </a>
                    </li>
                   
                @endforeach
                
                </ul>
            </div>
        </div>
      

        



		<div class="col-md-3 contact-info">
			<div >
				<div class="clearfix">
				</div>
			</div>
		</div>
		
         



	</div>
</div>





@endsection

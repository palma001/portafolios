@extends('layouts.app_front')
@section('title', $setting->header_title)
@section('favicon', Helpers::validImage("/settings/favicon/{$setting->favicon}"))
@section('facebook', $setting->facebook_link)
@section('twitter', $setting->twitter_link)
@section('instagram', $setting->instagram_link)
@section('phone', $setting->phone)
@section('email', $setting->email)
@section('address', $setting->address)
@section('content')
   <section>
        <header class="major">
            <h2>Equipo de Trabajo</h2>
        </header>
        <div class="container">
        	<div class="header bg-primary">
		        <div class="row">
		        	<div class="col-5 col-4-small col-4-medium header-img">
				        <a href="#" class="image">
				            <img src="{{ Helpers::validImage("equipments/{$equipment->image}") }}" alt="" style="width: 350px; height: 350px; border-radius: 100%;" />
				        </a>
		        	</div>
		        	<div class="col-7 col-6-small col-6-medium">
				        <h1>{{ strtoupper($equipment->name) }}</h1>
				        <h1>{{ strtoupper($equipment->lastname) }}</h1>
				        <p>{{ $equipment->description }}</p>
		        	</div>
		        </div>
        	</div>
        	<div class="content bg-default">
        		<div class="row">
        			<div class="col-4">
		        		<header class="major">
				            <h2>Contacto</h2>
				        </header>
		        		<div class="studies">
		        			<ul class="alt">
		        				@foreach($equipment->professions as $index => $profession)
			        				<li>
			        					<h3>{{$index + 1}}. {{$profession->name}}</h3>
			        				</li>
		        				@endforeach
		        			</ul>
		        		</div>
        			</div>
        			<div class="col-4">
		        		<header class="major">
				            <h2>Experiencia</h2>
				        </header>
		        		<div class="studies">
		        			<ul class="alt">
		        				@foreach($equipment->professions as $index => $profession)
			        				<li>
			        					<h3>{{$index + 1}}. {{$profession->name}}</h3>
			        				</li>
		        				@endforeach
		        			</ul>
		        		</div>
        			</div>
        			<div class="col-4">
		        		<header class="major">
				            <h2>Estudios</h2>
				        </header>
		        		<div class="studies">
		        			<ul class="alt">
		        				@foreach($equipment->professions as $index => $profession)
			        				<li>
			        					<h3>{{$index + 1}}. {{$profession->name}}</h3>
			        				</li>
		        				@endforeach
		        			</ul>
		        		</div>
        			</div>
        		</div>
        	</div>
        </div>
    </section>
    <style>
    	.container {
    		padding: 5px;
    	}
    	.container .header {
    		padding: 10px;
    	}
    	.container .header h1 {
    		color: white;
    	}
    	.container .content header {
    		margin-top: 40px;
    	}
    	.container .content {
    		padding: 15px 10px 10px 20px;
    	}
    	.bg-primary {
    		background: #f56a6a;
    		color: white;
    	}
    	.bg-default {
    		background: rgba(0,0,0,0.1);
    	}
    	.header-img {
    		display: flex;
    		justify-content: center;
    		align-items: center;
    	}
    </style>
@endsection


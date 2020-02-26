@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
    @if (session()->has('status'))
        <div class="alert alert-sucess">{{session('status')}}</div>    
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">
                        Configuracón
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.update', 1) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                    Descripción de la pagina
                                </h3>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Titulo
                                    </label>
                                    <input class="form-control" value="{{$setting->title_page}}" name="title_page" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Subtitulo
                                    </label>
                                    <input class="form-control" value="{{$setting->subtitle_page}}" name="subtitle_page" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mt-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Descripción
                                    </label>
                                    <textarea class="form-control" name="description_page">{{$setting->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                            	<label class="bmd-label-floating">
                                    Portada
                                </label>
                                <div class="mt-2">
                                    <input type="file" name="image_page" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <h3>
                                    Cabecera de la pagina
                                </h3>
                            </div>
	                        <div class="col-md-12 mt-4">
	                            <div class="form-group">
	                                <label class="bmd-label-floating">
	                                    Titulo Cabecera
	                                </label>
	                                <input class="form-control" value="{{$setting->header_title}}" name="header_title" type="text"/>
	                            </div>
	                        </div>
                            <div class="col-md-12 mt-4">
                            	<label class="bmd-label-floating">
                                    Favicon
                                </label>
                                <div class="mt-2">
                                    <input type="file" name="favicon" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <h3>
                                    Redes Sociales
                                </h3>
                            </div>
                            <div class="col-md-12 mt-4">
                            	<label class="bmd-label-floating">
                                    Facebook
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="facebook_link" value="{{$setting->facebook_link}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                            	<label class="bmd-label-floating">
                                    Twitter
                                </label>
                                <div class="mt-2">
                                    <input type="text" value="{{$setting->twitter_link}}" name="twitter_link" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                            	<label class="bmd-label-floating">
                                    Instagram
                                </label>
                                <div class="mt-2">
                                    <input type="text" value="{{$setting->instagram_link}}" name="instagram_link" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                            	<label class="bmd-label-floating">
                                    Linkedln
                                </label>
                                <div class="mt-2">
                                    <input type="text" value="{{$setting->linkedln_link}}" name="linkedln_link" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <h3>
                                    Footer de la pagina
                                </h3>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label class="bmd-label-floating">
                                    Telefono
                                </label>
                                <div class="mt-2">
                                    <input type="text" value="{{$setting->phone}}" name="phone" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label class="bmd-label-floating">
                                    Correo
                                </label>
                                <div class="mt-2">
                                    <input type="email" value="{{$setting->email}}" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label class="bmd-label-floating">
                                    Dirección
                                </label>
                                <textarea class="form-control" name="address">{{$setting->address}}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary pull-right" type="submit">
                            Modificar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

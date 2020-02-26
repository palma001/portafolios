@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">
                        Agregar Equipo
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('equipment.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Nombre
                                    </label>
                                    <input class="form-control" name="name" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Apellido
                                    </label>
                                    <input class="form-control" name="lastname" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Email
                                    </label>
                                    <input class="form-control" name="email" type="email"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Descripción
                                    </label>
                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-2">
                                    <input type="file" name="avatar" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary pull-right" type="submit">
                            Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

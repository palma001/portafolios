@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">
                        Agregar Trabajo
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Titulo
                                    </label>
                                    <input class="form-control" name="title" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Link
                                    </label>
                                    <input class="form-control" name="link" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        Ver en el Home
                                    </label>
                                   <select  class="form-control" name="showHome" id="">
                                        <option value="null">--Seleccionar--</option>
                                       <option value="true">Activado</option>
                                       <option value="false">Desactivado</option>
                                   </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="">
                                        Fecha de inicio
                                    </label>
                                    <input class="form-control" name="start_date" type="date"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="">
                                        Fecha de culminación
                                    </label>
                                    <input class="form-control" name="end_date" type="date"/>
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
                                    <input type="file" name="image" class="form-control"/>
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

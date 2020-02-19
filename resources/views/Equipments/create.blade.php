@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Agregar Equipo</h4>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('equipment.store') }}">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Nombre</label>
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Apellido</label>
                  <input type="text" name="lastname" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Descripción</label>
                  <textarea name="decription" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
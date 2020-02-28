@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-md-12">
	    <a href="{{route('equipment.create')}}" rel="tooltip" title="Agregar Usuario" class="btn btn-primary text-white" style="float: right;">
	        Agregar Equipo
	    </a>
	</div>
	<div class="card">
		<div class="card-header card-header-tabs card-header-primary">
			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<h4 class="title">Usuarios</h4>
				</div>
			</div>
		</div>
	    <div class="card-body">
			<div class="tab-content">
				<div class="tab-pane active" id="profile">
				    <table class="table">
				      	<thead class="text-warning">
				          <th>ID</th>
				          <th>Avatar</th>
				          <th>Nombre</th>
				          <th>Apellido</th>
				          <th>Email</th>
				          <th></th>
				        </thead>
				        @foreach($equipments as $equipment)
				            <tbody>
				              <tr>
				                <td class="td-actions text-right">
				                  {{$equipment->id}}
				                </td>
				                <td>
				                	<img class="avatars" src="{{
				                			
				                			Storage::disk('dropbox')->exists("equipments/{$equipment->image}") ?
				                			Storage::disk('dropbox')->url($equipment->image) :
				                			Storage::disk('dropbox')->url('undraw_empty_xct9.png')

				                		}}"
				                		alt="image"
				                		style="width: 50px; height: 50px; border-radius: 100%;">
				                </td>
				                <td>{{$equipment->name}}</td>
				                <td>{{$equipment->lastname}}</td>
				                <td>{{$equipment->email}}</td>
				                <td class="td-actions text-right">
				                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
				                    <i class="material-icons">edit</i>
				                  </button>
				                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
				                    <i class="material-icons">close</i>
				                  </button>
				                </td>
				              </tr>
				            </tbody>
				        @endforeach
				    </table>
				</div>
			</div>
	    </div>
	  </div>
	</div>
</div>
@endsection
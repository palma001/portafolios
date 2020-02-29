@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-md-12">
	    <a href="{{route('works.create')}}" rel="tooltip" title="Agregar Trabajo" class="btn btn-primary text-white" style="float: right;">
	        Agregar Trabajo
	    </a>
	</div>
	<div class="card">
		<div class="card-header card-header-tabs card-header-primary">
			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<h4 class="title">Trabajos Realizados</h4>
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
				          <th>Titulo</th>
				          <th>Fecha de inicio</th>
				          <th>Fecha de culminaciòn</th>
				          <th></th>
				        </thead>
			            <tbody>
					        @foreach($works as $work)
				              <tr>
				                <td class="td-actions text-right">
				                  {{$work->id}}
				                </td>
				                <td>
				                	<img class="avatars" src="
				                		{{
				                			Helpers::validImage("equipments/{$work->image}")
				                		}}"
				                		alt="image"
				                		style="width: 50px; height: 50px; border-radius: 100%;">
				                </td>
				                <td>{{$work->title}}</td>
				                <td>{{$work->start_date}}</td>
				                <td>{{$work->end_date}}</td>
				                <td class="td-actions text-right">
				                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
				                    <i class="material-icons">edit</i>
				                  </button>
				                  <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
				                    <i class="material-icons">close</i>
				                  </button>
				                </td>
				              </tr>
					        @endforeach
			            </tbody>
				    </table>
				    <div class="" style="float: right;">
				   		{{$works->links()}}
				    </div>
				</div>
			</div>
	    </div>
	  </div>
	</div>
</div>
@endsection
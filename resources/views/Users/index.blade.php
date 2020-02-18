@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12">
	    <button type="button" rel="tooltip" title="Remove" class="btn btn-primary">
	        Agregar Usuario
	    </button>
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
			          <th>Nombre</th>
			          <th>Email</th>
			          <th></th>
			        </thead>
			        @foreach($users as $user)
			            <tbody>
			              <tr>
			                <td class="td-actions text-right">
			                  {{$user->id}}
			                </td>
			                <td>{{$user->name}}</td>
			                <td>{{$user->email}}</td>
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
			<div class="tab-pane" id="messages">
			  <table class="table">
			    <tbody>
			      <tr>
			        <td>
			          <div class="form-check">
			            <label class="form-check-label">
			              <input class="form-check-input" type="checkbox" value="" checked>
			              <span class="form-check-sign">
			                <span class="check"></span>
			              </span>
			            </label>
			          </div>
			        </td>
			        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
			        </td>
			        <td class="td-actions text-right">
			          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
			            <i class="material-icons">edit</i>
			          </button>
			          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
			            <i class="material-icons">close</i>
			          </button>
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <div class="form-check">
			            <label class="form-check-label">
			              <input class="form-check-input" type="checkbox" value="">
			              <span class="form-check-sign">
			                <span class="check"></span>
			              </span>
			            </label>
			          </div>
			        </td>
			        <td>Sign contract for "What are conference organizers afraid of?"</td>
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
			  </table>
			</div>
			<div class="tab-pane" id="settings">
			  <table class="table">
			    <tbody>
			      <tr>
			        <td>
			          <div class="form-check">
			            <label class="form-check-label">
			              <input class="form-check-input" type="checkbox" value="">
			              <span class="form-check-sign">
			                <span class="check"></span>
			              </span>
			            </label>
			          </div>
			        </td>
			        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
			        <td class="td-actions text-right">
			          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
			            <i class="material-icons">edit</i>
			          </button>
			          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
			            <i class="material-icons">close</i>
			          </button>
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <div class="form-check">
			            <label class="form-check-label">
			              <input class="form-check-input" type="checkbox" value="" checked>
			              <span class="form-check-sign">
			                <span class="check"></span>
			              </span>
			            </label>
			          </div>
			        </td>
			        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
			        </td>
			        <td class="td-actions text-right">
			          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
			            <i class="material-icons">edit</i>
			          </button>
			          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
			            <i class="material-icons">close</i>
			          </button>
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <div class="form-check">
			            <label class="form-check-label">
			              <input class="form-check-input" type="checkbox" value="" checked>
			              <span class="form-check-sign">
			                <span class="check"></span>
			              </span>
			            </label>
			          </div>
			        </td>
			        <td>Sign contract for "What are conference organizers afraid of?"</td>
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
			  </table>
			</div>
			</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
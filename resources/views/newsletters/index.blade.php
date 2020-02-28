@extends('layouts.app_back')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="card">
        <div class="card-header card-header-tabs card-header-primary">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <h4 class="title">Newsletters</h4>
            </div>
          </div>
        </div>
        <div class="card-body">
			<div class="tab-content">
				<div class="tab-pane active" id="profile">
				    <table class="table">
				      	<thead class="text-warning">
				          <th>ID</th>
				          <th>Email</th>
				        </thead>
				        @foreach($newsletters as $newsletter)
				            <tbody>
				              <tr>
				                <td class="td-actions text-right">
				                  {{$newsletter->id}}
				                </td>
				                <td>{{$newsletter->email}}</td>
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
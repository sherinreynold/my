@extends('admin.common')

@section('content1')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
				
                <div class="panel-body">
				
				<a href="{{ url('/add_admin_user') }}">Add</a></li>
				
	 </div>
            </div>
        </div>
    </div>
</div>
@endsection

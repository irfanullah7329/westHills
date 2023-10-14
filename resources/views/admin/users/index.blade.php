@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
      <div class="card-body"> 
        @include('admin.partials.success-messages')
      <a  href="{{ route('admin.users.create') }}" style="float:right;">Add new user</a>
        <h4 class="card-title">All Users</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @if(!empty($users) && $users->count())
                        @foreach($users as $key => $user)
                  <tr>
                      
                      
                      <td>{{ $user->FirstName }}</td>
                      <td>{{ $user->LastName }}</td>
                      <td>{{ $user->email }}</td>
                      <td> @foreach($roles as $key => $role)
                            {{ ($role->RoleId === $user->RoleId) ?  $role->RoleName: '' }}
                          @endforeach</td>
                      <td>
                        {{ ($user->isActive === 1 || $user->isActive === NULL)? "Active" : "Inactive" }}
                      </td>
                      
                      <td>
                        <a href="{{ route('admin.users.edit', $user->UserId) }}" class="text-primary mr-2">Add Churches</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.users.edit', $user->UserId) }}" class="text-primary mr-2">update</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.users.delete', $user->UserId) }}" class="text-danger mr-3">delete</a>
                      </td>
                  </tr>
                  @endforeach
                    @else
                        <tr>
                            <td colspan="10">There are no data.</td>
                        </tr>
                    @endif
                  
                </tbody>
              </table>
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
      <div class="card-body"> 
        @include('admin.partials.success-messages')
      <a  href="{{ route('admin.staff.create') }}" style="float:right;">Add New Staff</a>
        <h4 class="card-title">All Staff</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>Status</th> 
                      <th>Image</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @if(!empty($staffs) && $staffs->count())
                        @foreach($staffs as $key => $staff)
                  <tr>
                  <!-- date('Y-m-d  H:i:s', -->
                  <!-- date('H:i:s', -->
                      <td>{{ $staff->title }}</td>
                      <td>{{ $staff->description }}</td>
                      <td>{{ $staff->status }}</td>
                      <td><img src="{{asset('images/staff_image/'.$staff->imageUrl)}}" alt=""
                                            width="50px" height="50px"></td>
                      <td>
                        <a href="{{ route('admin.staff.edit', $staff->id) }}" class="text-primary mr-2">update</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.staff.delete',$staff->id) }}" class="text-danger mr-3">delete</a>
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
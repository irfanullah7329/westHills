@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
      <div class="card-body"> 
      <a  href="{{ route('admin.churches.create') }}" style="float:right;">Add new church</a>
        <h4 class="card-title">All Churches</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Name</th>
                      <th>Town</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Church Image</th>
                      <th>Actions</th>
                      

                  </tr>
                </thead>
                <tbody>
                @if(!empty($churches) && $churches->count())
                        @foreach($churches as $key => $church)
                  <tr>
                      
                      
                      <td>{{ $church->ChurchName}}</td>
                      <td>{{ $church->Town }}</td>
                      <td>{{ $church->Address }}</td>
                      <td>{{ $church->EmailAddress }}</td>
                      <td>{{ $church->Phone }}</td>
                      <td>
                      @if(isset($church->ImageUrl))  
                      <img src="{{ $church->getImagePath($church->ImageUrl) }}" width="100" height="100" />
                      @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.churches.edit', $church->ChurchId) }}" class="text-primary mr-2">update</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.churches.delete' , $church->ChurchId) }}" class="text-danger mr-3">delete</a>
                      </td>
                  </tr>
                  @endforeach
                    @else
                        <tr>
                            <td colspan="10">There are no data in the church.</td>
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
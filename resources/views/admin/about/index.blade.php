@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
      <div class="card-body"> 
        @include('admin.partials.success-messages')
      <a  href="{{ route('admin.about.create') }}" style="float:right;">Add New About</a>
        <h4 class="card-title">All About</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Title</th>
                      <th>Description</th>
                      
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @if(!empty($abouts) && $abouts->count())
                        @foreach($abouts as $key => $about)
                  <tr>
                  <!-- date('Y-m-d  H:i:s', -->
                  <!-- date('H:i:s', -->
                      <td>{{ $about->title }}</td>
                      <td>{{ substr($about->description,0,20) }}</td>
                    
                      <td>
                        <a href="{{ route('admin.about.edit', $about->id) }}" class="text-primary mr-2">update</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.about.delete',$about->id) }}" class="text-danger mr-3">delete</a>
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
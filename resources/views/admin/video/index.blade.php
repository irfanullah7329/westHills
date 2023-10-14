@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
      <div class="card-body"> 
        @include('admin.partials.success-messages')
      <a  href="{{ route('admin.video.create') }}" style="float:right;">Add New Video</a>
        <h4 class="card-title">All Video</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Title</th>
                      <th>Video Link</th>
                      <th>Status</th>
                      <th>Action</th>
                      
                  </tr>
                </thead>
                <tbody>
                   @if(!empty($videos) && $videos->count())
                          @foreach($videos as $key => $video)
                  <tr>
                      
                      <td>{{ $video->title }}</td>
                      <td>{{ $video->video_link }}</td>
                      <td>  {{ ($video->status === 1 || $video->status === NULL)? "Active" : "Inactive" }}</td>
                    
                      <td>
                        <a href="{{ route('admin.video.edit', $video->id) }}" class="text-primary mr-2">update</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.video.delete', $video->id) }}" class="text-danger mr-3">delete</a>
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
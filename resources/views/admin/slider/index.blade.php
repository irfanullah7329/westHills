@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
      <div class="card-body"> 
        @include('admin.partials.success-messages')
      <a  href="{{ route('admin.slider.create') }}" style="float:right;">Add New Slider</a>
        <h4 class="card-title">All Slider</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Title</th>
                      <th>Description</th>
                     
                      <th>Image</th>
                     
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @if(!empty($sliders) && $sliders->count())
                        @foreach($sliders as $key => $slider)
                  <tr>
                  <!-- date('Y-m-d  H:i:s', -->
                  <!-- date('H:i:s', -->
                      <td>{{ $slider->title }}</td>
                      <td>{{ $slider->description }}</td>
                       
                      @if(isset($slider->imageUrl))  
                      <td><img src="{{asset('images/slider_image/'.$slider->imageUrl)}}" alt=""
                                            width="50px" height="50px"></td>
                      @endif 
                      
                      <td>
                        <a href="{{ route('admin.slider.edit', $slider->id) }}" class="text-primary mr-2">update</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('admin.slider.delete',$slider->id) }}" class="text-danger mr-3">delete</a>
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
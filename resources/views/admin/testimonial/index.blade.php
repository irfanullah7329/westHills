@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            @include('admin.partials.success-messages')
            <a href="{{ route('admin.testimonial.create') }}" style="float:right;">Add New </a>
            <h4 class="card-title">All Testimonial</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Comment</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($testimonials) && $testimonials->count())
                                @foreach($testimonials as $key => $testi)
                                <tr>
                                    <!-- date('Y-m-d  H:i:s', -->
                                    <!-- date('H:i:s', -->
                                    <td>{{ $testi->name }}</td>
                                    <td>{{ $testi->title }}</td>
                                    <td>{{ substr($testi->comment,0,15) }}</td>
                                    <td>
                                        @if(isset($testi->image))
                                        <img src="{{asset('images/testimonial_image/'.$testi->image)}}" alt=""
                                             width="50px" height="50px">
                                        @endif  
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.testimonial.edit', $testi->id) }}"
                                            class="text-primary mr-2">update</a>
                                        &nbsp;&nbsp;
                                        <a href="{{ route('admin.testimonial.delete',$testi->id) }}"
                                            class="text-danger mr-3">delete</a>
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
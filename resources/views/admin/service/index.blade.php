@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            @include('admin.partials.success-messages')
            <a href="{{ route('admin.service.create') }}" style="float:right;">Add New</a>
            <h4 class="card-title">Show All</h4>
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
                                @if(!empty($services) && $services->count())
                                @foreach($services as $key => $service)
                                <tr>

                                    <td>{{ $service->title }}</td>
                                    <td>{{ substr($service->description,0,20) }}</td>
                                    <td>
                                        @if(isset($service->image))
                                        <img src="{{asset('images/service_image/'.$service->image)}}" alt=""
                                            width="50px" height="50px">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.service.edit', $service->id) }}"
                                            class="text-primary mr-2">update</a>
                                        &nbsp;&nbsp;
                                        <a href="{{ route('admin.service.delete',$service->id) }}"
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
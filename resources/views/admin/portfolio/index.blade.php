@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            @include('admin.partials.success-messages')
            <a href="{{ route('admin.portfolio.create') }}" style="float:right;">Add New</a>
            <h4 class="card-title">All Portfolio</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>

                                    <th>Title</th>
                                    <th>Technology</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($portfolios) && $portfolios->count())
                                @foreach($portfolios as $key => $portfolio)
                                <tr>
                                    <!-- date('Y-m-d  H:i:s', -->
                                    <!-- date('H:i:s', -->

                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->technology}}</td>
                                    <td>{{ substr($portfolio->description,0,15) }}</td>
                                    <td><img src="{{asset('images/portfolio_images/'.$portfolio->image)}}" alt=""
                                            width="50px" height="50px"></td>


                                    <td>
                                        <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}"
                                            class="text-primary mr-2">update</a>
                                        &nbsp;&nbsp;
                                        <a href="{{ route('admin.portfolio.delete',$portfolio->id) }}"
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
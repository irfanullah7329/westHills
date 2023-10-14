@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            @include('admin.partials.success-messages')
            <a href="{{ route('admin.category.create') }}" style="float:right;">Add New </a>
            <h4 class="card-title">All Team</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    
                                    <th>Title</th>
                                    
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($categories) && $categories->count())
                                @foreach($categories as $key => $category)
                                <tr>
                                    
                                    <td>{{ $category->title }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                            class="text-primary mr-2">update</a>
                                        &nbsp;&nbsp;
                                        <a href="{{ route('admin.category.delete',$category->id) }}"
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
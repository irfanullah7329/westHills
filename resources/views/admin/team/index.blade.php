@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            @include('admin.partials.success-messages')
            <a href="{{ route('admin.team.create') }}" style="float:right;">Add New Member</a>
            <h4 class="card-title">All Team</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($teams) && $teams->count())
                                @foreach($teams as $key => $team)
                                <tr>
                                    <!-- date('Y-m-d  H:i:s', -->
                                    <!-- date('H:i:s', -->
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->title }}</td>
                                    <td>{{ substr($team->description,0,15) }}</td>
                                    <td>
                                        @if(isset($team->image))
                                        <img src="{{asset('images/team_image/'.$team->image)}}" alt=""
                                            width="50px" height="50px">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.team.edit', $team->id) }}"
                                            class="text-primary mr-2">update</a>
                                        &nbsp;&nbsp;
                                        <a href="{{ route('admin.team.delete',$team->id) }}"
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
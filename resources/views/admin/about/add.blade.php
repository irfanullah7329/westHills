@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    @include('admin.partials.success-messages')
                    @include('admin.partials.validation-error-messages')
                    <a href="{{ route('admin.about.list')}}" style="float:right;">Show all</a>
                    <p class="card-title"><strong>Add New About </strong></p>
                    <!-- <h4 class="card-title" style="float:right;">View All</h4> -->
                    <p class="card-description">
                        <!-- Create User -->
                    </p>
                    <form class="form-sample" action="{{ route('admin.about.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <p class="card-description">
                            <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                        </p>
                        <!-- row start   -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-9">

                                        <textarea name="description" id="description" placeholder="Type your text here"
                                            rows="10" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                        <!-- row start -->

                        <!-- row end -->
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <!-- <button class="btn btn-light">Cancel</button> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
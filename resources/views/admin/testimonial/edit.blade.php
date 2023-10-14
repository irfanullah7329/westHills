@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    @include('admin.partials.success-messages')
                    @include('admin.partials.validation-error-messages')
                    <a href="{{ route('admin.testimonial.list')}}" style="float:right;">Show all</a>
                    <p class="card-title"><strong>Edit </strong></p>
                    <!-- <h4 class="card-title" style="float:right;">View All</h4> -->
                    <p class="card-description">
                        <!-- Create User -->
                    </p>
                    <form class="form-sample" action="{{ route('admin.testimonial.update', $testimonial->id) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <p class="card-description">
                            <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                        </p>
                        <!-- row start   -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" id="name"
                                            value="{{ old('name',$testimonial->name) }}" class="form-control"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" id="title"
                                            value="{{ old('title',$testimonial->title) }}" class="form-control"
                                            required />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- row end -->
                        <!-- row start -->
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="ImageUrl" id="ImageUrl" class="form-control"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Comment</label>
                                    <div class="col-sm-9">

                                        <textarea name="comment" id="comment" rows="10" cols="50" value=""
                                            class="form-control"
                                            required>{{ old('comment',$testimonial->comment) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row end -->

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <!-- <button class="btn btn-light">Cancel</button> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
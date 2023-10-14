@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    @include('admin.partials.success-messages')
                    @include('admin.partials.validation-error-messages')
                    <a href="{{ route('admin.portfolio.list')}}" style="float:right;">Show all</a>
                    <p class="card-title"><strong>Edit Team</strong></p>
                    <!-- <h4 class="card-title" style="float:right;">View All</h4> -->
                    <p class="card-description">
                        <!-- Create User -->
                    </p>
                    <form class="form-sample" action="{{ route('admin.portfolio.update', $portfolio->id) }}"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <p class="card-description">
                            <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                        </p>
                        <!-- row start   -->
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" id="title"
                                            value="{{ old('title',$portfolio->title) }}" class="form-control"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Technology</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="technology" id="technology" class="form-control"
                                            value="{{ old('technology',$portfolio->technology) }}" required />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- row end -->
                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="link" id="link"
                                            value="{{ old('link',$portfolio->link) }}" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Select</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="portfolio_image" id="portfolio_image"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row end -->

                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="description" id="description" class="form-control"
                                            rows="10" cols="50" value=""
                                            required> {{ old('description',$portfolio->description) }}</textarea>
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
@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    @include('admin.partials.success-messages')
                    @include('admin.partials.validation-error-messages')
                    <a href="{{ route('admin.staff.list')}}" style="float:right;">Show all staff</a>
                    <p class="card-title"><strong>Add New staff </strong></p>
                    <!-- <h4 class="card-title" style="float:right;">View All</h4> -->
                    <p class="card-description">
                        <!-- Create User -->
                    </p>
                    <form class="form-sample" action="{{ route('admin.staff.store') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <p class="card-description">
                            <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                        </p>
                        <!-- row start   -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="description" id="description"
                                            value="{{ old('description') }}" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Display</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="display" id="display" value="{{ old('display') }}"
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select name="category" class="form-control">

                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->
                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <select name="type" class="form-control">

                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
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
                                        <input type="file" name="staff_image" id="staff_image" 
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                           
                          </div>
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
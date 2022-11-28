@extends('layouts.master')

@section('title')
Add Client
@endsection('title')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Client</h4>
                <form class="forms-sample">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                </div>

                <!-- SEO  -->
                <div class="form-group">
                    <label for="name">SEO Title</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="SEO Title">
                </div>

                <div class="form-group">
                    <label for="name">SEO Keywords</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="SEO Keywords">
                </div>

                <div class="form-group">
                    <label for="description">SEO Description</label>
                    <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                </div>
                <!-- END SEO -->
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
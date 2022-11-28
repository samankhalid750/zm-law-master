@extends('layouts.master')

@section('title')
Services
@endsection('title')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Services
                <a type="button" class="btn btn-dark" style="float:right" href="{{route('service.create')}}">Add</a> </h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>53275531</td>
                                    <td>12 May 2017</td>
                                    <td style="text-align: center;"><i class="btn mdi mdi-table-edit"></i><i class="btn mdi mdi mdi-delete"></i></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
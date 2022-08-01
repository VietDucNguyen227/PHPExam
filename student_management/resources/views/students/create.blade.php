@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Add New Student</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student's Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="student Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student's Age:</strong>
                    <input type="text" name="age" class="form-control" placeholder="student Age">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student's Address:</strong>
                    <input type="text" name="address" class="form-control" placeholder="student Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student's Telephone:</strong>
                    <input type="text" name="telephone" class="form-control" placeholder="student Phone">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" text-center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

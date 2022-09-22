@extends('trainers.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Add new Trainer </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('trainers.index') }}"> Back</a>
        </div>
    </div>
</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong> there is some problems with your input </strong> <br> <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('trainers.store') }}" method="POST"> 
        @csrf
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> TrainerName </strong>
                <input type="text" name="trainername" class="form-control" placeholder="trainername">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Course</strong>
                    <input type="text" name="course" class="form-control" placeholder="course">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Cost</strong>
                    <input type="text" name="cost" class="form-control" placeholder="cost">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Submit</button>
            </div>
</form>
@endsection
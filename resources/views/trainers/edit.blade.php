@extends('trainers.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Edit </h2>
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
    <form action="{{ route('trainers.update', $trainer->id) }}" method="POST"> 
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <strong> TrainerName</strong>
                    <input type="text" name="trainername" value="{{ $trainer->trainername}}"
                    class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <strong> Course</strong>
                <input type="text" name="course" value="{{ $trainer->course}}"
                    class="form-control" placeholder="Course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Cost</strong>
                <input type="text" name="cost" value="{{ $trainer->cost}}"
                    class="form-control" placeholder="cost">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" text-center>
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>
</div>
    </form>
    @endsection
@extends('trainers.layout')
@section('content')
<div class="pull-left">
            <h2> trainer crud</h2>
</div>
<div class="row">
        <div class=""col-lg-12 margin-tb">
            <div class="btn btn-success" href="{{ route('trainers.create') }}"> create new trainer 
            <a class="btn btn-info" href="{{ route('trainers.create') }}"> Create </a>
            </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p> {{ $message }} </p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th> No</th>
        <th> Name</th>
        <th> course</th>
        <th> cost</th>
        <th width="280px"> Action</th>
    </tr>
    @php $i=0 @endphp
    @foreach ($trainers as $trainer)
    <tr>
        <td> {{ ++$i }} </td>
        <td> {{ $trainer->trainername }} </td>
        <td> {{ $trainer->course }} </td>
        <td> {{ $trainer->cost }}</td>
        <td>
            <form action="{{route('trainers.destroy',$trainer->id) }}" method="POST">
               
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete</button>

            </form>
          <!--   <a class="btn btn-info" href="{{ route('trainers.show',$trainer->id) }}"> Show </a> -->
                <a class="btn btn-primary" href="{{ route('trainers.edit',$trainer->id) }}"> Edit </a>
        </td>
    </tr>
    @endforeach
</table>

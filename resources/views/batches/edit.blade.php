@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Редактирование курса</div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label>Название</label></br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
        <label>Название курса</label></br>
        <input type="text" name="course_id" id="syllabus" value="{{$batches->course->name}}" class="form-control"></br>
        <label>Дата начала</label></br>
        <input type="text" name="start_date" id="duration" value="{{$batches->start_date}}" class="form-control"></br>
        <input type="submit" value="Обновить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
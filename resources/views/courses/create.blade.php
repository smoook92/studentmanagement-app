@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Страница курсов</div>
  <div class="card-body">
      
      <form action="{{ url('courses') }}" method="post">
        {!! csrf_field() !!}
        <label>Название</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Учебный план</label></br>
        <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
        <label>Продолжительность</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
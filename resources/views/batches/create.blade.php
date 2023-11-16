@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Страница Групп</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Название группы</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Курс</label></br>
        <!-- <input type="text" name="course_id" id="course_id" class="form-control"></br> -->

        <select name="course_id" id="course_id" class="form-control">
          @foreach($courses as $id => $scrollno)
            <option value="{{ $id }}">{{ $scrollno }}</option>
          @endforeach
        </select></br>

        <label>Дата начала</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
@extends('layout')
@section('content')

<br />
<div class="card">
  <div class="card-header">Зачисление</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments') }}" method="post">
        {!! csrf_field() !!}
        <label>Номер зачисления</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>

        <label>Группа</label></br>

        <select name="batch_id" id="batch_id" class="form-control">
          @foreach($batches as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select><br/>

        <label>Студент</label></br>

        <select name="student_id" id="student_id" class="form-control">
        @foreach($students as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
         </select><br/>

        <label>Дата вступления</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>

        <label>Плата за обучение</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
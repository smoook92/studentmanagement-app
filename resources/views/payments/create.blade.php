@extends('layout')
@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<div class="card">
  <div class="card-header">Платежи</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}

        <label>Рег. номер</label></br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach($enrollments as $id => $enroll_no)
            <option value="{{ $id }}">{{ $enroll_no }}</option>
          @endforeach
        </select></br>

        <label>Дата оплаты</label></br>
        <!-- <input type="text" name="course_id" id="course_id" class="form-control"></br> -->
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>

        <label>Сумма</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>

        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
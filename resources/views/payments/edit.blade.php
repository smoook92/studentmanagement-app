@extends('layout')
@section('content')

<br />
<div class="card">
  <div class="card-header">Редактирование Платежа</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />

        <label for="enrollment_id">Номер зачисления</label>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
            @foreach($enrollments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
            @endforeach
        </select>
        </br>

        <label>Дата оплаты</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>

        <label>Сумма</label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
        
        <input type="submit" value="Обновить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
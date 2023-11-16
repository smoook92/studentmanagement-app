@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Редактирование Платежа</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />

        <label>Рег. номер</label></br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach($payments as $id => $enrollno)
            <option value="{{ $id }}">{{ $enrollno }}</option>
          @endforeach
        </select></br>

        <label>Дата оплаты</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>

        <label>Сумма</label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
        
        <input type="submit" value="Обновить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
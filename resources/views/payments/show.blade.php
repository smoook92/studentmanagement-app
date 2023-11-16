@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Страница Платежей</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Рег. номер : {{ $item->enrollment->enroll_no }}</h5>
        <p class="card-text">Дата оплаты : {{ $item->paid_date }}</p>
        <p class="card-text">Сумма : {{ $item->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
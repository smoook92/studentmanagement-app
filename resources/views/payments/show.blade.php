@extends('layout')
@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
<div class="card">
    <div class="card-header">Страница Платежей</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Рег. номер : {{ $payments->enrollment->enroll_no }}</h5>
            <p class="card-text">Дата оплаты : {{ $payments->paid_date }}</p>
            <p class="card-text">Сумма : {{ $payments->amount }}</p>
        </div>
    </div>
</div>
@endsection
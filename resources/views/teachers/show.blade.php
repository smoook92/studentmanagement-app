@extends('layout')
@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
<div class="card">
  <div class="card-header">Страница Учителей</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Имя : {{ $teachers->name }}</h5>
        <p class="card-text">Адрес : {{ $teachers->address }}</p>
        <p class="card-text">Телефон : {{ $teachers->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
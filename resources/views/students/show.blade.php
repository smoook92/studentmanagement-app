@extends('layout')
@section('content')

<br />
<div class="card">
  <div class="card-header">Страница студентов</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Имя : {{ $students->name }}</h5>
        <p class="card-text">Адрес : {{ $students->address }}</p>
        <p class="card-text">Телефон : {{ $students->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
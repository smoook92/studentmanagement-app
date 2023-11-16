@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Страница Групп</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Название : {{ $batches->name }}</h5>
        <p class="card-text">Курс : {{ $batches->course->name }}</p>
        <p class="card-text">Дата начала : {{ $batches->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
@extends('layout')
@section('content')
 
<br />
<div class="card">
  <div class="card-header">Страница Курсов</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Имя : {{ $courses->name }}</h5>
        <p class="card-text">Учебный план : {{ $courses->syllabus }}</p>
        <p class="card-text">Продолжительность : {{ $courses->duration() }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
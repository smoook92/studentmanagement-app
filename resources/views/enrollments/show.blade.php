@extends('layout')
@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<div class="card">
  <div class="card-header">Регистрация</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Регистрационный номер : {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">Группа : {{ $enrollments->batch->name }}</p>
        <p class="card-text">Студент : {{ $enrollments->student->name }}</p>
        <p class="card-text">Дата поступления : {{ $enrollments->join_date }}</p>
        <p class="card-text">Плата : {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
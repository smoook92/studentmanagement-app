@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Страница учителей</div>
  <div class="card-body">
      
      <form action="{{ url('teachers') }}" method="post">
        {!! csrf_field() !!}
        <label>Имя</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Адрес</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Телефон</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
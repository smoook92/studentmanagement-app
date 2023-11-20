@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Редактирование учителя</div>
  <div class="card-body">
      
      <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Имя</label></br>
        <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
        <label>Адрес</label></br>
        <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control"></br>
        <label>Телефон</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control"></br>
        <input type="submit" value="Обновить" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
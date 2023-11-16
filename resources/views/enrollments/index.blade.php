@extends('layout')
@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <div class="card">
        <div class="card-header">
            <h2>Заявки на зачисление</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Добавить новый заявку">
                <i class="fa fa-plus" aria-hidden="true"></i> Добавить Заявку
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Рег. номер</th>
                            <th>Дата зачисления</th>
                            <th>Студент</th>
                            <th>Дата вступления</th>
                            <th>Платеж</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($enrollments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enroll_no }}</td>
                            <td>{{ $item->batch->name }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->join_date }}</td>
                            <td>{{ $item->fee }}</td>

                            <td>
                                <a href="{{ url('/enrollments/' . $item->id) }}" title="Посмотреть зачисление"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> 🔍</button></a>
                                <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Редактировать зачисление"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ✏️</button></a>

                                <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Удалить зачисление" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ⌫</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                
@endsection
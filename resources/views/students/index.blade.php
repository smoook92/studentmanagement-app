@extends('layout')
@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <div class="card">
        <div class="card-header">
            <h2>Управление студентами</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Добавить нового студента">
                <i class="fa fa-plus" aria-hidden="true"></i> Добавить Студента
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Адрес</th>
                            <th>Телефон</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->mobile }}</td>

                            <td>
                                <a href="{{ url('/students/' . $item->id) }}" title="Посмотреть студента"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> 🔍</button></a>
                                <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Редактировать студента"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ✏️</button></a>

                                <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Удалить студента" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ⌫</button>
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
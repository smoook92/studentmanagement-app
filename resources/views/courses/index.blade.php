@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Управление Курсами</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Добавить новый курс">
                <i class="fa fa-plus" aria-hidden="true"></i> Добавить Курс
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Учебный план</th>
                            <th>Продолжительность</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->syllabus }}</td>
                            <td>{{ $item->duration }}</td>

                            <td>
                                <a href="{{ url('/courses/' . $item->id) }}" title="Посмотреть курс"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Посмотреть</button></a>
                                <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Редактировать курс"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Редактировать</button></a>

                                <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Удалить курс" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Удалить</button>
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
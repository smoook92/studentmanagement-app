@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Управление Группами</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Добавить новую группу">
                <i class="fa fa-plus" aria-hidden="true"></i> Добавить Группу
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Название группы</th>
                            <th>Курс</th>
                            <th>Дата начала</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($batches as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->course_id }}</td>
                            <td>{{ $item->start_date }}</td>

                            <td>
                                <a href="{{ url('/batches/' . $item->id) }}" title="Посмотреть Группу"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Посмотреть</button></a>
                                <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Редактировать Группу"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Редактировать</button></a>

                                <form method="POST" action="{{ url('/batches' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Удалить Группу" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Удалить</button>
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
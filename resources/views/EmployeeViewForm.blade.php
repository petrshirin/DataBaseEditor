@extends("base")

@section("content")

    <div class="container">
        @if ($obj->id)
            <form action='/employees/form/{{$obj->id}}' method='post' class="form">
        @else
            <form action="/employees/form/" method="post" class="form">
        @endif
                @csrf
                <label for="FIO">ФИО</label>
                <input type="text" id="FIO" name="FIO">
                <label for="salary">Зарплата</label>
                <input type="number" step='0.01' placeholder='1000.00' min="1000.00" id="salary" name="salary">
                <label for="workTypes">Специальности</label>
                <select multiple name="workTypes[]" id="workTypes">
                    @foreach($workTypes as $workType)
                        <option value="{{$workType->id}}"
                                @if($obj->id && $obj->workTypes->find($workType->id))
                                selected
                            @endif
                        >{{$workType}}</option>
                    @endforeach
                </select>
                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    @if ($obj->id)
                        <a type="button" class="btn btn-danger" href="/employees/delete/{{$obj->id}}">Удалить</a>
                    @endif
                </div>
            </form>
    </div>

@stop

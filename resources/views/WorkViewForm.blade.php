@extends("base")

@section("content")
    <div class="container">
        @if ($obj->id)
            <form action='/works/form/{{$obj->id}}' method='post' class="form">
        @else
            <form action="/works/form/" method="post" class="form">
        @endif
                @csrf
                <label for="date_start">Дата начала</label>
                        <input type="date" id="date_start" name="date_start" value="{{$obj->getYearStart()}}">
                <label for="date_end">Дата выпуска</label>
                        <input type="date" id="date_end" name="date_end" value="{{$obj->getYearEnd()}}">
                <label for="work_type_id">Тип работы</label>
                <select type="text" id="work_type_id" name="work_type_id">
                    @foreach($workTypes as $workType)
                        <option value="{{$workType->id}}"
                                @if($obj->id && $obj->$workType->id == $workType->id)
                                selected
                            @endif
                        >{{$workType}}</option>
                    @endforeach
                </select>
                <label for="employee_id">Работник</label>
                <select type="text" id="employee_id" name="employee_id">
                    @foreach($employees as $employee)
                        <option value="{{$employee->id}}"
                                @if($obj->id && $obj->$workType->id == $employee->id)
                                selected
                            @endif
                        >{{$employee}}</option>
                    @endforeach
                </select>
                <label for="car_id">Машина</label>
                <select type="car" id="car_id" name="car_id">
                    @foreach($cars as $car)

                        <option value="{{$car->id}}"
                                @if($obj->id && $obj->car->id == $car->id)
                                selected
                            @endif
                        >{{$car}}</option>
                    @endforeach
                </select>
                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    @if ($obj->id)
                        <a type="button" class="btn btn-danger" href="/works/delete/{{$obj->id}}">Удалить</a>
                    @endif
                </div>
            </form>
    </div>

@stop

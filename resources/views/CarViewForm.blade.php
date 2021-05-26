@extends("base")

@section("content")
    <div class="container">
        @if ($obj->id)
            <form action='/cars/form/{{$obj->id}}' method='post' class="form">
        @else
            <form action="/cars/form/" method="post" class="form">
        @endif
                @csrf
                <label for="name">Марка</label>
                        <input type="text" id="name" name="name" value="{{$obj->name}}">
                <label for="VIN">VIN</label>
                        <input type="text" id="VIN" name="VIN" value="{{$obj->VIN}}">
                <label for="year">Дата выпуска</label>
                        <input type="date" id="year" name="year" value="{{$obj->getYear()}}">
                <label for="number">Гос. номер</label>
                        <input type="text" maxlength="9" minlength="1" id="number" name="number" value="{{$obj->number}}">
                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    @if ($obj->id)
                        <a type="button" class="btn btn-danger" href="/cars/delete/{{$obj->id}}">Удалить</a>
                    @endif
                </div>
            </form>
    </div>

@stop

@extends("base")

@section("content")
    <div class="container">
        @if ($obj->id)
            <form action='/details/form/{{$obj->id}}' method='post' class="form">
        @else
            <form action="/details/form/" method="post" class="form">
        @endif
                @csrf
                <label for="name">Название</label>
                    <input type="text" id="name" name="name"  value="{{$obj->name}}">
                <label for="year">Дата выпуска</label  value="{{$obj->getYear()}}">
                    <input type="date" id="year" name="year">
                <label for="used">Использована</label>
                    <input type="checkbox" id="used" name="used" @if ($obj->used) checked @endif value="{{$obj->used}}">
                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    @if ($obj->id)
                        <a type="button" class="btn btn-danger" href="/details/delete/{{$obj->id}}">Удалить</a>
                    @endif
                </div>
            </form>
    </div>

@stop

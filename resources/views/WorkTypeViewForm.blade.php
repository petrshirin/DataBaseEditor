@extends("base")

@section("content")
    <div class="container">
        @if ($obj->id)
            <form action='/workTypes/form/{{$obj->id}}' method='post' class="form">
        @else
            <form action="/workTypes/form/" method="post" class="form">
        @endif
                @csrf
                <label for="name">Название</label>
                <input type="text" id="name" name="name">
                <label for="price">Стоимость</label>
                <input type="number" step='0.01' placeholder='1000.00' min="1000.00" id="price" name="price">
                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    @if ($obj->id)
                        <a type="button" class="btn btn-danger" href="/workTypes/delete/{{$obj->id}}">Удалить</a>
                    @endif
                </div>
            </form>
    </div>

@stop

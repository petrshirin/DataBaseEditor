@extends("base")

@section("content")
    <div class="container">
        @if ($obj->id)
            <form action='/detailHistories/form/{{$obj->id}}' method='post'  class="form">
        @else
            <form action="/detailHistories/form/" method="post"  class="form">
        @endif
                @csrf
                <label for="detail_id">Деталь</label>
                    <select type="text" id="detail_id" name="detail_id">
                        @foreach($details as $detail)
                            <option value="{{$detail->id}}"
                                    @if($obj->id && $obj->detail->id == $detail->id)
                                    selected
                                @endif
                            >{{$detail}}</option>
                        @endforeach
                    </select>
                <label for="car_id">Машина</label>
                <select id="car_id" name="car_id">
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
                        <a type="button" class="btn btn-danger" href="/detailHistories/delete/{{$obj->id}}">Удалить</a>
                    @endif
                </div>
            </form>
    </div>

@stop

<style>
    .list-item:hover {
        background: #a0aec0;
    }
</style>

@foreach($objects as $object)
    <tr class="list-item" data-id="{{$object->id}}">
        @foreach($modelClass->getColNames() as $tableName)
            <td scope="col">
                @if (is_iterable($object->{$tableName}))
                        <ul>
                            @foreach($object->{$tableName} as $m2m)
                                <li>{{$m2m}}</li>
                            @endforeach
                        </ul>

                @else
                    {{ $object->{$tableName} }}
                @endif
            </td>
        @endforeach
    </tr>
@endforeach


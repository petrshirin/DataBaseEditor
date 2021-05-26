@extends("base")

@section("content")

    <script>
        function sendDelete(id) {
            window.location.href = window.location.href + '/works/delete/' + id
        }
        function goToForm(id) {
            window.location.href = window.location.origin + '/works/form/' + id
        }
    </script>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Тип работы</td>
            <td scope="col">Работник</td>
            <td scope="col">Машина</td>
            <td scope="col">Дата начала</td>
            <td scope="col">Дата конца</td>
        </tr>
        </thead>
        <tbody>
        @include('ListView')
        </tbody>
    </table>

    <a type="button" class="btn btn-secondary" href="/works/form/">Создать новый</a>
@stop

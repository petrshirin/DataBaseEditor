@extends("base")

@section("content")

    <script>
        function sendDelete(id) {
            window.location.href = window.location.href + '/detailHistories/delete/' + id
        }
        function goToForm(id) {
            window.location.href = window.location.origin + '/detailHistories/form/' + id
        }
    </script>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Деталь</td>
            <td scope="col">Машина</td>
        </tr>
        </thead>
        <tbody>
        @include('ListView')
        </tbody>
    </table>

    <a type="button" class="btn btn-secondary" href="/detailHistories/form/">Создать новый</a>

@stop

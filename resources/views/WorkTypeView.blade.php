@extends("base")

@section("content")

    <script>
        function sendDelete(id) {
            window.location.href = window.location.href + '/workTypes/delete/' + id
        }
        function goToForm(id) {
            window.location.href = window.location.origin + '/workTypes/form/' + id
        }
    </script>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Название</td>
            <td scope="col">Стоимость</td>
        </tr>
        </thead>
        <tbody>
        @include('ListView')
        </tbody>
    </table>

    <a type="button" class="btn btn-secondary" href="/workTypes/form/">Создать новый</a>

@stop

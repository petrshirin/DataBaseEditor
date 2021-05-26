@extends("base")

@section("content")

    <script>
        function goToForm(id) {
            window.location.href = window.location.origin + '/employees/form/' + id
        }
    </script>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">ФИО</td>
            <td scope="col">Зарплата</td>
            <td scope="col">Специалист по</td>
        </tr>
        </thead>
        <tbody>
        @include('ListView')
        </tbody>
    </table>

    <a type="button" class="btn btn-secondary" href="/employees/form/">Создать новый</a>

@stop

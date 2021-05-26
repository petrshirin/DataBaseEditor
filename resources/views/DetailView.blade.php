@extends("base")

@section("content")

    <script>
        function goToForm(id) {
            window.location.href = window.location.origin + '/details/form/' + id
        }
    </script>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Название</td>
            <td scope="col">Дата выпуска</td>
            <td scope="col">Использована</td>
        </tr>
        </thead>
        <tbody>
        @include('ListView')
        </tbody>
    </table>

    <a type="button" class="btn btn-secondary" href="/details/form/">Создать новый</a>

@stop

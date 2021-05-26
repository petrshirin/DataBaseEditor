@extends("base")

@section("content")

    <script>
        function goToForm(id) {
            window.location.href = window.location.origin + '/cars/form/' + id
        }
    </script>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Марка</td>
            <td scope="col">VIN</td>
            <td scope="col">Дата выпуска</td>
            <td scope="col">Гос. номер</td>
        </tr>
        </thead>
        <tbody>
            @include('ListView')
        </tbody>
    </table>

    <a type="button" class="btn btn-secondary" href="/cars/form/">Создать новый</a>

@stop

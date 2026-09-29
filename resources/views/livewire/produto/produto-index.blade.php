<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>nome</th>
                    <th>quantidade</th>
                    <th>validade</th>
                    <th>lote</th>
                    <th>peso</th>
                    <th>valor</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->validade }}</td>
                    <td>{{ $produto->lote }}</td>
                    <td>{{ $produto->peso }}</td>
                    <td>{{ $produto->valor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

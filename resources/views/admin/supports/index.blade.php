<h1>Listagem dos Suportes</h1>

<a href="{{ route('supports.create') }}">Criar D�vida</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descri��o</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    >
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

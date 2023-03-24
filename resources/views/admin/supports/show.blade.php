<h1>Detalhes da d�vida {{ $support->id }}</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Descri��o: {{ $support->body }}</li>
    <li>Status: {{ $support->status }}</li>
</ul>

<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>

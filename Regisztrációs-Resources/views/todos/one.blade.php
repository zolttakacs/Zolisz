<p>Név:  {{$rec->name}}</p>
<p>Leírás:  {{$rec->description}}</p>
<p>Létrehozva: {{$rec->created_at}}</p>
<p>Módosítva: {{$rec->updated_at}}</p>
<p>Törölve: {{$rec->deleted_at}}</p>

<form method="POST" action="{{route('todos.delete', $rec->id)}}">
    @csrf 
    @method('DELETE')
    <button type="submit"></button>

</form>

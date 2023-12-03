<p>Elemek száma: {{count($table)}}</p>
<table>
    <thead>
        <tr>
            <th>Teendő neve:</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($table as $item)
            <tr>
                <td><a href="{{route('todos.one', $item->id)}}">{{$item->name}}</a></td>
                
            </tr>
        @endforeach
    </tbody>
</table>
<h1>Gestão de Pessoas</h1>

<br>
<a href="{{route ('pessoas.create')}}" rel=""> cadastrar</a>
<hr>
<br>
<table>
    <thead>
        <tr>
            <th> nome </th>
            <th> Idade </th>
            
        </tr>
    </thead>
    <tbody>
    @foreach ($pessoas as $pessoas)
    <tr>
        <td>{{$pessoas->name}}</td>
        <td>{{$pessoas->age}}</td>
        <td>
        <a href="{{route('pessoas.show', $pessoas->id) }}"> detalhes</a>
        </td>
        <!-- //listagem dos produtos recebidos de controller -->
    </tr>
    @endforeach
    
    </tbody>



</table>

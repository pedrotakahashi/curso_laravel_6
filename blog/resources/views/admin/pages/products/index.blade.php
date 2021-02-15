<h1>gestao de produtos</h1>

<br>
<a href="{{route ('products.create')}}" rel=""> cadastrar</a>
<hr>
<br>
<table>
    <thead>
        <tr>
            <th> nome </th>
            <th> preço </th>
            <th> ação </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>
        <a href="{{route('products.show', $product->id) }}"> detalhes</a>
        </td>
        <!-- //listagem dos produtos recebidos de controller -->
    </tr>
    @endforeach
    
    </tbody>



</table>

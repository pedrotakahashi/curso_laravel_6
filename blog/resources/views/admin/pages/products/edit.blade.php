<h1>editar produto {{$id}}</h1>

<form action="{{route('products.update', $id)}}" method = "post">
    <input type="hidden" name="_method" value="PUT  ">
@csrf
    <input type="text" name='name' placeholder="nome">
    <input type="text" name='description' placeholder="description">
    <button type="submit" class='btn btn-primary'> submeter</button>


 </form>

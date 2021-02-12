

@section('content')
<h1>cadastrar novo produto</h1>
 <!-- envia pra Controller@update -->
 <input name="_method" type="hidden" value="put">
<form action="{{route('products.store')}}" method = "post">

@csrf
    <input type="text" name='name' placeholder="nome">
    <input type="text" name='description' placeholder="description">
    <button type="submit" class='btn btn-primary'> submeter</button>


 </form>

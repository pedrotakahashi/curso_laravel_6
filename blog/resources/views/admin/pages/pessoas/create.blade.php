

@section('content')
<h1>cadastrar nova pessoa</h1>
 <!-- envia pra Controller@update -->
 <input name="_method" type="hidden" value="put">
<form action="{{route('pessoas.store')}}" method = "post">

@csrf
    <input type="text" name='name' placeholder="nome">
    <input type="text" name='age' placeholder="idade">
    <button type="submit" class='btn btn-primary'> submeter</button>


 </form>

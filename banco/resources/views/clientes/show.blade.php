{{$cliente->id}}
{{$cliente->nombre}}


<br>

@foreach ($cliente->cuentas as $cuenta)

{{$cuenta->id}}
{{$cuenta->numero}}
<a href="{{route('cuentas.show',$cuenta)}}">mostrar movimineto</a>
<br>
@endforeach


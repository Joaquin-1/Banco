{{$cuenta->numero}}





@forelse ($cuenta->movimientos as $movimiento)
<br>
{{$movimiento->concepto}}//
{{$movimiento->fecha->tz('Europe/Madrid')->isoFormat('LLLL')}}//
{{$movimiento->importe}}//
<br>
@empty

no hay movimientos
@endforelse

@if ($cuenta->movimientos->isNotEmpty())
SALDO {{ $movimientos->movimientos_sum_importe }}

@endif

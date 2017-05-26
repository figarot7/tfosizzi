@if($tipo === 'adm')

<li><a href="/usuario/crear">Crear Usuario</a></li>
<li><a href="/usuario/lista">Lista de Usuarios</a></li>
<li><a href="/ambiente/crear">Crear ambiente</a></li>
{{--<li><a href="/libro/lista">Lista de amvientes</a></li>--}}
{{--<li><a href="/libro/lista">Lista de equipos</a></li>--}}
<li><a href="/ambiente/lista">Lista de ambiente</a></li>
<li><a href="/rol/crear">Roles</a></li>
<li><a href="/reserva/crear">Crear Reserva</a></li>
@elseif($tipo === 'lec')
<li><a href="/reserva/crear">realizar rerva</a></li>
<li><a href="/suscripcion/listaS">reservas suscritas</a></li>
@endif

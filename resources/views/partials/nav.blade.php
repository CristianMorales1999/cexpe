<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{setActivo('inicio')}}"><a href="/">Inicio</a></th>
        <th scope="col" class="{{setActivo('programas.index')}}"><a href="programas">Programas</a></th>
        <th scope="col" class="{{setActivo('talleres.index')}}"><a href="talleres">Talleres</a></th>
        <th scope="col" class="{{setActivo('asesoramiento')}}"><a href="asesoramiento">Asesoramiento</a></th>
        <th scope="col" class="{{setActivo('contacto')}}"><a href="contacto">Contacto</a></th>
    </tr>
    <tr>
        <td colspan="5">
            @yield('content')
        </td>
    </tr>
</thead>
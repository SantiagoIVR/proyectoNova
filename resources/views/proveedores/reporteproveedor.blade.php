@extends('inicio.principal')

@section('contenido')
    <center>
        <br>
        <h4>Reporte de proveedores</h4>
        <br>
    </center>
    <table class="table table-hover" width=50%>
        <tr class="table-primary">
            <td align='center'>
                <b>Nombre del proveedor</b>
            </td>
            <td align='center'>
                <b>RFC</b>
            </td>
            <td align='center'>
                <b>Opción</b>
            </td>
        </tr>
        @foreach($consulta  as $c)
            <tr class="table-active">
                <td align='center'>
                    {{$c->nombre}}
                </td>
                <td align='center'>
                    {{$c->rfc}}
                </td>
                <td align='center'>
                    <button type="button" class="btn btn-info">Editar</button>
                </td>
            </tr>
        @endforeach
    </table>
@stop
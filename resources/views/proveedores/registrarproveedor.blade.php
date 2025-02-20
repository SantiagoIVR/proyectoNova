@extends('inicio.principal')

@section('contenido')
    <center>
        <br>
        <h4>Registar proveedores</h4>
        <br>
        <div class="rounded-box">
            <form action = "{{route('guardaproveedor')}}" method= "POST">
                {{ csrf_field() }}
                <table cellpadding=5>
                    <tr>
                        <td align ='right'>
                            *Nombre del proveedor:
                        </td>
                        <td>
                            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                            @if($errors->first('nombre'))
                                <p class="text-warning">{{$errors->first('nombre')}}</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td align ='right'>
                            *RFC:
                        </td>
                        <td>
                            <input type="text" class="form-control" name="rfc" value="{{old('rfc')}}">
                            @if($errors->first('rfc'))
                                <p class="text-warning">{{$errors->first('rfc')}}</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td align= 'right' colspan = 2>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                            <input type='submit'  class="btn btn-primary" name = 'Guardar' value = 'Guardar'>
                        </td>
                    </tr>
                    <tr>
                        <td align= 'right' colspan = 2>
                            <i>Los campos con  *  son obligatorios</i>
                        </td>
                </tr>
                </table>
            </form>
        </div>
    </center>
@stop
@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.roles.create')}}">Nuevo rol</a>

    <h1>{{__('Lista de roles')}}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td width="10px">
                                    <a class="btn btn-sm btn-primary" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form method="POST" action="{{route('admin.roles.destroy', $role)}} ">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

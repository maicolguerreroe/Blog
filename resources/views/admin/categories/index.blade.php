@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-secondary float-right" href="{{route('admin.categories.create')}}">Agregar categoria</a>
    @endcan
    <h1>{{__('Lista de categorias')}}</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"> </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                    <a class="btn btn-sm btn-primary" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                    <form method="POST" action="{{route('admin.categories.destroy', $category)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
@stop


@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">Adicionar</a></h1>
@stop

@section('content')
   <div class="card">
       <div class="card-header">
            #filtros
       </div>
       <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th width="50" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                        <tr>
                            <td>{{$plan->name}}</td>
                            <td>{{$plan->price}}</td>
                            <td>
                                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">Ver</a>
                                <form action="{{ route('plans.destroy', $plan->url) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Apagar</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
       </div>
       <div class="card-footer">
           {{ $plans->links() }}
       </div>
   </div>
@stop

{{--@section('css')--}}
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
{{--@stop--}}

{{--@section('js')--}}
{{--    <script> console.log('Hi!'); </script>--}}
{{--@stop--}}

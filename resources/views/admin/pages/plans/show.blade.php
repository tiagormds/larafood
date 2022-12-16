@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do Plano <b>{{ $plan->name }}</b></h1>
@stop

@section('content')
   <div class="card">
       <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{ $plan->name }}</li>
                <li><strong>URL:</strong> {{ $plan->url }}</li>
                <li><strong>Preço:</strong> {{ number_format($plan->preco, 2, ',', '.') }}</li>
                <li><strong>Descrição:</strong> {{ $plan->description }}</li>
            </ul>

           <form action="{{ route('plans.destroy', $plan->url) }}" method="post">
               @csrf
               @method('delete')
               <button class="btn btn-danger">Apagar Plano</button>
           </form>

       </div>
   </div>
@stop

{{--@section('css')--}}
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
{{--@stop--}}

{{--@section('js')--}}
{{--    <script> console.log('Hi!'); </script>--}}
{{--@stop--}}

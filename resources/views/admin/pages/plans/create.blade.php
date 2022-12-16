@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
   <div class="card">
       <form action="{{ route('plans.store') }}" class="form" method="POST">
           @csrf

           <div class="form-group">
               <label for="name">Nome do Plano:</label>
               <input type="text" name="name" class="form-control" placeholder="Digite o nome do plano">
           </div>

           <div class="form-group">
               <label for="preco">Preço:</label>
               <input type="text" name="price" class="form-control" placeholder="Digite o preço">
           </div>

           <div class="form-group">
               <label for="description">Descrição:</label>
               <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
           </div>

           <div class="form-group">
               <button type="submit" class="btn btn-dark">Enviar</button>
           </div>
       </form>

   </div>
@stop

{{--@section('css')--}}
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
{{--@stop--}}

{{--@section('js')--}}
{{--    <script> console.log('Hi!'); </script>--}}
{{--@stop--}}

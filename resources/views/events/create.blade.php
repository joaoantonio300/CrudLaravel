@extends('layouts/main')

@section('title', 'Criar eventos')
    
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
          <input type= "file" id="image" name="image" class="from-control-file">
        </div>
    <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Nome do evento">
    </div>
    <div class="form-group">
        <label for="date">Data do evento:</label>
        <input type="date" name="date" id="date" class="form-control" >
    </div>
    <div class="form-group">
        <label for="city">Cidade:</label>
        <input type="city" name="city" id="city" class="form-control" placeholder="Local do evento">
    </div>
    <div class="form-group">
        <label for="private">O Evento é privado:</label>
       <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
       </select>
    </div>
    <div class="form-group">
        <label for="description">Descrição :</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
        <label for="">Adicione itens de infraestrutura</label>
        <div class="form-goup">
            <input type="checkbox" name="items[]" id="" value="Cadeiras">Cadeiras
        </div>
        <div class="form-goup">
            <input type="checkbox" name="items[]" id="" value="Palco">Palco
        </div>
        <div class="form-goup">
            <input type="checkbox" name="items[]" id="" value="Cerveja grátis">Cerveja grátis
        </div>
        <div class="form-goup">
            <input type="checkbox" name="items[]" id="" value="Open food">Open food
        </div>
        <div class="form-goup">
            <input type="checkbox" name="items[]" id="" value="Brindes">Brindes
        </div>
    </div>
    <br>
   <button  class="btn btn-primary">Criar evento</button>
    </form>
</div>

@endsection
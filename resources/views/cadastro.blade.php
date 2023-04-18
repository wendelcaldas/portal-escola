@extends('layouts.basico')

@section('titulo-pagina', 'CEF - Cadastro')

@section('conteudo')
        <section style="width:100%; height:100px; background-color:;padding-left:10%; display:flex;">
            <div class="cadastro">
                <form class="form-inline">
                  <div class="form-group mb-2">
                    <label for="nomeAluno">Nome:</label><br>
                    <input type="text"  class="form-control-plaintext" id="nomeAluno" value="" placeholder="João Pedro">
                  </div>    
                  <div class="form-group mb-2">
                    <label for="nomeAluno">Data de nascimento:</label><br>
                    <input type="date"  class="form-control-plaintext" id="nomeAluno" value="" placeholder="João Pedro">
                  </div>
                  <div class="form-group mb-2">
                    <label for="nomeAluno">Cursando:</label><br>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1º ANO</option>
                      <option>2º ANO</option>
                      <option>3º ANO</option>
                      <option>4º ANO</option>
                      <option>5º ANO</option>
                    </select>
                  </div>
                  <div class="form-group mb-2">
                    <label for="nomeAluno">Turno:</label><br>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Matutino</option>
                      <option>Vespertino</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
                </form>
            </div>
        </section>
@endsection

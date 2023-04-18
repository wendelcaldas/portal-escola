@extends('layouts.basico')

@section('titulo-pagina', 'CEF - Matrícula')

@section('conteudo')
        <div style="width:100%; height:50px; background-color:; display:flex; justify-content:center;">
            <h2>Gestão - Matrículas</h2>
        </div>
        <div style="width:100%; height:;">
            <!-- Botão para acionar o MODAL de nova matrícula -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#matriculaModal">
              Nova Matrícula
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="matriculaModal" tabindex="-1" role="dialog" aria-labelledby="matriculaModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="matriculaModalLabel" style="text-align:center;">Formuláro de Matrícula - Novo Aluno</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Conteúdo do formulário -->
                        <form action={{ route('matricula') }} method="post">
                            @csrf <!-- Token de identificação obrigatório -->
                            <div class="form-group">
                              <label for="inputNome">Nome Completo:</label>
                              <input name="matNome" type="text" class="form-control" id="inputNome" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputDataNascimentoAluno">Data de Nascimento:</label>
                                <input name="matNascimento" type="date" class="form-control" id="inputDataNascimentoAluno" aria-describedby="emailHelp" placeholder="Wendel Souza Caldas">
                            </div>
                            <div class="form-group">
                              <label for="inputCursando">Cursando</label>
                              <select name="matCursando" class="form-control" id="inputCursando">
                                <option>Em qual sério o aluno será matriculado?</option>
                                <option value="1">1º Ano</option>
                                <option value="2">2º Ano</option>
                                <option value="3">3º Ano</option>
                                <option value="4">4º Ano</option>
                                <option value="5">5º Ano</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="inputDocumentoAluno">Documento (RG ou CPF):</label>
                                <input name="matDocumento" type="text" class="form-control" id="inputDocumentoAluno" aria-describedby="emailHelp" placeholder="XXX.XXX.XXX-XX">
                            </div>
                            <div class="form-group">
                                <label for="inputNomeResponsavel">Responsável:</label>
                                <input name="matNomeResponsavel" type="email" class="form-control" id="inputNomeResponsavel" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputDocumentoResponsavel">Documento do Responsável (RG ou CPF):</label>
                                <input name="matDocumentoResponsavel" type="text" class="form-control" id="inputDocumentoResponsavel" aria-describedby="emailHelp" placeholder="XXX.XXX.XXX-XX">
                            </div>
                            <div class="form-group">
                                <label for="inputEndereco">Endereço:</label>
                                <input name="matEndereco" type="email" class="form-control" id="inputEndereco" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputTelefoneContato">Telefone de contato:</label>
                                <input name="matTelefone" type="tel" class="form-control" id="inputTelefoneContato" aria-describedby="emailHelp" placeholder="(00)00000-0000">
                            </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection

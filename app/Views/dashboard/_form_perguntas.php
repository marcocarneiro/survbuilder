        
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <form id="frm_perguntas">
              <div class="card">
                <div class="card-body">
                  <h2>Nova pesquisa</h2>
                  <div class="row">
                    <div class="col-md-8 form-group">
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da pesquisa" required>
                    </div>
                    <div class="col-md-4 form-group">
                      <input type="text" class="form-control" id="nome_curto" name="nome_curto" placeholder="Nome curto da pesquisa" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="dt_inicio">Data de início da pesquisa</label>
                      <input type="date" class="form-control" id="dt_inicio" name="dt_inicio" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="dt_final">Data final da pesquisa</label>
                      <input type="date" class="form-control" id="dt_final" name="dt_final" required>
                    </div>
                  </div>
                </div>
              </div>

              <p class="mt-3">Perguntas</p>
              <ol id="lista_perguntas" class="frm-lista-perguntas mt-3">
                  <li>
                      <span class="arrastar" data-toggle="tooltip" data-placement="top" title="Arraste para mudar a ordem">
                          <i class="fas fa-arrows-alt"></i>
                      </span>
                      <span contentEditable="true" class="txt-pergunta">
                          Clique aqui para editar o texto da pergunta.
                      </span>
                      <span class="controles float-right mr-3">
                          <select class="tipos-resposta" data-toggle="tooltip" data-placement="top" title="Selecione o tipo de resposta">
                              <option value="texto" selected>Tipo: Texto</option>
                              <option value="radio">Tipo: Radio</option>
                              <option value="checkbox">Tipo: Checkbox</option>
                              <option value="select">Tipo: Select</option>
                              <option value="textarea">Tipo: Textarea</option>
                              <option value="multi textos">Tipo: Multi Textos</option>
                          </select>
                          <span class="add-pergunta ml-4" data-toggle="tooltip" data-placement="top" title="Adicionar nova pergunta">
                            <i class="fas fa-plus fa-1x"></i> 
                          </span>
                          <span class="remover-pergunta ml-4" data-toggle="tooltip" data-placement="top" title="Remover pergunta">
                              <i class="fas fa-trash fa-1x"></i> 
                          </span>

                          
                      </span>
                  </li>
              </ol>

          </form>

        </div>
        <!-- /.container-fluid -->

        <!-- float button para adicionar perguntas -->
        <span class="add-pergunta ml-4" data-toggle="tooltip" data-placement="top" title="Adicionar nova pergunta">
          <i class="fas fa-plus-circle fa-3x text-success"></i> 
        </span>

      </div>
      <!-- End of Main Content -->      

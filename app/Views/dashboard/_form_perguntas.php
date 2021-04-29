        
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fas fa-bars"></i>
          </button>

          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cadastrar pesquisa</span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">USUÁRIO</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <h2>Cadastrar pesquisa</h2>
                </div>
            </div>

            <ol id="lista-perguntas" class="frm-lista-perguntas mt-3">
                <li>
                    <span class="arrastar" data-toggle="tooltip" data-placement="top" title="Arraste para mudar a ordem">
                        <i class="fas fa-arrows-alt"></i>
                    </span>
                    <span contentEditable="true" class="txt-pergunta">
                        Clique aqui para editar o texto da pergunta.
                    </span>
                    <span class="controles float-right mr-3">
                        <select class="tipos-resposta" data-toggle="tooltip" data-placement="top" title="Selecione o tipo de resposta">
                            <option value="tipo texto" selected>Tipo: Texto</option>
                            <option value="tipo radio">Tipo: Radio</option>
                            <option value="tipo checkbox">Tipo: Checkbox</option>
                            <option value="tipo select">Tipo: Select</option>
                            <option value="tipo textarea">Tipo: Textarea</option>
                            <option value="tipo multi textos">Tipo: Multi Textos</option>
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

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->      

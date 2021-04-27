
          <?php $animacao = 'fade-left'; ?>
          <?php
              $parametros = ['class' => 'clearfix', 'id' => 'form-maior18'];
              echo form_open('Pesquisas/gravaQuestoesMaior18', $parametros);
          ?>

          <div class="tela ativa">
            <!-- Questão 1 -->
            <h3 class="txt-entrada text-center text-uppercase mt-3">
              Para começar, conte-nos um pouco sobre você...
            </h3>
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">1) Qual o seu gênero?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="genero" value="Masculino" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Masculino</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="genero" value="Feminino" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Feminino</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="genero" value="Prefiro não responder" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Prefiro não responder</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                      <input type="radio" name="genero" value="Outros" class="opt-revela-campo" revelid="genero-outros" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Outros</span>
                      </label>
                  </div>
                  <div class="form-group field-revela-campo col-md-12">
                    <label for="genero-outros">Qual?</label>
                    <input type="text" name="genero-outros" id="genero-outros" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Questão 2 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">2) Você se considera de qual raça/cor ?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="raca" value="Preta" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Preta</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="raca" value="Branca" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Branca</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="raca" value="Amarela" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Amarela</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="raca" value="Indígena" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Indígena</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="raca" value="Parda" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Parda</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                      <input type="radio" name="raca" value="Outra" class="opt-revela-campo" revelid="raca-outro" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Outra</span>
                      </label>
                  </div>
                  <div class="form-group field-revela-campo col-md-12">
                    <label for="raca-outro">Qual?</label>
                    <input type="text" name="raca-outro" id="raca-outro" class="form-control">
                  </div>                   
                </div>
              </div>
            </div>

            <!-- Questão 3 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">3) Você é uma pessoa transgênero ou travesti?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="trangenero-travesti" value="sim" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="trangenero-travesti" value="Não" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="trangenero-travesti" value="Prefiro não responder" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Prefiro não responder</span>
                      </label>
                  </div>              
                </div>
              </div>
            </div>

            <div class="col-md-12 text-center mt-2">
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

            
          <div class="tela">
            <!-- Questão 4 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">4) Você mora em algum bairro na região do Grajaú?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-12">
                      <label>
                        <input type="radio" name="bairro" value="Sim" class="opt-revela-campo" revelid="bairro-grajau" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                  </div>
                  <div class="form-group field-revela-campo col-md-12">
                    <label for="bairro-grajau">Qual bairro</label>
                    <select class="form-control" name="bairro-grajau" id="bairro-grajau">
                      <option value="">Selecione</option>
                      <option value="Cantinho do Céu">Cantinho do Céu</option>
                      <option value="Chácara Cocaia">Chácara Cocaia</option>
                      <option value="BNH">BNH</option>
                      <option value="Chácara do Sol">Chácara do Sol</option>
                      <option value="Chácara Lagoinha">Chácara Lagoinha</option>
                      <option value="Cidade Luz">Cidade Luz</option>
                      <option value="Cipó do Meio">Cipó do Meio</option>
                      <option value="Colônia do Grajaú">Colônia do Grajaú</option>
                      <option value="Corujas">Corujas</option>
                      <option value="Gaivotas">Gaivotas</option>
                      <option value="Grajaú">Grajaú</option>
                      <option value="Ilha do Bororé">Ilha do Bororé</option>
                      <option value="Jardim Almeida Prado">Jardim Almeida Prado</option>
                      <option value="Jardim Alvorada (Grajaú)">Jardim Alvorada (Grajaú)</option>
                      <option value="Jardim Arco-íris">Jardim Arco-íris</option>
                      <option value="Jardim Belcito">Jardim Belcito</option>
                      <option value="Jardim Bonito">Jardim Bonito</option>
                      <option value="Jardim Borba Gato">Jardim Borba Gato</option>
                      <option value="Jardim Brasília">Jardim Brasília</option>
                      <option value="Jardim Campinas">Jardim Campinas</option>
                      <option value="Jardim Castro Alves">Jardim Castro Alves</option>
                      <option value="Jardim das Pedras (Grajaú)">Jardim das Pedras (Grajaú)</option>
                      <option value="Jardim dos Manacás">Jardim dos Manacás</option>
                      <option value="Jardim Edda">Jardim Edda</option>
                      <option value="Jardim Edi">Jardim Edi</option>
                      <option value="Jardim Eliana">Jardim Eliana</option>
                      <option value="Jardim Ellus">Jardim Ellus</option>
                      <option value="Jardim Gaivotas">Jardim Gaivotas</option>
                      <option value="Jardim Icaraí">Jardim Icaraí</option>
                      <option value="Jardim Itajaí">Jardim Itajaí</option>
                      <option value="Jardim Itatiáia">Jardim Itatiáia</option>
                      <option value="Jardim Jaú">Jardim Jaú</option>
                      <option value="Jardim Labitary">Jardim Labitary</option>
                      <option value="Jardim Lucélia">Jardim Lucélia</option>
                      <option value="Jardim Marilda">Jardim Marilda</option>
                      <option value="Jardim Marisa">Jardim Marisa</option>
                      <option value="Jardim Mirna">Jardim Mirna</option>
                      <option value="Jardim Monte Alegre">Jardim Monte Alegre</option>
                      <option value="Jardim Monte Verde">Jardim Monte Verde</option>
                      <option value="Jardim Myrna">Jardim Myrna</option>
                      <option value="Jardim Noronha">Jardim Noronha</option>
                      <option value="Jardim Nossa Senhora Aparecida">Jardim Nossa Senhora Aparecida</option>
                      <option value="Jardim Nova Tereza">Jardim Nova Tereza</option>
                      <option value="Jardim Novo Horizonte">Jardim Novo Horizonte</option>
                      <option value="Jardim Novo Jaú">Jardim Novo Jaú</option>
                      <option value="Jardim Novo Lar">Jardim Novo Lar</option>
                      <option value="Jardim Orbam">Jardim Orbam</option>
                      <option value="Jardim Planalto">Jardim Planalto</option>
                      <option value="Jardim Porto Velho">Jardim Porto Velho</option>
                      <option value="Jardim Prainha">Jardim Prainha</option>
                      <option value="Jardim Recanto do Sol">Jardim Recanto do Sol</option>
                      <option value="Jardim Reimberg">Jardim Reimberg</option>
                      <option value="Jardim Sabiá (Grajaú)">Jardim Sabiá (Grajaú)</option>
                      <option value="Jardim Salinas">Jardim Salinas</option>
                      <option value="Jardim Samara (Grajaú)">Jardim Samara (Grajaú)</option>
                      <option value="Jardim Samas">Jardim Samas</option>
                      <option value="Jardim Santa Bárbara">Jardim Santa Bárbara</option>
                      <option value="Jardim Santa Fé">Jardim Santa Fé</option>
                      <option value="Jardim Santa Francisca">Jardim Santa Francisca</option>
                      <option value="Jardim Santa Francisca Cabrini">Jardim Santa Francisca Cabrini</option>
                      <option value="Jardim Santa Tereza">Jardim Santa Tereza</option>
                      <option value="Jardim São Bernardo">Jardim São Bernardo</option>
                      <option value="Jardim São Pedro">Jardim São Pedro</option>
                      <option value="Jardim São Remo">Jardim São Remo</option>
                      <option value="Jardim Sete de Setembro">Jardim Sete de Setembro</option>
                      <option value="Jardim Shangri-lá">Jardim Shangri-lá</option>
                      <option value="Jardim Sipramar">Jardim Sipramar</option>
                      <option value="Jardim Tanay">Jardim Tanay</option>
                      <option value="Jardim Três Corações">Jardim Três Corações</option>
                      <option value="Jardim Varginha">Jardim Varginha</option>
                      <option value="Jardim Orion">Jardim Orion</option>
                      <option value="Jardim Zilda">Jardim Zilda</option>
                      <option value="Lago Azul">Lago Azul</option>
                      <option value="Parada 57">Parada 57</option>
                      <option value="Parque América">Parque América</option>
                      <option value="Parque Brasil">Parque Brasil</option>
                      <option value="Parque Cocaia">Parque Cocaia</option>
                      <option value="Parque Deizy">Parque Deizy</option>
                      <option value="Parque Grajaú">Parque Grajaú</option>
                      <option value="Parque Manacá">Parque Manacá</option>
                      <option value="Parque Novo Grajaú">Parque Novo Grajaú</option>
                      <option value="Parque Planalto">Parque Planalto</option>
                      <option value="Parque Residencial Cocaia">Parque Residencial Cocaia</option>
                      <option value="Parelheiros">Parelheiros</option>
                      <option value="Parque Santa Cecília">Parque Santa Cecília</option>
                      <option value="Parque São José">Parque São José</option>
                      <option value="Parque São Miguel">Parque São Miguel</option>
                      <option value="Parque São Paulo">Parque São Paulo</option>
                      <option value="Parque Shangrilá">Parque Shangrilá</option>
                      <option value="Recanto Marisa">Recanto Marisa</option>
                      <option value="Sítio Cocaia">Sítio Cocaia</option>
                      <option value="Toca do Tatu">Toca do Tatu</option>
                      <option value="Vila Morais Prado">Vila Morais Prado</option>
                      <option value="Vila Narciso">Vila Narciso</option>
                      <option value="Vila Nascente">Vila Nascente</option>
                      <option value="Vila Natal">Vila Natal</option>
                    </select>
                  </div>
                  <div class="radio col-md-12">
                      <label>
                        <input type="radio" name="bairro" value="não" class="opt-revela-campo" revelid="bairro-outros" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não</span>
                      </label>
                  </div>
                  <div class="form-group field-revela-campo col-md-12">
                    <label for="bairro-outros">Em qual região mora?</label>
                    <input type="text" name="bairro-outros" id="bairro-outros" class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <!-- Questão 5 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">5) Faz quanto tempo?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                      <input type="radio" name="tempo-moradia" value="Menos de seis meses" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Menos de seis meses</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                      <input type="radio" name="tempo-moradia" value="Seis meses a um ano" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Seis meses a um ano</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                      <input type="radio" name="tempo-moradia" value="Mais de um ano" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Mais de um ano</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="tempo-moradia" value="Mais de 3 anos" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Mais de 3 anos</span>
                      </label>
                  </div>              
                </div>
              </div>
            </div>

            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          <div class="tela">
            <!-- Questão 6 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">6) Você frequenta algum desses lugares na região do Grajaú?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Associação comunitária" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Associação comunitária</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Campinho" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Campinho</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                      <input type="checkbox" name="lugares-frequenta[]" value="Centro Cultural (Casa de Cultura)" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Centro Cultural (Casa de Cultura)</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="CEU Grajaú" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">CEU Grajaú</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="CEU Navegantes" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">CEU Navegantes</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="CEU Três Lagos" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">CEU Três Lagos</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Clube esportivo" />
                          <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                          <span class="texto">Clube esportivo</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                      <input type="checkbox" name="lugares-frequenta[]" value="Escola" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Escola</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Escola de esportes" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Escola de esportes</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Escola de Samba" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Escola de Samba</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Fluxo" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Fluxo</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Igreja" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Igreja</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Rolezinho" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Rolezinho</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Praça do Mirna" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Praça do Mirna</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Parque Linear (lago azul)" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Parque Linear (lago azul)</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Tabacaria" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Tabacaria</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Não frequento nenhum desses lugares" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Não frequento nenhum desses lugares</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="lugares-frequenta[]" value="Outros" class="opt-revela-campo" revelid="lugar-outro" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Outros</span>
                      </label>
                  </div>
                  <div class="form-group field-revela-campo col-md-12">
                    <label for="lugar-outro">Qual?</label>
                    <input type="text" name="lugar-outro" id="lugar-outro" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <!-- Questão 7 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">7) Você frequenta alguns desses lugares FORA da região do Grajaú?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="frequenta-fora-grajau-5-mais[]" value="Escola de esportes" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Escola de esportes</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="frequenta-fora-grajau-5-mais[]" value="Escola de Samba" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Escola de Samba</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="frequenta-fora-grajau-5-mais[]" value="Centro Cultural" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Centro Cultural</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="frequenta-fora-grajau-5-mais[]" value="Rolezinho" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Rolezinho</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="frequenta-fora-grajau-5-mais[]" value="Fluxo" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Fluxo</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="frequenta-fora-grajau-5-mais[]" value="Não frequento nenhum desses lugares FORA do Grajaú" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">Não frequento nenhum desses lugares FORA do Grajaú</span>
                      </label>
                  </div>
                  <div class="checkbox col-md-4">
                      <label>
                        <input type="checkbox" name="frequenta-fora-grajau-5-mais[]" value="CEU" />
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span class="texto">CEU</span>
                      </label>
                  </div>             
                </div>
              </div>
            </div>
            
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          <div class="tela">
            <!-- Questão 8 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">8) Você conhece ou participa de grupos de redes sociais que organizam eventos para jovens?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="participa-redes-sociais" value="Sim" revelid="opc-redes" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                  </div>              
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="participa-redes-sociais" value="Não" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não</span>
                      </label>
                  </div>           
                </div>
                <div id="opc-redes" class="form-group field-revela-campo">
                  <p>Em quais redes sociais?<small><br>(selecione todas as opções que se apliquem)</small></p>
                  <div class="checkbox bloco-inline">
                    <label>
                      <input type="checkbox" name="rede-social[]" value="WhatsApp" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">WhatsApp</span>
                    </label>
                  </div>
                  <div class="checkbox bloco-inline">
                    <label>
                      <input type="checkbox" name="rede-social[]" value="Facebook" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Facebook</span>
                    </label>
                  </div>
                  <div class="checkbox bloco-inline">
                    <label>
                      <input type="checkbox" name="rede-social[]" value="Instagram" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Instagram</span>
                    </label>
                  </div>
                  <div class="checkbox bloco-inline">
                    <label>
                      <input type="checkbox" name="rede-social[]" value="Youtube" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Youtube</span>
                    </label>
                  </div>
                  <div class="checkbox bloco-inline">
                    <label>
                      <input type="checkbox" name="rede-social[]" value="TikTok" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">TikTok</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- Questão 9 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">
                    9) Você pertence ou já foi membro de qualquer um dos seguintes grupos?
                    <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                  <div class="checkbox col-md-4">
                    <label>
                      <input type="checkbox" name="membro-grupo[]" value="Vivendo com deficiência (visão, audição, mobilidade, intelectual/de desenvolvimento) de qualquer tipo" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Vivendo com deficiência (visão, audição, mobilidade, intelectual/de desenvolvimento) de qualquer tipo</span>
                    </label>
                  </div>
                  <div class="checkbox col-md-4">
                    <label>
                      <input type="checkbox" name="membro-grupo[]" value="Membro de um grupo religioso" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Membro de um grupo religioso</span>
                    </label>
                  </div>
                  <div class="checkbox col-md-4">
                    <label>
                      <input type="checkbox" name="membro-grupo[]" value="Refugiada(o) ou requerente de asilo" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Refugiada(o) ou requerente de asilo</span>
                    </label>
                  </div>
                  <div class="checkbox col-md-4">
                    <label>
                      <input type="checkbox" name="membro-grupo[]" value="Trabalhadora(r) migrante (em um país que não o seu de origem)" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Trabalhadora(r) migrante (em um país que não o seu de origem)</span>
                    </label>
                  </div>
                  <div class="checkbox col-md-4">
                    <label>
                      <input type="checkbox" name="membro-grupo[]" value="Encarcerada(o)/em situação de prisão/medida socioeducativa" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Encarcerada(o)/em situação de prisão/medida socioeducativa</span>
                    </label>
                  </div>
                  <div class="checkbox col-md-4">
                    <label>
                      <input type="checkbox" name="membro-grupo[]" value="Criança ou adolescente em situação de Acolhimento institucional" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Criança ou adolescente em situação de Acolhimento institucional</span>
                    </label>
                  </div>
                  <div class="checkbox col-md-4">
                    <label>
                      <input type="checkbox" name="membro-grupo[]" value="Não frequento e/ou não fui membro" />
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                      <span class="texto">Não frequento e/ou não fui membro</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>


          <div class="tela">
            <!-- Questão 10 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">10) Estudou ou estuda na região do Grajaú?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="estuda-no-grajau" value="Sim" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="estuda-no-grajau" value="Não" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não</span>
                      </label>
                  </div>         
                </div>
              </div>
            </div>

            <!-- Questão 11 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">
                  11)  Qual é o grau de escolaridade que você completou?
                </h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="grau-escolaridade" value="Ensino superior, terceiro grau ou universitário" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Ensino superior, terceiro grau ou universitário</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="grau-escolaridade" value="Ensino técnico ou profissionalizante" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Ensino técnico ou profissionalizante</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="grau-escolaridade" value="Ensino médio, segundo grau ou equivalente" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Ensino médio, segundo grau ou equivalente</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="grau-escolaridade" value="Ensino fundamental, primeiro grau ou equivalente" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Ensino fundamental, primeiro grau ou equivalente</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="grau-escolaridade" value="Sem educação formal" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sem educação formal</span>
                      </label>
                  </div>
                </div>
              </div>
            </div>          
            
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          

          <div class="tela">
            <!-- Questão 12 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">12) Antes da pandemia da COVID-19, você ou sua família tinha dificuldade 
                para atender suas necessidades básicas (ex., comida, moradia, vestimenta)?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="antes-pandemia-dificuldades" value="Sim" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                    </div>
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="antes-pandemia-dificuldades" value="Não" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não</span>
                      </label>
                    </div>
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="antes-pandemia-dificuldades" value="Algumas vezes" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Algumas vezes</span>
                      </label>
                    </div>
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="antes-pandemia-dificuldades" value="A maior parte do tempo" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">A maior parte do tempo</span>
                      </label>
                    </div>         
                </div>
              </div>
            </div>

            <!-- Questão 13 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">13) Desde o início da pandemia da COVID-19, você ou sua família tiveram dificuldades 
                para atender suas necessidades básicas (ex., comida, moradia, vestimenta)?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="durante-pandemia-dificuldades" value="Sim" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                    </div>
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="durante-pandemia-dificuldades" value="Não" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não</span>
                      </label>
                    </div>
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="durante-pandemia-dificuldades" value="Algumas vezes" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Algumas vezes</span>
                      </label>
                    </div>
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="durante-pandemia-dificuldades" value="A maior parte do tempo" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">A maior parte do tempo</span>
                      </label>
                    </div>        
                </div>
              </div>
            </div>

            <!-- Questão 14 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">14) Você trabalha?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="trabalha" value="Sim" class="opt-revela-campo" revelid="carteira-assinada" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                    </div> 
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="trabalha" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>   
                </div>
                <div class="form-group field-revela-campo row" id="carteira-assinada">
                  <p class="radio col-md-12">Tem carteira assinada?</p>
                  <div class="radio col-md-4">
                      <label>
                          <input type="radio" name="opc-carteira-assinada" value="Sim" />
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <span class="texto">Sim</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                          <input type="radio" name="opc-carteira-assinada" value="Não" />
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <span class="texto">Não</span>
                      </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Questão 15 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">15) Você ajuda financeiramente na sua casa/a sua família?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="ajuda-financeiramente-casa" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="ajuda-financeiramente-casa" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>  
                </div>
              </div>
            </div>

            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>
          

          <div class="tela">
            <!-- Questão 16 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">16) Quantas pessoas moram com você? (sem contar com você)</h5>
                <div class="opc-respostas row">
                    <div class="form-group col-md-4">
                        <input type="number" min="0" max="1000" class="form-control" name="qtde-pessoas-moram-comvc">
                    </div>       
                </div>
              </div>
            </div>

            <!-- Questão 17 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">17) Atualmente, você tem relações afetivas e/ou sexuais com 
                uma ou mais pessoas?</h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="relacoes-afetivas-sexuais[]" value="Sim" revelid="genero-relaciona" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="relacoes-afetivas-sexuais[]" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="relacoes-afetivas-sexuais[]" value="Às vezes/Ocasional" revelid="genero-relaciona" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Às vezes/Ocasional</span>
                        </label>
                    </div>
                    <div id="genero-relaciona" class="form-group field-revela-campo col-md-12">
                        <p>Se sim ou às vezes/ocasional, qual é o gênero das pessoas 
                            com as quais se relaciona?</p>
                        <div class="radio bloco-inline">
                            <label>
                                <input type="radio" name="genero-pessoas-relaciona" value="Masculino" />
                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                <span class="texto">Masculino</span>
                            </label>
                        </div>
                        <div class="radio bloco-inline">
                            <label>
                                <input type="radio" name="genero-pessoas-relaciona" value="Feminino" />
                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                <span class="texto">Feminino</span>
                            </label>
                        </div>
                        <div class="radio bloco-inline">
                            <label>
                                <input type="radio" name="genero-pessoas-relaciona" value="Ambos" />
                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                <span class="texto">Ambos</span>
                            </label>
                        </div>
                        <div class="radio bloco-inline">
                            <label>
                                <input type="radio" name="genero-pessoas-relaciona" value="Prefiro não responder" />
                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                <span class="texto">Prefiro não responder</span>
                            </label>
                        </div>
                        <div class="radio bloco-inline">
                            <label>
                                <input type="radio" name="genero-pessoas-relaciona" value="Outros" class="opt-revela-campo" revelid="outro-genero" />
                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                <span class="texto">Outro</span>
                            </label>
                        </div>
                        <div class="form-group field-revela-campo">
                            <label for="outro-genero">Qual?</label>
                            <input type="text" class="form-control" name="outro-genero" id="outro-genero">
                        </div>
                    </div>       
                </div>
              </div>
            </div>

            <!-- Questão 18 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">18) Você frequenta alguma Unidade Básica de Saúde?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                          <input type="radio" name="frequenta-ubs" value="Sim" />
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <span class="texto">Sim</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                          <input type="radio" name="frequenta-ubs" value="Não" class="opt-revela-campo" revelid="ubs-porque-nao" />
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <span class="texto">Não</span>
                      </label>
                  </div>
                  <div class="form-group field-revela-campo col-md-12">
                      <label for="ubs-porque-nao">Por que não?</label>
                      <input type="text" class="form-control" name="ubs-porque-nao" id="ubs-porque-nao">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>          
          

          <div class="tela">
          <!-- Questão 19 -->
          <h3 class="txt-entrada text-center text-uppercase mt-3" data-aos="fade-up" data-aos-delay="500">
              Agora queremos entender o que você sabe sobre o HIV/AIDs...
            </h3>
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">19) Em poucas palavras, como você explicaria o que é HIV-AIDs para um(a) amigo(a)?</h5>
                <div class="opc-respostas row">
                  <div class="form-group col-md-12">
                      <label for="o-que-e-hiv-aids">Exemplos:</label>
                      <textarea class="form-control" id="o-que-e-hiv-aids" name="o-que-e-hiv-aids" rows="5"></textarea>
                  </div>      
                </div>
              </div>
            </div>

            <!-- Questão 20 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">20) Como teve ou tem acesso à informações sobre HIV/AIDS?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="acesso-info-hiv-aids[]" value="Escola" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Escola</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="acesso-info-hiv-aids[]" value="Revistas" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Revistas</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="acesso-info-hiv-aids[]" value="Família" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Família</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="acesso-info-hiv-aids[]" value="Internet" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Internet</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="acesso-info-hiv-aids[]" value="Amigos" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Amigos</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="acesso-info-hiv-aids[]" value="Profissionais da saúde" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Profissionais da saúde</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="acesso-info-hiv-aids[]" value="Outros" class="opt-revela-campo" revelid="outro-acesso-info" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>
                    <div class="form-group field-revela-campo col-md-12">
                        <label for="outro-acesso-info">Qual?</label>
                        <input type="text" class="form-control" name="outro-acesso-info" id="outro-acesso-info">
                    </div>
                </div>
              </div>
            </div>
            <!-- Questão 21 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">21) Você conhece alguém que convive com HIV/AIDS?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="conhece-alguem-com-hiv-aids" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="conhece-alguem-com-hiv-aids" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="conhece-alguem-com-hiv-aids" value="Não sei/Não tenho certeza" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não sei/Não tenho certeza</span>
                        </label>
                    </div>   
                </div>
              </div>
            </div>
            <!-- Questão 22 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">22) Quais são as formas de transmissão de HIV/AIDS que você conhece?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Sexo vaginal sem camisinha" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Sexo vaginal sem camisinha</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Sexo anal sem camisinha" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Sexo anal sem camisinha</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Sexo oral sem camisinha" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Sexo oral sem camisinha</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Uso de seringa por mais de uma pessoa" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Uso de seringa por mais de uma pessoa</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Transfusão de sangue contaminado" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Transfusão de sangue contaminado</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Da mãe infectada para seu filho durante a gravidez, no parto e na amamentação" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Da mãe infectada para seu filho durante a gravidez, no parto e na amamentação</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Instrumentos que furam ou cortam não esterilizados" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Instrumentos que furam ou cortam não esterilizados</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Nenhuma das alternativas" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Nenhuma das alternativas</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="transmissao-hiv-aids-vcconhece[]" value="Outros" class="opt-revela-campo" revelid="outras-formas-transmissao" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>
                    <div class="form-group field-revela-campo col-md-12">
                        <label for="outras-formas-transmissao">Quais?</label>
                        <input type="text" class="form-control" name="outras-formas-transmissao" id="outras-formas-transmissao">
                    </div>                                      
                </div>
              </div>
            </div>            
            
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          <div class="tela">
            <!-- Questão 23 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">23) Você acha que você tem que se preocupar com HIV/AIDS?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="preocupacao-hiv-aids" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="preocupacao-hiv-aids" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="preocupacao-hiv-aids" value="Não sei" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não sei</span>
                        </label>
                    </div>
                </div>
              </div>
            </div>
            <!-- Questão 24 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">24) O que você considera como risco de exposição ao HIV/AIDS?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="risco-exposicao-hiv-aids[]" value="Ter feito sexo desprotegido (sem camisinha)" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Ter feito sexo desprotegido (sem camisinha)</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="risco-exposicao-hiv-aids[]" value="Compartilhado seringas" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Compartilhado seringas</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="risco-exposicao-hiv-aids[]" value="Ter beijado" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Ter beijado</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                        <input type="checkbox" name="risco-exposicao-hiv-aids[]" value="Estar no mesmo ambiente que alguém infectado" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Estar no mesmo ambiente que alguém infectado</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="risco-exposicao-hiv-aids[]" value="Nenhuma das alternativas" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Nenhuma das alternativas</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="risco-exposicao-hiv-aids[]" value="Outros" class="opt-revela-campo" revelid="outros-riscos-exposicao" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>
                    <div class="form-group field-revela-campo col-md-12 mt-2">
                        <label for="outras-formas-transmissao">Quais?</label>
                        <input type="text" class="form-control" name="outros-riscos-exposicao" id="outros-riscos-exposicao">
                    </div>
                </div>
              </div>
            </div>
            <!-- Questão 25 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">25) Como é feito o diagnóstico do HIV/AIDS?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="diagnostico-hiv-aids[]" value="Exame de sangue" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Exame de sangue</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="diagnostico-hiv-aids[]" value="Coleta de saliva" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Coleta de saliva</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="diagnostico-hiv-aids[]" value="Não sei" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não sei</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="diagnostico-hiv-aids[]" value="Outros" class="opt-revela-campo" revelid="outros-diagnosticos" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>
                    <div class="form-group field-revela-campo col-md-12 mt-2">
                        <label for="outros-diagnosticos">Qual?</label>
                        <input type="text" class="form-control" name="outros-diagnosticos" id="outros-diagnosticos">
                    </div>      
                </div>
              </div>
            </div>
            
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          
          <div class="tela"> 
            <!-- Questão 26 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">26) Você sabe se no Brasil temos exames laboratoriais e testes rápidos que detectam 
                os anticorpos contra o HIV em cerca de 30 minutos?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="exames_rapidos" value="Sim, temos" revelid="opc-testes" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim, temos</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="exames_rapidos" value="Não, não temos" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não, não temos</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="exames_rapidos" value="Não sei/Não tenho certeza" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não sei/Não tenho certeza</span>
                        </label>
                    </div>
                    <div id="opc-testes" class="opc-respostas field-revela-campo col-md-12">
                        <p>Onde estes testes podem ser realizados?<small><br>(selecione todas as opções que se apliquem)</small></p>
                        <div class="row">
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="Posto de saúde/UBS" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">Posto de saúde/UBS</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="ONG" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">ONG</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="SAE" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">SAE</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="CTA" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">CTA</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="Farmácia" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">Farmácia</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="Hospital" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">Hospital</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="Clínica privada" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">Clínica privada</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="Não sei" />
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">Não sei</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-4">
                                <label>
                                    <input type="checkbox" name="onde_realiza_testes[]" value="Outros" class="opt-revela-campo" revelid="outros_onde_realiza_testes"/>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span class="texto">Outros</span>
                                </label>
                            </div>
                        </div>                     
                        <div class="form-group field-revela-campo col-md-12">
                            <label for="outros_onde_realiza_testes">Onde?</label>
                            <input type="text" class="form-control" name="outros_onde_realiza_testes" id="outros_onde_realiza_testes">
                        </div>       
                    </div>
                </div>
              </div>
            </div>
            <!-- Questão 27 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">27) Os exames para detectar o HIV/AIDs...</h5>
                <p>a) Podem ser feitos de forma anônima, ou seja, você não precisa dar o seu nome para fazer o exame?</p>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_feitos_forma_anonima" value="Sim" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Sim</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_feitos_forma_anonima" value="Não" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_feitos_forma_anonima" value="Não sei/não tenho certeza" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não sei/não tenho certeza</span>
                    </label>
                  </div>
                </div>

                <hr class="mt-2">
                <p>b) São feitos gratuitamente?</p>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="feitos_gratuitamente" value="Sim" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Sim</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="feitos_gratuitamente" value="Não" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="feitos_gratuitamente" value="Não sei/não tenho certeza" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não sei/não tenho certeza</span>
                    </label>
                  </div>
                </div>

                <hr class="mt-2">
                <p>c) São sigilosos, ou seja, o resultado só poderá revelado para outras pessoas com a sua autorização?</p>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_sao_sigilosos" value="Sim" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Sim</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_sao_sigilosos" value="Não" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_sao_sigilosos" value="Não sei/não tenho certeza" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não sei/não tenho certeza</span>
                    </label>
                  </div>
                </div>

                <hr class="mt-2">
                <p>d) Geram resultados confiáveis?</p>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_geram_resultados_confiaveis" value="Sim" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Sim</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_geram_resultados_confiaveis" value="Não" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não</span>
                    </label>
                  </div>
                  <div class="radio col-md-4">
                    <label>
                      <input type="radio" name="exames_geram_resultados_confiaveis" value="Não sei/não tenho certeza" />
                      <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                      <span class="texto">Não sei/não tenho certeza</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          <div class="tela">
            <!-- Questão 28 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">28) Você já fez algum exame de diagnóstico de HIV/AIDS?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="fez_exame_hivaids" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="fez_exame_hivaids" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="fez_exame_hivaids" value="Não sei/não lembro" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não sei/não lembro</span>
                        </label>
                    </div>                 
                </div>
              </div>
            </div>
            <!-- Questão 29 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">29) Onde há serviços de saúde oferecidos aos jovens 
                relacionados à prevenção de HIV/AIDS?<small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="Posto de saúde/UBS" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Posto de saúde/UBS</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="ONG" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">ONG</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="SAE" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">SAE</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="CTA" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">CTA</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="Farmácia" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Farmácia</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="Hospital" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Hospital</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="Clínica privada" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Clínica privada</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="Não sei" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não sei</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_tem_servicos_jovens_hivaids[]" value="Outros" class="opt-revela-campo" revelid="outros_onde_tem_servicos_jovens_hivaids"/>
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>
                    <div class="form-group field-revela-campo col-md-12">
                        <label for="outros_onde_tem_servicos_jovens_hivaids">Qual?</label>
                        <input type="text" class="form-control" name="outros_onde_tem_servicos_jovens_hivaids" id="outros_onde_tem_servicos_jovens_hivaids">
                    </div>       
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          <div class="tela">
            <!-- Questão 30 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">30) Você já usou/buscou/tentou usar algum desses serviços?</h5>
                <div class="opc-respostas row">
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="usou_servicos" value="Sim" revelid="motivo_usou_servico" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Sim</span>
                      </label>
                  </div>              
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="usou_servicos" value="Não" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não</span>
                      </label>
                  </div>
                  <div class="radio col-md-4">
                      <label>
                        <input type="radio" name="usou_servicos" value="Não sei / Não tenho certeza" />
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        <span class="texto">Não sei / Não tenho certeza</span>
                      </label>
                  </div>           
                </div>
                <div id="motivo_usou_servico" class="field-revela-campo">
                    <p clsss="col-md-12">Qual o motivo? <small><br>(selecione todas as opções que se apliquem)</small></p>
                    <div class="opc-respostas row">                    
                        <div class="checkbox col-md-4 mb-2">
                            <label>
                                <input type="checkbox" name="motivo_usou_servico[]" value="Buscou camisinha" />
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                <span class="texto">Buscou camisinha</span>
                            </label>
                        </div>
                        <div class="checkbox col-md-4 mb-2">
                            <label>
                                <input type="checkbox" name="motivo_usou_servico[]" value="Fez o teste" />
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                <span class="texto">Fez o teste</span>
                            </label>
                        </div>
                        <div class="checkbox col-md-4 mb-2">
                            <label>
                                <input type="checkbox" name="motivo_usou_servico[]" value="Conversou com profissional de saúde" />
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                <span class="texto">Conversou com profissional de saúde</span>
                            </label>
                        </div>
                        <div class="checkbox col-md-4">
                            <label>
                                <input type="checkbox" name="motivo_usou_servico[]" value="Conversou com outros jovens que trabalham com HIV/AIDs (por exemplo, um agente de prevenção)" />
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                <span class="texto">Conversou com outros jovens que trabalham com HIV/AIDs (por exemplo, um agente de prevenção)</span>
                            </label>
                        </div>
                        <div class="checkbox col-md-4">
                            <label>
                                <input type="checkbox" name="motivo_usou_servico[]" value="Participou de algum grupo sobre HIV/AIDS" />
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                <span class="texto">Participou de algum grupo sobre HIV/AIDS</span>
                            </label>
                        </div>
                        <div class="checkbox col-md-4">
                            <label>
                                <input type="checkbox" name="motivo_usou_servico[]" value="Outros" class="opt-revela-campo" revelid="outros_motivo_usou_servico" />
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                <span class="texto">Outros</span>
                            </label>
                        </div>
                        <div class="form-group field-revela-campo col-md-12">
                            <label for="outros_motivo_usou_servico">Qual?</label>
                            <input type="text" class="form-control" name="outros_motivo_usou_servico" id="outros_motivo_usou_servico">
                        </div>
                    </div>
                </div>
              </div>
            </div>

            <!-- Questão 31 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">31) Como um jovem pode se prevenir do HIV/AIDS?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Usar camisinha com o seu parceiro fixo" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Usar camisinha com o seu parceiro fixo</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Usar camisinha com seus parceiros eventuais" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Usar camisinha com seus parceiros eventuais</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Fazer teste regularmente" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Fazer teste regularmente</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Não compartilhar seringas" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não compartilhar seringas</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Não ter contato com sangue" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não ter contato com sangue</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Tomar medicamentos antirretrovirais" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Tomar medicamentos antirretrovirais</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Não sei" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não sei</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="como_jovem_se_previne[]" value="Outros" class="opt-revela-campo" revelid="outros_jovem_se_previne" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>
                    <div class="form-group field-revela-campo col-md-12">
                        <label for="outros_onde_realiza_testes">Qual?</label>
                        <input type="text" class="form-control" name="outros_jovem_se_previne" id="outros_jovem_se_previne">
                    </div>                     
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          <div class="tela">
            <!-- Questão 32 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">32) Onde os jovens podem pegar camisinha?
                <small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_pegar_camisinha[]" value="Posto de saúde/UBS" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Posto de saúde/UBS</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_pegar_camisinha[]" value="Comprar na farmácia" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Comprar na farmácia</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_pegar_camisinha[]" value="Terminal de ônibus ou metrô" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Terminal de ônibus ou metrô</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_pegar_camisinha[]" value="Nenhum lugar" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Nenhum lugar</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="onde_pegar_camisinha[]" value="Outros" revelid="outros_onde_pegar_camisinha" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>
                    <div class="form-group field-revela-campo col-md-12 mt-2">
                        <label for="outros_onde_realiza_testes">Onde?</label>
                        <input type="text" class="form-control" name="outros_onde_pegar_camisinha" id="outros_onde_pegar_camisinha">
                    </div>                     
                </div>
              </div>
            </div>
            <!-- Questão 33 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">33) Quais são as estratégias de prevenção que você 
                sugeriria aos seus amigos?<small><br>(selecione todas as opções que se apliquem)</small></h5>
                <div class="opc-respostas row">
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Usar camisinha com o seu parceiro fixo" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Usar camisinha com o seu parceiro fixo</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Usar camisinha com seus parceiros eventuais" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Usar camisinha com seus parceiros eventuais</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Fazer teste regularmente" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Fazer teste regularmente</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Não compartilhar seringas" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não compartilhar seringas</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Não ter contato com sangue" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não ter contato com sangue</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Tomar medicamentos antirretrovirais" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Tomar medicamentos antirretrovirais</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Não sei" />
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Não sei</span>
                        </label>
                    </div>
                    <div class="checkbox col-md-4">
                        <label>
                            <input type="checkbox" name="estrategias_prevencao_sugeridas[]" value="Outros" class="opt-revela-campo" revelid="outras_estrategias_prevencao_sugeridas"/>
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span class="texto">Outros</span>
                        </label>
                    </div>         
                    <div class="form-group field-revela-campo col-md-12">
                        <label for="outras_estrategias_prevencao_sugeridas">Qual?</label>
                        <input type="text" class="form-control" name="outras_estrategias_prevencao_sugeridas" id="outras_estrategias_prevencao_sugeridas">
                    </div>       
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>          

          <div class="tela">
            <!-- Questão 34 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">34) Já ouviu falar de PREP?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="ouviu_falar_prep" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="ouviu_falar_prep" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>                 
                </div>
              </div>
            </div>
            <!-- Questão 35 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">35) Já ouviu falar de PEP?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="ouviu_falar_pep" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="ouviu_falar_pep" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>          
                </div>
              </div>
            </div>
            <!-- Questão 36 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">36) Faz uso de PEP?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="faz_uso_pep" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="faz_uso_pep" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>
                </div>
              </div>
            </div>
            <!-- Questão 37 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">37) Faz uso de PREP?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="faz_uso_prep" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="faz_uso_prep" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>                    
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>

          <div class="tela">
            <!-- Questão 38 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">38) Você se vê com risco de contrair HIV?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="se_ve_com_risco_contrair_hivaids" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="se_ve_com_risco_contrair_hivaids" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="se_ve_com_risco_contrair_hivaids" value="Talvez, não tenho certeza" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Talvez, não tenho certeza</span>
                        </label>
                    </div>      
                </div>
              </div>
            </div>

            <!-- Questão 39 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title pt-3">39) Você acha que a pandemia da COVID-19 mudou o comportamento 
                dos jovens no seu território?</h5>
                <div class="opc-respostas row">
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="covid_mudou_comportamento_jovens_territorio" value="Sim" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Sim</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="covid_mudou_comportamento_jovens_territorio" value="Não" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Não</span>
                        </label>
                    </div>
                    <div class="radio col-md-4">
                        <label>
                            <input type="radio" name="covid_mudou_comportamento_jovens_territorio" value="Talvez, não tenho certeza" />
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                            <span class="texto">Talvez, não tenho certeza</span>
                        </label>
                    </div>                
                </div>
              </div>
            </div>
            <!-- Questão 40 -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h5 class="card-title">40) Se sim ou talvez, explique como ou dê exemplos</h5>
                <div class="opc-respostas row">
                    <div class="form-group col-md-12">
                        <label for="exemplos_covid_mudou_comportamento_jovens_territorio">Exemplos:</label>
                        <textarea class="form-control" id="exemplos_covid_mudou_comportamento_jovens_territorio" name="exemplos_covid_mudou_comportamento_jovens_territorio" rows="5"></textarea>
                    </div>                     
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <span class="bt_avanca btn btn-primary">Avança</span>
            </div>
          </div>


          <div class="tela">
            <!-- Ficha relacional -->
            <div class="card bg-white-op-80 mt-3">
              <div class="card-body">
                <h2>Ficha relacional</h2>
                <p class="card-text"><strong>Estamos quase terminando! Esta é a última etapa do questionário!</strong></p>
                <p class="card-text">
                Você frequentou alguns desses lugares nos últimos dois anos para receber informações ou serviços relacionados com a prevenção ao HIV/AIDS? Se sim, indique qual deles frequentou.
                </p>
                <p class="card-text">
                É importante que os nomes sejam os mais completos possíveis (por exemplo, UBS-Areal) e que nos casos em que mais de uma entidade de mesmo tipo tenha sido contactada, todos os nomes sejam registrados.
                </p>
                
                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="Escola">Escola: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="escola" id="escola">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="usb">USB: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="usb" id="usb">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="sites_internet">Sites da internet: Quais sites</label>
                        <input type="text" class="form-control" name="sites_internet" id="sites_internet">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="caps">CAPS: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="caps" id="caps">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="caps_ad">CAPS AD - Álcool/Drogas: Nome do local 
                        (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="caps_ad" id="caps_ad">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="centro_convivencia_cultura">Centros de Convivência e Cultura: 
                        Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="centro_convivencia_cultura" id="centro_convivencia_cultura">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="ceu">CEU: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="ceu" id="ceu">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="comunidades_terapeuticas">Comunidades Terapêuticas: 
                        Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="comunidades_terapeuticas" id="comunidades_terapeuticas">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="cons_tutelar">Conselho Tutelar: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="cons_tutelar" id="cons_tutelar">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="cooperativas">Cooperativas, emp. economia solidária ou iniciativas geração de emprego e renda: <br>Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="cooperativas" id="cooperativas">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="cras">CRAS (Centro de Referência em Assistência Social): Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="cras" id="cras">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="creas">CREAS (Centro de Referência Especializado em Assistência Social): Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="creas" id="creas">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="cta">Centro de Testagem e Aconselhamento (CTA): Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="cta" id="cta">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="consultorio_rua">Equipe de Consultório na Rua: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="consultorio_rua" id="consultorio_rua">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="hospital_geral">Hospital Geral: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="hospital_geral" id="hospital_geral">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="espaco_religioso">Espaços religiosos: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="espaco_religioso" id="espaco_religioso">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="saude_da_familia">Núcleo de Apoio à Equipe de Saúde da Família: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="saude_da_familia" id="saude_da_familia">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="ongs">ONGS: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="ongs" id="ongs">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="orgaos_justica">Órgãos de justiça (Defensoria, TJDFT/Seruq, Ministério Público): Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="orgaos_justica" id="orgaos_justica">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="policia">Polícia: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="policia" id="policia">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="sae">Serviços de Atenção Especializada em DST/AIDs (SAE): Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="sae" id="sae">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="samu_192">SAMU 192: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="samu_192" id="samu_192">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="unidade_acolhimento">Unidade de Acolhimento: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="unidade_acolhimento" id="unidade_acolhimento">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="upa_24hs">UPA 24 horas ou pronto-socorro/urgência: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="upa_24hs" id="upa_24hs">
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 pb-3">
                    <div class="form-group">
                        <label for="outros">Outros: Nome do local (pode ser mencionado quantos nomes forem necessários)</label>
                        <input type="text" class="form-control" name="outros" id="outros">
                    </div>
                </div>

              
              </div>
            </div>
            <div class="col-md-12 text-center mt-2">
              <span class="bt_volta btn btn-primary mr-4">Retorna</span>
              <button type="submit" class="btn btn-primary">Concluir</button>
            </div>
          </div>

    </div>
          <div class="card-body">
            <div class="text-center mt-2 mb-2">
              <img src="<?=base_url('img/logo-cepedoc-horizontal.png')?>" width="140">
            </div>            
            <div class="alert alert-success text-center" role="alert" data-aos="zoom-in">
                Obrigado por participar.
            </div>

            <div class="row">
              <div class="col-md-12 mt-3">
                <div class="alert alert-success text-center" role="alert" data-aos="zoom-in">
                  <a data-toggle="collapse" href="#respostas" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Veja as suas respostas
                  </a>
                  <div class="collapse" id="respostas">
                    <div class="card card-body text-left">
                      <?php
                        $jsonObj = json_decode($campos);
                        $dados = $jsonObj->dados;
                        foreach ( $dados as $dt )
                        {
                          echo '<p><strong>Pergunta:</strong> ' .$dt->pergunta. '<br>';
                          if($dt->resposta[0] == '')
                          {
                            $str = 'Não respondida.';
                          }else{
                            $str = implode(' | ', $dt->resposta);
                          }                          
                          echo '<strong>Respostas:</strong> '.$str. '</p>';
                        };
                      ?>
                    </div>
                  </div>
                </div>                                
              </div>
            </div>

            <h5 class="card-title text-center">
              Queremos saber mais sobre os jovens de 13 a 24 anos da região do Grajaú! Ajude-nos, por favor, compartilhando esse questionário com seus amigos e nas suas redes sociais!
            </h5>

            <p class="text-center">
              <a href="" id="facebook-share-btt" rel="nofollow" target="_blank" class="mr-2">
                <i class="fab fa-facebook-square fa-4x" aria-hidden="true"></i>
              </a>

              <a href="" id="twitter-share-btt" rel="nofollow" target="_blank" class="mr-2">
                <i class="fab fa-twitter-square fa-4x" aria-hidden="true"></i>
              </a>

              <a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank">
                <i class="fab fa-whatsapp-square fa-4x"></i>
              </a>
              <br>
            </p>

            <div class="row">
              <div class="col-md-6 offset-md-3 text-center">
                <img src="<?=base_url('img/acesso_pesquisa.png')?>" width="80%" data-aos="zoom-in">
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>

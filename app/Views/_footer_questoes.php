    
    <script src="<?=base_url('js/jquery.min.js')?>"></script>
    <script src="<?=base_url('js/popper.min.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('js/aos.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('js/bioep.js')?>"></script>
    
    <script>      
      function radioRevela(elemento)
      {
        $('input[name="'+elemento+'"]').click(function(){
          $('input[name="'+elemento+'"]').each(function( index ) {
            if ( $(this).prop('checked')) {
              let el = '#' + $(this).attr('revelid');
              $(el).parent().fadeIn(700);
            }else{
              let el = '#' + $(this).attr('revelid');
              $(el).val('');
              $(el).parent().css('display','none');
            }
          });
        });
      }

      function radioRevelaDiv(elemento)
      {
        $('input[name="'+elemento+'"]').click(function(){
          $('input[name="'+elemento+'"]').each(function( index ) {
            var el = '#' + $(this).attr('revelid');
            if ( $(this).prop('checked')) {
              $(el).fadeIn(700);          
              return false;
            }else{
              $(el).val('');
              $(el).css('display','none');
              $(el).find('input[type="checkbox"], input[type="radio"]').each(function(){
                $(this).prop("checked", false);
              });
            }            
          });
        });
      }
      

      function checkboxLimite(elemento, limite)
      {
        $('input[name="'+elemento+'"]').on('change', function(){
          var checkbox = $('input[name="'+elemento+'"]:checked');
          if(checkbox.length > limite){
            this.checked = false;
          }
        });
      }

      //barra de progressão
      function barraProgress()
      {
        var etapa;
        $('.tela').each(function(index, element) {
          if ($(element).hasClass('ativa'))
          {
            etapa = index + 1;
          }
        });
        var countEtapas = $('.tela').length;
        var porcentagem = Math.round((etapa / countEtapas)*100);
        var texto = etapa +' / '+ countEtapas;
        if(etapa == countEtapas){ texto = 'Finalizando...';}
        
        $('.etapas .txt-barra').text(texto);
        $('.etapas .moldura').css('width', porcentagem+'%');
      }

      function avancar()
      {
        $('.tela').each(function(index, element) {
          $('html, body').scrollTop(0);
          if ($(element).hasClass('ativa')) {
            var nextEl = $(this).next();
            $(this).removeClass('ativa');
            $(nextEl).addClass('ativa');
            barraProgress();            
            return false;
          }
        });
      }
      function retornar()
      {
        $('.tela').each(function(index, element) {
          $('html, body').scrollTop(0);
          if ($(element).hasClass('ativa')) {
            var prevEl = $(this).prev();
            $(this).removeClass('ativa');
            $(prevEl).addClass('ativa');
            barraProgress();
            return false;
          }
        });
      }
      
      AOS.init();

      (function(){
        <?php if(!isset($oculta_header)): ?>
          bioEp.init({
            html: '<div id="bio_ep_content">' +
                    '<span></span>' +
                    '<span><br>Ei, já vai embora?</span>' +
                    '<span>Se você sair, suas respostas serão perdidas. <br> Quer sair assim mesmo?</span>' +
                    '</div>' ,
            css: '#bio_ep {width: 400px; height: 250px; color: #fff; background-color: #f80; text-align: center;}' +
                    '#bio_ep_content {padding: 24px 0 0 0; font-family: "Titillium Web";}' +
                    '#bio_ep_content span:nth-child(2) {display: block; color: #fff; font-size: 32px; font-weight: 600;}' +
                    '#bio_ep_content span:nth-child(3) {display: block; font-size: 20px;}' +
                    '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 16px; font-weight: 600;}' +
                    '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: #fff; font-size: 14px; font-weight: 600; background-color: #70bb39; border: 1px solid #47ad0b; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0; text-decoration: none;}',
            fonts: ['//fonts.googleapis.com/css?family=Titillium+Web:300,400,600'],
            cookieExp: 0
          });
        <?php endif; ?> 
        
        barraProgress();

        radioRevela('genero');
        radioRevela('bairro');
        radioRevelaDiv('trabalha');
        radioRevela('genero-pessoas-relaciona');
        radioRevela('raca');
        radioRevela('lugares-frequenta[]');
        radioRevela('frequenta-ubs');
        radioRevela('acesso-info-hiv-aids[]');
        radioRevela('transmissao-hiv-aids-vcconhece[]');
        radioRevela('risco-exposicao-hiv-aids[]');
        radioRevela('diagnostico-hiv-aids[]');
        radioRevela('onde_realiza_testes[]');
        radioRevela('onde_tem_servicos_jovens_hivaids[]');
        radioRevela('como_jovem_se_previne[]'); 
        radioRevela('onde_pegar_camisinha[]');
        radioRevela('estrategias_prevencao_sugeridas[]');
        //radioRevela('frequenta-fora-grajau-5-mais[]');
        radioRevela('motivo_usou_servico[]');
        radioRevelaDiv('exames_rapidos');
        radioRevelaDiv('relacoes-afetivas-sexuais[]');
        radioRevelaDiv('relacoes-afetivas-sexuais');        
        radioRevelaDiv('participa-redes-sociais');
        radioRevelaDiv('usou_servicos');

        $('.link-exibe').click(function(){
          $('.exibe-oculto').fadeOut(700);
          $('.oculto').fadeIn(700);
        });

        $('.bt_avanca').on('click', avancar);

        $('.bt_volta').on('click', retornar);

        $('#form-maior18 button[type="submit"], #form-menor18 button[type="submit"]').click(function(e){
          $('.etapas').css('display', 'none');
        });

        //Compartilhamento redes
        document.addEventListener("DOMContentLoaded", function() { 
            //document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href);
            document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" + 'https://www.cidadessaudaveis.org.br/pesquisagrajau';
        }, false);

        document.addEventListener("DOMContentLoaded", function() {
            //var url = encodeURIComponent(window.location.href);
            var url = 'https://www.cidadessaudaveis.org.br/pesquisagrajau';
            var titulo = encodeURIComponent(document.title);
            document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo;
          }, false);

        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var conteudo = encodeURIComponent(document.title + " " + "https://www.cidadessaudaveis.org.br/pesquisagrajau/");
            document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
        }, false);  

      })();

    </script>
  </body>
</html>
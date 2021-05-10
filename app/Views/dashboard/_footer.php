<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; LOGOTIPO - <?php echo date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <script src="<?=base_url('js/jquery.min.js')?>"></script>
  <script src="<?=base_url('js/popper.min.js')?>"></script>
  <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('js/aos.js')?>"></script>
  <script src="<?= base_url('js/plugins/dataTables/datatables.min.js');?>"></script>

  <script src="<?=base_url('js/jquery-easing/jquery.easing.min.js')?>"></script>

  <script src="<?=base_url('js/sb-admin-2.min.js')?>"></script>
  
  <script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
  <script>
    // Lista de perguntas
    Sortable.create(lista_perguntas, { /* options */ });

    //ativando tool tips nas páginas
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    
    var templateOpcoes = '<p class="tit-respostas pb-3 pt-4 pl-4 m-0">Opções de resposta (clique para adicionar novas opções) '+
      '<span class="add-opcao-resposta"><i class="fas fa-plus-circle text-success"></i></span></p>'+
      '<ul class="lista-opcoes">'+
      '<li class="pb-4">'+
          '<span class="arrastar" data-toggle="tooltip" data-placement="top" title="Arraste para mudar a ordem">' +
              '<i class="fas fa-arrows-alt"></i></span>' +
          '<span contentEditable="true" class="txt-resposta">' +
              'Clique aqui para editar o texto da resposta.' +
          '</span>' +
          '<span class="remover-resposta ml-4" data-toggle="tooltip" data-placement="top" title="Remover resposta">' +
            '<i class="fas fa-trash fa-1x"></i></span>' +
          '</span>' +
      '</li></ul>';
      
    //Escolha do tipo de resposta
    (function(){
      $('body').on('change', '.tipos-resposta', function(){
        var el = $(this).parent().parent();
        
        var tipo = el.find('.controles .tipos-resposta').val();
        el.find('.tit-respostas').remove();
        el.find('.lista-opcoes').remove();
        if(tipo == 'radio' || tipo == 'checkbox' || tipo == 'select' || tipo == 'multi textos')
        {
          el.append(templateOpcoes);
        }
        el.attr('tipo', tipo);
      });
    })();

    //adiciona perguntas
    (function(){
      $('.add-pergunta').on('click', function(){        
        var templatePergunta = '<li class="pergunta-item" tipo="texto">' +
                      '<span class="arrastar" data-toggle="tooltip" data-placement="top" title="Arraste para mudar a ordem">' +
                          '<i class="fas fa-arrows-alt"></i></span>' +
                      '<span contentEditable="true" class="txt-pergunta">' +
                          'Clique aqui para editar o texto da pergunta.</span>' +
                      '<span class="controles float-right mr-3">' +
                          '<select class="tipos-resposta" data-toggle="tooltip" data-placement="top" title="Selecione o tipo de resposta">' +
                              '<option value="texto">Tipo: Texto</option><option value="radio">Tipo: Radio</option>' +
                              '<option value="checkbox">Tipo: Checkbox</option><option value="select">Tipo: Select</option>' +
                              '<option value="textarea">Tipo: Textarea</option><option value="multi textos">Tipo: Multi Textos</option>' +
                          '</select>' +                      
                          '<span class="remover-pergunta ml-4" data-toggle="tooltip" data-placement="top" title="Remover pergunta">' +
                              '<i class="fas fa-trash fa-1x"></i></span>' +
                      '</span></li>';
        $('#lista_perguntas').append(templatePergunta);
      });
    })();

    //remove perguntas
    (function(){
      $('body').on('click', '.remover-pergunta', function(){
        if($('#lista_perguntas li.pergunta-item').length > 1)
        {
          $(this).parent().parent().remove();
        }
      });      
    })();

    //adiciona respostas (para perguntas do tipo radio, checkbox, select e multi text)
    (function(){
      var templateRespostas = '<li class="pb-4"><span class="arrastar" data-toggle="tooltip" data-placement="top" '+
      'title="Arraste para mudar a ordem"><i class="fas fa-arrows-alt"></i></span><span contenteditable="true" class="txt-resposta">' +
      'Clique aqui para editar o texto da resposta.</span>' +
      '<span class="remover-resposta ml-4" data-toggle="tooltip" data-placement="top" '+
      'title="Remover resposta"><i class="fas fa-trash fa-1x"></i></span></li>';
      
      $('body').on('click', '.add-opcao-resposta', function(){
        var el = $(this).parent().parent().find('.lista-opcoes');
        el.append(templateRespostas);
      });
    })();
    
    //remove opções de respostas
    (function(){
      $('body').on('click', '.remover-resposta', function(){
        var el = $(this).parent().parent();
        console.log(el.find('li').length);
        if(el.find('li').length > 1)
        {
          $(this).parent().remove();
        }
      });      
    })();

  </script>
</body>

</html>
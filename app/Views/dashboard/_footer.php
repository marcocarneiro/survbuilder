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


    var templateOpcoes = '<ul class="lista-opcoes">'+
      '<li>'+
          '<span class="arrastar" data-toggle="tooltip" data-placement="top" title="Arraste para mudar a ordem">' +
              '<i class="fas fa-arrows-alt"></i></span>' +
          '<span contentEditable="true" class="txt-resposta">' +
              'Clique aqui para editar o texto da resposta.' +
          '</span>' +
          '<span class="add-pergunta ml-4" data-toggle="tooltip" data-placement="top" title="Adicionar nova resposta">' +
                '<i class="fas fa-plus fa-1x"></i></span>' +
                '<span class="remover-resposta ml-4" data-toggle="tooltip" data-placement="top" title="Remover resposta">' +
                  '<i class="fas fa-trash fa-1x"></i></span>' +
          '</span>' +
      '</li></ul>';
      
    //Escolha do tipo de resposta
    (function(){
      $('.tipos-resposta').on('change', function(){
        var el = $(this).parent().parent().parent();
        var tipo = el.find('.controles .tipos-resposta').val();
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
        //templatePergunta.clone().appendTo('#lista_perguntas');
        $('#lista_perguntas').append(templatePergunta);
      });
    })();

    //remove perguntas
    (function(){
      $('body').on('click', '.remover-pergunta', function(){
        if($('#lista_perguntas li').length > 1)
        {
          $(this).parent().parent().remove();
        }
      });      
    })();
  </script>
</body>

</html>
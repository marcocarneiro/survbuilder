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

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <script src="<?=base_url('js/jquery.min.js')?>"></script>
  <script src="<?=base_url('js/popper.min.js')?>"></script>
  <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('js/aos.js')?>"></script>
  <script src="<?= base_url('js/plugins/dataTables/datatables.min.js');?>"></script>

  <script src="<?=base_url('js/jquery-easing/jquery.easing.min.js')?>"></script>

  <script src="<?=base_url('js/sb-admin-2.min.js')?>"></script>
  <script>
    
    /* Gerador de slugs */
    if (!String.prototype.slugify) {
      String.prototype.slugify = function () {    
        return  this.toString().toLowerCase()
        .replace(/[àÀáÁâÂãäÄÅåª]+/g, 'a')       // Special Characters #1
        .replace(/[èÈéÉêÊëË]+/g, 'e')       	// Special Characters #2
        .replace(/[ìÌíÍîÎïÏ]+/g, 'i')       	// Special Characters #3
        .replace(/[òÒóÓôÔõÕöÖº]+/g, 'o')       	// Special Characters #4
        .replace(/[ùÙúÚûÛüÜ]+/g, 'u')       	// Special Characters #5
        .replace(/[ýÝÿŸ]+/g, 'y')       		// Special Characters #6
        .replace(/[ñÑ]+/g, 'n')       			// Special Characters #7
        .replace(/[çÇ]+/g, 'c')       			// Special Characters #8
        .replace(/[ß]+/g, 'ss')       			// Special Characters #9
        .replace(/[Ææ]+/g, 'ae')       			// Special Characters #10
        .replace(/[Øøœ]+/g, 'oe')       		// Special Characters #11
        .replace(/[%]+/g, 'pct')       			// Special Characters #12
        .replace(/\s+/g, '-')           		// Replace spaces with -
        .replace(/[^\w\-]+/g, '')       		// Remove all non-word chars
        .replace(/\-\-+/g, '-')         		// Replace multiple - with single -
        .replace(/^-+/, '')             		// Trim - from start of text
        .replace(/-+$/, '');            		// Trim - from end of text        
      };
    }

    AOS.init();
    
    /* DATAGRID */
    $('.dados-tab').DataTable({
				ordering: false,
        pageLength: 25,
        responsive: true,
        dom: '<"col-md-3 html5buttons"B><"col-md-3"lT><"col-md-3"fg>t<"col-md-4"p>',
        buttons: [
            {extend: 'excel', text: 'Baixar Excel', title: 'Pesquisa'}
        ],
        'language' : {
            'url': 'https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json',
        }
    });
    $('.participante-tab').DataTable({
        ordering: false,
        responsive: true,
        paging: false,
        dom: '<"col-md-3 html5buttons"B><"col-md-3"lT><"col-md-3"fg>t<"col-md-4"p>',
        buttons: [
            {extend: 'excel', text: 'Baixar Excel', title: 'Pesquisa'}
        ],
        'language' : {
            'url': 'https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json',
        }
    });
    

    /* :::::: ADICIONAR / REMOVER CAMPOS (CADASTRO DE PERGUNTAS - REMOVER) ::::::: */
    function adicionaCampoResposta(opcao)
    {
      var campo = '<div class="form-row resposta">';
      if(opcao === '1' || opcao === '2' || opcao === '7')
      {
          campo += '<div class="form-group col-md-9">';
          campo += '<textarea rows="3" class="form-control" name="texto_resposta[]" placeholder="Digite o texto da resposta" required></textarea>';
          campo += '</div><div class="form-group col-md-3">';
          campo += '<label for="mostra_sub_pergunta">Exibe outra pergunta</label> ';
          campo += '<input type="checkbox" name="filtro_mostra_sub_pergunta[]" id="filtro_mostra_sub_pergunta" value=""><br> &nbsp;';
          campo += '<input type="hidden" name="mostra_sub_pergunta[]" value="0">';
          campo += '<i class="fas fa-plus-square adicionar"></i> &nbsp; ';
          campo += '<i class="fas fa-minus-square remover"></i> </div>';        
      }else{
          campo += '<p>Esse tipo de resposta não precisa de configuração. Clique em ENVIAR.</p>';
      }
        campo += '</div>';
        return campo;
    }

    $('#id_tipo_resposta').on('change', function(){
        $('#opc-respostas').fadeIn(400);
        var campo =  adicionaCampoResposta($(this).val());    
        $('#opc-respostas').html(campo);
    });

    $('#opc-respostas').on('click','.adicionar', function(){
        var resposta = $(this).parent().parent();
        $(resposta).clone().appendTo('#opc-respostas');
        $('input[name="mostra_sub_pergunta"]:last').prop('checked', false);
    });

    $('#opc-respostas').on('click','.remover', function(){
        var resposta = $(this).parent().parent();
        $(resposta).remove();
        if($('.resposta').length == 0)
        {
            $('#id_tipo_resposta').prop('selectedIndex',0);
        }
    });

    $('#form-cad-pergunta').on('submit', function(e){
        //tratamento do slug para as perguntas
        var slug = 'questao'+$('#ordem').val()+'-'+$('#texto_pergunta').val().slugify();
        $('#slug').val(slug);
        
        //tratamento para as subperguntas
        $('#form-cad-pergunta input[name="filtro_mostra_sub_pergunta[]"]').each(function(){
            $(this).parent().find('input[name="mostra_sub_pergunta[]"]').val(0);
            if($(this).prop('checked') == true)
            {
              $(this).parent().find('input[name="mostra_sub_pergunta[]"]').val(1);
            }
        });
    });

    

  </script>

</body>

</html>
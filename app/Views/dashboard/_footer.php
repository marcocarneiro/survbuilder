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
  
  <script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
  <script>
    // Simple list
    Sortable.create(lista-perguntas, { /* options */ });
    //ativando tool tips nas páginas
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
  </script>
</body>

</html>
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
        <p class="dark_purple font12"></p>
        </div>
        <p class="dark_purple font12"></p>
      </footer>



    </div>

    <script src="<?php echo base_url()?>assets/adminLte/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/dist/js/demo.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url()?>assets/adminLte/plugins/select2/js/select2.full.min.js"></script>

    
    <script>
      $(function () {
        // Summernote
        $('.textarea').summernote({
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['para', ['ul', 'ol']],
            ['height', ['height']],
            ['insert', ['link']]
          ]
        });
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        bsCustomFileInput.init();
      });
    </script>
    <script>
      $(function () {
        $('#datatable').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "order": []
        });
      });
    </script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>

  </body>
</html>

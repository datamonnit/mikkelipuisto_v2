<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>YHTEYSTIEDOT</b>
              <small><b>Mikkelipuistoon liittyvissä asioissa, ota yhteyttä:</b></small>
              <hr>

              <?php if($this->session->userdata('logged_in')) : ?>
                  <script src='<?php echo base_url(); ?>assets/tinymce/tinymce.min.js'></script>
                    <script type="text/javascript">
                    tinyMCE.init({
                        selector: "#editable",
                        inline: true,
                        plugins: [
                          'advlist autolink lists link image charmap print preview anchor',
                          'searchreplace visualblocks code fullscreen',
                          'insertdatetime media table contextmenu paste'
                        ],
                        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                    });

                          $(document).ready(function(){
                            $( "#tiedot" ).click(function() {
                              let divContent = $('#editable').html();

                              $.ajax({
                                  type: "POST",
                                  url: "<?php echo base_url(); ?>pages/save_html",
                                  dataType: 'json',
                                  data: { html: divContent }
                              })
                              .done(function() {
                                alert( "Valmis" );
                              })
                              .fail(function(xhr, status, error) {
                                console.log(xhr);
                                console.log(status);
                                console.log(error);
                              })
                            });
                          });

                      </script>


        </h1>
      <a id="tiedot" class="btn btn-success">Tallenna yhteystietojen muokkaus<span class="glyphicon glyphicon-chevron-right"></span></a>
      <?php endif; ?>
    </div>
</div>
<div id="editable">
  <?php $this->load->view('pages/yhteystiedotmuokkaus'); ?>
</div>

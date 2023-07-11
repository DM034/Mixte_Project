<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>

<body>
  <?php if (!empty($repas)) { ?>
    <center>

      <button type="button" class="btn col-sm-2 btn-dark btn-icon-text text-center my-5" onclick="generatePDF()">
        Exportation PDF <i class="mdi mdi-file-pdf-box btn-icon-append"></i>
      </button>

    </center>

    <div id="pdf-content">
      <h2 class="ml-5"> Regime Alimentaire </h2>
      <div class="row my-4 ml-5">
        <!-- <?php
              var_dump($detail);
              ?> -->
        <?php for ($i = 0; $i < count($repas); $i++) { ?>
          <div class="col-sm-4 stretch-card grid-margin">
            <div class="card shadow">
              <div class="card-body p-0">
                <?php if (!empty($detail[$i])) { ?>
                  <img class="img-fluid w-100" src="<?php echo base_url($detail[$i][0]->pathPhoto); ?> " alt="">
                <?php } ?>
              </div>
              <div class="card-body px-3 text-dark">
                <div class="d-flex justify-content-between">
                  <p class="text-muted font-13 mb-0">Sakafo milay be</p>
                  <i class="mdi mdi-food icon-large" style="font-size: 0.7cm;"></i>
                </div>
                <h5 class="font-weight-semibold"> <?php echo $repas[$i]->nomrepas; ?> </h5>

              </div>
            </div>
          </div>
        <?php } ?>


      </div>


      <h2 class="ml-5"> Activite sportif </h2>
      <?php for ($i = 0; $i < count($sport); $i++) { ?>
        <div class="col-md-4 grid-margin stretch-card float-left">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><?php echo $sport[$i]->nomsport; ?></h4>
              <div class="media">
                <i class="mdi mdi-soccer icon-md text-info d-flex align-self-center mr-3"></i>
                <div class="media-body">
                  <p class="card-text"> <?php echo $sport[$i]->duree; ?> jours </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>


    </div>
    <!-- <button type="button" class="btn btn-primary btn-small "><i class="mdi mdi-plus-circle"></i> Add Prodcut </button> -->
  <?php } else { ?>
    <?php if (isset($error)) { ?>
      <div class="alert alert-dismissible alert-warning">
        <p class="text-danger font-weight-semibold mb-0"> <?php echo $error; ?> </p>
      </div>
    <?php } ?>
  <?php } ?>
  <script>
    function generatePDF() {
      // Create a new jsPDF instance
      window.jsPDF = window.jspdf.jsPDF;
      const doc = new jsPDF();

      // Get the content of the PHP page
      const content = document.querySelector('#pdf-content');

      // Generate the PDF using jsPDF
      doc.html(content, {
        callback: function(doc) {
          doc.save('exported_pdf.pdf');
        },
        x: 15,
        y: 15,
        width: 170,
        windowWidth: 650
      });


    }
  </script>
</body>

</html>
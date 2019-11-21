    <?php include "view/mensagem.php" ?>
    <!-- INICIO JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->
  <div class="jumbotron">
    <h1 class="display-9  " style="color:red">POR QUE SER UM DOADOR?</h1>
    <p class="lead">Beneficios de ser um doador</p>
    <hr class="my-4">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
      <a href="#" class="list-group-item list-group-item-action">Exame de Sangue</a>
      <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
    </div>
    <div>

    </div>
  </div>
  <!-- FIM JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->




  <!-- JUMBOTRON -->
  <div class="container">
    <div class="row">
      <div class="col-12 ">
        <div class="jumbotron">
          <h1 class="text-center display-4" style="color: red;">Projeto</h1>
          <hr>
          <div class="row">
            <div class="col-12 ">
              <ul class="nav nav-pills justify-content-center" id="pills-nav" role="tablist">
                <li nav-item>
                  <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Como projeto
                    nasceu</a>
                </li>
                <li nav-item>
                  <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Nossa necessidade
                    atual</a>
                </li>
                <li nav-item>
                  <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03">Dados</a>
                </li>

              </ul>

              <div class="tab-content" id="nav-pills-content">

                <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <p>
                        projeto nasceu com da necessidade de levar informação sobre sobre esse ato de solidariedade
                        que é ser um doador de sangue, visando consientizar a população da importancia dessa atividade
                        simples mas com pode gigantesco
                      </p>
                    </div>

                    <div class="col-md-6">
                      <img src="projetoimg/doe-final.png" alt="">
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade  " id="nav-item-02" role="tabpanel">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <p>teste02</p>
                    </div>

                    <div class="col-md-6 col-sm-6">

                    </div>
                  </div>
                </div>
                <div class="tab-pane fade  " id="nav-item-03" role="tabpanel">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <p>teste03</p>
                    </div>

                    <div class="col-md-6 col-sm-6">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- INICIO MAPBOX -->
      <div class="container">
        <div class="mapbox" id='map' style='width: 340px; height: 300px;'>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iZXJ0by1qdW5pb3I5OSIsImEiOiJjazJuN212YTkwMXB5M2JuejI4cTQ0MTd2In0.hXajmx4S4Ev9eaeJPKeSeA';
            var map = new mapboxgl.Map({
              container: 'map',
              style: 'mapbox://styles/mapbox/streets-v11'
            });
          </script>
        </div>
      </div>
      <!-- FIM MAPBOX -->

      <!-- INICIO FOOTER -->
      <!-- Footer -->
      <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

              <!-- Content -->
              <h5 class="text-uppercase">DOE+</h5>
              <p>Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

              <!-- Links -->
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->

            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->

      <!-- FIM FOOTER -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
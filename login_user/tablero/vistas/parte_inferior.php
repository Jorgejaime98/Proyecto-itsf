      </div>
      <!-- End of Main Content -->

      <!--CONTENIDO-->
      <!--<div class="container-fluid">-->
        <div class="container p-2">
          <?php
            // isset() Sirve para saber si una variable esta definida o es null.
            // Se simula lista blanca de enclaces en la URL
            if(isset($_GET ["page"])){
                if ($_GET["page"] == "inicio" ||
                $_GET["page"] == "historial_usuario" ||
                $_GET["page"] == "docentes" ||
                $_GET["page"] == "salir"){

                    include "paginas/". $_GET["page"]. ".php";
                }
                else{
                    include "paginas/404.php";
                }
            } 
            else {
              include "paginas/inicio.php";
            }
          ?>
        </div>
      <!--</div>-->
        
        <!-- Footer -->
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span><b class="pr-1">Desarrollado por</b><em class="pr-1">Jorge Jaime</em>- Todos los derechos reservados. &copy; 2021</span>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Confirma salir y cerrar Sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../bd/logout.php">Salir</a>
  
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

 

  
    <!-- datatables JS -->
    <script type="text/javascript" src="vendor/datatables/datatables.min.js"></script>    
    <!-- código propio JS --> 
    <script type="text/javascript" src="main.js"></script>  
    

    

</body>

</html>

<?php
  include(HTML_DIR.'overall/header.php')
?>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <?php
          include(HTML_DIR.'overall/topnav.php');
        ?>
        <?php 
        switch(@$_REQUEST["page"]){
            case 'novo':
              include(HTML_DIR.'cadastro/novo-usuario.php');
            break;
            case 'listar':
                include(HTML_DIR.'cadastro/listar-usuario.php');
            break;
            case 'salvar':
              include(HTML_DIR.'cadastro/salvar-usuario.php');
            break;
            case 'editar':
              include(HTML_DIR.'cadastro/editar-usuario.php');
            break;
            default:
              include(HTML_DIR.'news/news.php');
    }
    ?>
        

        <!-- partial:partials/_footer.html -->
        <?php
          include(HTML_DIR.'overall/footer.php');
        ?>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="views/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="views/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./views/js/demo.js"></script>
    <script src="./views/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>

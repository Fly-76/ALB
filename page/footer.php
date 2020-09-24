
  <!-- footer -->
  <footer class="jumbotron jumbotron-fluid text-white bg-dark">
    <div class="container">
      <!-- <h1 class="display-4">ALB</h1> -->
      <p class="lead">Copyright © 2020 Ada Lovelace's Bank. Tous droits réservés.</p>
    </div>
  </footer>
  <!-- end footer -->

  <!-- Boylerplate JavaScript -->
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<?php
  $page = $_SERVER['SCRIPT_NAME'];
  
  // extract filename without extension
  $pos = strrpos($page, "/");
  if ($pos !== false) { 
    $page = substr($page, $pos+1);
    $pos = strpos($page, ".");
    if ($pos !== false) $page = substr($page, 0, $pos);
      
    //$page = substr($page, 0, -4);
  }

?>
  <script src="js/<?php echo $page ?>.js"></script>

</body>
</html>
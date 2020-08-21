<?php
if(isset($_POST['button'])){
  $sito = $_POST['sito'];
}

 $urldavedere = $sito;
 $cosadacercare = $dacercare;
 $contenuto = getContent($urldavedere);
 echo "<script>$(document).ready(function() {showresult();});</script>";
 ?>
 <div class="container">
   <div class="row">
     <div class="risultato col-md-12">
     </div>
   </div>
 </div>

<div class="result" style="display:none;">
    <?php echo $contenuto; ?>
</div>
<!-- INIZIO FOOTER -->
<footer class="footer">
  <div class="container-fluid">
    <nav class="float-left">
      <ul>
        <li>
            Creative Araneus Team
        </li>
      </ul>
    </nav>
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, made with <i class="material-icons">favorite</i> by
      <a href="http://www.araneus.it" target="_blank">Araneus</a> for a better web.
    </div>
    <!-- your footer here -->
  </div>
</footer>
</div>
</div>
</body>

</html>

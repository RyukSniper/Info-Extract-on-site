<?php
if(isset($_POST['button'])){
  $primo_sito = $_POST['sito'];

  if (isset($primo_sito)) {

    $sito = ['https://www.pedrali.it/it/prodotti/catalogo/Poltrona-PANAREA-3675/', 'https://www.pedrali.it/it/prodotti/catalogo/Poltrona-BABILA-XL-2754/', 'https://www.pedrali.it/it/prodotti/catalogo/Poltrona-BABILA-XL-2744/'];
    $record = 0;
  }
}

if (isset($_GET['record'])) {
  $record = $_GET['record'];
  $sito = ['https://www.pedrali.it/it/prodotti/catalogo/Poltrona-PANAREA-3675/', 'https://www.pedrali.it/it/prodotti/catalogo/Poltrona-BABILA-XL-2754/', 'https://www.pedrali.it/it/prodotti/catalogo/Poltrona-BABILA-XL-2744/'];
  $i = $record+1;
} else {
  $record = 0;
}

 $urldavedere = $sito[$i];
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
    <input id="record_nr" value="<?php echo $record; ?>">
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

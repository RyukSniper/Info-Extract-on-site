<?php
$record;

// if(isset($_POST['button'])){
//   $sito = $_POST['sito'];
// }

if (isset($_GET['record'])) {
    $record = $_GET['record'];
}

$sito = ['', 
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-CIRCUIT-CRTD_69X30/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-CIRCUIT-CRTD_42X45/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-BLUME-BLTD_89/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-BLUME-BLT_100X25/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-BLUME-BLT_69X69/",
    "https://www.pedrali.it/it/prodotti/catalogo/Transenna-INOX-5171/",
    "https://www.pedrali.it/it/prodotti/catalogo/Sistema-contenitore-BOXIE-BXM_3C/",
    "https://www.pedrali.it/it/prodotti/catalogo/Appendiabiti-RAY-5166/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-SNOOZE-SNZ01P/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-FLAG-5150W8/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-FLAG-5145/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-VOILA-5130/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-BRIK/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-KADO/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-WOW-323/",
    "https://www.pedrali.it/it/prodotti/catalogo/Seduta-Lounge-LOG-367/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-BUDDY-210/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-BUDDY-212/",
    "https://www.pedrali.it/it/prodotti/catalogo/Pouf-ESTER-693/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-PASHA-661/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-PARENTHESIS-P10005/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-BUDDY-59X59/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-CODE-40X40X30/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-MALMOe-MLT_60X60X36-48/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-OBLIQUE-OBL/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-OBLIQUE-OBL-A/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-IGLOO-IGL_BI-RIP_BI/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-ICEBERG-IBE_BI/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-TETRIS-TTS/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-SIDE-TABLE-5900/",
    "https://www.pedrali.it/it/prodotti/catalogo/Complemento-INOX-4402_ACH/",
    "https://www.pedrali.it/it/prodotti/catalogo/Accessorio-Miniature-PASHA/",
    "https://www.pedrali.it/it/prodotti/catalogo/Accessorio-Miniature-PLUS/",
    "https://www.pedrali.it/it/prodotti/catalogo/Accessorio-Miniature-ARA/",
    "https://www.pedrali.it/it/prodotti/catalogo/Accessorio-Miniature-BLITZ/"];

$urldavedere = $sito[$record];
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
<input id="record_nr" type="hidden" value="<?php echo $record==null?0:$record; ?>">
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

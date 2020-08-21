//jQuery(document).ready(function() {
//	if (jQuery("#record_nr").length) {
//		var numero = document.getElementById("record_nr").value;
//		if (numero > 0) showresult();
//	}
//});

function showresult() {
    var immagine_prodotto = "";
    var immagine_schedaprodotto = jQuery('#panel-scheda-tecnica .col-sm-4 img').attr('src');
    var tproduct = jQuery('h1.prod-name').text();
    var description = jQuery('.desc').text();
    description = description.replace(/(\n|\t)/gm, '');
    jQuery('#slider-intro li a').each(function() {
        immagine_prodotto += "https://www.pedrali.it" + jQuery(this).attr('href') + "; ";
    });
    var prodotti = [];
    if (jQuery('.finiture .item').length > 0) {
        jQuery('.finiture .item').each(function(i) {
            var title_color = jQuery(this).find('h3').text();
            var url_color = jQuery(this).find('img').attr('src');
            html = immagine_prodotto + '|' + tproduct + '|<img src="https://www.pedrali.it' + immagine_schedaprodotto + '"><br>' + description + '|' + title_color + '|' + url_color;
            prodotti.push(html);
        });
    } else {
        var title_color = '';
        var url_color = '';
        html = immagine_prodotto + '|' + tproduct + '|<img src="https://www.pedrali.it' + immagine_schedaprodotto + '"><br>' + description + '|' + title_color + '|' + url_color;
        prodotti.push(html);
    }

    var rec_nr = document.getElementById("record_nr").value;
    
    console.log("RECORD attuale = "+rec_nr);

    jQuery.ajax({
        url: "/extract/v2/test.php",
        method: "POST",
        data: {
            html: prodotti,
            record: rec_nr
        },
        success: function(result) {
            console.log(result);
            let testurl = "https://www.araneus.it/extract/v2/extract.php";
            //Ora ho forzato a 3, dopo dovrà essere il numero dei record
            if (result <= 35) {
            	window.location.href = testurl + "?record=" + result;
            }
        }
    });
}

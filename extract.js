jQuery(document).ready(function($) {

    h1 = jQuery(".product-detail-content h1 ").text();
    p = jQuery(".product-detail-content p ").text();
    img = jQuery('.j-lightbox img').attr('src');
    descrizione = jQuery(".product-detail-content").text();
    jQuery(".response").html("SRC IMG: " + img + "<br>" +"TITOLO: " + h1 + "<br> CODICE PRODOTTO: " + p + "<br>Tutto: "+ descrizione);
    jQuery(".container").hide();
    jQuery(".footer").hide();
});

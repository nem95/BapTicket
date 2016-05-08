$(document).ready(function(){
    $('.find').click(function() {
        $(this).removeClass('retour').addClass('show-none');
        $('.bars').removeClass('bars').addClass('show-none');
        $('.logo').removeClass('logo').addClass('show-nones');
        $('.retour-click').removeClass('retour-click').addClass('retour');
        $('.retour-clicks').removeClass('retour-clicks').addClass('search-bar');
    });

    $('.retour-click').click(function() {
        $(this).removeClass('retour').addClass('retour-click');
        $('.search-bar').removeClass('search-bar').addClass('retour-clicks');

        $(".find").removeClass('show-none').addClass('find');
        $('.show-none').removeClass('show-none').addClass('bars');
        $('.show-nones').removeClass('show-nones').addClass('logo');
    });
});

$(document).ready(function(){
    $('.find').click(function() {
        $(this).removeClass('close-search').addClass('show-none');
        $('.bars').removeClass('bars').addClass('show-none');
        $('.navbar-brand').removeClass('navbar-brand').addClass('show-nones');
        $('.retour-click').removeClass('retour-click').addClass('close-search');
        $('.retour-clicks').removeClass('retour-clicks').addClass('search-menu-mob');
    });

    $('.retour-click').click(function() {
        $(this).removeClass('close-search').addClass('retour-click');
        $('.search-menu-mob').removeClass('search-menu-mob').addClass('retour-clicks');

        $(".find").removeClass('show-none').addClass('find');
        $('.show-none').removeClass('show-none').addClass('bars');
        $('.show-nones').removeClass('show-nones').addClass('navbar-brand');
    });


});

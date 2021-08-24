(function ($) {

    let popupContainer = $('.asp-popup-area-wrapper'),
        body = $('body');

    //all popup open-related functionality event
    $(document).on('asp_open_popup', function (e) {
        popupContainer.removeAttr('hidden');
        popupContainer.addClass('opened');
        body.addClass('asp-disable-scroll');
    });

    //all popup close-related functionality event
    $(document).on('asp_close_popup', function (e) {
        popupContainer.attr('hidden', '');
        popupContainer.removeClass('opened');
        body.removeClass('asp-disable-scroll');
    });

    //open popup when the user click on the search button
    $(document).on('click', '.asp-trigger-search-popup, #asp-trigger-search-popup', function (e) {
        e.preventDefault();
        $(document).trigger('asp_open_popup');
    });

    //close the popup when user click on the overlay
    $(document).on('click', '.asp-search-closer', function (e) {
        e.preventDefault();
        $(document).trigger('asp_close_popup');
    });

    //close the popup when user press on escape key
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $(document).trigger('asp_close_popup');
        }
    });



})(jQuery);
(function(window, document) {
    'use strict';

    var $profileHeaderElements;

    window.addEventListener('load', function() {
        $profileHeaderElements = $('[data-element="profile-header"]');
    });

    $(document).on('click', '[data-element="button-background"]', function() {
        var $this           = $(this);
        var backgroundColor = $this.css('backgroundColor');

        $profileHeaderElements.css({'backgroundColor' : backgroundColor});
    });
})(window, document);

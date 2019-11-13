<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    var $hamburgerBtn = $("#hamburger-button");
    $hamburgerBtn.on("click", function(e) {
        $hamburgerBtn.toggleClass("is-active");
        var $navContent = $("#navigation");
        var $headerContent = $("header");
        if($hamburgerBtn.hasClass('is-active')) {
            $navContent.attr("class", "nav-active");
            $headerContent.attr("class", "header-active");
            $navContent.addClass("animated fast");
        } else {
            $navContent.removeClass("animated fast");
            window.setTimeout(function() {
                // $navContent.addClass("animated fast");
            }, 200);
            window.setTimeout(function() {
                $headerContent.removeClass("header-active");
                $navContent.removeClass("nav-active animated fast");
            }, 450);
        }
    });

    const $openMenuItem = $("[id^=open-menu-]");
    $openMenuItem.on("click", function(event) {
        const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');

        if($dropdownBtnOpen.is(":visible"))
            $dropdownBtnOpen.trigger('click');
        else {
            $dropdownBtnClose.trigger('click');
        }
    });

    const $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    const $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });
</script>

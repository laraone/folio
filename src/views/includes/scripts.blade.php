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
            $headerContent.addClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} fast");
        } else {
            $headerContent.removeClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} fast");
            window.setTimeout(function() {
                $headerContent.addClass("animated {{ get_theme_setting('header.hamburger.general.outAnimation') }}");
            }, 400);
            window.setTimeout(function() {
                $navContent.removeClass("nav-active");
                $headerContent.removeClass("header-active");
                $headerContent.removeClass("animated {{ get_theme_setting('header.hamburger.general.outAnimation') }}")
            }, 1000);
        }
    });

    const $openMenuItem = $("[id^=open-menu-]");
    $openMenuItem.on("click", function(event) {
        if($hamburgerBtn.hasClass("is-active")) {
            const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
            const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');

            if($dropdownBtnOpen.is(":visible"))
                $dropdownBtnOpen.trigger('click');
            else {
                $dropdownBtnClose.trigger('click');
            }
        }
    });

    const $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');
        $dropdownContent.toggleClass("dropdown-visible");
        $(event.target).toggleClass("dropdown-invisible");
        $dropdownBtnClose.toggleClass("dropdown-visible");
    });

    const $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        $dropdownContent.toggleClass("dropdown-visible");
        $(event.target).toggleClass("dropdown-visible");
        $dropdownBtnOpen.toggleClass("dropdown-invisible");
    });
</script>

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
</script>

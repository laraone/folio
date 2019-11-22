.content-index {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'general.container.index.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'general.container.index.maxWidth') ])
}

.content-single {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'general.container.single.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'general.container.single.maxWidth') ])
}

body {
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'general.font.family') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'general.font.color') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'general.font.size') ])
}

.posts .post .post-title-link, .content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
}

.posts .post .post-title-link:hover, .content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}

.posts .masonry-brick, .post .index-image-link .post-img {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
}

.post div.post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
}

.posts .post .post-title-link, .content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
}

.posts .post .post-title-link:hover, .content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}

.posts .post div.post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
}

.post div.post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
}

header {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.general.backgroundColor') ])
    @style([ 'property' => 'height', 'value' => data_get($settings, 'header.general.height') ])
}

#navigation .menu-item {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.itemBackgroundColor') ])
}

#navigation .menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.menu.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.menu.itemPadding') ])
}

#navigation .menu-item a:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.fontHoverColor') ])
}

#navigation .menu-item:hover {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.itemHoverBackgroundColor') ])
}

header .hamburger-box .hamburger-inner, header .hamburger-box .hamburger-inner::before, header .hamburger-box .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerMenu.button.color') ])
}

header .hamburger-inner,header .hamburger-inner::before,header  .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerMenu.button.color') ])
}

.header-active .hamburger.is-active .hamburger-inner, .header-active .hamburger.is-active .hamburger-inner::before, .header-active .hamburger.is-active .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerMenu.button.activeColor') ])
}

.header-active {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerMenu.general.backgroundColor') ])
}

.header-active logo logo-link {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.logo.color') ])
}

.header-active #navigation .menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.fontColor') ])
    @style([ 'property' => 'padding-top', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.spacing') ])
    @style([ 'property' => 'padding-bottom', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.spacing') ])
    @style([ 'property' => 'padding-left', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.indent') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.textTransform') ])
}

.header-active #navigation .dropdown .drop-menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.fontColor') ])
    @style([ 'property' => 'padding-top', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.spacing') ])
    @style([ 'property' => 'padding-bottom', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.spacing') ])
    @style([ 'property' => 'padding-left', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.indent') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.textTransform') ])
}

header .logo .logo-link {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.logo.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.logo.fontColor') ])
}

header .logo .logo-link:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.logo.fontHoverColor') ])
}

footer {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'footer.general.width') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'footer.general.font.color') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'footer.general.font.size') ])
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'footer.general.backgroundColor') ])
}

h1, .h1 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline1.size') ])
}

h2, .h2 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline2.size') ])
}

h3, .h3 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline3.size') ])
}

h4, .h4 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline4.size') ])
}

h5, .h5 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline5.size') ])
}

h6, .h6 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline6.size') ])
}

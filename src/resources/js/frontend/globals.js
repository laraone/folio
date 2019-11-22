const openTab = (tabBlock, tabId) => {
    var tabNavs = (document.querySelectorAll('.'+tabBlock + ' .tabsbar .tab-item'));
    for (var i = 0; i < tabNavs.length; i++) {
        tabNavs[i].classList.remove('active-tab-item');
    }
    document.getElementById('tab-nav-'+tabId).classList.add('active-tab-item');
    var tabs = (document.querySelectorAll('.'+tabBlock + ' .tab-block'));
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active-tab');
    }
    document.getElementById(tabId).classList.add('active-tab');
}

/**
 * Hamburger button toggle
 * Opens the Hamburger Menu
 * @param {} id
 */
const hamburgerToggle = (id) => {
    let hamburgerBtn = document.getElementById(id);
    let hamburgerMenu = document.getElementById('header');
    let navigationMenu = document.getElementById('navigation');

    // toggle hamburgerBtn
    toggleClass(hamburgerBtn, 'is-active');

    if(hasClass(hamburgerBtn, 'is-active')) {
        hamburgerMenu.setAttribute('class', 'header-active');
        navigationMenu.classList.add('nav-active');
        hamburgerMenu.classList.add('animated');
        hamburgerMenu.classList.add('fast');
        hamburgerMenu.classList.add(window.themeSettings.hamburgerMenu.inAnimation);
    } else {
        hamburgerMenu.classList.remove('animated');
        hamburgerMenu.classList.remove('fast');
        hamburgerMenu.classList.remove(window.themeSettings.hamburgerMenu.inAnimation);
        window.setTimeout(function() {
            let hamburgerMenu = document.getElementById('header');
            hamburgerMenu.classList.add('animated');
            hamburgerMenu.classList.add(window.themeSettings.hamburgerMenu.outAnimation);
        }, 400);
        window.setTimeout(function() {
            let hamburgerMenu = document.getElementById('header');
            let navigationMenu = document.getElementById('navigation');
            navigationMenu.classList.remove('nav-active');
            hamburgerMenu.classList.remove('header-active');
            hamburgerMenu.classList.remove('animated');
            hamburgerMenu.classList.remove(window.themeSettings.hamburgerMenu.outAnimation);
        }, 1000);
    }
}

/**
 * Hamburger dropdown button toggle
 * toggles between open and close buttons
 * called directly by dropDownMenuToggle function
 * @param {} id
 */
const dropDownBtnToggle = (id) => {
    let dropDownBtn = document.getElementById(id);
    let menuItem = dropDownBtn.closest('.menu-item');
    let dropDown = menuItem.querySelector('.dropdown-content');

    let dropDownBtnIcon = dropDown.classList.contains('dropdown-visible') ? window.themeSettings.hamburgerMenu.dropDownButtons.openIcon : window.themeSettings.hamburgerMenu.dropDownButtons.closeIcon;
    dropDownBtn.setAttribute('class', dropDownBtnIcon);
    dropDownBtn.classList.add('dropdown-visible');

    if(dropDown.classList.contains('dropdown-visible')) {
        dropDown.classList.remove('dropdown-visible');
    } else {
        dropDown.classList.add('dropdown-visible');
    }
}

/**
 * Hamburger drop-down-menu toggle
 * Only for touch screens, on desktop screens css should be used to toggle visibility
 * @param {} id
 */
const dropDownMenuToggle = (id) => {
    let dropDownMenu = document.getElementById(id);
    let menuItem = dropDownMenu.closest('.menu-item');
    let dropDownContent = menuItem.querySelector('i');

    dropDownBtnToggle(dropDownContent.id);
}


/** Functions to be exported for use in themes directly */
export {
    openTab, hamburgerToggle, dropDownMenuToggle
}


// HELPER Functions

/**
 * Check if element has a class
 */
const hasClass = (el, className) => {
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

/**
 * Toggle an element's class
 */
const toggleClass = (element, classToToggle) => {
    if (element.classList) {
        element.classList.toggle(classToToggle);
    } else { // For IE9
        var classes = element.className.split(" ");
        var i = classes.indexOf(classToToggle);

        if (i >= 0)
          classes.splice(i, 1);
        else
          classes.push(classToToggle);
          element.className = classes.join(" ");
    }
}

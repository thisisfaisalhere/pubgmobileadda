var backdrop = document.querySelector('.backdrop');
var hamburger = document.querySelector('.hamburger');
var mobileNav = document.querySelector('.mobile-nav');
var navItems = document.querySelectorAll('.mobile-nav__item a');

for( i = 0; i < navItems.length; i++) {
    navItems[i].addEventListener('click', function() {
        mobileNav.classList.remove('open');
        backdrop.classList.remove('open');
    });
}

backdrop.addEventListener('click', function() {
    mobileNav.classList.remove('open');
    backdrop.classList.remove('open');
});

hamburger.addEventListener('click', function() {
    mobileNav.classList.add('open');
    backdrop.classList.add('open');
});

function checkedChanged(element) {
    var myLayer = document.querySelector('#accept');
    if (element.checked == true) {
        myLayer.style.background = "green";
        myLayer.style.cursor = "pointer";
        myLayer.disabled = "";
    } else {
        myLayer.disabled = "disabled";
        myLayer.style.background = "grey";
        myLayer.style.cursor = "not-allowed";
    };
}
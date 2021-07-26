//--------------- Cambio colore menù ---------------

document.addEventListener('scroll', function () {

    const navbar = document.querySelector('#navbar-presto')

    const navbarSupported = document.querySelector('#navbarSupportedContent')

    const navbarToggler = document.querySelector('#navbar-toggler')

    if (window.scrollY > 100) {
        navbar.classList.add('p-bg-white', 'shadow', 'transition')
    } else {
        navbar.classList.remove('p-bg-white', 'shadow',)
    }

    if (navbarSupported.classList.contains('show') && window.scrollY < 1) {

        navbar.classList.add('p-bg-white')

    }

})

document.addEventListener('click', function () {

    const navbar = document.querySelector('#navbar-presto')

    navbar.classList.add('p-bg-white', 'shadow', 'transition')

})

//--------------- Cambio icona menù ---------------

let iconMenu = document.querySelector('#icon-menu')
let iconIcs = document.querySelector('#icon-ics')


iconMenu.addEventListener('click', function icon() {

    if (iconIcs.classList.contains('d-none')) {

        iconIcs.classList.remove('d-none')
        iconMenu.classList.add('d-none')

    }
})

iconIcs.addEventListener('click', function icon() {

    if (iconMenu.classList.contains('d-none')) {

        iconMenu.classList.remove('d-none')
        iconIcs.classList.add('d-none')
    }
})
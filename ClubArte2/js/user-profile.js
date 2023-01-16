const btnToogle = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('container-list-menu-user')[0]

btnToogle.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})
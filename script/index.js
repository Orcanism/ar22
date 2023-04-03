function dropdownMenu() {
    if (document.getElementsByClassName('menuWrapper')[0].style.opacity == 1) {
        document.getElementsByClassName('menuWrapper')[0].style.opacity = 0
    }
    else {
        document.getElementsByClassName('menuWrapper')[0].style.opacity = 1
    }
}
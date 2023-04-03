let isOpen = false;

function dropdownMenu() {

    if (isOpen) {
        document.getElementsByClassName('dropdownMenu')[0].style.opacity = 0;
        document.getElementsByClassName('header')[0].style.backgroundColor = 'transparent';
        isOpen = false;
    }
    else {
        document.getElementsByClassName('dropdownMenu')[0].style.opacity = 1;
        document.getElementsByClassName('header')[0].style.backgroundColor = 'lightgrey';
        isOpen = true;
    }
}
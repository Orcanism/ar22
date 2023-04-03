let isOpen = false;

function dropdownMenu() {

    if (isOpen) {
        document.getElementsByClassName('dropdownMenu')[0].style.opacity = 0;
        document.getElementsByClassName('header')[0].style.backgroundColor = 'transparent';
        for (let i = 0; i < 5; i++) {
            document.getElementsByClassName('dropdownMenu')[0].children[i].style.pointerEvents = 'none'
        }
        isOpen = false;
    }
    else {
        document.getElementsByClassName('dropdownMenu')[0].style.opacity = 1;
        document.getElementsByClassName('header')[0].style.backgroundColor = 'lightgrey';
        for (let i = 0; i < 5; i++) {
            document.getElementsByClassName('dropdownMenu')[0].children[i].style.pointerEvents = 'all'
        }
        isOpen = true;
    }
}
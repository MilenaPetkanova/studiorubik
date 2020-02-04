import './burger-menu.scss';

function burgerMenu() {

    $("#toggle").click(function () {
        $(this).toggleClass("open");
        $("#burger-menu-container").toggleClass("opened");
    });

}

export default burgerMenu;
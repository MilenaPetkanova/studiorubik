import './burger-menu.scss';

function burgerMenu() {

    $("#toggle").click(function () {
        $(this).toggleClass("open");
        $("#menu").toggleClass("opened");
        $("#main-menu").toggleClass("opened");
    });

}

export default burgerMenu;
import './burger-button.scss';
import './burger-menu.scss';

function burgerMenu() {

    $("#toggle").click(function () {
        $(this).toggleClass("is-active");
        $("#burger-menu-container").toggleClass("opened");
    });

}

export default burgerMenu;
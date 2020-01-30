// Burger Menu Module
const BurgerMenuModule = (function () {
    return {
        burgerMenu: function () {
            $("#toggle").click(function () {
                $(this).toggleClass("open");
                $("#menu").toggleClass("opened");
                $("#main-menu").toggleClass("opened");
            });
            console.log('Burger Menu Loaded');
        }
    };
})();
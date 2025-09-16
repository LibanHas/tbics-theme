document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.side-menu-toggle'); // ✅ matches button
    const sideMenu = document.querySelector('#side-menu');
    const closeBtn = document.querySelector('.menu-close');

    if (menuToggle && sideMenu) {
        menuToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            console.log("Hamburger clicked"); // ✅ Add for debugging
            sideMenu.classList.add('open');
            document.body.classList.add('no-scroll');
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            sideMenu.classList.remove('open');
            document.body.classList.remove('no-scroll');
        });
    }
});

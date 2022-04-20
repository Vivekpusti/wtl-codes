// Hamburger Menu 
const navSlide = () => {
    const menu = document.querySelector('#menu-btn');
    const closeBtn = document.querySelector('#close-btn');
    const nav = document.querySelector('.navbar');

    // Toggle menu
    menu.addEventListener('click', () => {
        menu.classList.add('active');
        closeBtn.classList.add('change');
        nav.classList.add('nav-active');
    });

    closeBtn.addEventListener('click', () => {
        menu.classList.remove('active');
        closeBtn.classList.remove('change');
        nav.classList.remove('nav-active');
    })
}
navSlide();

// Theme switch
let darkBtn = document.querySelector('#dark');
let lightBtn = document.querySelector('#light');
let body = document.querySelector('body');

darkBtn.addEventListener('click', () => {
    darkBtn.classList.add('switch');
    lightBtn.classList.add('switch');
    body.classList.add('darkTheme');
});

lightBtn.addEventListener('click', () => {
    darkBtn.classList.remove('switch');
    lightBtn.classList.remove('switch');
    body.classList.remove('darkTheme');
})



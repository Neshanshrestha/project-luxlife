// admin.js
const header = document.querySelector('header');

function fixedNavbar() {
    header.classList.toggle('scrolled', window.pageYOffset > 0);
}

fixedNavbar();
window.addEventListener('scroll', fixedNavbar);

let menu = document.querySelector('#menu-btn');
// let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click', function() {
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
});



 // Close the form when the 'cancel' button is clicked
 document.getElementById('close-form').addEventListener('click', function() {
    document.querySelector('.update-container').style.display = 'none';
});
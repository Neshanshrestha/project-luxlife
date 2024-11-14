
document.addEventListener('DOMContentLoaded', () => {
//navigation 
let navBar = document.querySelector('nav');

document.addEventListener('scroll', () => {
if (window.scrollY > 0) {
navBar.style.boxShadow = '0 10px 20px rgba(190, 190, 190)';
}
});

    // Display product cards
    let productContainer = document.querySelector('.product_cardcontain');
    if (productContainer) {
        let productContainerWidth = productContainer.offsetWidth;
        let productCardWidth = 260;
        let productCardPerRow = Math.floor(productContainerWidth / (productCardWidth + 10));
        let marginSpacing = (productContainerWidth - (productCardPerRow * productCardWidth)) / (productCardPerRow - 1);
        let lastElement = productCardPerRow - 1;

        let productSections = document.querySelectorAll('.product_section');
        productSections.forEach(section => {
            let productCards = section.querySelectorAll('.product_card');
            for (let i = 0; i < productCardPerRow && i < productCards.length; i++) {
                productCards[i].classList.add('active');

                if (i === lastElement) {
                    productCards[i].style.marginRight = '0px';
                } else {
                    productCards[i].style.marginRight = `${marginSpacing}px`;
                }
            }
        });
    }

    // Add item to wishlist
    let wishListCount = document.querySelector('#buy1 span'); 
    let heartButtons = document.querySelectorAll('.heart_button');
    heartButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('active');
            // Optionally, update the wishlist count or trigger other actions here
            wishListCount.innerHTML = document.querySelectorAll('.heart_button.active').length;
        });
    });

    // Add item to cart
    let cardCount = document.querySelector('#cart1 span');
let cartButtons = document.querySelectorAll('.product_cart .button1');

cartButtons.forEach(button => {
button.addEventListener('click', () => {
button.classList.toggle('active');

if (button.classList.contains('active')) {
    button.innerHTML = 'Remove';
} else {
    button.innerHTML = 'Add To Cart';
}

// Update the cart count by counting the number of active buttons
cardCount.innerHTML = document.querySelectorAll('.product_cart .button1.active').length;

        });
    });
});

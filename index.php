<!DOCTYPE html>
<html>
    <head>
        <title>luxlife web application</title>
        <link rel="stylesheet" href="style.css">
        <script src="script1.js"></script>
        <script src="user.js"></script>

        <style>
            body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

header {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    background: #333;
    color: white;
}

header nav a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

.main-content {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.hero {
    position: relative;
    width: 100%;
    height: 100%;
}

#background-image {
    margin-top: 70px;
    position: absolute; /* Positions it relative to the page *          /* Aligns it to the left */
    width: 50%;       /* Full viewport width */
    height: 100vh;      /* Full viewport height */
    background-size: cover; /* Scales the image to cover the entire area */
    z-index: -1;  
}
.aarkoimg {
    margin-top: 70px;
    position: absolute; /* Positions it relative to the page *          /* Aligns it to the left */
    width: 50%;       /* Full viewport width */
    height: 100vh;      /* Full viewport height */
    background-size: cover; /* Scales the image to cover the entire area */
    z-index: -1; 
    margin-left: 50%; 
}


.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

#shop-now-btn {
    padding: 10px 20px;
    margin-top: 25%;
    margin-left: 3%;
    font-size: 20px;
    color: white;
    background: black;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
#shop-now-btn:hover{
    background:  rgba(59, 83, 31, 0.5);
}

            </style>
    </head>
    <body>
       <?php include ("header.php");?>
    <div class="main-content">
        <div class="hero">
            <img id="background-image" src="image/m4.png" alt="Product Image">
            <img src="image/m1.png" alt="Image"  class="aarkoimg">
            <div class="overlay">
                <button id="shop-now-btn">Shop Now</button>
            </div>
            
       
    
        </div>
        
    </div>
    
    

    <script >
        // Array of background images
const images = ["image/m5.png", "image/m2.png", "image/m3.png"];
let currentImageIndex = 0;
const backgroundImage = document.getElementById("background-image");

// Function to change the background image
function changeBackgroundImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    backgroundImage.src = images[currentImageIndex];
}

// Change image every 3 seconds
setInterval(changeBackgroundImage, 3000);

// Redirect to another page when "Shop Now" button is clicked
document.getElementById("shop-now-btn").onclick = function() {
    window.location.href = "product.php";
};

    </script>
</body>
</html>

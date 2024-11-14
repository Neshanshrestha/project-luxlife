<!DOCTYPE html>
<html>
    <head>
        <title>luxlife web application</title>
        <link rel="stylesheet" href="style.css">
        <script src="script1.js"></script>
        <script src="user.js"></script>

        <!-- <script>
            let searchForm = document.querySelector(".search-form");

document.querySelector("#srbtn").onclick = ()=>
{
    searchForm.classList.toggle("active2");
}
        </script> -->
    </head>
    <body>
       <?php
       include("header.php");?>
        <!-- main bodypart -->
         <div id="product_body">
              <!-- Top section -->
            <div id="product_top">
                <div id="product_wrapper">
                    <div id="product_toptext">
                        <h1>Luxlife Product</h1>
                        <h2>Sofa</h2>
                        <p>
                        LuxLife Furniture offers bespoke furniture tailored to your unique designs. Our expert designers bring your vision to life with precision and creativity.We pride ourselves on delivering premium quality craftsmanship, using the finest materials for durability and elegance. Choose LuxLife for a seamless, personalized experience and transform your space with our exquisite furniture solutions.                        
                        </p>
                     
                    </div>
                    <div id="product_topimage">
                        <img src="image/s4.jpg" alt="CABINATE" height="550px">
                    </div>
                </div>
            </div>
            <!-- Product catagory -->
             <div id="product_catacontain">
                <div id="product_catatext">
                    <span class="line"></span>
                    <span class="section_catagory_text">Categories</span>
                </div>
                <div id="product_catawrapper">
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/alli.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">All</span>
                            <span class="product_cataNum">70 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/d1.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Door</span>
                            <span class="product_cataNum">10 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/s1.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Sofa</span>
                            <span class="product_cataNum">5 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/c1.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">CABINATE</span>
                            <span class="product_cataNum">5 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/kk.png" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Kitchen</span>
                            <span class="product_cataNum">5 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/d7.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Double Door</span>
                            <span class="product_cataNum">5 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/bed1.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Bed</span>
                            <span class="product_cataNum">5 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/di.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Dining Table</span>
                            <span class="product_cataNum">5 items</span>
                        </div>
                    </div>
                </div>
                </div>
             
 
        </body>
        <?php include("footer.php");?>
</html>
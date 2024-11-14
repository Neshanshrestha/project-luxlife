
<?php
include 'connection.php';
// session_start();

// $user_id = $_SESSION['user_id'];
// if (!isset($user_id)) {
//     header('location:login.php');
// }

if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}

if (isset($_POST['add_to_wishlist'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $wishlist_number = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
$cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

if (mysqli_num_rows($wishlist_number) > 0) {
    $message[] = 'Product already exists in wishlist';
} elseif (mysqli_num_rows($cart_num) > 0) {
    $message[] = 'Product already exists in cart';
} else {
    mysqli_query($conn, "INSERT INTO `wishlist`(`user_id`, `pid`, `name`, `price`,`image`) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
    $message[] = 'Product successfully added to your wishlist';
}

}
?>


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
    <?php include("header.php");?>


        <!-- main bodypart -->
         <div id="product_body">
              <!-- Top section -->
            <div id="product_top">
                <div id="product_wrapper">
                    <div id="product_toptext">
                        <h2>LuxLife Products</h2>
                        <p>
                            Luxlife Furniture combines elegance and innovation to transform your living spaces. With a deep-rooted production heritage, they offer a range of products from dining tables to sofas, designed to meet user needs with a blend of traditional and modern styles. Their sophisticated silhouettes and clean forms ensure both comfort and aesthetic appeal. Luxlife Furniture is committed to quality and smart design, making them a leading brand in the industry.
                                              </p>
                        <button class="button1"><a href="product.php">Shop Now</a></button>
                    </div>
                    <div id="product_topimage">
                        <img src="image/alli.jpg" alt="CABINATE" height="550px">
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
                            <span class="product_cataNum">56 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/d9.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Door</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/s1.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Sofa</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/c9.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">CABINATE</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/kk.png" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Kitchen</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/l9.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Parquet</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/bed4.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Bed</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <img src="image/di.jpg" alt="image catagory">
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Dining Table</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                </div>
                </div>
 <!-- Product cards and slideshow -->
  <div class="product_section">
    <div class="product_section_top">
        <div class="selection_catacontain">
        <div class="section_catatype">  
        <span class="line"></span>
        <span class="section_catagory_text">Trending Furniture Accessories</span>
                    </div>
                    <h1>Explore</h1>
                 </div>
                 <div class="slideshow_button" data-slideshow="all" >
                    <!-- <button class="slideshow_button1 prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                            <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                          </svg>
                    </button>
                    <button class="slideshow_button1 next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </button> -->

              </div>
           </div>
           <div class="product_cardcontain">
            <ul>
                <li class="product_cart">
                    <div class="product_imagecontain">
                        <img src="image/bed1.jpg" alt="Bed">
                        <button class="heart_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                              </svg>
                        </button>
                        </div>
                        <div class="product_textcontain">
                            <h1>Lux Sofa b001</h1>
                            <p>45,000</p>
                            <button class="button1">Add To Cart</button>
                        </div>
                </li>

                <li class="product_cart">
                    <div class="product_imagecontain">
                        <img src="image/bed3.jpg" alt="Bed">
                        <button class="heart_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                              </svg>
                        </button>
                        </div>
                        <div class="product_textcontain">
                            <h1>Brown Wood b003</h1>
                            <p>50,000</p>
                            <button class="button1">Add To Cart</button>
                        </div>
                </li>

                <li class="product_cart">
                    <div class="product_imagecontain">
                        <img src="image/s8.jpg" alt="Bed">
                        <button class="heart_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                              </svg>
                        </button>
                        </div>
                        <div class="product_textcontain">
                            <h1>Gorila s008</h1>
                            <p>2,05,000</p>
                            <button class="button1">Add To Cart</button>
                        </div>
                      </li>
                      <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/s9.jpg" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Antique s009</h1>
                                <p>1,20,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/t3.jpg" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Fancy t003</h1>
                                <p>80,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                   
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/t8.jpg" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Fancy Roundt008</h1>
                                <p>75,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/c6.jpg" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Lux Cabinate c006</h1>
                                <p>1,25,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/c1.jpg" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Modern c001</h1>
                                <p>1,45,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                    <li class="product_cart">
                            <div class="product_imagecontain">
                                <img src="image/kkk (1).png" alt="Bed">
                                <button class="heart_button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                      </svg>
                                </button>
                                </div>
                                <div class="product_textcontain">
                                    <h1>Modern k001</h1>
                                    <p>1,45,000</p>
                                    <button class="button1">Add To Cart</button>
                                </div>
                        </li>
        
                        
                            <li class="product_cart">
                                <div class="product_imagecontain">
                                    <img src="image/k5.jpg" alt="Bed">
                                    <button class="heart_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>
                                    </button>
                                    </div>
                                    <div class="product_textcontain">
                                        <h1>Modern k008</h1>
                                        <p>1,45,000</p>
                                        <button class="button1">Add To Cart</button>
                                    </div>
                            </li>
                            <li class="product_cart">
                                <div class="product_imagecontain">
                                    <img src="image/l3.jpg" alt="Bed">
                                    <button class="heart_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>
                                    </button>
                                    </div>
                                    <div class="product_textcontain">
                                        <h1>l003</h1>
                                        <p>1,00,000</p>
                                        <button class="button1">Add To Cart</button>
                                    </div>
                            </li>
                            <li class="product_cart">
                                <div class="product_imagecontain">
                                    <img src="image/l6.jpg" alt="Bed">
                                    <button class="heart_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>
                                    </button>
                                    </div>
                                    <div class="product_textcontain">
                                        <h1>l006</h1>
                                        <p>1,25,000</p>
                                        <button class="button1">Add To Cart</button>
                                    </div>
                            </li>
            </ul>
           </div>
         </div>

                     
                    </ul>
                   </div> 
                      <div class="product_section_top">
        <div class="selection_catacontain">
        <div class="section_catatype">  
        <span class="line"></span>
        <span class="section_catagory_text">New added Product</span>
                    </div>
                    <h1>Explore</h1>
                 </div>
           </div>

           <div class="product_cardcontain">
    <?php
    include("connection.php");
    $select_products = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
    if (mysqli_num_rows($select_products) > 0) {
        while ($fetch_products = mysqli_fetch_assoc($select_products)) {
    ?>
            <div class="product_cart">
                <div class="product_imagecontain">
                    <img src="image/<?php echo $fetch_products['image']; ?>" alt="Product Image">
                    <button type="submit" name="add_to_wishlist" class="heart_button">
                        <svg width="20" height="20" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
                    </button>
                </div>
                <div class="product_textcontain">
                    <h1><?php echo $fetch_products['name']; ?></h1>
                    <p>Npr <?php echo $fetch_products['price']; ?></p>
                    <form method="post">
                        <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                        <input type="hidden" name="product_quantity" value="1" min="1">
                        <div>
                            <!-- <a href="index.php?pid=<?php echo $fetch_products['id']; ?>" class="button1">View</a> -->
                            <button type="submit" name="add_to_cart" class="button1">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
    <?php
        }
    } else {
        echo '<p class="empty">No products added yet!</p>';
    }
    ?>
</div>


                
        </body>
        <?php include("footer.php");?>
        </html>
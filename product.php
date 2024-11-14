<!DOCTYPE html>
<html>
    <head>
        <title>luxlife web application</title>
        <link rel="stylesheet" href="style.css">
        <script src="script1.js"></script>
        <script src="user.js"></script>

    </head>
    <body>
       <?php include("header.php");?>
       
        <!-- main bodypart -->
         <div id="product_body">
              <!-- Top section -->
            
            <!-- Product catagory -->
             <div id="product_catacontain">
                <div id="product_catatext">
                    <span class="line"></span>
                    <span class="section_catagory_text">Categories</span>
                </div>
                <div id="product_catawrapper">
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                           <a href="product.html" ><img src="image/alli.jpg" alt="image catagory"></a>
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">All</span>
                            <span class="product_cataNum">56 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                           <a href="#Door"> <img src="image/d9.jpg" alt="image catagory"></a>
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Door</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                          <a href="#Sofa"> <img src="image/s1.jpg" alt="image catagory"></a> 
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Sofa</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <a href="#Cabinate"><img src="image/c9.jpg" alt="image catagory"></a> 
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">CABINATE</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <a href="#Kitchen">  <img src="image/kk.png" alt="image catagory"></a>
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Kitchen</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <a href="#parquet"> <img src="image/l9.jpg" alt="image catagory"></a>
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Parquet</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                          <a href="#Bed">  <img src="image/bed4.jpg" alt="image catagory"></a>
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Bed</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                    <div class="product_catagory">
                        <div class="product_catagoryimg">
                            <a href="#Table"><img src="" alt="image catagory"></a>
                        </div>
                        <div class="product_catagory_desc">
                            <span class="product_cataType">Dining Table</span>
                            <span class="product_cataNum">8 items</span>
                        </div>
                    </div>
                </div>
                </div>
             
 <!-- Product cards and slideshow -->
  <section id="Bed">
               <div id="product_top">
                <div id="product_wrapper">
                    <div id="product_toptext">
                        <h1>Luxlife Product</h1>
                        <h2>Bed</h2>
                        <p>
                            Buy best deals beds online in Nepal. Create your dream bedroom with our collection of comfortable and stylish beds. From sleek platform beds to luxurious upholstered options, we offer a wide range of designs to suit your personal style. Shop now- Luxlife                        </p>
                    </div>
                    <div id="product_topimage">
                        <img src="image/bed7.jpg" alt="CABINATE" height="550px">
                    </div>
                </div>
            </div></section>
  <div class="product_section">
    <div class="product_section_top">
        <div class="selection_catacontain">
        <div class="section_catatype">  
        <span class="line"></span>
        <span class="section_catagory_text">Modular Bed</span>
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
                        <img src="image/bed10.jpg" alt="Bed">
                        <button class="heart_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                              </svg>
                        </button>
                        </div>
                        <div class="product_textcontain">
                            <h1>Single Lux b010</h1>
                            <p>40,000</p>
                            <button class="button1">Add To Cart</button>
                        </div>
                      </li>
                      <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/bed11.jpg" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Mordern Bed b011</h1>
                                <p>1,05,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/bed2.png" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Simple Bed b002</h1>
                                <p>45,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                   
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/bed9.png" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Sofa Lux Bed b009</h1>
                                <p>1,00,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/bed5.png" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Sofa Bed  b005</h1>
                                <p>95,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
                    <li class="product_cart">
                        <div class="product_imagecontain">
                            <img src="image/bed6.png" alt="Bed">
                            <button class="heart_button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                  </svg>
                            </button>
                            </div>
                            <div class="product_textcontain">
                                <h1>Modern Bed b006</h1>
                                <p>55,000</p>
                                <button class="button1">Add To Cart</button>
                            </div>
                    </li>
            </ul>
           </div>
         </div>


         <!-- smallBanner -->
          <section id="Sofa">
         <div id="product_top">
            <div id="product_wrapper">
                <div id="product_toptext">
                    <h1>Luxlife Product</h1>
                    <h2>Sofa</h2>
                    <p>
                        Upgrade your living room with our luxurious sofas! Crafted for comfort and style, our sofas come in a variety of designs to suit any decor. Perfect for relaxing or entertaining, they add a touch of elegance to your home. Discover the perfect blend of comfort and sophistication today! 🛋️✨                    </p>
                </div>
                <div id="product_topimage">
                    <img src="image/sb.jpg" alt="sofa" height="550px">
                </div>
            </div>
        </div></section>

         <div class="product_section">
            <div class="product_section_top">
                <div class="selection_catacontain">
                <div class="section_catatype">  
                <span class="line"></span>
                <span class="section_catagory_text">Modular Sofa</span>
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
                                <img src="image/s2.jpg" alt="Bed">
                                <button class="heart_button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                      </svg>
                                </button>
                                </div>
                                <div class="product_textcontain">
                                    <h1>Cream s001</h1>
                                    <p>45,000</p>
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
                                <img src="image/s6.jpg" alt="Bed">
                                <button class="heart_button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                      </svg>
                                </button>
                                </div>
                                <div class="product_textcontain">
                                    <h1>Banana s006</h1>
                                    <p>45,000</p>
                                    <button class="button1">Add To Cart</button>
                                </div>
                              </li>
                              <li class="product_cart">
                                <div class="product_imagecontain">
                                    <img src="image/s7.jpg" alt="Bed">
                                    <button class="heart_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>
                                    </button>
                                    </div>
                                    <div class="product_textcontain">
                                        <h1>Fancy s007</h1>
                                        <p>85,000</p>
                                        <button class="button1">Add To Cart</button>
                                    </div>
                            </li>
                            <li class="product_cart">
                                <div class="product_imagecontain">
                                    <img src="image/s11.jpg" alt="Bed">
                                    <button class="heart_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>
                                    </button>
                                    </div>
                                    <div class="product_textcontain">
                                        <h1>Fancy Blue s011</h1>
                                        <p>95,000</p>
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
                                    <img src="image/s10.jpg" alt="Bed">
                                    <button class="heart_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>
                                    </button>
                                    </div>
                                    <div class="product_textcontain">
                                        <h1>Royal s010</h1>
                                        <p>1,30,000</p>
                                        <button class="button1">Add To Cart</button>
                                    </div>
                            </li>
                            <li class="product_cart">
                                <div class="product_imagecontain">
                                    <img src="image/s3.jpg" alt="Bed">
                                    <button class="heart_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>
                                    </button>
                                    </div>
                                    <div class="product_textcontain">
                                        <h1>Mat Black s003</h1>
                                        <p>2,00,000</p>
                                        <button class="button1">Add To Cart</button>
                                    </div>
                            </li>
                    </ul>
                   </div>
                 </div>
                 <!-- //////////////////////////////// -->
                  <section id="Table">
                 <div id="product_top">
                    <div id="product_wrapper">
                        <div id="product_toptext">
                            <h1>Luxlife Product</h1>
                            <h2>Dining Table</h2>
                            <p>
                                Elevate your dining experience with our exquisite dining tables! Crafted from premium materials, our tables blend elegance and durability, perfect for family meals or entertaining guests. Available in various styles to match any decor, they add a touch of sophistication to your home. Discover your ideal dining table today! 🍽️✨                            </p>
                        </div>
                        <div id="product_topimage">
                            <img src="image/t9.jpg" alt="Table" height="550px" width="550px">
                        </div>
                    </div>
                </div></section>

                 <div class="product_section">
                    <div class="product_section_top">
                        <div class="selection_catacontain">
                        <div class="section_catatype">  
                        <span class="line"></span>
                        <span class="section_catagory_text">Modern Dining Table</span>
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
                                        <img src="image/t2.jpg" alt="Bed">
                                        <button class="heart_button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                              </svg>
                                        </button>
                                        </div>
                                        <div class="product_textcontain">
                                            <h1>Antique t002</h1>
                                            <p>95,000</p>
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
                                        <img src="image/t4.jpg" alt="Bed">
                                        <button class="heart_button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                              </svg>
                                        </button>
                                        </div>
                                        <div class="product_textcontain">
                                            <h1>Modulat t004</h1>
                                            <p>75,000</p>
                                            <button class="button1">Add To Cart</button>
                                        </div>
                                      </li>
                                      <li class="product_cart">
                                        <div class="product_imagecontain">
                                            <img src="image/t5.jpg" alt="Bed">
                                            <button class="heart_button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                  </svg>
                                            </button>
                                            </div>
                                            <div class="product_textcontain">
                                                <h1>Root t005</h1>
                                                <p>45,000</p>
                                                <button class="button1">Add To Cart</button>
                                            </div>
                                    </li>
                                    <li class="product_cart">
                                        <div class="product_imagecontain">
                                            <img src="image/t6.jpg" alt="Bed">
                                            <button class="heart_button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                  </svg>
                                            </button>
                                            </div>
                                            <div class="product_textcontain">
                                                <h1>Wooden mordern t006</h1>
                                                <p>65,000</p>
                                                <button class="button1">Add To Cart</button>
                                            </div>
                                    </li>
                                   
                                    <li class="product_cart">
                                        <div class="product_imagecontain">
                                            <img src="image/t7.jpg" alt="Bed">
                                            <button class="heart_button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                  </svg>
                                            </button>
                                            </div>
                                            <div class="product_textcontain">
                                                <h1>Royal t007</h1>
                                                <p>90,000</p>
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
                                            <img src="image/t1.jpg" alt="Bed">
                                            <button class="heart_button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                  </svg>
                                            </button>
                                            </div>
                                            <div class="product_textcontain">
                                                <h1>Normal t001</h1>
                                                <p>40,000</p>
                                                <button class="button1">Add To Cart</button>
                                            </div>
                                    </li>
                            </ul>
                           </div>
                         </div>
                            <!-- //////////////////////// -->
                             <section id="Cabinate">
                            <div id="product_top">
                                <div id="product_wrapper">
                                    <div id="product_toptext">
                                        <h1>Luxlife Product</h1>
                                        <h2>Cabinate</h2>
                                        <p>
                                            Transform your living space with our stylish and functional TV cabinets! Crafted from high-quality materials, our cabinets offer ample storage and a sleek design to complement any decor. Perfect for organizing your media essentials while enhancing your home’s aesthetic. Upgrade your entertainment area today with our premium TV cabinets! 📺✨                                    
                                    </div>
                                    <div id="product_topimage">
                                        <img src="image/c9.webp" alt="CABINATE" height="550px">
                                    </div>
                                </div>
                            </div></section>

                         <div class="product_section">
                            <div class="product_section_top">
                                <div class="selection_catacontain">
                                <div class="section_catatype">  
                                <span class="line"></span>
                                <span class="section_catagory_text">Modern TV Cabinate</span>
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
                                                <img src="image/c2.jpg" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>Modern c002</h1>
                                                    <p>1,40,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                        </li>
                        
                                        <li class="product_cart">
                                            <div class="product_imagecontain">
                                                <img src="image/c3.jpg" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>Brown c003</h1>
                                                    <p>1,00,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                              </li>
                                              <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/c4.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Pure Black c004</h1>
                                                        <p>1,50,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/c5.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Black Cabinate c005</h1>
                                                        <p>1,45,000</p>
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
                                                    <img src="image/c7.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Dark Cbi c007</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/c8.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Royal Black c008</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                    </ul>
                                   </div>
                                 </div>
                                  <!-- //////////////////////// -->
                                   <section id="Kitchen">
                            <div id="product_top">
                                <div id="product_wrapper">
                                    <div id="product_toptext">
                                        <h1>Luxlife Product</h1>
                                        <h2>Modular Kitchen</h2>
                                        <p>
                                            Transform your kitchen with our stylish and functional modular kitchen furniture! Our designs are flexible, ergonomic, and maximize storage space, making your kitchen both beautiful and practical. Enjoy the convenience of customizable cabinets and countertops that fit your unique needs and budget. Whether you’re renovating or building a new kitchen, our modular solutions offer the perfect blend of aesthetics and efficiency. Upgrade your kitchen today and experience the ultimate in modern living!                                                
                                    </div>
                                    <div id="product_topimage">
                                        <img src="image/km.jpg" alt="kitchen" height="550px">
                                    </div>
                                </div>
                            </div></section>

                         <div class="product_section">
                            <div class="product_section_top">
                                <div class="selection_catacontain">
                                <div class="section_catatype">  
                                <span class="line"></span>
                                <span class="section_catagory_text">Modular Kitchen</span>
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
                                                <img src="image/kkk (2).png" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>Modern k002</h1>
                                                    <p>1,40,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                        </li>
                        
                                        <li class="product_cart">
                                            <div class="product_imagecontain">
                                                <img src="image/kkk (3).png" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>Brown k003</h1>
                                                    <p>1,00,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                              </li>
                                              <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/kkk (4).png" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Pure Black k004</h1>
                                                        <p>1,50,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/kkk (5).png" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Black Cabinate k005</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                           
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/kkk (6).png" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Lux Cabinate k006</h1>
                                                        <p>1,25,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/kkk (7).png" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Dark Cbi k007</h1>
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
                                                        <h1>Royal Black k008</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                    </ul>
                                   </div>
                                 </div>
                                  <!-- //////////////////////// -->
                                   <section id="parquet">
                            <div id="product_top">
                                <div id="product_wrapper">
                                    <div id="product_toptext">
                                        <h1>Luxlife Product</h1>
                                        <h2>Parquet & Laminate Flooring</h2>
                                        <p>
                                            Elevate your home with our premium parquet and laminate flooring! Our stunning designs offer durability and elegance, perfect for any room. Enjoy the warmth of parquet or the sleek look of laminate, both crafted to withstand daily wear and tear. Transform your space with our high-quality flooring solutions that combine beauty and functionality. Upgrade your floors today                                                
                                    </div>
                                    <div id="product_topimage">
                                        <img src="image/l9.jpg" alt="parquet" height="550px">
                                    </div>
                                </div>
                            </div></section>

                         <div class="product_section">
                            <div class="product_section_top">
                                <div class="selection_catacontain">
                                <div class="section_catatype">  
                                <span class="line"></span>
                                <span class="section_catagory_text">Flooring Parquet</span>
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
                                                <img src="image/l1.jpg" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1> l001</h1>
                                                    <p>1,45,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                        </li>
                        
                                        <li class="product_cart">
                                            <div class="product_imagecontain">
                                                <img src="image/l2.jpg" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>l002</h1>
                                                    <p>1,40,000</p>
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
                                                    <img src="image/l4.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>l004</h1>
                                                        <p>1,50,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/l5.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>l005</h1>
                                                        <p>1,45,000</p>
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
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/l7.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>l007</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/l8.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Royal Black l008</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                    </ul>
                                   </div>
                                 </div>
                                  <!-- //////////////////////// -->
                                   <section id="Door">
                            <div id="product_top">
                                <div id="product_wrapper">
                                    <div id="product_toptext">
                                        <h1>Luxlife Product</h1>
                                        <h2>Door</h2>
                                        <p>
                                            Upgrade your home with our premium furniture doors! Crafted with precision and elegance, our doors offer unmatched durability and style. Choose from a variety of designs and finishes to perfectly complement your décor. Whether you prefer classic or contemporary, our doors provide the ideal blend of beauty and functionality. Transform your interiors with our exquisite furniture doors today!                                    </div>
                                    <div id="product_topimage">
                                        <img src="image/da.jpg" alt="Door" height="550px">
                                    </div>
                                </div>
                            </div></section>

                         <div class="product_section">
                            <div class="product_section_top">
                                <div class="selection_catacontain">
                                <div class="section_catatype">  
                                <span class="line"></span>
                                <span class="section_catagory_text">Modern Doors</span>
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
                                                <img src="image/d1.jpg" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>d001</h1>
                                                    <p>80,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                        </li>
                        
                                        <li class="product_cart">
                                            <div class="product_imagecontain">
                                                <img src="image/d2.jpg" >
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>d002</h1>
                                                    <p>80,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                        </li>
                        
                                        <li class="product_cart">
                                            <div class="product_imagecontain">
                                                <img src="image/d3.png" alt="Bed">
                                                <button class="heart_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                      </svg>
                                                </button>
                                                </div>
                                                <div class="product_textcontain">
                                                    <h1>d003</h1>
                                                    <p>40,000</p>
                                                    <button class="button1">Add To Cart</button>
                                                </div>
                                              </li>
                                              <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/d4.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>Pure Black d004</h1>
                                                        <p>1,00,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/d5.png" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1> d005</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                           
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/d6.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1> d006</h1>
                                                        <p>1,25,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/d7.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>d007</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                            <li class="product_cart">
                                                <div class="product_imagecontain">
                                                    <img src="image/d8.jpg" alt="Bed">
                                                    <button class="heart_button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                          </svg>
                                                    </button>
                                                    </div>
                                                    <div class="product_textcontain">
                                                        <h1>d008</h1>
                                                        <p>1,45,000</p>
                                                        <button class="button1">Add To Cart</button>
                                                    </div>
                                            </li>
                                    </ul>
                                   </div>
                                 </div>
         </div>
        </body>
       <?php include("footer.php");?>
       </html>
       
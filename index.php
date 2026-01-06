<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Responsive Dessert Website</title>
        <!-- Link To CSS -->
            <link rel="stylesheet" href="stylee.css">
        <!-- Link To BoxIcon -->
            <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <!-- Link To JS -->
         <script src="main.js"></script>
        <!-- Navbar -->
         <header>
            <a href="#" class="logo"><img src="cupcake1.2.png" alt="">Xuanavell</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#shop">Menu</a></li>
            <li><a href="#customer">Customer</a></li>
            <li><a href="#brands">Partners</a></li>
            <li><a href="#feedbackForm">Form</a></li>
            </ul>
        </header>
        <!-- Home -->
         <section class="home" id="home">
                <div class="home-text">
                    <span>Welcome To Our</span>
                    <h1>Dessert<br>Collection!!</h1>
                    <p>Hey, Our delicious dessert is waiting for you!!! <br>
                        We are always near to you with our fresh item!!</p>
                        <a href="#" class="btn">Our Menu</a>
                </div>
         </section>
        <!-- About Us -->
          <section class="about" id="about">
            <h1>Today Deal's</h1>

            <div class="about-container">
                <!-- Box 1 -->
                <div class="about-box">
                    <div class="box-img">
                        <img src="scc.jpg" alt="">
                    </div>
                    <h3>Strawberry Shortcake</h3>
                    <h2>$ 3.00</h2>
                </div>
                <!-- Box 2 -->
                 <div class="about-box">
                    <div class="box-img">
                        <img src="banana split.jpg" alt="">
                    </div>
                    <h3>Banana Split</h3>
                    <h2>$ 2.70</h2>
                </div>
                <!-- Box 3 -->
                 <div class="about-box">
                    <div class="box-img">
                        <img src="kukis.jpg" alt="">
                    </div>
                    <h3>Soft Cookies</h3>
                    <h2>$ 1.70</h2>
                </div>
                <!-- Box 4 -->
                 <div class="about-box">
                    <div class="box-img">
                        <img src="ice cream sundau.jpg" alt="">
                    </div>
                    <h3>Ice Cream Sundae</h3>
                    <h2>$ 2.00</h2>
                </div>
            </div>
          </section>
        <!-- Shop -->
        <section class="shop" id="shop">
            <div class="heading">
                <h2>Dessert Menu</h2>
                <p>Treat yourself to our delightful selection of desserts. Crafted with quality 
                    ingredients and balanced flavors, each bite is made to end your meal on a sweet note.</p>
            </div>
            <div class="shop-container">
                <!-- Menu 1 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="smt kotak new.jpg" alt="">
                    </div>
                    <h3>Strawberry Mascarpone Tart</h3>
                    <h2>$ 3.30</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Strawberry Mascarpone Tart</h3>
                        <p>A crisp buttery tart shell filled with smooth and creamy mascarpone cheese, topped with fresh strawberries. 
                            The balance between the rich creaminess and the light tangy sweetness of strawberries creates an elegant and refreshing dessert experience.</p>
                        <h4>Price: $ 3.30</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 2 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="panna cotta.jpg" alt="">
                    </div>
                    <h3>Panna Cotta</h3>
                    <h2>$ 2.50</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Panna Cotta</h3>
                        <p>A classic Italian dessert with a silky-smooth texture made from fresh cream and milk, gently set and served chilled. 
                            Finished with a fruit coulis or berry sauce for a light, creamy, and refreshing finish</p>
                        <h4>Price: $ 2.50</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 3 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="brown.jpg" alt="">
                    </div>
                    <h3>Brownies</h3>
                    <h2>$ 2.30</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Brownies</h3>
                        <p>Rich and fudgy chocolate brownies with a moist interior and deep cocoa flavor. 
                            Baked to perfection for a soft, dense texture that melts in the mouth, ideal as a comfort dessert or paired with ice cream.</p>
                        <h4>Price: $ 2.30</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 4 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="bbc.jpg" alt="">
                    </div>
                    <h3>Basque Burnt Cheesecake</h3>
                    <h2>$ 4.00</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Basque Burnt Cheesecake</h3>
                        <p>A Spanish-style cheesecake with a caramelized, slightly burnt exterior and a soft, creamy center. 
                            Bold in flavor with notes of caramel and vanilla, offering a rustic yet luxurious cheesecake experience.</p>
                        <h4>Price: $ 4.00</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 5 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="Soufflé pancake.jpg" alt="">
                    </div>
                    <h3>Soufflé pancake</h3>
                    <h2>$ 3.70</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Soufflé pancake</h3>
                        <p>Japanese-style fluffy pancakes with a cloud-like texture, light and airy inside. 
                            Served warm with butter, powdered sugar, and maple syrup or fruit sauce, making it visually appealing and irresistibly soft.</p>
                        <h4>Price: $ 3.70</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 6 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="pavlova.jpg" alt="">
                    </div>
                    <h3>Pavlova</h3>
                    <h2>$ 3.00</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Pavlova</h3>
                        <p>A delicate meringue dessert with a crisp outer shell and a soft, marshmallow-like 
                            center, topped with lightly sweetened whipped cream and fresh seasonal fruits. Light, elegant, and refreshing.</p>
                        <h4>Price: $ 3.00</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 7 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="cb.jpg" alt="">
                    </div>
                    <h3>Crème Brûlée</h3>
                    <h2>$ 5.50</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Crème Brûlée</h3>
                        <p>A luxurious French dessert featuring smooth vanilla custard topped with a thin layer of caramelized sugar. 
                            The contrast between the crackly caramel top and the creamy custard beneath creates a refined dining experience.</p>
                        <h4>Price: $ 5.50</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 8 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="Cinnamon Rolls with Heavy Cream.jpg" alt="">
                    </div>
                    <h3>Cinnamon Rolls</h3>
                    <h2>$ 3.50</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Cinnamon Rolls</h3>
                        <p>Soft and fluffy rolled dough filled with cinnamon sugar and butter, baked until golden 
                            and finished with a sweet vanilla glaze. Warm, comforting, and aromatic with every bite.</p>
                        <h4>Price: $ 3.50</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 9 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="opera cake.jpg" alt="">
                    </div>
                    <h3>Opera Cake</h3>
                    <h2>$ 6.00</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                    <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Opera Cake</h3>
                        <p>A classic French layered cake made with almond sponge soaked in coffee syrup, 
                            layered with coffee buttercream and rich chocolate ganache. Elegant, balanced, and perfect for coffee lovers.</p>
                        <h4>Price: $ 6.00</h4>
                        <button>Add to Cart</button>
                    </div> 
                </div>
                <!-- Menu 10 -->
                <div class="shop-box">
                    <div class="shop-img">
                        <img src="bannofee cup.jpg" alt="">
                    </div>
                    <h3>Bannofee Cup</h3>
                    <h2>$ 2.80</h2>
                    <i class='bx  bx-cart' style='color:#fd6492'></i> 
                    <!-- Detail Pop Up -->
                     <div class="product-popup">
                        <span class="close-popup">&times;</span>
                        <h3>Bannofee Cup</h3>
                        <p>A layered dessert cup combining fresh bananas, biscuit crumbs, smooth caramel sauce, 
                            and light whipped cream. Sweet, creamy, and indulgent with a modern, casual presentation.</p>
                        <h4>Price: $2.80</h4>
                        <button>Add to Cart</button>
                     </div>
                </div>
            </div>
        </section>
        <!-- Customer -->
         <section class="customer" id="customer">
            <div class="heading">
                <h2>Our Customer</h2>
                <p>Hear what our customers have to say. Their honest reviews reflect our passion for creating 
                    delicious desserts with quality ingredients, balanced sweetness, and unforgettable taste.</p>
            </div>
            <div class="customer-container">
                <!-- Hao -->
                <div class="box">
                    <img src="haoo.jpg" alt="">
                    <div class="stars">
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                    </div>
                    <p>One of the best desserts I’ve ever tried — perfectly crafted and unforgettable. Not too sweet and very well balanced. Perfect for dessert lovers. I would definitely order it again.</p>
                    <h2>Zhang Hao</h2>
                </div>
                <!-- Renjun -->
                <div class="box">
                    <img src="njun.jpg" alt="">
                    <div class="stars">
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                    </div>
                    <p>The dessert delivers a sophisticated taste, combining richness and subtle sweetness flawlessly. Beautifully presented and incredibly tasty. The flavors melt perfectly in the mouth.</p>
                    <h2>Huang Renjun</h2>
                </div>
                <!-- Yaxuan -->
                <div class="box">
                    <img src="yaxuan.jpeg" alt="">
                    <div class="stars">
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                        <i class='bx  bxs-star' style='color:#a5231c'></i> 
                    </div>
                    <p>This dessert is absolutely amazing! Rich, flavorful, and worth every bite. A delightful dessert with a perfect balance of sweetness and texture. Every bite was satisfying.</p>
                    <h2>Song Yaxuan</h2>
                </div>
            </div>
        <!-- Brands -->
         </section>
            <section class="brands" id="brands">
                <div class="heading">
                    
                    <h2>Our Brands Partners</h2>
                </div>
                <div class="brands-container">
                    <img src="Gofood.jpg" alt="">
                    <img src="GrabFood.jpg" alt="">
                    <img src="Shopeefood.jpg" alt="">
                </div>
             </section> 
        <!-- Contact Us -->
         <section class="feedback-section">
            <form class="feedback-form" id="feedbackForm">
                <h2>Share Your Sweet Thoughts</h2>
                <p class="desc">Help us create desserts you’ll love even more</p>
                <!-- Nama -->
                 <div class="input-group">
                    <input type="text" name="name" required>
                    <label>Your Name</label>
                 </div>
                 <!-- Email -->
                  <div class="input-group">
                    <input type="text" name="email" required>
                    <label>Email</label>
                  </div>
                <!--Fav Menu-->
                <div class="form-block">
                    <h4>Favorite Menu</h4>
                    <select name="favorite_menu" required>
                        <option value="" disabled selected>Select your favorite menu</option>
                        <option value="Strawberry Shortcake">Strawberry Shortcake</option>
                        <option value="Banana Split">Banana Split</option>
                        <option value="Soft Cookies">Soft Cookies</option>
                        <option value="Ice Cream Sundae">Ice Cream Sundae</option>                                                  
                        <option value="Strawberry Mascarpone Tart">Strawberry Mascarpone Tart</option>
                        <option value="Panna Cotta">Panna Cotta</option>
                        <option value="Brownies">Brownies</option>
                        <option value="Basque Burnt Cheesecake">Basque Burnt Cheesecake</option>
                        <option value="Soufflé pancake">Soufflé pancake</option>
                        <option value="Pavlova">Pavlova</option>
                        <option value="Crème Brûlée">Crème Brûlée</option>
                        <option value="Cinnamon Rolls">Cinnamon Rolls</option>
                        <option value="Opera Cake">Opera Cake</option>
                        <option value="Bannofee Cup">Bannofee Cup</option>              
                    </select>
                </div>
                <!--Satisfaction-->
                <div class="form-block">
                    <h4>Satisfaction Level</h4>
                    <p class="form-note" id="ratingText">Please choose your satisfaction ⭐</p>
                    <label><input type="radio" name="rate" value="5"> ⭐⭐⭐⭐⭐</label>
                    <label><input type="radio" name="rate" value="4"> ⭐⭐⭐⭐</label>
                    <label><input type="radio" name="rate" value="3"> ⭐⭐⭐</label>
                    <label><input type="radio" name="rate" value="2"> ⭐⭐</label>
                    <label><input type="radio" name="rate" value="1"> ⭐</label>
                </div>
                <!--Feedback Type-->
                <div class="form-block">
                    <h4>Feedback Type</h4>
                    <label><input type="radio" name="type" value="Suggestion" required> Suggestion</label>
                    <label><input type="radio" name="type" value="Question"> Question</label>
                    <label><input type="radio" name="type" value="Complaint"> Complaint</label>
                    <label><input type="radio" name="type" value="Praise"> Praise</label>
                </div>
                <!-- Suggestion -->
                <div class="input-group textarea">
                    <textarea name="suggestion" required></textarea>
                    <label>Your Suggestions</label>
                </div>
                <!-- Recommendation -->
                <div class="input-group textarea">
                    <textarea name="recommendation" required></textarea>
                    <label>New Menu Recommendation</label>
                </div>
                 <!-- Reply Preference -->
                <div class="form-block">
                    <h4>Would you like a reply?</h4>
                    <label><input type="radio" name="reply" value="Yes"required> Yes, via Email</label>
                    <label><input type="radio" name="reply" value="No"> No reply needed</label>
                    
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn-submit">
                    <span>Send Feedback</span>
                    <i>🍰</i>
                </button>
                <p class="form-note">
                    💌 Every message you send helps us bake happiness
                </p>
                
                <div class="success-msg" id="success-msg"></div>
            </form>
            <!-- SUCCESS POPUP -->
            <div class="popup-overlay" id="popupSuccess">
                <div class="popup-box">
                    <div class="popup-icon">🎉</div>
                    <h3>Feedback Sent!</h3>
                    <p>
                        Thank you for sharing your sweet thoughts 💕<br>
                        We’ll read it with love 🍓
                    </p>
                    <button class="popup-btn" id="closePopup">Okay 🍰</button>
                </div>
            </div>
            <!-- Output Popup -->
             <div class="popup-overlay" id="popupResult">
                <div class="popup-box">
                    <div class="popup-icon">📋</div>
                        <h3>Your Feedback</h3>
                        <!--Nama-->
                        <div class="result-list">
                            <div class="result-item">
                                <span class="label">Name</span>
                                <span class="value" id="outName"></span>
                            </div>
                        </div>
                        <!--Email-->
                        <div class="result-list">
                            <div class="result-item">
                                <span class="label">Email</span>
                                <span class="value" id="outEmail"></span>
                            </div>
                        </div>
                        <!--Fav Menu-->
                        <div class="result-list">
                            <div class="result-item">
                                <span class="label">Favorite Menu</span>
                                <span class="value" id="outFavorite"></span>
                            </div>
                        </div>
                        <!--Satisfaction-->
                        <div class="result-list">
                            <div class="result-item">
                                <span class="label">Rating</span>
                                <span class="value" id="outRating"></span>
                            </div>
                        </div>
                        <!--Feedback Type-->
                        <div class="result-list">
                            <div class="result-item">
                                <span class="label">Feedback Type</span>
                                <span class="value" id="outType"></span>
                            </div>
                        </div>
                        <!--Suggestion-->
                        <div class="result-list">
                            <div class="result-item">
                                <span class="label">Suggestions</span>
                                <span class="value" id="outSuggestion"></span>
                            </div>
                        </div>
                        <!--Recommendation-->
                        <div class="result-list">
                            <div class="result-item">
                                <span class="label">New Menu Recommendation</span>
                                <span class="value" id="outRecommendation"></span>
                            </div>
                        </div>
                        <button class="popup-btn" id="closeResult">Close 💗</button>
                </div>
             </div>
         </section>

        <!-- Copyright -->
         <div class="copyright">
            <p>&#169; JeYuKiv All Right Reserved.</p>
         </div>
        
    </body>
</html>
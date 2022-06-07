<?php 
//khỏi tạo session để lấy session đã lưu khi đăng nhập
    if (session_id() === '')
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food SimoN</title>
    <link rel="shortcut icon" type="image/png" href="./img/icon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<!--header section begin -->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>simon.</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
            <a href="#footer">contact</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="./product.php" target="_blank"><i class="fas fa-shopping-cart" id="cart-btn"></i></a>
            <!-- CODE kiểm tra nếu tồn tại session đã lưu khi đăng nhập thì hiện thong tin khách hàng còn nếu không thì hiện nút đăng nhập cho khách -->
            <?php
                    if (isset($_SESSION['username'])) {
                       echo "
                            <a href='xuly/logout.php'><i class='fas fa-sign-out-alt'></i></a>
                            <span style='font-size: 15px; color: #009688; margin-left: 10px;'>Xin chào <b><i>". $_SESSION['username']."</i></b></span>
                        ";
                    }else{
                        echo '<a href="./login.php"><i class="fas fa-user" id="login-btn"></i></a>';
                    }
                ?>
        </div>
        <!-- search form -->
        <form action="" class="search-form">
            <input type="search" placeholder="search ..." name="" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="./img/dish-1.png" alt="">
                <div class="content">
                    <h3>Hamburger</h3>
                    <span class="price">$4.50/-</span>
                    <span class="quantity">qty: 2</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="./img/home-img-1.png" alt="">
                <div class="content">
                    <h3>spicy noodles</h3>
                    <span class="price">$7.99/-</span>
                    <span class="quantity">qty: 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="./img/dish-3.png" alt="">
                <div class="content">
                    <h3>fried chicken</h3>
                    <span class="price">$12.99/-</span>
                    <span class="quantity">qty: 1</span>
                </div>
            </div>
            <div class="total">total: $28.69/-</div>
            <a href=""class="btn btn-span-s"><span class="span-btn-s"></span>check out</a>
        </div>
        <!-- <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" class="box" placeholder="your email">
            <input type="password" class="box" placeholder="your password">
            <p>forget your password <a href="#">click here</a> </p>
            <p>dont' have an acccout <a href="#">create now</a> </p>
            <input type="submit" value="login now" class="btn btn-span-s"><span class="span-btn-s"></span>
        </form> -->

    </header>
<!--header section end -->

<!-- home section -->
    <section class="home" id="home">
        <div class="home-slider swiper mySwiper">
            <div class="wrapper swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish </span>
                        <h3>spicy noodles</h3>
                        <p>Ghé đến nhà hàng, thực khách có thể  lựa chọn các món “best seller” như mì Ý gà ngô sốt kem tươi, mì Ý sốt cá ngừ, mì Ý hải sản</p>
                        <button href="#"class="btn btn-span"><span class="span-btn"></span>order now </button>
                    </div>
                    <div class="image">
                        <img src="./img/home-img-1.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish </span>
                        <h3>fried chicken</h3>
                        <p> miếng gà thơm lừng và thấm đẫm gia vị sẽ giúp các thành viên trong nhà thích mê, khen ngợi</p>
                        <button href="#"class="btn btn-span"><span class="span-btn"></span>order now </button>
                    </div>
                    <div class="image">
                        <img src="./img/home-img-2.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish </span>
                        <h3>hot pizza</h3>
                        <p>Các loại nguyên liệu như rau củ hay thịt, cá đều một tay SIMON nuôi trồng hoặc lấy của nông trại nên rất chất lượng.</p>
                        <button href="#"class="btn btn-span"><span class="span-btn"></span>order now </button>
                    </div>
                    <div class="image">
                        <img src="./img/home-img-3.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish </span>
                        <h3>Fried chicken</h3>
                        <p>Việc tẩm bột sẽ tạo thêm lớp phủ hoặc lớp vỏ giòn bên ngoài thịt gà trong khi vẫn giữ được nước trong thịt. Gà thịt được sử dụng phổ biến nhất</p>
                        <button href="#"class="btn btn-span"><span class="span-btn"></span>order now </button>
                    </div>
                    <div class="image">
                        <img src="./img/home5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
<!-- dishes section -->
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">our dishes </h3>
        <h1 class="heading">popular dishes</h1>
        <div class="box-container">
            
            <!-- <div class="box"  data-aos="zoom-in">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./img/dish-1.png" alt="">
                <h3>Hamburger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$17.79</span>
                <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>add to cart 🍔 </button>
            </div>
            
            <div class="box"  data-aos="zoom-in">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./img/dish-2.png" alt="">
                <h3>Gà Rán </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$13.99</span>
                <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>add to cart 🍗</button>
            </div>
            
            <div class="box"  data-aos="zoom-in">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./img/dish-3.png" alt="">
                <h3>Gà Quay</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$18.68</span>
                <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>add to cart 🍖</button>
            </div> -->
            <!-- 4 -->
            <div class="box"  data-aos="zoom-in">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./img/dish-4.png" alt="">
                <h3>Fizza</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$12.99</span>
                <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>add to cart 🍕</button>
            </div>
            <!-- 5 -->
            <div class="box"  data-aos="zoom-in">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./img/dish-5.png" alt="">
                <h3>Bánh Ngọt</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$9.99</span>
                <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>add to cart 🍩</button>
            </div>
            <!-- 6 -->
            <div class="box"  data-aos="zoom-in">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./img/dish-6.png" alt="">
                <h3>Đùi Gà </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$10.50</span>
                <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>add to cart 🍗</button>
            </div>
            <?php
                    require './connect.php';
                    $sql = "SELECT * FROM tbl_product";
                    $result = $conn->query($sql);

                    if (mysqli_num_rows($result) > 0) 
                    {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                            echo'<div class="box"  data-aos="zoom-in">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                            <img src="'.$row["Image"].'" alt="">
                            <h3>'.$row["Product_Name"].'</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h1>'.$row["Description"].'</h1>
                            <span>Giá: '.$row["Price"].'đ</span>
                            <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>add to cart 🍗</button>
                        </div>';
                        }
                    }
				?>
        </div>
        <!-- counter up js -->
        <div class="container-body">
            <div class="container">
                <div class="counter red" data-aos="flip-down">
                    <span class="counter-number">1299</span>
                    <h3>Tasty Food</h3>
                </div>
                <div class="counter purple" data-aos="flip-down">
                    <span class="counter-number">2350</span>
                    <h3>Delicious Food</h3>
                </div>
                <div class="counter blue" data-aos="flip-down">
                    <span class="counter-number">4590</span>
                    <h3>fried chicken</h3>
                </div>
                <div class="counter green" data-aos="flip-down">
                    <span class="counter-number">1820</span>
                    <h3>hot pizza</h3>
                </div>
            </div>
        </div>
    </section>
<!-- about section -->
    <section class="about" id="about">
        <h3 class="sub-heading">about us </h3>
        <h1 class="heading">why choose us</h1>
        <div class="row"  data-aos="zoom-in-up">
            <div class="image">
                <img src="./img/about-img.png" alt="">
            </div>
            <div class="content">
                <h3>best food in the country</h3>
                <p>We all know France for being a gourmet capital. Well, seems like it deserves this title. Croissant with a little cup of coffee in the morning – it’s a must do in France.

                    All the food best-sellers come from here: baguettes, macaroni, praline, Madeleines, pain au chocolat, raisin brioche bread… The list is enormous. Onion cake and fish soup sound weird, but French know how to make it delicious as well.thai</p>
                <p>Rice, vegetables and meats are the main ingredients of this cuisine. In addition to that you will also find a variety of all flavors in Korean dishes – sesame oil, soy sauce, garlic, ginger, pepper flakes and fermented red chilli paste.</p>
                <div class="icon-container">
                    <div class="icons" data-aos="flip-down"  data-aos-delay="50">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons" data-aos="flip-down"  data-aos-delay="200">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payment</span>
                    </div>
                    <div class="icons" data-aos="flip-down"  data-aos-delay="350">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more </button>
            </div>
        </div>
    </section>
<!-- menu section -->
    <section class="menu" id="menu">
        <h3 class="sub-heading">our menu </h3>
        <h1 class="heading">today's speciality</h1>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-1.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Pizza</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam impedit sed doloremque facilis!</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🍕</button>
                    <span class="price">$14.79</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-2.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Hamburger</h3>
                    <p> Loại bánh hamburger có topping là pho mát được mọi người gọi là hamburger pho mát. delicious food</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🍔</button>
                    <span class="price">$13.79</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-3.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam impedit sed doloremque facilis!</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🥟</button>
                    <span class="price">$12.79</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-4.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Bánh Ngọt</h3>
                    <p>Các thành phần bổ sung và hương liệu phổ biến bao gồm đồ khô, kẹo, hoặc trái cây tươi, các loại hạt, ca cao và chiết xuất như vani</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🍩</button>
                    <span class="price">$11.50</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Bánh Kem</h3>
                    <p>Bánh kem được làm đầy với chất bảo quản trái cây, các loại hạt hoặc các loại sốt tráng miệng (như kem bánh ngọt)</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🍩</button>
                    <span class="price">$10.59</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Kem Tươi</h3>
                    <p>bánh táo hoặc dâu shortcake, thường ăn kèm với whipped cream ,phục vụ với sữa lắc, cocktail trái cây, cà phê và kem sundaes</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🍦</button>
                    <span class="price">$5.99</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-7.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam impedit sed doloremque facilis!</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🥂</button>
                    <span class="price">$9.50</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-8.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Kem Dâu</h3>
                    <p>bao gồm kem dâu pho mát và kem dâu gợn sóng, đó là kem vani với một dải mứt dâu hoặc xi-rô</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🍓</button>
                    <span class="price">$11.99</span>
                </div>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="image">
                    <img src="./img/menu-9.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Nước Cam</h3>
                    <p>Nước cam có chứa flavonoid có lợi cho sức khỏe và là một nguồn cung cấp các chất chống oxy hóa hesperidin</p>
                    <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>learn more 🥤</button>
                    <span class="price">$8.79</span>
                </div>
            </div>
        </div>
    </section>
<!-- review section -->
    <section class="review" id="review">
        <h3 class="sub-heading">customer's review ❤</h3>
        <h1 class="heading">what they say</h1>

        <div class="swiper-container review-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./img/pic-1.png" alt="">
                        <div class="user-info">
                            <h3>Lê Quốc Danh</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>
                        Chất lượng dịch vụ tuyệt vời, thực đơn có rất nhiều sự lựa chọn cho cả món. Chất lượng món ăn và cách chế biến vô cùng sáng tạo. Thức uống sinh tố và nước ép thật tuyệt vời. Rất đáng giá.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./img/pic-2.png" alt="">
                        <div class="user-info">
                            <h3>Đào Trung Hiếu</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>  Nguyên liệu tươi mới và ngon lành với hương vị đặc trưng của nhà hàng. Đội ngũ nhân viên vô cùng thân thiện. Đặc biệt khuyến khích cho những người thích fastfood như chúng tôi. </p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./img/pic-3.png" alt="">
                        <div class="user-info">
                            <h3>Trịnh Xuân Trường</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Nhà hàng không chỉ cung cấp các món ăn sáng tạo và ngon miệng, mà còn có một không gian ấm cúng, đây là điểm đặc biệt mà bạn không thể tìm thấy ở bất cứ nơi nào khác.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./img/pic-4.png" alt="">
                        <div class="user-info">
                            <h3>Nguyễn Thị Thảo</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>Món ăn khá độc đáo và ngon miệng, với phong cách bài trí thẩm mỹ, điều đó sẽ khiến bạn sẽ ghi nhớ mãi khi dùng bữa tại đây. Rất khuyến khích cho tất cả lứa tuổi.Vote 5* cho chất lượng</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./img/pic-1.png" alt="">
                        <div class="user-info">
                            <h3>Nguyễn Văn Sức</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>Thực đơn rất đa dạng và món nào nghe cũng hấp dẫn, nên tôi đoán chắc rằng còn rất nhiều món ăn thú vị khác nữa .Nguyên liệu đặc biệt tươi mới và hương vị thì vô cùng tuyệt vời.</p>
                </div>

            </div>
        </div>

        <!--  couter up section -->
       
    </section>
<!-- order section -->
    <section class="order" id="order">
        <h3 class="sub-heading">order now </h3>
        <h1 class="heading">free and fast</h1>

        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name ">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="text" placeholder="enter your number ">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input type="text" placeholder="enter food name ">
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input type="test" placeholder="extra with food ">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>how musch</span>
                    <input type="text" placeholder="how many orders">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local">
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button href="#"class="btn btn-span-s"><span class="span-btn-s"></span>order now</button>
        </form>
        <div class="map">
            <div class="col-4">
                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.017336361219!2d105.7717246146785!3d21.07196979167829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2sHanoi%20University%20of%20Mining%20and%20Geology!5e0!3m2!1sen!2s!4v1631072337972!5m2!1sen!2s"
                height="300" style="border:none; margin: 0 auto;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
    </section>
    
                    
<!-- footer section -->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>locations <div class="underline"><span></span></div></h3>
                <a href="#">Hà Nội</a>
                <a href="#">Nam Định</a>
                <a href="#">Đà Nẵng</a>
                <a href="#">Huế</a>
                <a href="#">TP.Hồ Chí Minh</a>
            </div>

            <div class="box">
                <h3>quick links <div class="underline"><span></span></div></h3>
                <a href="#home">home</a>
                <a href="#dishes">dishes</a>
                <a href="#about">about</a>
                <a href="#menu">menu</a>
                <a href="#review">review</a>
                <a href="#order">order</a>
            </div>

            <div class="box">
                <h3>contact info <div class="underline"><span></span></div></h3>
                <a href="#">+84 343964879</a>
                <a href="#">+84 142564549</a>
                <a href="#" style="text-transform: lowercase;">bestfood@gmail.com</a>
                <a href="#" style="text-transform: lowercase;">lequocdanh@gmail.com</a>
                <a href="#">CoNhue ,HaNoi, vietnam </a>
            </div>

            <div class="box">
                <h3>follow us <div class="underline"><span></span></div></h3>
                <a href="#">facebook <i class="fab fa-facebook"></i></a>
                <a href="#">twitter <i class="fab fa-twitter"></i></a>
                <a href="#">instagram <i class="fab fa-instagram"></i></a>
                <a href="#">pinterest <i class="fab fa-pinterest"></i> </a>
            </div>
        </div>
        <div class="credit" id="credit">copyright @2021 by <span>LeQuocDanh</span></div>
    </section>
<!-- loader part -->
        <!-- <div class="loader-container">
            <img src="./img/loader.gif" alt="#">
        </div> -->



<!-- counter up js -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.counter-number').each(function(){
            $(this).prop('counter',0).animate({
                counter : $(this).text()
                },{
                    duration:50000,
                    easing: 'swing',
                    
                    step:function(now){
                        $(this).text(Math.ceil(now) + '+');
                    }
                }
            );
        });
    });
</script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
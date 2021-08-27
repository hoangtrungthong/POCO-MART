<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require '../../vendor/styles.php' ?>
    <link rel="stylesheet" href="../../css/header/style.css">
    <link rel="stylesheet" href="../../css/menu/styles.css">
    <link rel="stylesheet" href="../../css/footer/styles.css">
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/variable.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="../../css/techology/styles.css">
    <link rel="stylesheet" href="../../css/products/styles.css">
    <link rel="stylesheet" href="../../css/sub-phone/styles.css">
</head>
<body>
    <?php require "../home/headers/index.php" ?>
    <?php require "../home/menu/index.php" ?>
    <div class=" sub-phone container techology">
        <div>
            <a href="../../index.php">Trang Chủ</a>
            <a>/ Điện thoại - máy tính bảng</a>
        </div>
        <div class="sub_menu row justify-content-between">
            <div class="col-lg-3">
                <ul>
                    <li>danh mục sản phẩm</li>
                    <li class="apple"><a href=""><i class="fab fa-apple apples"></i> apple</a></li>
                    <li class="samsung"><a href=""><img src="../../images/samsung.png" alt=""> samsung</a></li>
                    <li class="xiaomi"><a href=""><img src="../../images/xiaomi.png" alt=""> xiaomi</a></li>
                </ul>
                <div class="smart">
                    <p>Lọc thông minh</p>
                    <p>tìm sản phẩm mong muốn nhanh hơn</p>
                </div>
                <div>   
                    <ul>
                        <li>Thương hiệu</li>
                        <li>
                            <input type="checkbox" id="app">
                            <label for="app">
                                apple
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="sam">
                            <label for="sam">
                                samsung
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="xiaomi">
                            <label for="xiaomi">
                                xiaomi
                            </label>
                        </li>
                    </ul>
                    <ul>
                        <li>Khoảng giá</li>
                        <li>
                            <input type="checkbox" id="a1">
                            <label for="a1">
                                dưới 1 triệu
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="a2">
                            <label for="a2">
                                từ 1 đến 2 triệu
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="a3">
                            <label for="a3">
                                từ 2 đến 4 triệu
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="a4">
                            <label for="a4">
                                từ 4 đến 6 triệu
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="a5">
                            <label for="a5">
                                từ 6 đến 8 triệu
                            </label>
                        </li>
                        <li>
                            <input type="checkbox" id="a6">
                            <label for="a6">
                                từ 8 đến 10 triệu
                            </label>
                        </li>
                    </ul>
                    <ul>
                        <li>Loại</li>
                        <li>
                            <input type="checkbox" id="a7">
                            <label for="a7">
                                smartphone
                            </label>
                        </li>
                    </ul>
                </div>     
            </div>
            <div class="col-lg-8">
                <div>
                    <img src="//bizweb.dktcdn.net/100/429/689/files/si-u-sale-12-12-1200x300-1.png?v=1623552404056" alt="">
                </div>
                <ul class="filter list-group">
                    <li class="list-group-item"><a href="">tên từ a-z</a></li>
                    <li class="list-group-item"><a href="">tên từ z-a</a></li>
                    <li class="list-group-item"><a href="">giá thấp đến cao</a></li>
                    <li class="list-group-item"><a href="">giá cao xuống thấp</a></li>
                    <li class="list-group-item"><a href="">mới nhất</a></li>
                    <li class="list-group-item"><a href="">cũ nhất</a></li>
                </ul>
                <div class="row justify-content-between">
                    <div class="position-relative"> 
                        <div>
                            <a href="">
                                <img src="https://bizweb.dktcdn.net/100/429/689/products/dien-thoai-samsung-galaxy-s21-ultra-5g-256g-g998b-bac-h0l175-b6ac0e17-afc8-42a9-bb4f-aecaf81ad7e2.jpg?v=1623565400000" alt="">
                            </a>
                            <a class="ip" href="">samsung galaxy note 21</a>
                        </div>
                        <div class="pric">
                            <p>29.000.000đ</p>
                            <del>30.500.000đ</del>
                        </div>
                        <a id="cart" href="">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <div>
                            <span class="sale">-5%</span>                                       
                            <div class="ico ic">
                                <a href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a href="">
                                    <i class="fas fa-signal"></i>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <div class="position-relative">
                        <div>
                            <div>
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588000" alt="">
                                </a>
                                <a class="ip" href="">iphone 12 mini new</a>
                            </div>
                            <div  class="pric">
                                <p>26.000.000đ</p>
                                <del></del>
                            </div>
                            <a id="cart" href="">
                                <i  class="fab fa-hubspot"></i>
                            </a>
                        </div>
                        <div>
                        <span class="sale d-none">-5%</span> 
                        <div class="ico">
                            <a href="">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="">
                                <i class="fas fa-signal"></i>
                            </a>
                        </div>
                        </div>    
                    </div>
                    <div class="position-relative">
                        <div>
                            <div>
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/429/689/products/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.jpg?v=1623565125000" alt="">
                                </a>
                                <a class="ip" href="">iphone 12 promax like new</a>
                            </div>
                            <div class="pric">
                                <p>22.000.000đ</p>
                                <del>32.000.000đ</del>
                            </div>
                            <a id="cart" href="">
                                <i  class="fab fa-hubspot"></i>
                            </a>
                        </div>
                        <span class="sale">-31%</span> 
                        <div class="ico">
                            <a href="">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="">
                                <i class="fas fa-signal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div>
                            <div>
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/429/689/products/iphone-xr-mau-vang-didongviet-1-1-2.jpg?v=1623561749000" alt="">
                                </a>
                                <a class="ip" href="">iphone xr - hàng chính hãng vn/a</a>
                            </div>
                            <div class="pric">
                                <p>8.000.000đ</p>
                                <del>10.000.000đ</del>
                            </div>
                            <a id="cart" href="">
                                <i  class="fab fa-hubspot"></i>
                            </a>
                        </div>
                        <span class="sale">-20%</span> 
                        <div class="ico">
                            <a href="">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="">
                                <i class="fas fa-signal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div>
                            <div>
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/100/429/689/products/xiaomi-mi-10t-pro.jpg?v=1623565104000" alt="">
                                </a>
                                <a class="ip" href="">xiaomi mi10t pro 5g</a>
                            </div>
                            <div class="pric">
                                <p>10.900.000đ</p>
                                <del>12.000.000đ</del>
                            </div>
                            <a id="cart" href="">
                                <i  class="fab fa-hubspot"></i>
                            </a>
                        </div>
                        <span class="sale">-30%</span> 
                        <div class="ico">
                            <a href="">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="">
                                <i class="fas fa-signal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div>
                            <a href="">
                                <img src="https://bizweb.dktcdn.net/100/429/689/products/apple-iphone-12-mini-5.png?v=1623565259000" alt="">
                            </a>
                            <a class="ip" href="">iphone 12 hàng quốc tế</a>
                        </div>
                        <div class="pric">
                            <p>26.000.000đ</p>
                            <del>32.000.000đ</del>
                        </div>
                        <a id="cart" href="">
                            <i  class="fab fa-hubspot"></i>
                        </a>
                        <span class="sale">-19%</span> 
                        <div class="ico">
                            <a href="">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="">
                                <i class="fas fa-signal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "../home/footer/index.php" ?>
</body>
</html>

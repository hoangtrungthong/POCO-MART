<div class="products">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <div class="nav-link active" id="phone-tab" data-bs-toggle="tab" data-bs-target="#nav-phone" type="button" role="tab" aria-controls="home" aria-selected="true">
                <h2>điện thoại</h2>
                <p>giảm ngay 1 triệu khi mua olnine</p>
            </div>
            </li>
            <li class="nav-item" role="presentation">
            <div class="nav-link" id="fashion-tab" data-bs-toggle="tab" data-bs-target="#nav-fashion" type="button" role="tab" aria-controls="profile" aria-selected="false">
                <h2>thời trang</h2>
                <p>giảm giá cực lớn tới 70%</p> 
            </div>
            </li>
            <li class="nav-item" role="presentation">
            <div class="nav-link" id="housewares-tab" data-bs-toggle="tab" data-bs-target="#nav-housewares" type="button" role="tab" aria-controls="contact" aria-selected="false">
                <h2>gia dụng</h2>
                <p>siêu ưu đãi lên tới 30%</p>
            </div>
        </li>
    </ul>
    <div class="tab-content" id="nav-tabContent" >
        <div class="tab-pane fade show active" id="nav-phone" role="tabpanel" aria-labelledby="nav-home-tab">
            <?php require 'phone/index.php' ?>         
        </div>
        <div class="tab-pane fade" id="nav-fashion" role="tabpanel" aria-labelledby="nav-profile-tab">
            <?php require 'fashion/index.php' ?>
        </div>
        <div class="tab-pane fade" id="nav-housewares" role="tabpanel" aria-labelledby="nav-contact-tab">
            <?php require 'houseware/index.php' ?> 
        </div>
    </div>
</div>

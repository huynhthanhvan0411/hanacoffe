<?php view('shared.site.header', [
    'title' => 'About'
]); ?>
<style>
.banner {
    background-image: url("./public/uploads/<?= $banners[0]['image'] ?>");
}
</style>
<!-- Start of banner -->
<section class="banner">
    <div class="container-fluid banner-title">
        <div class="row">
            <div class="col-md-12">
                <h2 id="motto">About us</h2>
                <span>Home</span> &nbsp;<span>\\</span> &nbsp;<span>About</span>
            </div>

        </div>
    </div>

    <div class="container-fluid banner-share">
        <div class="row">
            <span>Share this page:</span>
            <div class="banner-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

    </div>

</section>
<!-- End of banner -->


<!-- Start of history -->
<section class="history">
    <div class="container-fluid content-block">

        <ul>
            <li>
                <div class="cupcake-img">
                    <img src="./public/site/img/about/table.jpg" alt="">
                </div>
            </li>
            <li>
                <div class="intro">
                    <div class="content-title-block">
                        <h2 class="block-title">Hana Coffe perfect one love</h2>
                        <p class="block-motto"><span>HISTORY OF THE STORE</span></p>
                    </div>

                    <div class="content">
                        <p>With 25 years of work consectetur adipisicing elit, sed do eius ex veniam nulla optio
                            praesentium
                            deleniti possimus porro aperiam tempora. Quaerat veniam quibusdam ad aliquam facere? Quam
                            adipisci quas error ut </p>
                        <p>Non non ad aliquip duis ullamco. Officia dolor proident excepteur pariatur enim velit
                            adipisicing
                            tempor nulla excepteur quis ad laboris incididunt. Do proident quis laborum non voluptate.
                            Veniam occaecat officia et reprehenderit aliquip occaecat.</p>
                        <p>Cillum amet adipisicing ullamco ullamco nulla esse labore deserunt ullamco nostrud fugiat do
                            cillum. Elit qui officia in officia qui et consequat. In culpa incididunt enim sit magna
                            anim
                            consequat sint. Amet eu reprehenderit non laborum mollit ea adipisicing minim non
                            reprehenderit
                            est in.</p>

                    </div>

                    <div class="signature">
                        <img style=" width: 150px;" src="./public/site/img/about/singVan.jpg" alt="">
                        <div>
                            <h6>Thanh Van</h6> <span> - Store owner</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End of history -->


<!-- Start of why choose us -->
<section class="why-choose-us p-50">
    <div class="container-fluid section-main">
        <div class="title-block">
            <p class="block-title">Why choose us</p>
            <p class="block-motto"><span>BEST PRODUCTS</span></p>
        </div>

        <div class="container content-block">
            <ul id="why-list">
                <li class="list-item">
                    <ul>
                        <li>
                            <div class="why-block left">
                                <div class="circle">
                                    <img src="./public/site/img/about/healthy.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Good for health</h5>
                                    <p>Made with care for your health</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-block left">
                                <div class="circle">
                                    <img src="./public/site/img/home/whychooseus/organic.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>100% organic</h5>
                                    <p>Available Quality Foods</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </li>


                <li class="list-item">
                    <img src="./public/site/img/home/images/shopbuy1.png" style="width: 250px; height: 250px;" alt="">
                </li>
                <li class="list-item">
                    <ul>
                        <li>
                            <div class="why-block right">
                                <div class="circle">
                                    <img src="./public/site/img/home/whychooseus/free-delivery.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Free shipping</h5>
                                    <p>All orders over $100</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-block right">
                                <div class="circle">
                                    <img src="./public/site/img/about/quality.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>High-quality products</h5>
                                    <p>Deliver incredible standards</p>
                                </div>
                            </div>
                        </li>
                    </ul>



                </li>
            </ul>
        </div>
    </div>
</section>

<!-- End of why choose us -->

<!-- Start of Meet our chef -->
<section class="meet p-50">
    <div class="container-fluid section-main">
        <div class="title-block">
            <p class="block-title">Meet our member</p>
            <p class="block-motto"><span>THE BEST Team 6 - 71DCTT21</span></p>
        </div>

        <div class="container-fluid" style="margin-top: 40px;">
            <div class="content-block">
                <ul id="chef-list">


                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/huy.jpg" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Nguyen Quang Huy</h5>
                                <p>Desinger Interface</p>
                            </div>
                            <div class="chef-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/khoa.jpg" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Khuc Minh Khoa</h5>
                                <p>Development App</p>
                            </div>
                            <div class="chef-social">
                                <a href="#$_COOKIE"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/tuan.jpg" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Pham Quoc Tuan</h5>
                                <p>Super eat is my life.</p>
                            </div>
                            <div class="chef-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>

                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/van.jpg" alt=""
                                    style="background: lightblue; border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Huynh Thanh Van</h5>
                                <p>Leader beautiful girl</p>
                            </div>
                            <div class="chef-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
<!-- End of Meet our chef -->


<section class="bottom-banner">
    <img src="./public/site/img/about/index1.jpg" alt="">
</section>

<?php view('shared.site.footer'); ?>
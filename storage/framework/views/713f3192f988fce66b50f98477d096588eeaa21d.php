<?php $__env->startSection('content'); ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="<?php echo e(asset('../assets/image/image_slider.jpg')); ?>" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="<?php echo e(asset('../assets/image/image_slider1.jpg')); ?>" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="<?php echo e(asset('../assets/image/image_slider2.jpg')); ?>" alt="New York" style="width:100%;">
            </div>

            <div class="item">
                <img src="<?php echo e(asset('../assets/image/image_slider3.jpg')); ?>" alt="New York" style="width:100%;">
            </div>

        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<div class="h-100 home-content">
    <div class="line"></div>
    <div class="main-content">
        <div class="quick-search">
            <div class="quick-search-ball"></div>
            <div class="quick-search-text">Quick Searches</div>
        </div>
        <div class="food-type-wrapper col-md-12">
            <div class="food-type-content col-md-2">
                <a href="">
                    <div class="food-type-image-wrapper">
                        <img class="food-type-image" src="<?php echo e(asset('/assets/icon/breakfast.png')); ?>" width="70" alt="">
                    </div>
                    <div class="food-type-text">Breakfast</div>
                </a>
            </div>
            <div class="food-type-content col-md-2">
                <a href="">
                    <div class="food-type-image-wrapper">
                        <img class="food-type-image" src="<?php echo e(asset('/assets/icon/lunch.png')); ?>" width="70" alt="">
                    </div>
                    <div class="food-type-text">Lunch</div>
                </a>
            </div>
            <div class="food-type-content col-md-2">
                <a href="">
                    <div class="food-type-image-wrapper">
                        <img class="food-type-image" src="<?php echo e(asset('/assets/icon/dinner.png')); ?>" width="70" alt="">
                    </div>
                    <div class="food-type-text">Dinner</div>
                </a>
            </div>
            <div class="food-type-content col-md-2">
                <a href="">
                    <div class="food-type-image-wrapper">
                        <img class="food-type-image" src="<?php echo e(asset('/assets/icon/delivery.png')); ?>" width="70" alt="">
                    </div>
                    <div class="food-type-text">Delivery</div>
                </a>
            </div>
            <div class="food-type-content col-md-2">
                <a href="">
                    <div class="food-type-image-wrapper">
                        <img class="food-type-image" src="<?php echo e(asset('/assets/icon/cafes.png')); ?>" width="70" alt="">
                    </div>
                    <div class="food-type-text">Cafes</div>
                </a>
            </div>
            <div class="food-type-content col-md-2">
                <a href="">
                    <div class="food-type-image-wrapper">
                        <img class="food-type-image" src="<?php echo e(asset('/assets/icon/dessert.png')); ?>" width="70" alt="">
                    </div>
                    <div class="food-type-text">Dessert</div>
                </a>
            </div>
        </div>
        <div class="around">
            <div class="around-ball"></div>
            <div class="around-text">Around Binus Syahdan</div>
        </div>
        <div class="food-filter-wrapper">
            <div class="food-wrapper col-md-9">
                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/waroeng_western.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">WAROENG WESTERN</div>
                        <div class="restaurant-address-text">Jalan Syahdan No. 36C Kemanggisan</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>
                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/warung_steak_76.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">WARUNG STEAK 76</div>
                        <div class="restaurant-address-text">Jl. Kh. Syahdan No. 13 A Kemanggisan – Jakarta Barat</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/ayam_gepuk.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">AYAM GEPUK</div>
                        <div class="restaurant-address-text">Jl. KH. Syahdan Palmerah, Jakarta</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>
            </div>

            <div class="filter-wrapper col-md-2">
                <div class="filter-title">Filters</div>
                <div class="sort-by-wrapper">
                    <div>Sort by</div>
                    <div>
                        <span class="sort-by-type">Popularity</span>
                        <span>- high to low</span>
                    </div>
                    <div>
                        <span class="sort-by-type">Rating</span>
                        <span>- high to low</span>
                    </div>
                    <div>
                        <span class="sort-by-type">Cost</span>
                        <span>- high to low</span>
                    </div>
                    <div>
                        <span class="sort-by-type">Recently add</span>
                        <span>- high to low</span>
                    </div>
                </div>

                <div class="facilities-wrapper">
                    <div>Facilities</div>
                    <div>
                        <div class="facilities-circle"></div>
                        <span class="sort-by-type">Wifi</span>
                    </div>
                    <div>
                        <div class="facilities-circle"></div>
                        <span class="sort-by-type">Air Conditioner</span>
                    </div>
                    <div>
                        <div class="facilities-circle"></div>
                        <span class="sort-by-type">Pure Vegetarian</span>
                    </div>
                    <div>
                        <div class="facilities-circle"></div>
                        <span class="sort-by-type">Outdoor Seating</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="around-anggrek">
            <div class="around-anggrek-ball"></div>
            <div class="around-anggrek-text">Around Binus Anggrek</div>
        </div>

        <div class="food-filter-wrapper">
            <div class="food-wrapper col-md-9">
                <div class="restaurant-wrapper" id="anggrek">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/ayam_geprek.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">AYAM GEPREK</div>
                        <div class="restaurant-address-text">Jalan Anggrek Cakra No.1A, Kebon Jeruk, RT.4/RW.6, Sukabumi Utara, Kb. Jeruk, Jakarta, Daerah Khusus Ibukota Jakarta 11530</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>
                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/berseri.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">AYAM BERSERI</div>
                        <div class="restaurant-address-text">Jalan Raya Kebon jeruk Kompleks Mandala no 5 kios D Jakarta Barat 11530(Sebelah  Kampus Binus Angrrek)</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/ciz_n_chic.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">CIZ N CHIC</div>
                        <div class="restaurant-address-text">Jl. U No.33(Kemanggisan)</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/distrik69.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">DISTRIK 69</div>
                        <div class="restaurant-address-text">Jl. Kb. Jeruk Raya No.51</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/fish_bite.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">FISHBITE</div>
                        <div class="restaurant-address-text">Jl. Kebon Jeruk Raya No. 8A, Kemanggisan, Jakarta</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/milano_express.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">MILANO EXPRESS</div>
                        <div class="restaurant-address-text">Jl. Kebon Jeruk Raya (Samping Pintu Keluar Binus Anggrek, Kebon Jeruk, Jakarta Barat)</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/robak.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">ROBAK</div>
                        <div class="restaurant-address-text">Mandala Residence, Mandala 4 No.4</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/saung_sambal.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">Saung Sambal</div>
                        <div class="restaurant-address-text">Jl. Kebun Jeruk Raya No. 34 A, Palmerah, Jakarta</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/mie_aceh.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">Waroeng Mie Aceh Bang Iwan</div>
                        <div class="restaurant-address-text">Jl. Rawa belong raya no76</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>

                <div class="restaurant-wrapper">
                    <div class="restaurant-image">
                        <img src="<?php echo e(asset('../assets/image/whatsup.jpg')); ?>" width="200" height="150" alt="">
                    </div>
                    <div class="restauran-info-wrapper">
                        <div class="restaurant-type-text">Breakfast, Lunch, Dinner, Delivery</div>
                        <div class="restaurant-name-text">WHATSUP</div>
                        <div class="restaurant-address-text">Jl. Kebon Jeruk Raya No. 9, Kebon Jeruk, Jakarta Barat</div>
                        <div class="restaurant rating-image">
                            <img src="<?php echo e(asset('../assets/image/4_5_star.png')); ?>" width="180" alt="">
                        </div>
                    </div>
                    <div class="restaurant-medal">
                        <img src="<?php echo e(asset('../assets/image/medal.png')); ?>" width="50" alt="">
                    </div>
                    <div class="view-review-button">
                        View Review
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
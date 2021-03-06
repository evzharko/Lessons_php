<?php
/**
 * Created by PhpStorm.
 * User: e.zharko
 * Date: 20.07.18
 * Time: 17:45
 */
?>

<section class="site-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel owl-theme home-slider">
                    <div>
                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg"
                           style="background-image: url('images/img_1.jpg'); ">
                            <div class="text half-to-full">
                                <div class="post-meta">
                                    <span class="category">Lifestyle</span>
                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta
                                    eaque ipsa laudantium!</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg"
                           style="background-image: url('images/img_2.jpg'); ">
                            <div class="text half-to-full">
                                <div class="post-meta">
                                    <span class="category">Lifestyle</span>
                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta
                                    eaque ipsa laudantium!</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg"
                           style="background-image: url('images/img_3.jpg'); ">
                            <div class="text half-to-full">
                                <div class="post-meta">
                                    <span class="category">Lifestyle</span>
                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta
                                    eaque ipsa laudantium!</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- TOP New  -->
        <div class="row">
            <?php foreach (Top_Posts() as $post): ?>
                <div class="col-md-6 col-lg-4">
                    <a href="blog-single.html" class="a-block d-flex align-items-center height-md"
                       style="background-image: url('<?= $post['images']; ?>'); ">
                        <div class="text">
                            <div class="post-meta">
                                <span class="category">Lifestyle</span>
                                <span class="mr-2"><?= date('M d, Y', strtotime($post['data_create'])  ) ; ?> </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span><?= $post{'view'}; ?></span>
                            </div>
                            <h3><?= $post['title']; ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End TOP New  March 15, 2018-->

</section>
<!-- END section -->

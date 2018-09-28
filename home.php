<?php
/**
 * Template Name: Home
 */


get_header(); ?>

<div class="tmp-home">
    <div class="container-fluid">
        <div class="bxslider">
            <div class="carousel">
                <?php
                $rows = get_field('slider');
                if($rows)
                {
                    foreach($rows as $row)
                    {
                        ?>
                        <div class="slider-item">
                            <div class="content">
                                <h2><?php echo $row['title']?></h2>
                                <?php echo $row['content']?>
                                <button class="button">Buy Now</button>
                            </div>
                            <?php echo wp_get_attachment_image($row['image'], 'full');?>
                        </div>

                        <?php
                    }

                }

                ?>
            </div>
        </div>
    </div>

    <div class="container">


        <div class="row arrow">
            <h2>Popular Products</h2>
        </div>
        <div class="row">
            <div class="popular">
                <?php
                $product = get_field('product-popular');
                if ($product) {
                    foreach ($product as $product) {
                        ?>
                        <div class="product-column">
                            <div class="product">
                                <div class="product-image">
                                    <?php echo wp_get_attachment_image($product['product-image'], 'full'); ?>
                                </div>
                                <div class="product-name">
                                    <p style="text-align: center;"><?php echo $product['name'] ?></p>
                                </div>
                                <div class="product-des">
                                    <?php echo $product['des'] ?>
                                </div>
                                <div class="product-price">
                                    <?php echo $product['price'] ?>
                                </div>
                            </div>
                        </div>
                        <?php

                    }
                }
                ?>

            </div>

        </div>
        <div class="row arrow">
            <h2>Featured Products</h2>
        </div>
        <div class="row">
            <div class="featured">
                <?php
                $featured = get_field('product-featured');
                if ($featured)
                {
                    foreach ($featured as $featured)
                    {
                        ?>
                        <div class="product-column">
                            <div class="product">
                                <div class="product-image-f" style="background-image: url('<?php echo wp_get_attachment_url($featured['product-image'], 'full');?>');">
                                </div>
                                <div class="product-name-f">
                                    <?php echo $featured['name']?>
                                </div>
                                <div class="product-des-f">
                                    <?php echo $featured['des']?>
                                </div>
                                <div class="product-price-f">
                                    <?php echo $featured['price']?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fluid-deals">
        <div class="sale" style="background-image: url('<?php echo wp_get_attachment_url(get_field('background-deals'), 'full');?>')">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="khunggio">
                            <h2>Deals of the Day</h2>
                            <h4>08 : 32 : 29</h4>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="deals">
                            <?php
                            $deals = get_field('deals');
                            if ($deals)
                            {
                                foreach ($deals as $deals)
                                {
                                    ?>
                                    <div class="deals-column">
                                        <div class="product">
                                            <div class="product-image-f" style="background-image: url('<?php echo wp_get_attachment_url($deals['product-image'], 'full');?>');">
                                            </div>
                                            <div class="product-name-f">
                                                <?php echo $deals['name']?>
                                            </div>
                                            <div class="product-des-f">
                                                <?php echo $deals['des']?>
                                            </div>
                                            <div class="product-price-f">
                                                <?php echo $deals['price']?>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        $banner = get_field('banner-footer');
        if ($deals)
        {
            foreach ($banner as $banner)
            {
                ?>
                <div class="col-md-4 banner">
                    <div class="imagebanner">
                        <?php echo wp_get_attachment_image($banner['image'], 'full'); ?>
                    </div>
                </div>

                <?php
            }
        }
        ?>

    </div>
    <div id="circle"></div>
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-2">
                <?php echo wp_get_attachment_image(get_field('logo'), 'full'); ?>
                <p class="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="col-md-2">
                <h5 class="text-uppercase">POLICY INFO</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="#!">Terms of Sale
                        </a>
                    </li>
                    <li>
                        <a href="#!">Terms of Use
                        </a>
                    </li>
                    <li>
                        <a href="#!">Report Abuse & Takedown Policy
                        </a>
                    </li>
                    <li>
                        <a href="#!">CSR Policy
                        </a>
                    </li>

                </ul>

            </div>
            <div class="col-md-2">
                <h5 class="text-uppercase">COMPANY</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">About Us
                        </a>
                    </li>
                    <li>
                        <a href="#!">About Us
                        </a>
                    </li>
                    <li>
                        <a href="#!">Sitemap
                        </a>
                    </li>
                    <li>
                        <a href="#!">FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#!">Contact Us
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="text-uppercase">BUSINESS</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Sell on Shopio
                        </a>
                    </li>
                    <li>
                        <a href="#!">Advertise on Shopio
                        </a>
                    </li>
                    <li>
                        <a href="#!">Media Enquiries
                        </a>
                    </li>
                    <li>
                        <a href="#!">Be an Affiliate
                        </a>
                    </li>
                    <li>
                        <a href="#!">Deal of the Day
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-uppercase">SUBSCRIBE</h5>
                <input class="txtemail" type="text" placeholder="Your email Address">
                <button class="submit">Submit</button>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <p style="text-align: center;">Copyright 2016, All Rights Reserved</p>
    </div>
</div>
<div id="circle"></div><?php get_footer(); ?>

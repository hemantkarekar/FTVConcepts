<!DOCTYPE html>
<html lang="en">
<?php
$title = "Concepts | FTV Concepts";
$meta["title"] = "";
$meta["description"] = "";
include "includes/_head.php";
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="/assets/css/style.css">
<title><?php echo $title; ?></title>
</head>

<body>
    <?php include "includes/_nav.php"; ?>
    <main class="concepts">
        <!-- <section class="branding">
            <div class="logo-long">
                <img src="assets/media/images/logo-long-white.webp" alt="">
            </div>
        </section> -->
        <section class="introduction">
            <div class="video-wrap">
                <div class="video-mask">
                    <video src="./assets/media/videos/intro-2.webm" autoplay loop muted preload=""></video>
                </div>
                <div class="video-overlay">
                    <div class="content-wrap">
                        <div class="text-wrap">
                            <div class="title">
                                <h1>Introduction</h1>
                            </div>
                            <div class="desc">
                                <p>
                                    Welcome to a realm where fashion, glamour and an opulent way of life embellishes the
                                    world. FashionTV has nurtured fashion into a global phenomenon. A space that inspires
                                    and adorns fashion enthusiasts with the power of media.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="potential">
            <div class="content-wrap">
                <div class="text-wrap">
                    <div class="title">
                        <h1>Potential</h1>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>
                                FashionTV is the first fashion channel in the world with 250 million viewers in
                                193+ countries.
                            </li>
                            <li>It broadcasts the latest news and information about the fashion, luxury, and
                                lifestyle world to over 100 million households and over 10 million public places
                                across five continents.
                            </li>
                            <li>
                                FashionTV is the fourth most distributed channel in the world with 250 cable
                                satellites, 500 million households, 7 million in public places, and 10 million public
                                TV sets in public places.
                            </li>
                            <li>
                                FashionTV broadcasts exclusive premium content on the 12 Thematic Media
                                Channels Worldwide.
                            </li>
                            <li>
                                FashionTV has 4 million+ followers on Facebook where we get 12 million+ views
                                per week.
                            </li>
                            <li>
                                FashionTV boasts over 65 million+ views on YouTube.
                            </li>
                            <li>
                                FashionTV has more than 300K+ followers on Instagram, where we achieve
                                125K+ organic reach per Month.
                            </li>
                            <li>
                                On FashionTV.com, our official website, we get 5 million+ page views.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mission-vision">
            <div class="title-content">
                <div class="title">
                    <h1>FTV <span>Concepts</span></h1>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content-wrap">
                            <div class="text-wrap">
                                <div class="title">
                                    <h1>Mission</h1>
                                </div>
                                <div class="desc">
                                    <p>
                                        To create India’s most sought after concept creation firm with the view to develop
                                        fashion and lifestyle businesses to their full potential while making a style statement that will
                                        leave a lasting impression.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrap">
                            <div class="text-wrap">
                                <div class="title">
                                    <h1>Vision</h1>
                                </div>
                                <div class="desc">
                                    <p>
                                        To create a firm that provides unique concepts with vast potential in the markets by
                                        ideation and sales marketing assistance to carry these brands with our name in the industry to
                                        the very top.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-wrap">
                            <div class="text-wrap">
                                <div class="title">
                                    <h1>Aim</h1>
                                </div>
                                <div class="desc">
                                    <p>
                                        To ideate the nation’s most groundbreaking inventions by brainstorming concepts that will
                                        be revolutionary with the marketing roots that FashionTV will provide.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div> -->
                <!-- <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    loop: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    // navigation: {
                    //     nextEl: ".swiper-button-next",
                    //     prevEl: ".swiper-button-prev",
                    // },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                });
            </script>
        </section>
    </main>
    <?php include "includes/_footer.php"; ?>
</body>

</html>
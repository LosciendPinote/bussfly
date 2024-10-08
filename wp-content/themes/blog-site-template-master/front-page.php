<?php
/*Template Name: Home Page*/

get_header() ?>

<main class="main--section">
    <section class="container hero--section">
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero__inner">
                        <div class="hero__section hero__title">
                            <div class="hero__title-1 hero__title-wrap wow animate__animated animate__zoomInDown" data-wow-delay="0.5s">
                                <h5 class="hero__text"><?php echo get_field('banner_sub_title', 'Options') ?></h5>
                            </div>
                            <div class="hero__title-2 hero__title-wrap wow animate__animated animate__lightSpeedInLeft" data-wow-delay="1s">
                                <h1 class="hero__text"><?php echo get_field('banner_title', 'Options') ?></h1>
                            </div>
                        </div>
                        <div class="hero__img hero__section">
                            <?php
                            $image_url = get_field('banner_image', 'Options');
                            ?>
                            <img src="<?php echo $image_url['url']; ?>" alt="<?php echo $image_url['alt']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl section--bg title--section">
        <div class="container section">
            <div class="row">
                <div class="col-md-12 has__center">
                    <div class="title--section__inner">
                        <div class="title--section__text title--section__text-1 wow animate__animated animate__fadeInDown">
                            <h4 class="section__text"><?php echo get_field('small_sub_title', 'Options') ?></h4>
                        </div>
                        <div class="title--section__text title--section__text-2 wow animate__animated animate__fadeInLeft">
                            <h2 class="section__text"><?php echo get_field('title_section', 'Options') ?></h2>
                        </div>
                        <div class="title--section__text title--section__text-3 wow animate__animated animate__fadeInRight">
                            <h3 class="section__text"><?php echo get_field('sub_title_section', 'Options') ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl partner--section section--bg">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner__inner">
                        <div class="partner--wrap title--wrap">
                            <div class="partner__title section__sub-title wow animate__animated animate__backInDown">
                                <h4 class="section__sub-text"><?php echo get_field('partner_title', 'Options'); ?> <span>partners</span></h4>
                            </div>
                        </div>
                        <div class="partner__img--wrap wow animate__animated animate__zoomIn">
                            <?php $count = 1;
                            $delay = 0;
                            ?>

                            <?php if (have_rows('partner_image_company', 'Options')) : ?>

                                <?php while (have_rows('partner_image_company', 'Options')) : the_row() ?>
                                    <?php $company_image = get_sub_field('partner_image', 'Options') ?>

                                    <div class="partner__img partner__img-<?php echo $count++ ?> wow animate__animated animate__zoomInDown" data-wow-delay="<?php echo $delay += 0.5;
                                                                                                                                                            echo "s" ?>">
                                        <a href="<?php echo get_sub_field("partner_link") ?>"><img src="<?php echo $company_image ?>" alt=""></a>
                                    </div>
                                <?php endwhile ?>
                            <?php endif ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl mission--section section--bg">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div class="mission__inner">
                        <div class="mission__wrap mission__wrap-1">
                            <div class="mission__title wow animate__animated animate__lightSpeedInLeft">
                                <h3 class="mission__text"><?php echo get_field('vision_title', 'Options') ?> <span class="wow animate__animated animate__fadeIn" data-wow-delay="1s"><?php echo get_field('vision_sub_title', 'Options') ?></span></h3>
                            </div>
                            <div class="mission__paragraph wow animate__animated animate__fadeInDown">
                                <p><?php echo get_field('vision_description', 'Options') ?></p>
                            </div>
                        </div>
                        <div class="mission__wrap mission__wrap-2">
                            <div class="mission__title wow animate__animated animate__lightSpeedInRight">
                                <h3 class="mission__text"><span class="wow animate__animated animate__fadeIn" data-wow-delay="1s"><?php echo get_field('mission_sub_title', 'Options') ?></span><?php echo get_field('mission_title', 'Options') ?></h3>
                            </div>
                            <div class="mission__paragraph wow animate__animated animate__fadeInDown">
                                <p><?php echo get_field('mission_description', 'Options') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl opportunity--section section--bg">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div class="opportunity__inner">
                        <div class="opportunity__wrap title--wrap opportunity__wrap-1">
                            <div class="opportunity__title section__sub-title wow animate__animated animate__backInDown">
                                <h4 class="section__sub-text">
                                    <?php if (have_rows("opportunity_title", "Options")) : ?>

                                        <?php while (have_rows("opportunity_title", "Options")) : the_row() ?>

                                            <?php echo get_sub_field("opportunity_title_no_color") ?><span> <?php echo get_sub_field("opportunity_title_with_color") ?></span>

                                        <?php endwhile ?>
                                    <?php endif ?>

                                </h4>
                            </div>
                        </div>
                        <div class="opportunity__wrap opportunity__wrap-2">
                            <div class="opportunity__side-title__wrap wow animate__animated animate__fadeIn" data-wow-delay="1.8s">
                                <div class="opportunity__side-title opportunity__side-left">
                                    <h6 class="opportunity__side-text"><?php echo get_field("side_text_left", "Options"); ?></h6>
                                </div>
                                <div class="opportunity__side-title opportunity__side-right">
                                    <h6 class="opportunity__side-text"><?php echo get_field("side_text_right", "Options"); ?></h6>
                                </div>
                            </div>
                            <div class="opportunity__percentage-info">
                                <div class="opportunity__percentage-hidden">
                                    <h6 class="opportunity__label-hidden"></h6>
                                </div>
                                <?php
                                $percent_count = 0;
                                $percent_label_delay = 3;
                                if (have_rows("graph_percent_label", "Options")) :
                                ?>
                                    <?php while (have_rows("graph_percent_label", "Options")) :  the_row() ?>
                                        <div class="opportunity__percentage-label opportunity__percentage--label-<?php echo $percent_count++ ?> wow animate__animated animate__fadeInUp" data-wow-delay="<?php echo $percent_label_delay -= 0.4;
                                                                                                                                                                                                            echo "s"; ?>" data-percent="<?php echo get_sub_field("graph_percent_label_number") ?>">
                                            <h6 class="opportunity__label-text opportunity__label-text-<?php echo $count++ ?>"><?php echo get_sub_field("graph_percent_label_number") ?></h6>
                                        </div>
                                    <?php endwhile ?>
                                <?php endif ?>

                            </div>
                            <div class="opportunity__inner-wrap">
                                <?php
                                $bar_count = 1;
                                $bar_delay = 0;
                                $chil_bar_count = 0;
                                $child_bar = 0;

                                if (have_rows("graph_year_label", "Options")) :
                                ?>
                                    <?php while (have_rows("graph_year_label", "Options")) : the_row() ?>

                                        <div class="opportunity__bar-wrap opportunity__bar__wrap-<?php echo $bar_count++ ?>">
                                            <div class="opportunity__inner">

                                                <?php if (have_rows("graph_percentage_bar", "Options")) : ?>

                                                    <?php while (have_rows("graph_percentage_bar", "Options")) : the_row() ?>
                                                        <?php $get_child_count = $chil_bar_count += 1;
                                                        $get_child_bar = $child_bar += 1;
                                                        ?>
                                                        <div class="opportunity__bar opportunity__bar-<?php echo $get_child_count ?>">
                                                            <div class="opportunity__percent__info" data-percentage="<?php echo get_sub_field("percentage_bar") ?>">
                                                                <h6 class="opportunity__percent-text opportunity__percent-text-<?php echo $get_child_bar ?>"><?php echo get_sub_field("percentage_bar") ?></h6>
                                                            </div>
                                                            <div class="opportunity__percentage opportunity__percentage-<?php echo $get_child_bar ?>"></div>
                                                        </div>

                                                    <?php endwhile ?>
                                                    <?php $chil_bar_count = 0; ?>
                                                <?php endif ?>

                                            </div>
                                            <div class="opportunity__year wow animate__animated animate__fadeInLeft" data-wow-delay="<?php echo $bar_delay += 0.5;
                                                                                                                                        echo "s"; ?>">
                                                <h6 class="opportunity__label-text"><?php echo get_sub_field("year_label") ?></h6>
                                            </div>
                                        </div>

                                    <?php endwhile ?>
                                    <?php $chil_bar_count = 0; ?>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/content', 'page') ?>
    <section class="container-xxl client--section section--bg">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div class="cleint__inner">
                        <div class="client__wrap title--wrap client__wrap-1">
                            <div class="client__title section__sub-title wow animate__animated animate__backInDown">
                                <h4 class="section__sub-text">Our <span>Delightsome</span> clients</h4>
                            </div>
                        </div>
                        <div class="client__wrap client__wrap-2">
                            <div class="client__inner">
                                <div class="cleint__logo-wrap">

                                    <?php $image_gallery = get_field("client_images", "Options");
                                    if ($image_gallery) :
                                        $gallery_count = 1;
                                    ?>
                                        <?php foreach ($image_gallery as $image_items) : ?>

                                            <div class="client__logos client__logos-<?php echo $gallery_count++ ?> wow animate__animated animate__fadeInDown">
                                                <img class="client__img" src="<?php echo esc_url($image_items['url']) ?>" alt="">
                                            </div>

                                        <?php endforeach ?>
                                    <?php endif ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xxl team--section section--bg">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div class="team__inner">
                        <div class="team__wrapper title--wrap team__wrapper-1">
                            <div class="team__title section__sub-title wow animate__animated animate__backInDown">
                                <h4 class="section__sub-text">
                                    <?php if (have_rows("team_title", "Options")) : ?>
                                        <?php while (have_rows("team_title", "Options")) : the_row() ?>
                                            <?php echo get_sub_field("team_title_no_color") ?> <span> <?php echo get_sub_field("team_title_with_color") ?></span>
                                        <?php endwhile ?>
                                    <?php endif ?>
                                </h4>
                            </div>
                        </div>
                        <div class="team__wrapper team__wrapper-2">
                            <?php
                            $team_count = 1;
                            $position_count = 0;
                            if (have_rows("team_profile", "Options")) :
                            ?>
                                <?php while (have_rows("team_profile", "Options")) : the_row() ?>
                                    <?php $multiple_count =  $team_count++; ?>
                                    <div class="team__content team__content-<?php echo $multiple_count ?>">
                                        <div class="team__img__inner">
                                            <div class="team__img">
                                                <img class="team_image team_image-<?php echo $multiple_count ?>" src="<?php echo get_sub_field("team_profile_image") ?>" alt="">
                                                <div class="team__circle team__circle-<?php echo $multiple_count ?>"></div>
                                            </div>

                                        </div>
                                        <div class="team__info-wrap">
                                            <div class="team__info team__name wow animate__animated animate__fadeInDown" data-wow-delay="0.5s">
                                                <h5 class="team__name-text">Jawad Irfan</h5>
                                            </div>
                                            <div class="team__info team__position-wrap wow animate__animated animate__fadeInDown" data-wow-delay="0.9s">
                                                <div class="team__position team__position-<?php echo $position_count += 1 ?>">
                                                    <h5 class="team__position-text">cmo-marketing wizard</h5>
                                                </div>
                                                <div class="team__position team__position-<?php echo $position_count += 1 ?>">
                                                    <h5 class="team__position-text">co-founder</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $position_count = 0; ?>
                                <?php endwhile ?>

                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer() ?>
<?php get_header(); ?>
    <main class="main-conteiner">
        <img class="main-box2" src="<?php echo get_template_directory_uri(); ?>/folder/logo.png" alt="">
        <picture class="main-box1">
        <?php //the_post_thumbnail(); ?>
             <source media="(max-width:  767px)" srcset="<?php echo get_template_directory_uri(); ?>/folder/visual_1_sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/folder/visual_1_pc.png"> 
        </picture>
        <picture class="main-box3">
            <source media="(max-width:  767px)" srcset="<?php echo get_template_directory_uri(); ?>/folder/visual_text_sp.png">
            <img src="<?php echo get_template_directory_uri(); ?>/folder/visual_text_pc.png" alt="美浜文字">
        </picture>

    <p class="main-font">進化し続ける「街」アメリカンビレッジマガジン</p>
    
    <h1><?php the_title(); ?></h1>
      <?php 
         if (have_posts()):
           while(have_posts()):
             the_post();
      ?>
    <section class="contents">
        <div class="contents-bx1">
           <?php the_post_thumbnail(); ?>
               <!-- <img src="<?php //echo get_stylesheet_directory_uri();?>/folder/post_img_1.png" alt=""> -->
            <div class="date">
                <div class="blog">
                    <time datetime=""><?php the_date(); ?></time>
                    <p class="p"><?php the_excerpt(); ?></p>
                </div>
                <a href="<?php the_permalink(); ?>">READ MORE</a>
            </div>
       </div>
           <?php endwhile;
              else :?>
              <p>表示する記事がありません</p>
           <?php endif;?>
   </section>
   </main>

    <?php get_footer(); ?>
<?php get_header(); ?>

<!-- ********** ループ文　*********** -->
<main class="main-conteiner2">
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
                    <time datetime=""><?php echo get_the_date(); ?></time>
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
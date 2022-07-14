<?php get_header(); ?>
    <main class="main-conteiner">
        <img class="main-box2" src="./folder/logo.png" alt="">
        <picture class="main-box1">
            <source media="(max-width:  767px)" srcset=<?php the_post_thumbnail(); ?>>
            <img src=<?php the_post_thumbnail(); ?>>
        </picture>
        <picture class="main-box3">
            <source media="(max-width:  767px)" srcset="./folder/visual_text_sp.png">
            <img src="./folder/visual_text_pc.png" alt="美浜文字">
        </picture>
    </main>
    <!-- </div> -->
    <p class="main-font">進化し続ける「街」アメリカンビレッジマガジン</p>
    </div>

    <h1>Latest Articles</h1>
    <section class="contents">
        <div class="contents-bx1">
            <img src="./folder/post_img_1.png" alt="">
            <div class="date">
                <div class="blog">
                    <time datetime="2018-05-20">2018 / 5 / 20</time>
                    <p class="p">おしゃれなカフェがありますよ</p>
                </div>
                <a href="">READ MORE</a>
            </div>
        </div>
        <div class="contents-bx1">
            <img src="./folder/post_img_2.png" alt="">
            <div class="date">
                <div class="blog">
                    <time datetime="2018-05-19">2018 / 5 / 19</time>
                    <p class="p">あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
                </div>
                <a href="">READ MORE</a>
            </div>
        </div>
        <div class="contents-bx1">
            <img src="./folder/post_img_3.png" alt="">
            <div class="date">
                <div class="blog">
                    <time datetime="2018-05-18">2018 / 5 / 18</time>
                    <p class="p">ラソナの社内はこんなのよ</p>
                </div>
                <a href="">READ MORE</a>
            </div>
        </div>
    </section>
    <section class="contents-2">
        <div class="contents-bx2">
            <img src="./folder/post_img_4.png" alt="">
            <div class="date">
                <div class="blog">
                    <time datetime="2018-05-27">2018 / 5 / 27</time>
                    <p class="p">お隣のアラハはハワイ？</p>
                </div>
                <a href="">READ MORE</a>
            </div>
        </div>
        <div class="contents-bx2">
            <img src="./folder/post_img_5.png" alt="">
            <div class="date">
                <div class="blog">
                    <time datetime="2018-05-16">2018 / 5 / 16</time>
                    <p class="p">なぜテント？ラソナの人に聞いてみた</p>
                </div>
                <a href="">READ MORE</a>
            </div>
        </div>
        <div class="contents-bx2">
            <img src="./folder/post_img_6.png" alt="">
            <div class="date">
                <div class="blog">
                    <time datetime="2018-05-15">2018 / 5 / 15</time>
                    <p class="p">ベイエリアおしゃれすぎる問題</p>
                </div>
                <a href="">READ MORE</a>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
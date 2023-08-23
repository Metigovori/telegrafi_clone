<?php
include "./inc/header.php";
include "./inc/linksBar.php";
include "./inc/sidebar.php";
?>

<!-- Slider -->

<section class="homePage__section--first mt-5 ">
  <div class="container ">
    <div class="flex">
      <div class="flex__col--3 flex__col--mobile-12 special-posts" data-vr-zone="Ballina-Aktuale">
        <p class="category-heading">Lufta në Ukrainë</p>
        <?php

        /* marrja e te dhenav nga json file */

        $api_url = 'data.json';


        $response = file_get_contents($api_url);


        $data = json_decode($response, true);


        if (count($data['data']) > 0) {
          $article = $data['data'][2];
          echo '<a href="post.php?url=' . $article['url'] . '" class="post__large mobile-img " data-vr-contentbox="' . $article['title'] . '" data-vr-contentbox-url="' . $article['url'] . '" data-vr-global-position="1">';
          echo '<div class="post__large--thumb">';
          echo '<img src="' . $article['image'] . '" alt="' . $article['title'] . '" loading="lazy">';
          echo '</div>';
          echo '<div class="mobile-flex-content">';
          echo '<div class="post__large--content">';
          echo '<div class="post__large--title">';
          echo '<p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="' . $article['title'] . '">';
          echo $article['title'];
          echo '</p>';
          echo '</div>';
          echo '</div>';
          echo '<div class="post__large--details">';
          echo '<strong class="category-name font--default font--bote">' . $article['category'] . '</strong>';
          echo '<div class="meta-info">';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</a>';
        }

        ?>
        <?php
        for ($i = 0; $i < min(2, count($data['data'])); $i++) {
          $article = $data['data'][$i];
          echo '<a href="post.php?url=' . $article['url'] . '" class="post__extrasmall mobile-img" data-vr-contentbox="' . $article['title'] . '" data-vr-contentbox-url="' . $article['url'] . '" data-vr-global-position="' . ($i + 1) . '">';
          echo '<div class="post__extrasmall--content">';
          echo '<div class="title-wrapper">';
          echo '<p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="' . $article['title'] . '">';
          echo $article['title'];
          echo '</p>';
          echo '<div class="meta-wrapper">';
          echo '<span class="cat-txt font--default font--bote">' . $article['category'] . '</span>';
          echo '<div class="meta-info"></div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</a>';
        }
        ?>
      </div>

      <?php
      $apiUrl = 'data.json';
      $response = file_get_contents($apiUrl);
      $data = json_decode($response, true);

      $articles = $data['data'];

      $randomArticle2 = $articles[array_rand($articles)];
      $randomArticle = $articles[array_rand($articles)];
      ?>

      <div class="flex__col--6 flex__col--mobile-12 aktuale">
        <div class="hero-wrapper" data-vr-zone="Ballina-Aktuale">
          <p class="category-heading">Lajme nga Bota</p>
          <a href="post.php?url=<?php echo urlencode($randomArticle['url']); ?>" class="post__large hero-item" data-vr-contentbox="<?php echo $randomArticle['title']; ?>" data-vr-contentbox-url="<?php echo $randomArticle['url']; ?>" data-vr-global-position="4">
            <div class="post__large--thumb">
              <img src="<?php echo $randomArticle['image']; ?>" alt="<?php echo $randomArticle['title']; ?>" loading="lazy">
            </div>
            <div class="mobile-flex-content">
              <div class="post__large--content">
                <div class="post__large--title">
                  <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="2856792886">
                    <?php echo $randomArticle['title']; ?> </p>
                </div>
              </div>
              <div class="post__large--details">
                <strong class="category-name font--default font--lajme"><?php echo $randomArticle['category']; ?></strong>
                <div class="meta-info">
                </div>
              </div>
            </div>
          </a>
        </div>


        </a><a href="post.php?url=<?php echo urlencode($randomArticle['url']); ?>" class="post__extrasmall hero-item__list" data-vr-contentbox="KQZ-ja e gatshme t’i organizojë zgjedhjet e reja në veri" data-vr-contentbox-url="https://telegrafi.com/kqz-ja-e-gatshme-te-organizoje-zgjedhjet-e-reja-ne-veri/" data-vr-global-position="5">
          <div class="post__extrasmall--content">
            <div class="title-wrapper">
              <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="642454186">
                <?php echo $randomArticle2['title']; ?> </p>
            </div>
          </div>
        </a>
        <div class="hero-wrapper--border mobileAgent "></div>
      </div>
    </div>
    <div class="flex__col--3 flex__col--mobile-12 debati">
      <div class="isSticky">
        <div class="widgetComponent ballina-1 ">
          <div class="widget ai_widget">
            <div class="code-block code-block-3 code-block-ballina-1-rectangle" style="margin: 8px 0; clear: both;">
              <div>
                <div id="rectangle1" class="desktopads" data-google-query-id="CPeXnfTJ7YADFc0r4Aod1FoGxA">

                  <div id="google_ads_iframe_/22646657118/homepage_box_1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22646657118/homepage_box_1_0" name="google_ads_iframe_/22646657118/homepage_box_1_0" title="3rd party ad content" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-google-container-id="9"></iframe></div>
                </div>

                <div id="mobile1" class="mobileads">
                  <script>
                    googletag.cmd.push(function() {
                      googletag.display('mobile1');
                    });
                  </script>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="top-news-wrapper bottom-60">
      <div class="topWrap">
        <p class="category-heading">Top Lajme</p>
        <div class="topWrap--navigation">
          <div class="swiper-button-prev swiper-button-prev-topnews swiper-button-disabled">
            <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.13281 10.4453L6.67969 5.89844C6.77344 5.82812 6.84375 5.64062 6.84375 5.5C6.84375 5.38281 6.77344 5.19531 6.67969 5.10156L2.13281 0.554688C2.03906 0.484375 1.85156 0.390625 1.73438 0.390625C1.59375 0.390625 1.42969 0.484375 1.33594 0.554688L0.796875 1.09375C0.703125 1.1875 0.632812 1.375 0.632812 1.49219C0.632812 1.63281 0.703125 1.79688 0.796875 1.89062L4.40625 5.5L0.796875 9.13281C0.703125 9.22656 0.632812 9.39062 0.632812 9.53125C0.632812 9.64844 0.703125 9.83594 0.796875 9.92969L1.33594 10.4453C1.42969 10.5391 1.59375 10.6328 1.73438 10.6328C1.85156 10.6328 2.03906 10.5391 2.13281 10.4453Z" fill="white"></path>
            </svg>
          </div>
          <div class="swiper-button-next swiper-button-next-topnews">
            <svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.13281 10.4453L6.67969 5.89844C6.77344 5.82812 6.84375 5.64062 6.84375 5.5C6.84375 5.38281 6.77344 5.19531 6.67969 5.10156L2.13281 0.554688C2.03906 0.484375 1.85156 0.390625 1.73438 0.390625C1.59375 0.390625 1.42969 0.484375 1.33594 0.554688L0.796875 1.09375C0.703125 1.1875 0.632812 1.375 0.632812 1.49219C0.632812 1.63281 0.703125 1.79688 0.796875 1.89062L4.40625 5.5L0.796875 9.13281C0.703125 9.22656 0.632812 9.39062 0.632812 9.53125C0.632812 9.64844 0.703125 9.83594 0.796875 9.92969L1.33594 10.4453C1.42969 10.5391 1.59375 10.6328 1.73438 10.6328C1.85156 10.6328 2.03906 10.5391 2.13281 10.4453Z" fill="white"></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="swiper swiperTopNews swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden">
        <div class="swiper-wrapper" data-vr-zone="Top Lajme" style="transform: translate3d(0px, 0px, 0px);">
          <div class="swiper-slide item-wrapper swiper-slide-active" style="width: 218.25px; margin-right: 40px;">
            <a href="https://telegrafi.com/perleshje-mes-shtate-personave-ne-nje-kafiteri-ne-vitomirice-te-pejes-njeri-lendohet-rende/" class="post__large hero-item__list " data-vr-contentbox="Përleshje mes shtatë personave në një kafiteri në Vitomiricë të Pejës, njëri lëndohet rëndë" data-vr-contentbox-url="https://telegrafi.com/perleshje-mes-shtate-personave-ne-nje-kafiteri-ne-vitomirice-te-pejes-njeri-lendohet-rende/" data-vr-global-position="6">
              <div class="post__large--thumb">
                <img src="https://telegrafi.com/wp-content/uploads/2023/08/Policia-Zjarrfiksit-autoambulanta-emergjenca-foto-Ridvan-Slivova-1-2-780x439.jpg" alt="Përleshje mes shtatë personave në një kafiteri në Vitomiricë të Pejës, njëri lëndohet rëndë" loading="lazy">
              </div>
              <div class="mobile-flex-content">
                <div class="post__large--content">
                  <div class="post__large--title">
                    <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="1372692621">
                      Përleshje mes shtatë personave në një kafiteri në Vitomiricë të Pejës, njëri lëndohet rëndë </p>
                  </div>
                </div>
                <div class="post__large--details">
                  <strong class="category-name font--default font--lajme">Kronika e Zezë</strong>
                  <div class="meta-info">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide item-wrapper mobileAgent swiper-slide-next" style="margin-right: 40px;">
            <div class="futureADS-article">
              <div id="futureads_9bc1fb549fd843feaf8a306d7fadc886_zone_114830_sect_47407_site_31670" data-sender="futureads"></div>
              <script type="text/javascript">
                (window.globalAmlAds = window.globalAmlAds || []).push(function() {
                  globalAml.display('futureads_9bc1fb549fd843feaf8a306d7fadc886_zone_114830_sect_47407_site_31670');
                });
              </script>
            </div>
          </div>
          <div class="swiper-slide item-wrapper" style="width: 218.25px; margin-right: 40px;">
            <a href="https://telegrafi.com/eshte-jashte-rregullave-fetare-te-akuzuarit-per-sulm-ndaj-gazetarit-valon-syla-nuk-binden-gjykates-te-ngriten-ne-kembe/" class="post__large hero-item__list video-post" data-vr-contentbox="“Është jashtë rregullave fetare”, të akuzuarit për sulm ndaj gazetarit Valon Syla nuk i binden gjykatës të ngriten në këmbë" data-vr-contentbox-url="https://telegrafi.com/eshte-jashte-rregullave-fetare-te-akuzuarit-per-sulm-ndaj-gazetarit-valon-syla-nuk-binden-gjykates-te-ngriten-ne-kembe/" data-vr-global-position="7">
              <div class="post__large--thumb">
                <img src="https://telegrafi.com/wp-content/uploads/2020/12/valon-syla-780x439.png" alt="“Është jashtë rregullave fetare”, të akuzuarit për sulm ndaj gazetarit Valon Syla nuk i binden gjykatës të ngriten në këmbë" loading="lazy">
              </div>
              <div class="mobile-flex-content">
                <div class="post__large--content">
                  <div class="post__large--title">
                    <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="2843027684">
                      “Është jashtë rregullave fetare”, të akuzuarit për sulm ndaj gazetarit Valon Syla nuk i binden gjykatës të ngriten në këmbë </p>
                  </div>
                </div>
                <div class="post__large--details">
                  <strong class="category-name font--default font--lajme">Drejtësi</strong>
                  <div class="meta-info">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide item-wrapper" style="width: 218.25px; margin-right: 40px;">
            <a href="https://telegrafi.com/nxenesit-ne-veri-te-kthehen-serish-ne-bankat-shkollore/" class="post__large hero-item__list " data-vr-contentbox="Nxënësit në veri do të kthehen sërish në bankat shkollore" data-vr-contentbox-url="https://telegrafi.com/nxenesit-ne-veri-te-kthehen-serish-ne-bankat-shkollore/" data-vr-global-position="8">
              <div class="post__large--thumb">
                <img src="https://telegrafi.com/wp-content/uploads/2022/12/shkolla-veri-780x439.jpg" alt="Nxënësit në veri do të kthehen sërish në bankat shkollore" loading="lazy">
              </div>
              <div class="mobile-flex-content">
                <div class="post__large--content">
                  <div class="post__large--title">
                    <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="4231346389">
                      Nxënësit në veri do të kthehen sërish në bankat shkollore </p>
                  </div>
                </div>
                <div class="post__large--details">
                  <strong class="category-name font--default font--lajme">Arsim</strong>
                  <div class="meta-info">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide item-wrapper" style="width: 218.25px; margin-right: 40px;">
            <a href="https://telegrafi.com/publikohen-pamjet-e-largimit-te-abazoviqit-pasi-u-raportua-se-u-sulmua-ne-nje-diskoteke-ne-budva/" class="post__large hero-item__list video-post" data-vr-contentbox="Publikohen pamjet e largimit të Abazoviqit pasi u raportua se u sulmua në një diskotekë në Budva" data-vr-contentbox-url="https://telegrafi.com/publikohen-pamjet-e-largimit-te-abazoviqit-pasi-u-raportua-se-u-sulmua-ne-nje-diskoteke-ne-budva/" data-vr-global-position="9">
              <div class="post__large--thumb">
                <img src="https://telegrafi.com/wp-content/uploads/2023/08/page-75-780x439.jpg" alt="Publikohen pamjet e largimit të Abazoviqit pasi u raportua se u sulmua në një diskotekë në Budva" loading="lazy">
              </div>
              <div class="mobile-flex-content">
                <div class="post__large--content">
                  <div class="post__large--title">
                    <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="411410952">
                      Publikohen pamjet e largimit të Abazoviqit pasi u raportua se u sulmua në një diskotekë në Budva </p>
                  </div>
                </div>
                <div class="post__large--details">
                  <strong class="category-name font--default font--bote">Mali i Zi</strong>
                  <div class="meta-info">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide item-wrapper" style="width: 218.25px; margin-right: 40px;">
            <a href="https://telegrafi.com/tetovari-pellumb-gurra-dizajnoi-interierin-e-rolls-royce-mjaft-krenar-dhe-emocionuar-per-kete-arritje/" class="post__large hero-item__list foto-post" data-vr-contentbox="Tetovari Pëllumb Gurra dizajnoi interierin e Rolls-Royce: Mjaft krenar dhe i emocionuar për këtë arritje" data-vr-contentbox-url="https://telegrafi.com/tetovari-pellumb-gurra-dizajnoi-interierin-e-rolls-royce-mjaft-krenar-dhe-emocionuar-per-kete-arritje/" data-vr-global-position="10">
              <div class="post__large--thumb">
                <img src="https://telegrafi.com/wp-content/uploads/2023/08/pellumb-gurra1-780x439.png" alt="Tetovari Pëllumb Gurra dizajnoi interierin e Rolls-Royce: Mjaft krenar dhe i emocionuar për këtë arritje" loading="lazy">
              </div>
              <div class="mobile-flex-content">
                <div class="post__large--content">
                  <div class="post__large--title">
                    <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="2273871428">
                      Tetovari Pëllumb Gurra dizajnoi interierin e Rolls-Royce: Mjaft krenar dhe i emocionuar për këtë arritje </p>
                  </div>
                </div>
                <div class="post__large--details">
                  <strong class="category-name font--default font--lajme">Maqedonia e Veriut</strong>
                  <div class="meta-info">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide item-wrapper" style="width: 218.25px; margin-right: 40px;">
            <a href="https://telegrafi.com/rrezohet-kerkesa-e-radhes-e-fredi-belerit-gjykata-e-posacme-e-le-serish-ne-burg/" class="post__large hero-item__list " data-vr-contentbox="Rrëzohet kërkesa e radhës e Fredi Belerit, Gjykata e Posaçme e lë sërish në burg" data-vr-contentbox-url="https://telegrafi.com/rrezohet-kerkesa-e-radhes-e-fredi-belerit-gjykata-e-posacme-e-le-serish-ne-burg/" data-vr-global-position="11">
              <div class="post__large--thumb">
                <img src="https://telegrafi.com/wp-content/uploads/2023/08/dvgdf-780x439.jpg" alt="Rrëzohet kërkesa e radhës e Fredi Belerit, Gjykata e Posaçme e lë sërish në burg" loading="lazy">
              </div>
              <div class="mobile-flex-content">
                <div class="post__large--content">
                  <div class="post__large--title">
                    <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="1140465265">
                      Rrëzohet kërkesa e radhës e Fredi Belerit, Gjykata e Posaçme e lë sërish në burg </p>
                  </div>
                </div>
                <div class="post__large--details">
                  <strong class="category-name font--default font--lajme">Shqipëri</strong>
                  <div class="meta-info">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- Promo Section -->

<section class="promoSection">
  <div class="container">
    <div class="top-news-wrapper bottom-60">
      <div class="topWrap">
        <p class="category-heading">Promo</p>
        <a class="promo-link" href="https://marketing.telegrafi.com">Reklamo ketu</a>
      </div>
      <div class="promo--wrap" data-vr-zone="Promo">
        <div class="item-wrapper">
          <a href="https://telegrafi.com/rrugetimi-neper-kohe-opel-mokka-nga-artana-antike-ne-inovacionin-modern/" class="post__large post__large--promo hero-item__list video-post" data-vr-contentbox="Rrugëtimi nëpër kohë me Opel Mokka – nga Artana antike në inovacionin modern" data-vr-contentbox-url="https://telegrafi.com/rrugetimi-neper-kohe-opel-mokka-nga-artana-antike-ne-inovacionin-modern/" data-vr-global-position="14">
            <div class="post__large--thumb">
              <img src="https://telegrafi.com/wp-content/uploads/2023/08/369448951_315892840810414_1768104772845750101_n-380x233.png" alt="Rrugëtimi nëpër kohë me Opel Mokka – nga Artana antike në inovacionin modern" loading="lazy">
            </div>
            <div class="mobile-flex-content">
              <div class="post__large--content">
                <div class="post__large--title">
                  <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="309317043">Rrugëtimi nëpër kohë me Opel Mokka – nga Artana antike në inovacionin modern</p>
                </div>
              </div>
              <div class="post__large--details">
                <img class="authorImg" src="https://telegrafi.com/wp-content/uploads/2023/06/347425298_646202710871240_459775702241343057_n-150x150.jpg" alt="Foleja Motors">
                <strong class="author-name">Nga Foleja Motors</strong>
              </div>
            </div>
          </a>
        </div>
        <div class="item-wrapper">
          <a href="https://telegrafi.com/kompleto-shtepine-tende-fasal-perfito-nga-ndihma-e-qeverise/" class="post__large post__large--promo hero-item__list " data-vr-contentbox="Kompleto shtëpinë tënde me FASAL përfito nga ndihma e Qeverisë" data-vr-contentbox-url="https://telegrafi.com/kompleto-shtepine-tende-fasal-perfito-nga-ndihma-e-qeverise/" data-vr-global-position="15">
            <div class="post__large--thumb">
              <img src="https://telegrafi.com/wp-content/uploads/2023/08/369475270_254563837414734_5099079563976867690_n-1-380x233.jpg" alt="Kompleto shtëpinë tënde me FASAL përfito nga ndihma e Qeverisë" loading="lazy">
            </div>
            <div class="mobile-flex-content">
              <div class="post__large--content">
                <div class="post__large--title">
                  <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="751724850">Kompleto shtëpinë tënde me FASAL përfito nga ndihma e Qeverisë</p>
                </div>
              </div>
              <div class="post__large--details">
                <img class="authorImg" src="https://telegrafi.com/wp-content/uploads/2022/07/FASAL-150x150.png" alt="Fasal">
                <strong class="author-name">Nga Fasal</strong>
              </div>
            </div>
          </a>
        </div>
        <div class="item-wrapper">
          <a href="https://telegrafi.com/kthimi-ne-shkolle-fillon-feste-dhe-plot-emocione-ne-vitaland/" class="post__large post__large--promo hero-item__list " data-vr-contentbox="Kthimi në shkollë fillon me festë dhe plot emocione në VitaLand" data-vr-contentbox-url="https://telegrafi.com/kthimi-ne-shkolle-fillon-feste-dhe-plot-emocione-ne-vitaland/" data-vr-global-position="16">
            <div class="post__large--thumb">
              <img src="https://telegrafi.com/wp-content/uploads/2023/08/VL_Back2School_Artikull_1130x635-380x233.jpg" alt="Kthimi në shkollë fillon me festë dhe plot emocione në VitaLand" loading="lazy">
            </div>
            <div class="mobile-flex-content">
              <div class="post__large--content">
                <div class="post__large--title">
                  <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="1285147741">Kthimi në shkollë fillon me festë dhe plot emocione në VitaLand</p>
                </div>
              </div>
              <div class="post__large--details">
                <img class="authorImg" src="https://telegrafi.com/wp-content/uploads/2023/05/245315918_102899525515312_2157334962198066297_n-150x150.png" alt="Vitaland">
                <strong class="author-name">Nga Vitaland</strong>
              </div>
            </div>
          </a>
        </div>
        <div class="item-wrapper">
          <a href="https://telegrafi.com/ky-eshte-shansi-juaj-per-te-fituar-burse-nga-fondacioni-bursave-per-studente-amik/" class="post__large post__large--promo hero-item__list " data-vr-contentbox="Ky është shansi juaj për të fituar bursë nga Fondacioni i Bursave për Studentë AMIK" data-vr-contentbox-url="https://telegrafi.com/ky-eshte-shansi-juaj-per-te-fituar-burse-nga-fondacioni-bursave-per-studente-amik/" data-vr-global-position="17">
            <div class="post__large--thumb">
              <img src="https://telegrafi.com/wp-content/uploads/2023/08/368756924_973644267249785_6934631855899613497_n-380x233.jpg" alt="Ky është shansi juaj për të fituar bursë nga Fondacioni i Bursave për Studentë AMIK" loading="lazy">
            </div>
            <div class="mobile-flex-content">
              <div class="post__large--content">
                <div class="post__large--title">
                  <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="3369697090">Ky është shansi juaj për të fituar bursë nga Fondacioni i Bursave për Studentë AMIK</p>
                </div>
              </div>
              <div class="post__large--details">
                <img class="authorImg" src="https://telegrafi.com/wp-content/uploads/2023/08/288462525_1425669124578084_3747650669011122322_n-150x150.jpg" alt="AMIK">
                <strong class="author-name">Nga AMIK</strong>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End of Promo  -->

<!-- Jobs -->
<?php
include "./inc/jobs.php"

?>


<?php
include "./inc/footer.php"
?>
<script>
  //funksionet per sllajda
  $('.navbar-toggler').on('click', function() {
    $('#sidebar').toggleClass('active');
    if (toggleClass('active')) {

    }
  });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiperTopNews', {
    slidesPerView: '4', // numri per sllajdat qe dojna mi shfaq
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-button-next-topnews',
      prevEl: '.swiper-button-prev-topnews',
    },

  });
</script>
</body>

</html>
<?php
include "./inc/header.php";
include "./inc/linksBar.php";
include "./inc/sidebar.php";
?>


<?php
$apiUrl = 'data.json';
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

$articles = $data['data'];
// Check if the URL parameter is set
if (isset($_GET['url'])) {
    $selectedUrl = $_GET['url'];

    // Retrieve the selected article based on the URL
    foreach ($articles as $article) {
        if ($article['url'] === $selectedUrl) {
            $selectedArticle = $article;
            break;
        }
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-7" data-vr-zone="Ballina-Aktuale">
            <?php if (isset($selectedArticle)) : ?>
                <div class="post__large hero-item">
                    <div class="post__large--thumb">
                        <img class="img-fluid" src="<?php echo $selectedArticle['image']; ?>" alt="<?php echo $selectedArticle['title']; ?>" loading="lazy">
                    </div>
                    <div class="mobile-flex-content">
                        <div class="post__large--content">
                            <div class="post__large--title">
                                <p class="titleArticle" data-vr-headline="" data-vr-contentbox-dynamic-hash="2856792886">
                                    <?php echo $selectedArticle['title']; ?> </p>
                            </div>
                        </div>
                        <div class="post__large--details">
                            <strong class="category-name font--default font--lajme"><?php echo $selectedArticle['category']; ?></strong>
                            <div class="meta-info">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-5">
                    <p class="content" data-vr-headline="" data-vr-contentbox-dynamic-hash="2856792886">
                        <?php echo $selectedArticle['description']; ?> </p>


                </div>
            <?php else : ?>
                <p>No article selected.</p>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php
include "./inc/footer.php"
?>
<?php

include CONTROL_DIR . '/blog_util.php';

$post = get_post_by_slug($slug);

$title = $post['title']['rendered'];
$content = $post['content']['rendered'];
$date = $post['date'];
$categories = $post['category'] ?? null;
$image = get_post_featured_image($post);

$fmt = new \IntlDateFormatter('pt_PT');
$fmt->setPattern("d 'de' MMMM 'de' yyyy");
// See: https://unicode-org.github.io/icu/userguide/format_parse/datetime/#datetime-format-syntax for pattern syntax
$date = $fmt->format(new \DateTime());

$page_title = $title;
$is_blog = true;

$yoast = get_yoast_head($post);

$home_content = get_data('content');
$blocks = filter_blocks($home_content['blocks']);

include './partials/header.php';

?>

<div class="single page">
    <?php if ($image) :
        $src = $image['src'];
        $alt = $image['alt'];
        if ($alt == '') $alt = $title;
    endif;
    ?>
    <div class="heading <?= ($image) ? '' : 'no-image'; ?>" <?php if ($image) echo "style='background-image: url(\"$src\");'"; ?>>
        <div class="container">
            <h1 class="post-title"><?php echo $title; ?></h1>
            <div class="post-meta">
                <div class="post-categories">
                    <?php foreach ($categories as $category) :
                        $name = $category['name'];
                        $slug = $category['slug'];

                        echo "<a href='/blog/$slug'>$name</a>";

                    endforeach; ?>
                </div>

                <div class="post-date"><?= $date; ?></div>
            </div>
        </div>
    </div>

    <div class="container post-view">
        <div class="post-content">
            <?php echo $content; ?>
        </div>
    </div>

    <?php include './partials/contacto.php'; ?>

</div>

<?php

include './partials/footer.php';

?>
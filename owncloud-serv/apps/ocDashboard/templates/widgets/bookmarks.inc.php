<div class='ocDashboard bookmarks items'>

    <?php
    $style = "";
    foreach ($additionalparams['bookmarks'] as $bookmark) { ?>
        <div class='ocDashboard bookmarks item' <?php print_unescaped($style); ?>>
            <?php
                if ($bookmark['title'] == "") {
                    $titel = $bookmark['url'];
                } else {
                    $titel = $bookmark['title'];
                }
            ?>
            <a target="_blank" href="<?php p($bookmark['url']); ?>"><?php p($titel); ?></a>
        </div>
    <?php }	?>
</div>
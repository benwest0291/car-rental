<?php
$straplineHeading = $data["strapline_heading"];
$straplineParagraph = $data["strapline_paragraph"];
?>

<section class="large__strapline pt-5 pb-2 mb-5">
    <div class="container">
        <div class="large__strapline__container">
            <?php if ($straplineHeading != null) { ?>
                <h2><?php echo $straplineHeading; ?></h2>
            <?php } ?>

            <?php if ($straplineParagraph != null) { ?>
                <p><?php echo $straplineParagraph; ?></p>
            <?php } ?>
        </div>
    </div>
</section>
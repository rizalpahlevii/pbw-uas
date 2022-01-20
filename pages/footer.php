<?php
include "./helpers/database.php";
$socialMedias = $db->get("*", "social_medias");
foreach ($socialMedias as $row) : ?>

    <li class="nav-item"><a href="<?= $row['value'] ?>" target="_blank" class="nav-link px-2 text-muted"><?= $row['name'] ?></a></li>
<?php endforeach; ?>
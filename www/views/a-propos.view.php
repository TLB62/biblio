<?php ob_start() ?>
<p>A propos de moi</p>

<?php
$titre = " A propos de Thomas";
$content = ob_get_clean();
require_once "template.view.php";


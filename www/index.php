<?php ob_start() ?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi veniam, saepe at excepturi, voluptates odit et modi debitis ad quaerat incidunt error cupiditate provident esse, dolores ut fugit corporis aperiam.</p>

<?php
$titre = "Bibliothèque de Thomas";
$content = ob_get_clean();
require_once "template.php";

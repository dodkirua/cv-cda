


<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/assets/js/" . $view . ".js")){ ?>
    <script src="/assets/js/<?= $view ?>.js" type="module"></script> <?php
}
echo "<script src='/assets/js/index.js' type='module'></script>";

?>

</body>
</html>
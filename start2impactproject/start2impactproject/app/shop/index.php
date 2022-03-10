<?php 
$page = isset($_GET["page"]) ? $_GET["page"] : 'products-list';
?>
<?php include '../inc/init.php' ?>

<?php include ROOT_PATH . 'app/public/template-parts/header.php'; ?>

<div id="main" class="container" style="margin-top: 100px;">
    <div class="row">

            <div class="col-9">
            <?php include  ROOT_PATH . 'app/shop/pages/' . $page . '.php' ?>
        </div>

        <?php include ROOT_PATH . 'app/public/template-parts/sidebar.php' ?>

</div>

<?php include ROOT_PATH . 'app/public/template-parts/footer.php' ?>

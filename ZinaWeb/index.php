<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('head.php');
    ?>

</head>

<body>
    <?php
    include('navbar.php');
    ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : false;

    switch ($page) {
        case 'menu':
            include('menu.php');
            break;

        case 'gallery':
            include('gallery.php');
            break;

        case 'booking':
            include('booking.php');
            break;

        case 'shop':
            include('shop.php');
            break;

        default:
            include('menu.php');
    }
    ?>
</body>

</html>
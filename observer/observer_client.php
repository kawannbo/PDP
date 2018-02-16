<?php
require_once 'Cart.class.php';
require_once 'PresentListener.class.php';
require_once 'LoggingListener.class.php';
require_once 'CustomListener.class.php';

function createCart() {
    $cart = new Cart();
    $cart->addListener(new PresentListener());
    $cart->addListener(new LoggingListener());
    $cart->addListener(new CustomListener());
    return $cart;
}

    session_start();

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
    if (is_null($cart)) {
        $cart = createCart();
    }

    $mode = (isset($_POST['grow']) ? $_POST['grow'] : '');
    echo $mode;
    echo "aaaa";
    if (is_null($mode)) {
      echo '<p style="color: #aa0000">追加しました</p>';
      $cart->addwater();
    }

    $_SESSION['cart'] = $cart;
?>
<form action="observer_client.php" method="post">
<p>
<input type="hidden" name="grow" value="water">
</p>
<p>
<input type="submit" value="水をあげる">
</p>
</form>

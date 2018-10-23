<?php
require_once 'config/config.php';
require_once 'add_cart.php';
var_dump($item_array);
?>


<div style="clear: both"></div>
<br>
<h3>Order Details</h3>
<?php var_dump($_SESSION['shopping_cart']);?>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th width="40%">Item Name</th>>
            <th width="10%">Quantity</th>>
            <th width="20%">Price</th>>
            <th width="15%">Total</th>>
            <th width="5%">Action</th>>
        </tr>
        <?php
        if (!empty($_SESSION["shopping_cart"]))
        {
            $total = 0;
            foreach ($_SESSION["shopping_cart"] as $key => $values)
            {
                ?>
                <tr>
                    <td><?= $values['item_name']; ?></td>
                    <td><?= $values['item_quantity']; ?></td>
                    <td>$<?= $values['item_price']; ?></td>
                    <td><?= number_format($values['item_quantity'] * $values['item_price'], 2); ?></td>
                    <td><a href="index.php?action=delete&id=<?= $values['item_id'];?>"><span class="text-danger">Remove</span></a></td>
                </tr>
                <?php

            }
        }
        ?>
    </table>
</div>
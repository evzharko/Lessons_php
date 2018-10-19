<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 19.10.2018
 * Time: 20:05
 */

require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

?>

<table border="1" width="100%">
    <tr>
        <td>id</td>
        <td>email</td>
        <td>name</td>
        <td>phone</td>
        <td>create_date</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
    <tr>
        <?php foreach ($row_all_assoc as $value): ?>
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['phone'] ?></td>
        <td><?php echo $value['create_date'] ?></td>
        <td><a href="./update.php?id=<?php echo $value['id'] ?>">Update</a></td>
        <td><a href="./delete.php?id=<?php echo $value['id'] ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    </tr>

</table>

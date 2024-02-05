<?php require_once('templates/top.php') ?>
    Contact<br/>
    <form action="/utils/sender.php" method="post">
        <input type="text" name="name"/>
        <input type="submit" value="Отправить"/>
    </form>
<?php require_once('templates/bottom.php') ?>
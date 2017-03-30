<h1>Contacts!</h1>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    
</head>
<body>
    
    <h1>Form</h1>
    <b><?=getFlash() ?></b>
    
    <form method="post">
        <input type="name" name="username" value="<?=requestPost('username') ?>"><br>
        <input type="email" name="email" value="<?=requestPost('email') ?>"><br>
        <textarea name="message"><?=requestPost('message') ?></textarea><br>
        <button>GO</button>
    </form>
    
    <hr>
    
    <?php foreach ($messages as $key => $message) : ?>
        
        <i><?=$message['username']?></i><br>
        <?=$message['message']?>
        
        <a href="#">Delete</a>
    <hr>
    <?php endforeach ?>

</body>
</html>
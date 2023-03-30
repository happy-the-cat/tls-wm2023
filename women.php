<!DOCTYPE html>
<html lang="en">
<?php require_once 'modules/head.php'; ?>
<body>
    <?php
        //access women.json
        $women = json_decode(file_get_contents('./json/women.json'), true);

        //find woman from women.json
        $id = $_GET['w'];
        $woman = null;
        if (isset($women[$id])) {
            $woman = $women[$id];
        } else {
            header('Location: index.php');
            exit();
        }
    ?>

    <div id="women-container">
        <div id="img-holder"><a href="<?php echo $woman['img-link'] ?>" target="_blank"><img id="women-img" src="<?php echo $woman['img-path'] ?>" alt="<?php echo $woman['name'] ?>"></a></div>
        <div id="content-holder">
            <div id="content-pt1">
                <p id="women-name"><?php echo $woman['name'] ?></p>
                <p id="women-intro"><?php echo $woman['intro'] ?></p>
            </div>
            <div id="content-pt2">
                <p class="content-label">Contributions:</p>
                <ul id="women-contrib">
                    <?php foreach($woman['contributions'] as $contribution){ ?>
                    <li class="contrib-item"><?php echo $contribution ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div id="content-pt3">
                <p class="content-label">Awards:</p>
                <ul id="women-awards">
                    <?php foreach($woman['awards'] as $award){ ?> 
                    <li class="award-item"><?php echo $award ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <button id="home-btn"><a href="index.php"><i class="bi bi-house-heart-fill"></i></a></button>

    <?php require_once 'modules/footer.php'; ?>
</body>
</html>

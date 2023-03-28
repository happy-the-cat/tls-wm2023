<div id="comic-container">

    <!-- Uses Bootstrap Carousel -->
    <div id="comic-carousel" class="carousel slide carousel-dark" data-bs-ride="false" data-bs-wrap="false">
    <div class="carousel-inner">
        <?php 
        for($i=1; $i<11; $i++){
            $img[$i] = "$i.PNG";
        ?>
        <div class="carousel-item <?php if($i == 1){ echo "active"; }?>">
        <img src="./assets/comic/<?php echo $img[$i]?>" class="d-block w-100" alt="<?php echo "Slide $i"?>">
        </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#comic-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#comic-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    
</div>
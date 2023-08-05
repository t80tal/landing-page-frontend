<?php
function getSlide($price, $imageFileName, $title)
{ ?>
    <div class="slider-item">
        <img src=<?php echo "./public/media/" . $imageFileName ?> alt="France view" class="slider-image">
        <h1 class="slider-title">
            <?php echo $title; ?>
        </h1>
        <h2 class="slider-price">$
            <?php echo $price; ?>
        </h2>
        <a href="#offer">
            <button class="slider-button">BUY NOW!</button>
        </a>
    </div>
    <?php
}
function getSlider()
{
    ?>
    <section class="slider">
        <div class="slider-sub-container">
            <?php
            getSlide(108, "france.jpg", "VISIT</br> EIFFEL</br> TOWER");
            getSlide(119, "new_york.jpg", "VISIT</br> NEW</br> YORK");
            getSlide(109, "dubai.jpg", "COME</br> VISIT</br> DUBAI");
            getSlide(129, "istanbul.jpg", "COME</br> VISIT</br> ISTANBUL");
            ?>
        </div>
    </section>
    <?php
}
?>
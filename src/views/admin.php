<html>
<?php

require __DIR__ . '/../db.php';
require __DIR__ . '/head.php';
require __DIR__ . '/footer.php';

getHead("");

?>

<body>
    <nav>
        <div class="navbar-item">
            <img class="logo" src="./public/media/logo.png" alt="Visio IO logo, plance icon">
        </div>
        <div class="navbar-item">
            <h3 class="navbar-link active">France</h3>
            <h3 class="navbar-link">New York</h3>
            <h3 class="navbar-link">Dubai</h3>
            <h3 class="navbar-link">Istanbul</h3>
        </div>
        <div class="navbar-item">
            <span class="navbar-badge">40% DISCOUNT!</span>
        </div>
    </nav>

    <section class="slider">
        <div class="slider-sub-container">
            <div class="slider-item">
                <img src="./public/media/france.jpg" alt="France view" class="slider-image">
                <h1 class="slider-title">VISIT</br> EIFFEL</br> TOWER</h1>
                <h2 class="slider-price">$119</h2>
                <a href="#offer">
                    <button class="slider-button">BUY NOW!</button>
                </a>
            </div>
            <div class="slider-item">
                <img src="./public/media/new_york.jpg" alt="New York view" class="slider-image">
                <h1 class="slider-title">VISIT</br> NEW</br> YORK</h1>
                <h2 class="slider-price">$119</h2>
                <a href="#offer">
                    <button class="slider-button">BUY NOW!</button>
                </a>
            </div>
            <div class="slider-item">
                <img src="./public/media/dubai.jpg" alt="Dubai view" class="slider-image">
                <h1 class="slider-title">COME</br> VISIT</br> DUBAI</h1>
                <h2 class="slider-price">$109</h2>
                <a href="#offer">
                    <button class="slider-button">BUY NOW!</button>
                </a>
            </div>
            <div class="slider-item">
                <img src="./public/media/istanbul.jpg" alt="Istanbul view" class="slider-image">
                <h1 class="slider-title">COME</br> VISIT</br> ISTANBUL</h1>
                <h2 class="slider-price">$129</h2>
                <a href="#offer">
                    <button class="slider-button">BUY NOW!</button>
                </a>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" viewBox="0 0 16 16"
                aria-labelledby="plane-title plane-desc">
                <title id="plane-title">Air Plane Icon</title>
                <desc id="plane-desc">V.I.P Seats.</desc>
                <path
                    d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0ZM7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1c.213 0 .458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7V3Z" />
            </svg>
            <span class="feature-title">V.I.P SEATS</span>
            <span class="feature-desc">VIP seats are included in all orders.</span>
        </div>
        <div class="feature">
            <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" viewBox="0 0 16 16"
                aria-labelledby="wallet-title wallet-desc">
                <title id="wallet-title">Wallet Icon</title>
                <desc id="wallet-desc">Refund in 20 days.</desc>
                <path
                    d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
            </svg>
            <span class="feature-title">20 DAYS RETURN</span>
            <span class="feature-desc">No question return and easy refund in 20 days.</span>
        </div>
        <div class="feature">
            <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" viewBox="0 0 16 16"
                aria-labelledby="gift-title gift-desc">
                <title id="gift-title">Gift Icon</title>
                <desc id="gift-desc">Buy gift tickets directly to your friends.</desc>
                <path
                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
            </svg>
            <span class="feature-title">GIFT TICKETS</span>
            <span class="feature-desc">Buy gift tickets directly to your friends.</span>
        </div>
        <div class="feature">
            <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" viewBox="0 0 16 16"
                aria-labelledby="phone-title phone-desc">
                <title id="phone-title">Phone Icon</title>
                <desc id="phone-desc">Contact us easily if needed.</desc>
                <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
            <span class="feature-title">CONTACT US!</span>
            <span class="feature-desc">Keep in touch via email and support system.</span>
        </div>
    </section>

    <section id="offer" role="img" aria-label="Air plane background">
        <div class="offer-form">
            <div>
                <h1 class="offer-form-title">Get your offer now!</h1>
                <p class="offer-form-text">Type your information and we will call you as soon as possible.</p>
            </div>
            <input class="offer-form-input" placeholder="Full Name" />
            <input class="offer-form-input" placeholder="Email Address" />
            <input class="offer-form-input" placeholder="Phone Number" />
            <div class="offer-form-lines">
                <span class="offer-form-line"></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="offer-form-icon" viewBox="0 0 16 16"
                    aria-labelledby="small-plane-title small-plane-desc">
                    <title id="small-plane-title">Air Plane Icon</title>
                    <desc id="small-plane-desc">Air plane for styling (above the submti button).</desc>
                    <path
                        d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0ZM7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1c.213 0 .458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7V3Z" />
                </svg>
                <span class="offer-form-line"></span>
            </div>
            <button class="offer-form-button">Send</button>
        </div>
    </section>

    <section class="gallery">
        <div class="gallery-item">
            <h1 class="gallery-title">Best Places</h1>
            <img src="./public/media/hotel.jpg" alt="Hotel swimming pool." class="gallery-image">
        </div>
        <div class="gallery-item">
            <img src="./public/media/plane.jpg" alt="Air plance and clouds." class="gallery-image">
            <h1 class="gallery-title">Quick Flights</h1>
        </div>
        <div class="gallery-item">
            <h1 class="gallery-title">Most Delicious Food</h1>
            <img src="./public/media/food.jpg" alt="Pancakes with syrup" class="gallery-image">
        </div>
    </section>

    <section class="discount">
        <div class="discount-item">
            <img src="./public/media/france2.jpg" alt="France view" class="discount-image">
        </div>
        <div class="discount-item">
            <h3 class="discount-text">BEST WINTER TRIPS</h3>
            <h1 class="discount-title">40% DISCOUNT</h1>
        </div>
        <div class="discount-item">
            <img src="./public/media/france3.jpg" alt="France view" class="discount-image">
        </div>
    </section>

    <?php getFooter(); ?>
    <script src="./public/js/scripts.js"></script>
</body>

</html>
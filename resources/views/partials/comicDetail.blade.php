<section>
    <div class="top-container">
        <div class="top-container__hero">
        </div>
        <div class="top-container__cover-section">
            <div class="container">
                <div class="top-container__cover">
                    <img src="{{ $comics[0]['thumb'] }}" alt="">
                    <div class="top-left-tag">
                        <p>comic book</p>
                    </div>
                    <div class="bottom-tag">
                        <p>view gallery</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-container__content-section__wrapper">
            <div class="container">
                <div class="top-container__content-section">
                    <div class="top-container__content">
                        <h1>{{ $comics[0]['title'] }}</h1>
                        <div class="strange-green-thing__container">
                            <div class="strange-green-thing__price">
                                <p>
                                    U.S. Price:
                                    <span>{{ $comics[0]['price'] }}</span>
                                </p>
                                <div class="strange-green-thing__price-disponibility">
                                    <p>AVAILABLE</p>
                                </div>
                            </div>
                            <div class="strange-green-thing__check-disponibility">
                                <p>Check Availability</p>
                            </div>
                        </div>
                        <p>{{ $comics[0]['description'] }}</p>
                    </div>
                    <div class="advertising-section">
                        <p class="adv-identity">Advertisement</p>
                        <img src="assets/adv.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="specific-container">
            <div class="container">
                <div class="specific-container__wrapper">
                    <div class="specific__talent">
                        <div class="specific__talent-box">
                            <h2>Talent</h2>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>Art by:</h4>
                                <p>
                                    @foreach ($comics[0]['artists'] as $artist)
                                        <span class="artist">{{ $artist }}</span>,
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>Written by:</h4>
                                <p>
                                    @foreach ($comics[0]['writers'] as $writer)
                                        <span class="artist">{{ $writer }}</span>,
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                     <div class="specific__talent">
                        <div class="specific__talent-box">
                            <h2>Specs</h2>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>Series:</h4>
                                <p>
                                   <span class="serie">{{ $comics[0]['series'] }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>U.S. Price:</h4>
                                <p>
                                    {{ $comics[0]['price'] }}
                                </p>
                            </div>
                        </div>
                         <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>On Sale Date:</h4>
                                <p>
                                    {{ $comics[0]['sale_date'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="additional-banner">
            <div class="container">
                <div class="additional-banner-wrapper">
                    <div class="additional-banner-wrapper__content">
                        <h5>Digital Comics</h5>
                        <div class="img img-1"></div>
                    </div>
                    <div class="additional-banner-wrapper__content">
                        <h5>Shop dc</h5>
                        <div class="img img-2"></div>
                    </div>
                    <div class="additional-banner-wrapper__content">
                        <h5>Comic shop locator</h5>
                        <div class="img img-3"></div>
                    </div>
                    <div class="additional-banner-wrapper__content">
                        <h5>Subscriptions</h5>
                        <div class="img img-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

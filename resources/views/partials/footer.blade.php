<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style lang="scss">
    .back-blu {
        background-color: #0282f9;
    }
    
    .back-main {
        background-color: #0282f9;
        height: 134px;
    }
    
    .width-img {
        width: 50px;
        object-fit: contain;
    }
    
    .white {
        color: white;
    }
    
    .center-main {
        justify-content: space-around;
        align-items: center;
    }
    
    .back-img {
        background-image: url({{ Vite::asset('resources/img/footer-bg.jpg') }});
        position: relative;
        z-index: -2;
        height: 330px;
    }
    
    .img-big {
        width: 440px;
        margin-top: -70px;
        margin-bottom: -40px;
    }
    
    .z-index {
        position: relative;
        z-index: -1;
    }
    
    .pad {
        padding-top: 30px;
        padding-bottom: 30px;
    }
    
    .pad-reset {
        padding-bottom: 0px;
    }
    
    .grey {
        color: grey;
        padding-top: 3px;
    }
    
    .mini-title {
        padding-bottom: 10px;
    }
    
    .mini-title-shop {
        padding-top: 10px;
    }
    
    .gap-list {
        gap: 15px;
        padding-top: 25px;
        padding-bottom: 40px;
    }
    
    .gap-img {
        gap: 15px;
    }
    
    .background-social {
        background-color: #303030;
    }
    
    .follow-color {
        color: #0282f9;
        padding-right: 10px;
        align-items: center;
        font-family: math;
    }
    
    .pad-last {
        padding-top: 30px;
        padding-bottom: 30px;
    }
    
    .button-sing {
        border: 1px solid #0282f9;
        background-color: #303030;
        padding: 10px 5px;
    }
    </style>
<body>
    <footer>
        <div class="back-main">
            <div class="container">
                <div class="back-blu flex center-main pad">
                    <div class="flex center-main gap-img">
                        <img class="width-img" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">                       
                        <p class="white">DIGITAL COMICS</p>
                    </div>
                    <div class="flex center-main gap-img">
                        <img class="width-img" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">                       
                        <p class="white">DC MERCHANDISE</p>
                    </div>
                    <div class="flex center-main gap-img">
                        <img class="width-img" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">                     
                        <p class="white">SUBSCRIPTION</p>
                    </div>
                    <div class="flex center-main gap-img">
                        <img class="width-img" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">  
                        <p class="white">COMIC SHOP LOCATOR</p>
                    </div>
                    <div class="flex center-main gap-img">
                        <img class="width-img" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                       
                        <p class="white">DC POWER VISA</p>
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
    
        <div class="back-img ">
            <div class="flex pad-reset container center-items">
                <div>
                    <nav class="flex gap-list">
                        <div>
                            <h4 class="upsize white mini-title">dc comics</h4>
                            <ul>
                                <li class="grey">Characters</li>
                                <li class="grey">Comics</li>
                                <li class="grey">Movies</li>
                                <li class="grey">Tv</li>
                                <li class="grey">Games</li>
                                <li class="grey">Videos</li>
                                <li class="grey">News</li>
                            </ul>
    
                            <div>
                                <h4 class="upsize white mini-title mini-title-shop">
                                    shop
                                </h4>
                                <ul>
                                    <li class="grey">Shop DC</li>
                                    <li class="grey">Shop DC Collectibles</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h4 class="upsize white mini-title">
                                dc
                            </h4>
                            <ul>
                                <li class="grey">Terms OF Use</li>
                                <li class="grey">Privacy policy(New)</li>
                                <li class="grey">Ad Choinces</li>
                                <li class="grey">Advertisting</li>
                                <li class="grey">Jobs</li>
                                <li class="grey">Subscriptions</li>
                                <li class="grey">Talent WorkShops</li>
                                <li class="grey">CPSC Certificates</li>
                                <li class="grey">Rating</li>
                                <li class="grey">Shop Help</li>
                                <li class="grey">Contact Us</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="upsize white mini-title">
                                sites
                            </h4>
                            <ul>
                                <li class="grey">DC</li>
                                <li class="grey">MAD Magazine</li>
                                <li class="grey">Dc Kids</li>
                                <li class="grey">Dc Universe</li>
                                <li class="grey">DC Power Visa</li>
                            </ul>
                        </div>
                    </nav>
    
                </div>
                <div>
                    <img class="img-big z-index" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
                    
    
    
                </div>
            </div>
    
        </div>
    
        <div class="background-social">
            <div class="flex container center-items pad-last">
                <div>
                    <button class="upsize button-sing white bold">
                        sing-up now!
                    </button>
                </div>
                <div class="flex">
                    <h3 class="upsize flex follow-color">
                        follow us
    
                    </h3>
                    <ul class="flex justify-content-list">
                        
                        <li>
                            <img  src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">

                        </li>
                        <li>
                            <img  src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">

                        </li>
                        <li>
                            <img  src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">

                        </li>
                        <li>
                            <img  src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">

                        </li>
                        <li>
                            <img  src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">

                        </li>
    
                    </ul>
                </div>
    
            </div>
    
    
        </div>
    </footer>
    
</body>
</html>
@extends('pages.main_master')
@section('main')
@section('title', 'Home ')
    <main>
        <div class="it-hero-2-area it-hero-2-ptb p-relative z-index fix black-bg">
            <div class=it-hero-2-shape-2>
                <img src="assets/img/hero/shape-2-2.png" alt="">
            </div>
            <div class=it-hero-2-shape-3>
                <img src="assets/img/hero/shape-2-3.png" alt="">
            </div>
            <div class="it-hero-2-shape-4 d-none d-lg-block">
                <img src="assets/img/hero/shape-2-4.png" alt="">
            </div>
            <div class="it-hero-2-shape-5 d-none d-md-block">
                <img src="assets/img/hero/shape-2-5.png" alt="">
            </div>
            <div class="it-hero-2-shape-6 d-none d-lg-block">
                <img src="assets/img/hero/shape-2-6.png" alt="">
            </div>
            <div class=container>
                <div class="row align-items-xxl-end align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="it-hero-content mb-75">
                            <div class="it-hero-title-box pb-20">
                                <h1 class="it-hero-title text-white wow itfadeUp" data-wow-duration=.9s data-wow-delay=.3s>
                                    Healing Streams Live Healing Services  <br>with - <span> Pastor Chris!</span></h1>
                            </div>
                            <div class="it-hero-text pb-15 wow itfadeUp" data-wow-duration=.9s data-wow-delay=.5s>
                                <p class=text-white>Join us for a special live show where kids just like you can learn about
                                    God’s love and power to make us feel better! Pastor Chris will pray with us, share happy
                                    stories, and help everyone feel strong and joyful. <br>
                                    Don’t miss the fun—it’s time for miracles!</p>
                            </div>
                            <div class="it-hero-button wow itfadeUp" data-wow-duration=.9s data-wow-delay=.7s>
                                <a class="it-btn circle-effect theme-style" href="" data-bs-toggle="modal" data-bs-target="#healingRegistrationModal">
                                    <span>Tap here to join the healing fun—see you there! 🌟
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="it-hero-2-thumb-box text-center text-lg-start p-relative z-index">
                            <div class="it-hero-2-thumb p-relative" data-mask-src="assets/img/hero/Image.png">
                                <img src="assets/img/hero/pastor-chris.png" alt="">
                            </div>
                            <div class=it-hero-2-shape-1>
                                <img src="assets/img/hero/shape-2-1.png" alt="">
                            </div>
                            <div class="it-hero-2-shape-7 d-none d-md-block">
                                <img src="assets/img/hero/shape-1-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-about-3-area p-relative pt-130 pb-120">
            <div class="it-about-3-shape-6 d-none d-xl-block">
                <img src="assets/img/about/shape-3-6.png" alt="">
            </div>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class=it-about-3-left>
                            <div class=it-about-3-title-box>
                                <span class=it-section-subtitle>About us</span>
                                <h3 class="it-section-title pb-20">Super Cool Healing Time with
                                    <span>Pastor Chris!</span>
                                </h3>
                                <div class="it-about-3-text pb-10">
                                    <p>Get ready for an amazing live event where kids can experience God’s love and healing
                                        power! Pastor Chris will share fun stories, pray with us, and help everyone feel
                                        happy and strong. It’s like a big, joyful party where miracles happen!</p>
                                </div>
                                <div class="it-about-3-text pb-10">
                                    <p>This special show is for kids all around the world—millions have already joined in!
                                        Don’t miss out—mark your calendar for Friday, July 18th to Sunday, July 20th, 2025!
                                    </p>
                                </div>
                            </div>
                            <div class="it-about-3-wrap mb-20">
                                <div class="row gx-20">
                                    {{-- <div class="col-md-6 col-sm-6 mb-20">
                                        <div class="it-about-3-icon-box d-flex align-items-center">
                                            <div class=it-about-3-icon>
                                                <span><i class=flaticon-education></i></span>
                                            </div>
                                            <div class=it-about-3-text>
                                                <span>Quality Education</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 mb-20">
                                        <div class="it-about-3-icon-box d-flex align-items-center">
                                            <div class=it-about-3-icon>
                                                <span><i class=flaticon-insurance></i></span>
                                            </div>
                                            <div class=it-about-3-text>
                                                <span>Safety and security</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 mb-20">
                                        <div class="it-about-3-icon-box d-flex align-items-center">
                                            <div class=it-about-3-icon>
                                                <span><i class=flaticon-education></i></span>
                                            </div>
                                            <div class=it-about-3-text>
                                                <span>Play to learn</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 mb-20">
                                        <div class="it-about-3-icon-box d-flex align-items-center">
                                            <div class=it-about-3-icon>
                                                <span><i class=flaticon-insurance></i></span>
                                            </div>
                                            <div class=it-about-3-text>
                                                <span>Home like environment</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <a class="it-btn circle-effect" href="/about">
                                <span>
                                    Let’s see God’s power together! ✨
                                    <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                            fill=currentcolor />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6  wow itfadeRight" data-wow-duration=.9s data-wow-delay=.7s>
                        <div class="it-about-3-thumb-box p-relative text-end">
                            <div class=it-about-3-thumb data-mask-src="assets/img/about/Image.png">
                                <img src="assets/img/about/thumb-3-1.jpg" alt="">
                            </div>
                            <div class=it-about-3-shape-1>
                                <img src="assets/img/about/shape-3-1.png" alt="">
                            </div>
                            <div class="it-about-3-shape-2 d-none d-md-block">
                                <img src="assets/img/about/shape-3-2.png" alt="">
                            </div>
                            <div class="it-about-3-shape-3 d-none d-xxl-block">
                                <img src="assets/img/about/shape-3-3.png" alt="">
                            </div>
                            <div class="it-about-3-shape-5 d-none d-md-block">
                                <img src="assets/img/about/shape-3-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-program-2-area it-program-2-ptb z-index p-relative fix theme-bg">
            <div class="it-program-2-shape-2 d-none d-lg-block">
                <img src="assets/img/program/shape-1-2.png" alt="">
            </div>
            <div class="it-program-2-shape-3 d-none d-lg-block">
                <img src="assets/img/program/shape-1-3.png" alt="">
            </div>
            <div class="it-program-2-shape-4 d-none d-xxl-block">
                <img src="assets/img/program/shape-1-4.png" alt="">
            </div>
            <div class=it-program-2-shape-5>
                <img src="assets/img/program/shape-1-5.png" alt="">
            </div>
            <div class=it-program-2-shape-6>
                <img src="assets/img/program/shape-1-6.png" alt="">
            </div>
            <div class=container>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="it-program-2-title-box text-center mb-45">
                            <span class="it-section-subtitle text-black">🌟 Change the World in 4 Fun Steps with Healing
                                Streams! 🌟</span>
                            <h3 class="it-section-title text-white pb-20">Here’s how YOU can help share God’s love and
                                miracles:</h3>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow itfadeUp" data-wow-duration=.9s
                        data-wow-delay=.3s>
                        <div class="it-program-2-item z-index text-center p-relative h-100">
                            <div class=it-program-2-shape-1>
                                <img src="assets/img/program/shape-1-1.png" alt="">
                            </div>
                            <div class="it-program-2-thumb mb-25">
                                <img src="https://cdn1.kingschat.online/uploads/media/640b4b6003738acc991806ca/bWoyQTdUNnB4di9nc1E0REhDb3NnQT09/1000720380.jpg" alt="">
                            </div>
                            <div class=it-program-content>
                                <span style="font-size: 20px"> "Team up with God!"</span>
                                <h4 class="it-program-title mb-10">PRAYER 🙏</h4>
                                <p>Pray every day for Healing Streams—and ask your friends and family to join too!</p>
                            </div>
                            <div class=it-program-link>
                                <a href="https://prayerclouds.org/">
                                    <svg width=20 height=16 viewBox="0 0 20 16" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M0 8.0002C0 7.55836 0.358176 7.2002 0.800001 7.2002H18.4C18.8419 7.2002 19.2 7.55836 19.2 8.0002C19.2 8.44204 18.8419 8.8002 18.4 8.8002H0.800001C0.358176 8.8002 0 8.44204 0 8.0002Z"
                                            fill=currentcolor />
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M10.6342 0.234312C10.9466 -0.0781041 11.4532 -0.0781041 11.7656 0.234312L18.9656 7.43433C19.278 7.74673 19.278 8.25329 18.9656 8.56569L11.7656 15.7657C11.4532 16.0781 10.9466 16.0781 10.6342 15.7657C10.3218 15.4533 10.3218 14.9467 10.6342 14.6343L17.2685 8.00001L10.6342 1.36569C10.3218 1.05327 10.3218 0.546737 10.6342 0.234312Z"
                                            fill=currentcolor />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow itfadeUp" data-wow-duration=.9s
                        data-wow-delay=.5s>
                        <div class="it-program-2-item z-index text-center p-relative h-100">
                            <div class=it-program-2-shape-1>
                                <img src="assets/img/program/shape-1-1.png" alt="">
                            </div>
                            <div class="it-program-2-thumb mb-25">
                                <img src="https://hsch.ceflixcdn.com/herald/the-herald-logo.png" alt="">
                            </div>
                            <div class=it-program-content>
                                <span style="font-size: 20px">"Be a super-sharer!"</span>
                                <h4 class="it-program-title mb-10">PUBLICITY 📣</h4>
                                <p>Tell everyone about Healing Streams using the H.E.R.A.L.D platform—like a
                                    mini-missionary!</p>
                            </div>
                            <div class=it-program-link>
                                <a href="https://herald.healingstreams.tv/">
                                    <svg width=20 height=16 viewBox="0 0 20 16" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M0 8.0002C0 7.55836 0.358176 7.2002 0.800001 7.2002H18.4C18.8419 7.2002 19.2 7.55836 19.2 8.0002C19.2 8.44204 18.8419 8.8002 18.4 8.8002H0.800001C0.358176 8.8002 0 8.44204 0 8.0002Z"
                                            fill=currentcolor />
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M10.6342 0.234312C10.9466 -0.0781041 11.4532 -0.0781041 11.7656 0.234312L18.9656 7.43433C19.278 7.74673 19.278 8.25329 18.9656 8.56569L11.7656 15.7657C11.4532 16.0781 10.9466 16.0781 10.6342 15.7657C10.3218 15.4533 10.3218 14.9467 10.6342 14.6343L17.2685 8.00001L10.6342 1.36569C10.3218 1.05327 10.3218 0.546737 10.6342 0.234312Z"
                                            fill=currentcolor />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow itfadeUp" data-wow-duration=.9s
                        data-wow-delay=.7s>
                        <div class="it-program-2-item z-index text-center p-relative h-100">
                            <div class=it-program-2-shape-1>
                                <img src="assets/img/program/shape-1-1.png" alt="">
                            </div>
                            <div class="it-program-2-thumb mb-25">
                                <img src="https://hsch.ceflixcdn.com/hslhs/mar25/healing-every.png" alt="">
                            </div>
                            <div class=it-program-content>
                                <span style="font-size: 20px">"Cover the globe with God’s love!"</span>
                                <h4 class="it-program-title mb-10">PENETRATION 🌍</h4>
                                <p>Help reach homes, streets, cities, and even faraway countries in their own languages!</p>
                            </div>
                            <div class=it-program-link>
                                <a href="https://httnmagazine.org/shield">
                                    <svg width=20 height=16 viewBox="0 0 20 16" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M0 8.0002C0 7.55836 0.358176 7.2002 0.800001 7.2002H18.4C18.8419 7.2002 19.2 7.55836 19.2 8.0002C19.2 8.44204 18.8419 8.8002 18.4 8.8002H0.800001C0.358176 8.8002 0 8.44204 0 8.0002Z"
                                            fill=currentcolor />
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M10.6342 0.234312C10.9466 -0.0781041 11.4532 -0.0781041 11.7656 0.234312L18.9656 7.43433C19.278 7.74673 19.278 8.25329 18.9656 8.56569L11.7656 15.7657C11.4532 16.0781 10.9466 16.0781 10.6342 15.7657C10.3218 15.4533 10.3218 14.9467 10.6342 14.6343L17.2685 8.00001L10.6342 1.36569C10.3218 1.05327 10.3218 0.546737 10.6342 0.234312Z"
                                            fill=currentcolor />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow itfadeUp" data-wow-duration=.9s
                        data-wow-delay=.9s>
                        <div class="it-program-2-item z-index text-center p-relative h-100">
                            <div class=it-program-2-shape-1>
                                <img src="assets/img/program/shape-1-1.png" alt="">
                            </div>
                            <div class="it-program-2-thumb mb-25">
                                <img src="https://hsch.ceflixcdn.com/hslhs/mar25/50days.png" alt="">
                            </div>
                            <div class=it-program-content>
                                <span style="font-size: 20px">"Join God’s dream team!"</span>
                                <h4 class="it-program-title mb-10">PARTNERSHIP 🤝</h4>
                                <p>Partner with us to bring Jesus’ healing to the whole world!</p>
                            </div>
                            <div class=it-program-link>
                                <a href="https://healingstreams.tv/donate.php?rl=5">
                                    <svg width=20 height=16 viewBox="0 0 20 16" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M0 8.0002C0 7.55836 0.358176 7.2002 0.800001 7.2002H18.4C18.8419 7.2002 19.2 7.55836 19.2 8.0002C19.2 8.44204 18.8419 8.8002 18.4 8.8002H0.800001C0.358176 8.8002 0 8.44204 0 8.0002Z"
                                            fill=currentcolor />
                                        <path fill-rule=evenodd clip-rule=evenodd
                                            d="M10.6342 0.234312C10.9466 -0.0781041 11.4532 -0.0781041 11.7656 0.234312L18.9656 7.43433C19.278 7.74673 19.278 8.25329 18.9656 8.56569L11.7656 15.7657C11.4532 16.0781 10.9466 16.0781 10.6342 15.7657C10.3218 15.4533 10.3218 14.9467 10.6342 14.6343L17.2685 8.00001L10.6342 1.36569C10.3218 1.05327 10.3218 0.546737 10.6342 0.234312Z"
                                            fill=currentcolor />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-testimonial-area  mt-120 mb-145">
            <div class=container>
                <div class=row>
                    <div class=col-xl-12>
                        <div class="it-testimonial-box it-testimonial-pt text-center p-relative">
                            <div class=it-testimonial-bg>
                                <img src="assets/img/testimonial/bg-1-1.png" alt="">
                            </div>
                            <div class=it-testimonial-section-title>
                                <span class=it-section-subtitle>Testimonies</span>
                                <h3 class=it-section-title>What Parents Say</h3>
                            </div>
                            <div class="it-testimonial-shape-1 d-none d-lg-block">
                                <img src="assets/img/testimonial/shape-1-1.png" alt="">
                            </div>
                            <div class="it-testimonial-shape-2 d-none d-lg-block">
                                <img src="assets/img/testimonial/shape-1-2.png" alt="">
                            </div>
                            <div class="it-testimonial-shape-3 d-none d-lg-block">
                                <span>
                                    <svg width=80 height=60 viewBox="0 0 80 60" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.684 0C30.6718 0 38.6254 9.32996 38.6254 22.9052C38.6254 42.7317 23.8216 56.7736 2.62738 59.4793C2.22086 59.5155 1.81481 59.4063 1.47942 59.1704C1.14403 58.9345 0.900599 58.5868 0.791378 58.1878C0.682156 57.7888 0.714017 57.3635 0.881452 56.9859C1.04889 56.6083 1.34114 56.3023 1.70783 56.1206C9.84529 52.4819 13.9831 47.8167 14.4888 43.1984C14.7736 41.7621 14.5521 40.2698 13.8631 38.9823C13.1741 37.6948 12.0612 36.6939 10.7189 36.1541C4.69627 34.7079 0.696533 27.1039 0.696533 19.2667C0.696533 14.1568 2.69702 9.25629 6.25785 5.6431C9.81868 2.0299 14.6482 0 19.684 0Z"
                                            fill=currentcolor />
                                        <path
                                            d="M61.0597 0C72.0476 0 80.0011 9.32996 80.0011 22.9052C80.0011 42.7317 65.1973 56.7736 44.0031 59.4793C43.5966 59.5155 43.1905 59.4063 42.8552 59.1704C42.5198 58.9345 42.2763 58.5868 42.1671 58.1878C42.0579 57.7888 42.0897 57.3635 42.2572 56.9859C42.4246 56.6083 42.7169 56.3023 43.0836 56.1206C51.221 52.4819 55.3589 47.8167 55.8646 43.1984C56.1493 41.7621 55.9279 40.2698 55.2388 38.9823C54.5498 37.6948 53.4369 36.6939 52.0946 36.1541C46.072 34.7079 42.0723 27.1039 42.0723 19.2667C42.0723 14.1568 44.0728 9.25629 47.6336 5.6431C51.1944 2.0299 56.0239 0 61.0597 0Z"
                                            fill=currentcolor />
                                    </svg>
                                </span>
                            </div>
                            <div class="row justify-content-center">
                                <div class=col-xl-9>
                                    <div class="it-testimonial-wrap p-relative">
                                        <div class="it-testimonial-arrow-box d-none d-xl-block">
                                            <button class=testimonial-prev>
                                                <i class="fal fa-long-arrow-left"></i>
                                            </button>
                                            <button class=testimonial-next>
                                                <i class="fal fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                        <div class="swiper-container it-testimonial-active">
                                            <div class=swiper-wrapper>
                                                <div class=swiper-slide>
                                                    <div class=it-testimonial-content>
                                                        <div class="it-testimonial-rate pb-10">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="it-testimonial-text pb-15">
                                                            <p>    As a mother, seeing my child gasp for breath and swell up in seconds was every parent’s nightmare. The diagnosis: anaphylactic reaction—a life-threatening allergy that kept me in constant fear. We prayed earnestly, often teary and desperate, reaching out to God through The Healing School.

    Then one morning, he tasted a food that should have triggered his allergy… but nothing happened. No anxiety, no swelling, no emergency. It felt like a miracle—God had touched him and taken the fear away. We can now enjoy meals together without the lurking dread, and our family is stronger in faith than ever. Praise God for His healing touch.</p>
                                                        </div>
                                                        {{-- <div
                                                            class="it-testimonial-author-box d-flex align-items-center justify-content-center">
                                                            <div class=it-testimonial-avata>
                                                                <img src="https://ui-avatars.com/api/?name=Parent&background=0D8ABC&color=fff&size=128&rounded=true&bold=true" alt="">
                                                            </div>
                                                            <div class="it-testimonial-author-info text-start">
                                                                <h6>Parent</h6>
                                                                <span>Developer</span>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                                <div class=swiper-slide>
                                                    <div class=it-testimonial-content>
                                                        <div class="it-testimonial-rate pb-10">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="it-testimonial-text pb-15">
                                                            <p>    When my son was diagnosed with severe autism at just eighteen months, my heart shattered. By age three, he couldn’t hold a spoon or respond to his name. Every therapy session left me hoping for progress but fearing disappointment.

    Then we encountered Pastor Chris at Enter The Healing School. We stepped into faith and held onto every promise of God’s Word. Gradually, his little hand reached out to us. He started making eye contact. He began feeding himself and started speaking full words we had prayed for.

    Today, he plays, laughs, learns, and lives like no one believed possible. Our family’s journey through fear has turned into a journey of supernatural hope. God truly restores what was broken—and gives us strength when we thought all was lost. </p>
                                                        </div>
                                                        {{-- <div
                                                            class="it-testimonial-author-box d-flex align-items-center justify-content-center">
                                                            <div class=it-testimonial-avata>
                                                                <img src="https://ui-avatars.com/api/?name=Parent&background=0D8ABC&color=fff&size=128&rounded=true&bold=true" alt="">
                                                            </div>
                                                            <div class="it-testimonial-author-info text-start">
                                                                <h6>Parent</h6>
                                                                <span>Developer</span>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-funfact-area it-funfact-style-2 it-funfact-ptb p-relative fix black-bg">
            <div class="it-funfact-shape-1 d-none d-md-block">
                <img src="assets/img/funfact/shape-2-1.png" alt="">
            </div>
            <div class=container>
                <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-4 row-cols-sm-2 row-cols-1">
                    <div class=col>
                        <div class="it-funfact-item d-flex justify-content-center">
                            <div class=it-funfact-icon>
                                <span>
                                    <svg width=60 height=60 viewBox="0 0 60 60" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32.9023 13.5474H34.8378V17.4183H32.9023V13.5474Z" fill=currentcolor />
                                        <path
                                            d="M27.0966 12.5809C27.0966 12.0468 27.5302 11.6132 28.0643 11.6132C28.5985 11.6132 29.0321 12.0468 29.0321 12.5809V13.5487H30.9675V12.5809C30.9675 10.9803 29.665 9.67773 28.0643 9.67773C26.4637 9.67773 25.1611 10.9803 25.1611 12.5809V13.5487H27.0966V12.5809Z"
                                            fill=currentcolor />
                                        <path
                                            d="M38.7109 12.5809C38.7109 12.0468 39.1445 11.6132 39.6786 11.6132C40.2127 11.6132 40.6463 12.0468 40.6463 12.5809V13.5487H42.5818V12.5809C42.5818 10.9803 41.2793 9.67773 39.6786 9.67773C38.0779 9.67773 36.7754 10.9803 36.7754 12.5809V13.5487H38.7109V12.5809Z"
                                            fill=currentcolor />
                                        <path
                                            d="M30.6827 19.071L29.3143 17.7026L26.4111 20.6058L27.7795 21.9742L28.5625 21.1913C30.0257 22.5016 31.8895 23.2255 33.8694 23.2255C35.8494 23.2255 37.7133 22.5016 39.1765 21.1913L39.9594 21.9742L41.3278 20.6058L38.4246 17.7026L37.0562 19.071L37.8081 19.8229C36.7126 20.7693 35.3317 21.29 33.8694 21.29C32.4072 21.29 31.0262 20.7693 29.9307 19.8229L30.6827 19.071Z"
                                            fill=currentcolor />
                                        <path
                                            d="M10.6454 19.3555C9.04473 19.3555 7.74219 20.658 7.74219 22.2587C7.74219 23.8593 9.04473 25.1619 10.6454 25.1619C12.2461 25.1619 13.5486 23.8593 13.5486 22.2587C13.5486 20.658 12.2461 19.3555 10.6454 19.3555ZM10.6454 23.2263C10.1112 23.2263 9.67766 22.7927 9.67766 22.2586C9.67766 21.7244 10.1112 21.2908 10.6454 21.2908C11.1795 21.2908 11.6131 21.7244 11.6131 22.2586C11.6131 22.7927 11.1796 23.2263 10.6454 23.2263Z"
                                            fill=currentcolor />
                                        <path
                                            d="M59.9248 48.7018C59.7506 47.9461 59.2929 47.3034 58.6357 46.8922C58.1732 46.6029 57.6418 46.45 57.0961 46.45C56.0868 46.45 55.1665 46.9609 54.6342 47.8164C53.9636 48.8877 53.1604 49.8389 52.2575 50.6644V45.489C52.2575 44.7449 52.1327 44.0306 51.9101 43.3601L54.939 36.6982C56.7177 36.3498 58.0638 34.7821 58.0638 32.9027C58.0638 30.7679 56.3277 29.0318 54.1929 29.0318C52.0581 29.0318 50.322 30.7679 50.322 32.9027C50.322 33.6189 50.53 34.2807 50.8706 34.8566L46.8729 38.8543C46.72 38.8223 46.5642 38.8021 46.4084 38.7798C46.3125 37.7298 45.9952 36.7109 45.4504 35.8021L42.3526 30.6393C41.7458 29.629 40.901 28.8054 39.9237 28.2015C43.4714 26.7083 46.0417 23.3455 46.4036 19.3536H47.4188C50.0868 19.3536 52.2574 17.183 52.2574 14.515C52.2574 11.847 50.0868 9.67629 47.4188 9.67629H46.4017C45.9111 4.25988 41.3493 0 35.8062 0H31.9352C26.3921 0 21.8303 4.25988 21.3396 9.67723H20.3225C18.748 9.67723 17.3603 10.4447 16.4768 11.6127H13.412C13.022 9.85043 11.7504 8.38055 9.98426 7.79215L8.86359 7.41762L8.33613 11.635C6.35426 11.7463 4.48746 12.7256 3.29039 14.3223L1.62586 16.5423L4.19707 19.1135L1.65293 21.3403C0.601992 22.2596 0 23.5874 0 24.9819V26.1287C0 28.7967 2.17066 30.9674 4.83867 30.9674H9.91441L10.4631 32.8874C11.2267 35.5554 11.6127 38.3163 11.6127 41.0918C11.6127 43.9205 11.1918 46.7085 10.405 49.4123C9.98309 48.9139 9.59016 48.3846 9.23695 47.8194C8.70375 46.962 7.78348 46.451 6.77414 46.451C6.22934 46.451 5.69707 46.6039 5.23547 46.8933C4.57746 47.3046 4.11973 47.9471 3.94547 48.7029C3.77133 49.4577 3.90188 50.2368 4.3132 50.8948C7.87652 56.5965 14.0177 60 20.7425 60L43.1279 59.9991C49.8517 59.9991 55.9938 56.5946 59.557 50.8937C59.9684 50.2356 60.0989 49.4566 59.9248 48.7018ZM54.1929 30.9673C55.2604 30.9673 56.1284 31.8353 56.1284 32.9027C56.1284 33.9701 55.2604 34.8382 54.1929 34.8382C53.1255 34.8382 52.2574 33.9702 52.2574 32.9027C52.2574 31.8353 53.1255 30.9673 54.1929 30.9673ZM52.239 36.2249C52.4452 36.3468 52.6609 36.4494 52.8884 36.5307L50.7497 41.2349C50.2233 40.5836 49.5778 40.0349 48.849 39.6149L52.239 36.2249ZM46.3243 40.7306C48.5917 41.1332 50.3221 43.1084 50.3221 45.4889V52.1372C49.1057 52.8988 47.7702 53.4611 46.3602 53.8027C45.9441 50.5869 44.0677 47.8134 41.4315 46.1537C43.9225 45.4086 45.8337 43.3193 46.3243 40.7306ZM12.3252 32.3569L11.9177 30.9314C13.9703 30.7485 15.7403 29.3869 16.4012 27.4031L14.5664 26.7906C14.1184 28.1309 12.8691 29.0318 11.4561 29.0318H7.74211V28.7638C7.74211 25.9854 6.57691 23.3174 4.53598 21.3898L9.07359 17.4192H13.1952C14.2539 17.4192 15.2293 17.996 15.7393 18.9231L22.3635 30.9674H21.2903C19.1555 30.9674 17.4193 32.7035 17.4193 34.8383C17.4193 36.9731 19.1555 38.7093 21.2903 38.7093H27.6618C27.3027 39.3586 27.0966 40.0961 27.0966 40.8731V44.5641C22.1612 45.0189 18.1432 48.9043 17.5103 53.8039C15.4587 53.3055 13.5639 52.3398 11.9643 50.9782C13.0113 47.7827 13.5484 44.4615 13.5484 41.0919C13.5484 38.1352 13.1361 35.1962 12.3252 32.3569ZM21.3396 19.3546C21.808 24.5164 25.9731 28.6167 31.1611 28.9922L28.6924 30.9673H24.5708L17.7773 18.6132C18.5187 19.0748 19.3857 19.3546 20.3224 19.3546H21.3396ZM23.2256 36.7736V32.9027H25.1611V36.7737H23.2256V36.7736ZM21.2903 36.7736C20.2228 36.7736 19.3548 35.9055 19.3548 34.8381C19.3548 33.7706 20.2228 32.9026 21.2903 32.9026V36.7736ZM27.5543 48.756L28.2927 48.3862H32.903V49.354C32.903 49.8881 32.4694 50.3217 31.9352 50.3217H27.9231C27.4683 50.3217 27.0967 49.9501 27.0967 49.4953C27.0966 49.1798 27.2718 48.8964 27.5543 48.756ZM27.0966 46.5098V46.8205L26.6882 47.0247C25.7456 47.496 25.1611 48.4424 25.1611 49.4953C25.1611 51.0185 26.3998 52.2572 27.923 52.2572H31.9351C33.5358 52.2572 34.8383 50.9546 34.8383 49.354V46.4508H35.8061C40.2247 46.4508 43.9339 49.8195 44.4527 54.122C44.0153 54.1645 43.5741 54.1927 43.1279 54.1927L20.7415 54.1936C20.2954 54.1936 19.854 54.1656 19.4167 54.1229C19.8976 50.1389 23.1154 46.9589 27.0966 46.5098ZM44.4643 38.709C44.4973 38.9442 44.5157 39.1813 44.5157 39.4203C44.5157 42.2306 42.2309 44.5154 39.4206 44.5154H38.7093V43.5477C38.7093 40.8797 40.8799 38.709 43.5479 38.709H44.4643ZM43.7743 36.7736H43.5479C39.8135 36.7736 36.7738 39.8132 36.7738 43.5477V44.5154H34.8383V43.2777C34.8383 41.8822 34.0622 40.6271 32.8138 40.002L32.3677 39.7794L31.5015 41.5106L31.9477 41.7332C32.537 42.0273 32.9029 42.6196 32.9029 43.2777V46.4509H29.0319V40.8729C29.0319 39.969 29.5148 39.1639 30.2842 38.709H30.5774C31.6719 38.709 32.7451 38.3316 33.6006 37.6484L37.3786 34.6261L36.169 33.1136L32.391 36.1358C31.8771 36.5481 31.2336 36.7736 30.5775 36.7736H27.0966V32.9027H28.6314L30.2832 34.5546L31.6516 33.1862L30.4807 32.0153L32.7414 30.2066C33.6888 29.4498 34.8771 29.0318 36.0907 29.0318H36.0936C37.9671 29.0318 39.7284 30.0295 40.6923 31.6359L43.7743 36.7736ZM50.3221 14.5159C50.3221 16.1166 49.0195 17.4191 47.4189 17.4191H46.4511V16.0014L48.9237 14.3534L47.8505 12.7431L46.4511 13.676V11.6127H47.4189C49.0194 11.6127 50.3221 12.9152 50.3221 14.5159ZM23.2256 10.645C23.2256 6.80894 25.7214 3.54961 29.1732 2.39215L27.1991 6.34148L28.9303 7.20762L31.5558 1.95574C31.6826 1.94895 31.8074 1.93547 31.9351 1.93547H32.9029V7.74188H34.8383V1.93547H35.8061C35.9338 1.93547 36.0586 1.94906 36.1854 1.9548L38.8109 7.20668L40.5421 6.34055L38.5679 2.39121C42.0198 3.54961 44.5155 6.80883 44.5155 10.645V18.3867C44.5155 23.1895 40.6089 27.0962 35.8061 27.0962H31.9351C27.1323 27.0962 23.2256 23.1895 23.2256 18.3867V10.645ZM20.3225 11.6127H21.2903V13.6759L19.8919 12.743L18.8187 14.3532L21.2903 16.0013V17.419H20.3225C18.7219 17.419 17.4193 16.1164 17.4193 14.5158C17.4193 12.9151 18.7219 11.6127 20.3225 11.6127ZM15.8255 16.2723C15.1509 15.8339 14.3709 15.5687 13.5484 15.5078V13.5482H15.5816C15.5177 13.8607 15.4839 14.185 15.4839 14.5159C15.4839 15.1372 15.6116 15.7266 15.8255 16.2723ZM10.4613 10.2415C11.1775 10.8511 11.6129 11.754 11.6129 12.7372V15.4836H9.80625L10.4613 10.2415ZM4.18078 16.3604L4.83879 15.4836C5.62359 14.4384 6.80906 13.7591 8.09227 13.5907L7.7952 15.9646L5.65652 17.8362L4.18078 16.3604ZM1.9357 26.1286V24.9818C1.9357 24.1447 2.29664 23.3483 2.92664 22.7967L3.06797 22.6738C4.78957 24.2145 5.80664 26.4373 5.80664 28.7637V29.0317H4.83891C3.23824 29.0318 1.9357 27.7293 1.9357 26.1286ZM57.9168 49.8669C54.7087 54.9997 49.1801 58.0636 43.1279 58.0636L20.7415 58.0645C14.6893 58.0645 9.16066 55.0007 5.95371 49.8679C5.81625 49.6481 5.77277 49.3898 5.83184 49.1372C5.8909 48.8808 6.03984 48.6727 6.2625 48.5333C6.41637 48.4375 6.59344 48.3862 6.77437 48.3862C7.11023 48.3862 7.41691 48.5565 7.59598 48.844C10.4479 53.4059 15.362 56.1291 20.7425 56.1291L43.1279 56.1281C48.5085 56.1281 53.4226 53.4049 56.2754 48.8412C56.5493 48.4018 57.1696 48.2576 57.608 48.5334C57.8296 48.6728 57.9796 48.8809 58.0377 49.1373C58.0968 49.3889 58.0532 49.6482 57.9168 49.8669Z"
                                            fill=currentcolor />
                                    </svg>
                                </span>
                            </div>
                            <div class=it-funfact-content>
                                <h6><i class=purecounter data-purecounter-duration=1 data-purecounter-end=1>0</i>M+</h6>
                                <span>Kids Blessed 🎉</span>
                            </div>
                        </div>
                    </div>
                    <div class=col>
                        <div class="it-funfact-item d-flex justify-content-center">
                            <div class=it-funfact-icon>
                                <span>
                                    <svg width=60 height=60 viewBox="0 0 60 60" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.5165 17.4194C15.0507 17.4194 15.4842 17.8539 15.4842 18.3871H17.4197C17.4197 16.7865 16.1172 15.4839 14.5165 15.4839C12.9159 15.4839 11.6133 16.7865 11.6133 18.3871H13.5488C13.5488 17.8539 13.9823 17.4194 14.5165 17.4194Z"
                                            fill=currentcolor />
                                        <path
                                            d="M22.2577 17.4194C22.7919 17.4194 23.2255 17.8539 23.2255 18.3871H25.1609C25.1609 16.7865 23.8584 15.4839 22.2577 15.4839C20.6571 15.4839 19.3545 16.7865 19.3545 18.3871H21.29C21.29 17.8539 21.7235 17.4194 22.2577 17.4194Z"
                                            fill=currentcolor />
                                        <path
                                            d="M22.0543 24.8301L22.1559 24.6259L20.4246 23.7598L20.323 23.9649C19.9543 24.7023 19.213 25.1611 18.3875 25.1611C17.562 25.1611 16.8208 24.7023 16.452 23.9649L16.3504 23.7607L14.6191 24.6269L14.7208 24.8301C15.4195 26.2285 16.8246 27.0965 18.3875 27.0965C19.9504 27.0965 21.3556 26.2285 22.0543 24.8301Z"
                                            fill=currentcolor />
                                        <path
                                            d="M37.7418 17.4194C38.276 17.4194 38.7096 17.8539 38.7096 18.3871H40.6451C40.6451 16.7865 39.3425 15.4839 37.7418 15.4839C36.1412 15.4839 34.8386 16.7865 34.8386 18.3871H36.7741C36.7741 17.8539 37.2077 17.4194 37.7418 17.4194Z"
                                            fill=currentcolor />
                                        <path
                                            d="M45.4843 15.4839C43.8836 15.4839 42.5811 16.7865 42.5811 18.3871H44.5165C44.5165 17.8539 44.9501 17.4194 45.4843 17.4194C46.0185 17.4194 46.452 17.8539 46.452 18.3871H48.3875C48.3875 16.7865 47.0849 15.4839 45.4843 15.4839Z"
                                            fill=currentcolor />
                                        <path
                                            d="M44.5158 22.1012C44.0978 23.3524 42.9316 24.1934 41.6126 24.1934C40.2936 24.1934 39.1274 23.3524 38.7094 22.0983L38.6591 21.9492L36.8242 22.5666L36.8745 22.7128C37.5549 24.7566 39.4584 26.1289 41.6126 26.1289C43.7668 26.1289 45.6703 24.7566 46.3507 22.7157L46.401 22.5666L44.5662 21.9492L44.5158 22.1012Z"
                                            fill=currentcolor />
                                        <path
                                            d="M55.5048 33.2594C54.7897 32.7823 54.0271 32.4135 53.2335 32.1339C55.1061 29.6758 56.129 26.6865 56.129 23.5577V14.5161C56.129 6.51194 49.6171 0 41.6129 0C37.4777 0 33.5361 1.80194 30.7974 4.85903C28.7206 1.92484 25.3074 0 21.4471 0H15.3271C9.01064 0 3.87097 5.13968 3.87097 11.4561C3.87097 13.3423 4.15258 15.2071 4.68 17.0139C4.17968 17.6661 3.87097 18.4713 3.87097 19.3548C3.87097 21.4897 5.6071 23.2258 7.74194 23.2258H8.15419C8.93323 25.9665 10.7777 28.259 13.2174 29.6206L12.7229 32.0952L7.65871 33.2197C5.49 33.7035 3.53032 34.9248 2.14355 36.6581C0.761613 38.3865 0 40.5561 0 42.7684V53.2258C0 56.9603 3.03968 60 6.77419 60H53.2277C56.9613 60 60.001 56.9613 60.0019 53.2277L60.0058 41.5945C60.0068 38.2548 58.349 35.1561 55.5048 33.2594ZM58.0703 41.5935L58.0684 46.4516H54.1935V40.6452H52.2581V52.2581H49.7555L48.9281 51.4306C48.2129 50.7155 47.2645 50.3226 46.2542 50.3226C45.6271 50.3226 45.031 50.4813 44.5006 50.7581C44.0613 50.1861 43.501 49.7003 42.809 49.3548C42.3319 49.1168 42.1374 48.5332 42.3765 48.0561L43.0674 46.6752C43.3819 46.0461 43.5484 45.3416 43.5484 44.6361C43.5484 43.7323 43.2842 42.8584 42.7829 42.1074L42.2632 41.3274C41.8374 40.6897 41.6129 39.9474 41.6129 39.18V38.7097C41.6129 37.6897 41.4523 36.7074 41.1581 35.7842C41.309 35.7948 41.46 35.8064 41.6129 35.8064C43.7458 35.8064 45.7268 34.7497 46.9171 32.9797L51.0329 33.5681C52.2532 33.7413 53.3961 34.1797 54.4974 34.9142C56.7348 36.4064 58.0713 38.9032 58.0703 41.5935ZM21.0281 54.7587C21.4258 54.3881 21.8545 54.0513 22.3123 53.7552C22.5726 55.6355 24.1723 57.0939 26.1223 57.0968C26.2258 57.4423 26.3835 57.7635 26.5713 58.0645H20.7532C21.0852 57.4926 21.2903 56.8374 21.2903 56.129C21.2903 55.6452 21.1906 55.1855 21.0281 54.7587ZM28.0645 52.0035C28.6848 52.1642 29.3303 52.2581 30 52.2581C30.6697 52.2581 31.3152 52.1642 31.9355 52.0035V52.2581C31.9355 53.3255 31.0674 54.1935 30 54.1935C28.9326 54.1935 28.0645 53.3255 28.0645 52.2581V52.0035ZM33.871 52.2581V51.2903C34.9384 51.2903 35.8064 52.1584 35.8064 53.2258C35.8064 54.2932 34.9384 55.1613 33.871 55.1613C33.7171 55.1613 33.5497 55.1342 33.3435 55.0752L32.7977 54.9194C33.4587 54.2245 33.871 53.2906 33.871 52.2581ZM30 50.3226C26.7977 50.3226 24.1935 47.7184 24.1935 44.5161V41.3913C24.1935 39.6726 25.3471 38.1416 27 37.6694L28.0761 37.3626C29.1126 38.3352 30.4539 38.9806 31.9229 39.1442L34.0839 39.3842C35.0661 39.4935 35.8064 40.321 35.8064 41.309V44.5161C35.8064 47.7184 33.2023 50.3226 30 50.3226ZM26.129 51.2903V52.2581C26.129 53.2906 26.5413 54.2245 27.2023 54.9194L26.6565 55.0752C26.4503 55.1342 26.2829 55.1613 26.129 55.1613C25.0616 55.1613 24.1935 54.2932 24.1935 53.2258C24.1935 52.1584 25.0616 51.2903 26.129 51.2903ZM27.8903 55.9877L27.8816 55.4913C28.4913 55.8919 29.2171 56.129 30 56.129C30.7829 56.129 31.5087 55.8919 32.1184 55.4913L32.1097 55.9877C32.0884 57.1326 31.1429 58.0645 30 58.0645C28.8571 58.0645 27.9116 57.1326 27.8903 55.9877ZM33.8787 57.0968C35.8287 57.0929 37.4284 55.6355 37.6887 53.7552C38.1465 54.0523 38.5742 54.3881 38.9729 54.7587C38.8094 55.1865 38.7097 55.6452 38.7097 56.129C38.7097 56.8374 38.9148 57.4926 39.2477 58.0645H33.4297C33.6165 57.7635 33.7752 57.4423 33.8787 57.0968ZM40.111 53.1726C39.2477 52.4042 38.2635 51.7723 37.2097 51.3019C36.84 50.6623 36.2971 50.1445 35.64 49.8029C36.9397 48.4171 37.7419 46.561 37.7419 44.5161V41.309C37.7419 39.3339 36.2613 37.679 34.2977 37.4603L32.1368 37.2203C30.1655 37.0016 28.5174 35.5606 28.0355 33.6358L26.159 34.1061C26.3013 34.6761 26.5171 35.2152 26.7939 35.7155L26.4697 35.8084C23.9894 36.5168 22.2581 38.8123 22.2581 41.3913V44.5161C22.2581 46.561 23.0603 48.4171 24.36 49.8029C23.7029 50.1445 23.16 50.6623 22.7903 51.3019C21.7365 51.7723 20.7513 52.4042 19.889 53.1726C19.2165 52.6103 18.3629 52.2581 17.4194 52.2581H17.0458C17.0081 52.1913 16.9626 52.1303 16.9219 52.0664C17.1929 51.6639 17.5713 51.3281 18.0561 51.0861C18.75 50.7397 19.2668 50.1426 19.5126 49.4081C19.7574 48.6716 19.7013 47.8848 19.3548 47.191L18.6639 45.81C18.4829 45.4481 18.3871 45.0416 18.3871 44.6361C18.3871 44.1165 18.539 43.6123 18.8274 43.1806L19.3471 42.4006C19.9848 41.4445 20.3226 40.3306 20.3226 39.18V38.7097C20.3226 34.441 23.7958 30.9677 28.0645 30.9677H31.9355C36.2042 30.9677 39.6774 34.441 39.6774 38.7097V39.18C39.6774 40.3297 40.0152 41.4445 40.6529 42.4006L41.1726 43.1806C41.461 43.6123 41.6129 44.1165 41.6129 44.6361C41.6129 45.0416 41.5171 45.4481 41.3361 45.81L40.6452 47.191C40.2987 47.8848 40.2426 48.6716 40.4874 49.4081C40.7332 50.1435 41.25 50.7397 42.0106 51.12C42.4461 51.3377 42.811 51.6668 43.0781 52.0664C43.0364 52.1313 42.991 52.1913 42.9532 52.2581H42.5806C41.6371 52.2581 40.7836 52.6103 40.111 53.1726ZM27.3281 26.0787C27.511 27.091 27.8042 28.0819 28.2019 29.0323H28.0645C26.4745 29.0323 24.9774 29.4242 23.6535 30.1065L23.5568 29.6206C25.0858 28.7671 26.3806 27.5458 27.3281 26.0787ZM29.0323 20.3226V17.4194C30.0997 17.4194 30.9677 18.2874 30.9677 19.3548C30.9677 20.4223 30.0997 21.2903 29.0323 21.2903H28.9829C29.0119 20.971 29.0323 20.6497 29.0323 20.3226ZM45.4094 31.7545L45.3213 31.8861C44.4929 33.1287 43.1061 33.871 41.6129 33.871C41.1068 33.871 40.6152 33.7684 40.139 33.601C39.5555 32.6681 38.8229 31.8397 37.9664 31.1545L38.3816 29.4948C39.4016 29.821 40.4865 30 41.6129 30C42.7394 30 43.8242 29.821 44.8442 29.4948L45.4094 31.7545ZM30.3494 29.0323C29.5006 27.3339 29.0323 25.4594 29.0323 23.5577V23.2258C29.9342 23.2258 30.7539 22.9035 31.4129 22.3839C32.2268 25.1197 34.109 27.3987 36.5777 28.7303L36.2458 30.0581C34.9461 29.4077 33.4858 29.0323 31.9355 29.0323H30.3494ZM41.6129 28.0645C36.81 28.0645 32.9032 24.1568 32.9032 19.3548V15.5274C32.9032 13.0732 34.4371 10.8968 36.7345 10.0665C38.129 11.7406 40.1816 12.8555 42.5061 13.0006L47.6013 13.319C49.1274 13.4148 50.3226 14.6884 50.3226 16.2174V19.3548C50.3226 24.1568 46.4158 28.0645 41.6129 28.0645ZM41.6129 1.93548C48.5497 1.93548 54.1935 7.57935 54.1935 14.5161V23.5577C54.1935 26.55 53.1058 29.3913 51.1413 31.6277L47.2316 31.0703L46.6471 28.7313C49.9848 26.9313 52.2581 23.4039 52.2581 19.3548V16.2174C52.2581 13.6684 50.2655 11.5471 47.7213 11.3884L42.6261 11.07C39.3445 10.8648 36.7742 8.1271 36.7742 4.83871L34.8387 4.83968C34.8387 6.11613 35.1348 7.32871 35.6623 8.41064C34.559 8.88194 33.6097 9.5971 32.8539 10.4729C32.7377 9.11322 32.3797 7.82516 31.8281 6.64161C34.2077 3.69387 37.8145 1.93548 41.6129 1.93548ZM7.74194 21.2903C6.67452 21.2903 5.80645 20.4223 5.80645 19.3548C5.80645 18.2874 6.67452 17.4194 7.74194 17.4194V20.3226C7.74194 20.6497 7.76226 20.971 7.79129 21.2903H7.74194ZM7.76806 15.4839H7.74194C7.24548 15.4839 6.77323 15.5865 6.33677 15.7577C5.98839 14.3516 5.80645 12.9097 5.80645 11.4561C5.80645 6.20613 10.0771 1.93548 15.3271 1.93548H21.4471C26.6971 1.93548 30.9677 6.20613 30.9677 11.4561C30.9677 12.9106 30.7858 14.3516 30.4374 15.7577C30.001 15.5865 29.5287 15.4839 29.0323 15.4839H28.9345C28.4845 13.2784 26.5306 11.6129 24.1935 11.6129H15.9552C14.6284 11.6129 13.5484 10.5329 13.5484 9.20613C13.5484 8.16871 14.2103 7.25032 15.1926 6.92323L15.7887 6.72484L15.1781 4.88903L14.581 5.08742C12.8052 5.67871 11.6129 7.33452 11.6129 9.20613C11.6129 9.37548 11.6226 9.5429 11.641 9.70839L11.0497 10.0606C9.12387 11.2074 7.90161 13.261 7.76806 15.4839ZM9.67742 15.8806C9.67742 14.1842 10.5832 12.5913 12.0397 11.7232L12.3087 11.5626C13.0848 12.7568 14.429 13.5484 15.9552 13.5484H24.1935C25.7942 13.5484 27.0968 14.851 27.0968 16.4516V20.3226C27.0968 21.8787 26.6816 23.3371 25.9635 24.6019L24.8932 22.4623C24.2342 21.1423 22.9074 20.3226 21.4316 20.3226H15.3435C13.8677 20.3226 12.541 21.1423 11.881 22.4623L10.8106 24.6019C10.0926 23.3371 9.67742 21.8787 9.67742 20.3226V15.8806ZM12.1055 26.34L13.6113 23.3284C13.9413 22.6674 14.6052 22.2581 15.3426 22.2581H21.4306C22.169 22.2581 22.8319 22.6674 23.1619 23.3274L24.6677 26.339C23.0826 27.9958 20.8558 29.0323 18.3871 29.0323C15.9184 29.0323 13.6916 27.9958 12.1055 26.34ZM18.3871 30.9677C19.56 30.9677 20.6855 30.7694 21.7423 30.4181L21.9087 31.2494C21.0135 31.9897 20.2597 32.8916 19.6771 33.9048L18.3871 34.6781L14.6313 32.4242L15.0329 30.4181C16.0887 30.7694 17.2142 30.9677 18.3871 30.9677ZM13.3819 33.9319L16.6955 35.9206L13.9365 38.1281L12.2458 34.1845L13.3819 33.9319ZM1.93548 53.2258V42.7684C1.93548 40.9945 2.54613 39.2535 3.65516 37.8677C4.7671 36.4761 6.33871 35.4977 8.07871 35.1097L10.3239 34.6103L13.1594 41.2268L18.5613 36.9058C18.451 37.4913 18.3871 38.0932 18.3871 38.7097V39.18C18.3871 39.9474 18.1626 40.6897 17.7368 41.3274L17.2171 42.1074C16.7158 42.8584 16.4516 43.7323 16.4516 44.6361C16.4516 45.3416 16.6181 46.0461 16.9326 46.6752L17.6235 48.0561C17.8626 48.5332 17.6681 49.1168 17.1232 49.3877C16.4758 49.711 15.93 50.189 15.4974 50.7571C14.9671 50.4803 14.3719 50.3216 13.7458 50.3216C12.7355 50.3216 11.7871 50.7145 11.0719 51.4297L10.2445 52.2581H7.74194V40.6452H5.80645V52.2581H3.87097V54.1935H9.67742V58.0645H6.77419C4.10613 58.0645 1.93548 55.8939 1.93548 53.2258ZM11.6129 58.0645V53.6264L12.4403 52.799C12.7887 52.4506 13.2523 52.2581 13.7458 52.2581C14.4494 52.2581 15.0813 52.649 15.3958 53.2771L15.8526 54.1935H17.4194C18.4868 54.1935 19.3548 55.0616 19.3548 56.129C19.3548 57.1964 18.4868 58.0645 17.4194 58.0645H11.6129ZM53.2277 58.0645H42.5806C41.5132 58.0645 40.6452 57.1964 40.6452 56.129C40.6452 55.0616 41.5132 54.1935 42.5806 54.1935H44.1474L44.6042 53.279C44.9187 52.649 45.5506 52.2581 46.2542 52.2581C46.7477 52.2581 47.2103 52.4497 47.5597 52.799L48.9542 54.1935H56.129V52.2581H54.1935V48.3871H58.0684L58.0664 53.2277C58.0655 55.8948 55.8948 58.0645 53.2277 58.0645Z"
                                            fill=currentcolor />
                                        <path
                                            d="M27.0969 43.5483C27.6314 43.5483 28.0646 43.115 28.0646 42.5805C28.0646 42.0461 27.6314 41.6128 27.0969 41.6128C26.5624 41.6128 26.1292 42.0461 26.1292 42.5805C26.1292 43.115 26.5624 43.5483 27.0969 43.5483Z"
                                            fill=currentcolor />
                                        <path
                                            d="M32.9033 43.5483C33.4378 43.5483 33.871 43.115 33.871 42.5805C33.871 42.0461 33.4378 41.6128 32.9033 41.6128C32.3688 41.6128 31.9355 42.0461 31.9355 42.5805C31.9355 43.115 32.3688 43.5483 32.9033 43.5483Z"
                                            fill=currentcolor />
                                        <path
                                            d="M31.9356 45.2555C31.5668 45.9929 30.8256 46.4516 30.0001 46.4516C29.1746 46.4516 28.4333 45.9929 28.0646 45.2555L27.963 45.0513L26.2317 45.9174L26.3333 46.1216C27.032 47.519 28.4372 48.3871 30.0001 48.3871C31.563 48.3871 32.9681 47.519 33.6669 46.1206L33.7685 45.9164L32.0372 45.0503L31.9356 45.2555Z"
                                            fill=currentcolor />
                                    </svg>
                                </span>
                            </div>
                            <div class=it-funfact-content>
                                <h6><i class=purecounter data-purecounter-duration=1 data-purecounter-end=7000>0</i> +
                                </h6>
                                <span>Happy Testimonies ✨</span>
                            </div>
                        </div>
                    </div>
                    <div class=col>
                        <div class="it-funfact-item d-flex justify-content-center">
                            <div class=it-funfact-icon>
                                <span>
                                    <svg width=60 height=60 viewBox="0 0 60 60" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_289_588)">
                                            <path
                                                d="M8.37863 38.9261C7.97537 38.9261 7.58863 38.7659 7.30349 38.4807C7.01835 38.1956 6.85815 37.8089 6.85815 37.4056V26.5595C6.85815 26.1563 7.01835 25.7695 7.30349 25.4844C7.58863 25.1993 7.97537 25.0391 8.37863 25.0391C8.78189 25.0391 9.16862 25.1993 9.45377 25.4844C9.73891 25.7695 9.89911 26.1563 9.89911 26.5595V37.4056C9.89911 37.8089 9.73891 38.1956 9.45377 38.4807C9.16862 38.7659 8.78189 38.9261 8.37863 38.9261Z"
                                                fill=currentcolor />
                                            <path
                                                d="M15.2298 14.7081C13.7753 14.7081 12.3535 14.2768 11.1441 13.4687C9.93472 12.6606 8.99214 11.5121 8.43553 10.1683C7.87892 8.82453 7.73328 7.34588 8.01704 5.91934C8.3008 4.49279 9.0012 3.18243 10.0297 2.15395C11.0582 1.12547 12.3685 0.425066 13.7951 0.141309C15.2216 -0.142448 16.7003 0.00318646 18.044 0.559796C19.3878 1.11641 20.5364 2.05899 21.3444 3.26836C22.1525 4.47772 22.5838 5.89955 22.5838 7.35404C22.5817 9.30379 21.8062 11.1731 20.4275 12.5518C19.0488 13.9304 17.1795 14.7059 15.2298 14.7081ZM15.2298 3.04096C14.3767 3.04096 13.5428 3.29391 12.8336 3.76784C12.1243 4.24177 11.5714 4.91538 11.245 5.70349C10.9186 6.49161 10.8331 7.35882 10.9996 8.19548C11.166 9.03214 11.5768 9.80065 12.18 10.4038C12.7832 11.007 13.5517 11.4178 14.3883 11.5842C15.225 11.7507 16.0922 11.6653 16.8803 11.3388C17.6684 11.0124 18.342 10.4595 18.816 9.75026C19.2899 9.04098 19.5429 8.20709 19.5429 7.35404C19.5415 6.21055 19.0867 5.11428 18.2781 4.30571C17.4695 3.49714 16.3733 3.0423 15.2298 3.04096Z"
                                                fill=currentcolor />
                                            <path
                                                d="M39.2058 26.0835C38.9122 26.0837 38.6248 25.9989 38.3784 25.8393C38.1319 25.6797 37.937 25.4522 37.817 25.1842C37.6971 24.9163 37.6573 24.6193 37.7024 24.3292C37.7476 24.0391 37.8758 23.7682 38.0715 23.5494L46.3328 14.2887C46.4659 14.1397 46.627 14.0183 46.807 13.9316C46.9871 13.8449 47.1824 13.7944 47.3819 13.7832C47.5814 13.7719 47.7812 13.8001 47.9698 13.866C48.1584 13.932 48.3322 14.0344 48.4812 14.1676C48.6302 14.3007 48.7516 14.4618 48.8383 14.6419C48.925 14.8219 48.9755 15.0172 48.9867 15.2167C48.998 15.4162 48.9698 15.616 48.9039 15.8046C48.8379 15.9932 48.7354 16.167 48.6023 16.316L40.3411 25.5716C40.1987 25.7323 40.0239 25.8609 39.8282 25.9492C39.6326 26.0374 39.4204 26.0832 39.2058 26.0835Z"
                                                fill=currentcolor />
                                            <path
                                                d="M55.4443 39.8134H28.164C27.7607 39.8134 27.374 39.6532 27.0888 39.368C26.8037 39.0829 26.6435 38.6961 26.6435 38.2929C26.6435 37.8896 26.8037 37.5029 27.0888 37.2177C27.374 36.9326 27.7607 36.7724 28.164 36.7724H55.4443C55.8476 36.7724 56.2343 36.6122 56.5195 36.3271C56.8046 36.0419 56.9648 35.6552 56.9648 35.2519V4.5961C56.9648 4.19284 56.8046 3.8061 56.5195 3.52096C56.2343 3.23581 55.8476 3.07562 55.4443 3.07562H25.6167C25.2134 3.07562 24.8267 2.91543 24.5415 2.63028C24.2564 2.34514 24.0962 1.9584 24.0962 1.55514C24.0962 1.15189 24.2564 0.76515 24.5415 0.480005C24.8267 0.19486 25.2134 0.034668 25.6167 0.034668H55.4443C56.6541 0.034668 57.8143 0.515246 58.6698 1.37068C59.5252 2.22611 60.0058 3.38633 60.0058 4.5961V35.2519C60.0058 36.4617 59.5252 37.6219 58.6698 38.4773C57.8143 39.3328 56.6541 39.8134 55.4443 39.8134Z"
                                                fill=currentcolor />
                                            <path
                                                d="M15.2299 60.001H8.37863C7.97537 60.001 7.58863 59.8408 7.30349 59.5557C7.01835 59.2705 6.85815 58.8838 6.85815 58.4805V37.4057C6.85815 37.0025 7.01835 36.6157 7.30349 36.3306C7.58863 36.0454 7.97537 35.8853 8.37863 35.8853C8.78189 35.8853 9.16862 36.0454 9.45377 36.3306C9.73891 36.6157 9.89911 37.0025 9.89911 37.4057V56.9601H15.2299C15.6331 56.9601 16.0199 57.1203 16.305 57.4054C16.5902 57.6905 16.7504 58.0773 16.7504 58.4805C16.7504 58.8838 16.5902 59.2705 16.305 59.5557C16.0199 59.8408 15.6331 60.001 15.2299 60.001Z"
                                                fill=currentcolor />
                                            <path
                                                d="M22.0822 60.0008H15.2299C14.8266 60.0008 14.4399 59.8406 14.1547 59.5555C13.8696 59.2703 13.7094 58.8836 13.7094 58.4803V38.2925C13.7094 37.8892 13.8696 37.5025 14.1547 37.2173C14.4399 36.9322 14.8266 36.772 15.2299 36.772C15.6331 36.772 16.0199 36.9322 16.305 37.2173C16.5902 37.5025 16.7504 37.8892 16.7504 38.2925V56.9599H20.5617V28.2127C20.5616 27.5817 20.7487 26.9648 21.0992 26.4401C21.4498 25.9154 21.9481 25.5065 22.5312 25.265C23.1142 25.0236 23.7557 24.9605 24.3746 25.0837C24.9935 25.207 25.562 25.511 26.008 25.9574L28.3911 28.3374C28.5676 28.5148 28.7776 28.6554 29.0088 28.7511C29.2401 28.8468 29.488 28.8957 29.7383 28.8949H36.8145C37.0682 28.895 37.3192 28.8444 37.5531 28.7462C37.7869 28.648 37.9987 28.504 38.1762 28.3229C38.3537 28.1417 38.4932 27.9269 38.5867 27.6911C38.6801 27.4554 38.7255 27.2033 38.7202 26.9497C38.6989 25.9209 37.814 25.0846 36.7476 25.0846H31.1533C30.7502 25.0843 30.3637 24.9238 30.0788 24.6386L26.8058 21.3665C26.212 20.7693 25.5055 20.2958 24.7274 19.9736C23.9493 19.6513 23.1149 19.4867 22.2727 19.4893H21.0928L18.7949 21.4C17.7938 22.232 16.5331 22.6875 15.2314 22.6875C13.9297 22.6875 12.669 22.232 11.6679 21.4L9.36794 19.4893H8.37861C6.96502 19.4909 5.6098 20.0531 4.61024 21.0527C3.61068 22.0523 3.04842 23.4075 3.04681 24.8211C3.04681 25.2243 2.88662 25.6111 2.60147 25.8962C2.31633 26.1814 1.92959 26.3415 1.52634 26.3415C1.12308 26.3415 0.736341 26.1814 0.451196 25.8962C0.166051 25.6111 0.00585938 25.2243 0.00585938 24.8211C0.00827415 22.6012 0.891176 20.473 2.46085 18.9033C4.03052 17.3336 6.15876 16.4507 8.37861 16.4483H9.91733C10.2725 16.4484 10.6164 16.5729 10.8894 16.8001L13.6101 19.0615C14.0654 19.4408 14.6393 19.6485 15.2319 19.6485C15.8245 19.6485 16.3984 19.4408 16.8537 19.0615L19.5724 16.799C19.8454 16.5719 20.1893 16.4474 20.5444 16.4473H22.2747C23.5164 16.4439 24.7464 16.6868 25.8936 17.162C27.0407 17.6371 28.0822 18.3351 28.9577 19.2156L31.7858 22.0437H36.7527C39.4632 22.0437 41.7115 24.2169 41.7652 26.8889C41.7786 27.5468 41.6605 28.2008 41.418 28.8125C41.1754 29.4242 40.8133 29.9814 40.3527 30.4514C39.8921 30.9214 39.3424 31.2948 38.7358 31.5497C38.1291 31.8046 37.4777 31.9359 36.8196 31.9359H29.7342C29.0845 31.9377 28.4408 31.8106 27.8405 31.562C27.2402 31.3134 26.6952 30.9481 26.2371 30.4874L23.8581 28.1053C23.8386 28.086 23.8143 28.0724 23.7877 28.0658C23.7611 28.0592 23.7333 28.0599 23.707 28.0678C23.6774 28.0778 23.6516 28.0969 23.6334 28.1224C23.6152 28.1478 23.6055 28.1784 23.6057 28.2097V58.4773C23.6061 58.6775 23.5669 58.8758 23.4905 59.0608C23.4141 59.2458 23.3019 59.4139 23.1603 59.5555C23.0188 59.697 22.8507 59.8092 22.6657 59.8857C22.4806 59.9621 22.2823 60.0012 22.0822 60.0008Z"
                                                fill=currentcolor />
                                            <path
                                                d="M4.95247 42.3524C3.64096 42.351 2.38355 41.8294 1.45617 40.9021C0.528792 39.9747 0.00720108 38.7173 0.00585938 37.4058V24.8203C0.00585938 24.417 0.166052 24.0303 0.451196 23.7451C0.736341 23.46 1.12308 23.2998 1.52634 23.2998C1.92959 23.2998 2.31633 23.46 2.60147 23.7451C2.88662 24.0303 3.04681 24.417 3.04681 24.8203V37.4058C3.04681 37.9112 3.24759 38.3959 3.60497 38.7533C3.96235 39.1107 4.44706 39.3114 4.95247 39.3114C5.45789 39.3114 5.9426 39.1107 6.29998 38.7533C6.65736 38.3959 6.85814 37.9112 6.85814 37.4058C6.85814 37.0025 7.01833 36.6158 7.30347 36.3306C7.58862 36.0455 7.97536 35.8853 8.37861 35.8853C8.78187 35.8853 9.16861 36.0455 9.45375 36.3306C9.7389 36.6158 9.89909 37.0025 9.89909 37.4058C9.89775 38.7173 9.37616 39.9747 8.44878 40.9021C7.5214 41.8294 6.26399 42.351 4.95247 42.3524Z"
                                                fill=currentcolor />
                                            <path
                                                d="M47.8531 60.0009H1.52926C1.12601 60.0009 0.73927 59.8407 0.454126 59.5556C0.168981 59.2704 0.00878906 58.8837 0.00878906 58.4804C0.00878906 58.0772 0.168981 57.6904 0.454126 57.4053C0.73927 57.1202 1.12601 56.96 1.52926 56.96H47.8531C48.2563 56.96 48.6431 57.1202 48.9282 57.4053C49.2134 57.6904 49.3736 58.0772 49.3736 58.4804C49.3736 58.8837 49.2134 59.2704 48.9282 59.5556C48.6431 59.8407 48.2563 60.0009 47.8531 60.0009Z"
                                                fill=currentcolor />
                                            <path
                                                d="M39.5819 16.8217H31.6987C31.2954 16.8217 30.9087 16.6615 30.6236 16.3764C30.3384 16.0912 30.1782 15.7045 30.1782 15.3012C30.1782 14.898 30.3384 14.5112 30.6236 14.2261C30.9087 13.941 31.2954 13.7808 31.6987 13.7808H39.5819C39.9851 13.7808 40.3719 13.941 40.657 14.2261C40.9421 14.5112 41.1023 14.898 41.1023 15.3012C41.1023 15.7045 40.9421 16.0912 40.657 16.3764C40.3719 16.6615 39.9851 16.8217 39.5819 16.8217Z"
                                                fill=currentcolor />
                                            <path
                                                d="M47.465 9.94818H31.6987C31.2954 9.94818 30.9087 9.78799 30.6236 9.50284C30.3384 9.2177 30.1782 8.83096 30.1782 8.4277C30.1782 8.02445 30.3384 7.63771 30.6236 7.35256C30.9087 7.06742 31.2954 6.90723 31.6987 6.90723H47.465C47.8683 6.90723 48.255 7.06742 48.5402 7.35256C48.8253 7.63771 48.9855 8.02445 48.9855 8.4277C48.9855 8.83096 48.8253 9.2177 48.5402 9.50284C48.255 9.78799 47.8683 9.94818 47.465 9.94818Z"
                                                fill=currentcolor />
                                        </g>
                                        <defs>
                                            <clipPath id=clip0_289_588>
                                                <rect width=60 height=60 fill=currentcolor
                                                    transform="translate(0.00585938)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                            <div class=it-funfact-content>
                                <h6><i class=purecounter data-purecounter-duration=1 data-purecounter-end=100>0</i> +
                                </h6>
                                <span> Countries Joining 🌍</span>
                            </div>
                        </div>
                    </div>
                    <div class=col>
                        <div class="it-funfact-item d-flex justify-content-center">
                            <div class=it-funfact-icon>
                                <span>
                                    <svg width=69 height=60 viewBox="0 0 69 60" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M35.4549 58.0026H29.739C29.1951 58.0026 28.6519 57.8155 28.2086 57.4752C26.5857 56.2311 24.8578 55.8658 23.1819 55.7118V38.7984C24.6158 37.2243 26.1527 36.0772 27.6417 34.9658C31.0034 32.4568 34.1785 30.0869 33.8563 23.8734C33.9046 22.8973 34.4148 22.3596 35.3871 22.2603C36.0562 22.2603 36.658 22.7019 36.8509 23.3345C37.2416 24.6152 37.5163 25.8007 37.6903 26.9587C37.7723 27.504 38.2808 27.8799 38.8261 27.7975C39.3715 27.7155 39.7469 27.207 39.665 26.6617C39.4761 25.406 39.1803 24.1272 38.7607 22.7521C38.3071 21.2637 36.9514 20.2637 35.3871 20.2637C33.1486 20.4921 31.9736 21.7301 31.8623 23.9774C32.1293 29.125 29.7461 30.9038 26.4474 33.3657C25.4149 34.1363 24.2924 34.9743 23.1802 35.9859V34.0116C23.1802 33.4198 22.6912 33.0928 22.1814 33.0132L13.1031 33.0172C12.552 33.0175 12.1052 33.4644 12.1052 34.0156V43.9352C12.1052 44.4866 12.5522 44.9336 13.1036 44.9336C13.655 44.9336 14.102 44.4866 14.102 43.9352V35.0135L21.1836 35.0104V57.998L14.102 58.0021V48.2867C14.102 47.7353 13.655 47.2883 13.1036 47.2883C12.5522 47.2883 12.1052 47.7353 12.1052 48.2867V59.001C12.1052 59.5929 12.5943 59.9198 13.1041 59.9994L22.1824 59.9941C22.7335 59.9938 23.1802 59.5469 23.1802 58.9957V57.719C24.7346 57.879 25.8827 58.2082 26.9931 59.0593C27.7825 59.6655 28.7577 59.9993 29.7389 59.9993H35.4547C36.0061 59.9993 36.4531 59.5523 36.4531 59.0009C36.4531 58.4495 36.0064 58.0026 35.4549 58.0026Z"
                                            fill=currentcolor />
                                        <path
                                            d="M18.104 42.4831V39.9374C18.104 39.386 17.6569 38.939 17.1056 38.939C16.5542 38.939 16.1072 39.386 16.1072 39.9374V42.4831C16.1072 43.0345 16.5542 43.4815 17.1056 43.4815C17.6569 43.4815 18.104 43.0345 18.104 42.4831Z"
                                            fill=currentcolor />
                                        <path
                                            d="M53.954 41.2411C55.8331 38.71 53.94 35.0787 50.8499 35.0787L39.1165 35.0781C39.4981 33.8234 39.7426 32.538 39.8458 31.2411C39.8895 30.6915 39.4793 30.2105 38.9297 30.1667C38.3792 30.1232 37.899 30.5332 37.8553 31.0829C37.7291 32.6706 37.3821 34.1764 36.7949 35.6849C36.7434 35.8052 36.7149 35.9378 36.7149 36.0771V38.5145C36.7149 41.2811 34.464 43.532 31.6974 43.532C31.146 43.532 30.699 43.979 30.699 44.5304C30.699 45.0817 31.146 45.5287 31.6974 45.5287C35.5651 45.5287 38.7115 42.3822 38.7115 38.5146V37.0749H41.5178C40.5199 38.8746 41.3003 41.4282 43.1266 42.3753C42.1135 43.9076 42.1135 45.44 43.1266 46.9724C40.3912 48.3909 40.3912 52.4191 43.1266 53.8376C42.2167 55.1989 42.124 56.5873 42.8486 58.0031H39.8064C39.255 58.0031 38.808 58.4502 38.808 59.0015C38.808 59.5529 39.2549 59.9999 39.8064 59.9999L49.5189 60.0002C52.6089 60.0002 54.502 56.3687 52.6229 53.8376C54.6253 52.7991 55.316 49.9411 53.954 48.1065C56.6894 46.6877 56.6894 42.6596 53.954 41.2411ZM43.0324 38.9426C43.0324 37.9129 43.8701 37.0753 44.8997 37.0753H50.8501C51.8796 37.0753 52.7173 37.9129 52.7173 38.9426C52.7173 39.9722 51.8796 40.8098 50.8501 40.8098H44.8997C43.8701 40.8098 43.0324 39.9721 43.0324 38.9426ZM49.519 58.0031H46.2512C46.2443 58.003 46.2375 58.0029 46.2306 58.0029H46.2012C45.1852 57.9869 44.3636 57.1556 44.3636 56.1359C44.3636 55.1062 45.2013 54.2686 46.2308 54.2686H49.519C50.5485 54.2686 51.3863 55.1062 51.3863 56.1359C51.3863 57.1656 50.5485 58.0031 49.519 58.0031ZM50.8499 52.272H44.8995C43.87 52.272 43.0323 51.4344 43.0323 50.4047C43.0323 49.3751 43.87 48.5375 44.8995 48.5375H50.8499C51.8795 48.5375 52.7172 49.3751 52.7172 50.4047C52.7172 51.4344 51.8796 52.272 50.8499 52.272ZM52.1811 46.5408H46.2307C45.2012 46.5408 44.3635 45.7033 44.3635 44.6737C44.3635 43.6441 45.2012 42.8065 46.2307 42.8065H52.1811C53.2106 42.8065 54.0484 43.6441 54.0484 44.6737C54.0484 45.7033 53.2106 46.5408 52.1811 46.5408Z"
                                            fill=currentcolor />
                                        <path
                                            d="M27.2404 7.45121L29.2598 9.41976L28.7831 12.1994C28.5713 13.9841 29.8858 14.9326 31.5836 14.2341L34.0797 12.9217L36.576 14.2341C37.8354 14.896 39.6591 13.847 39.3765 12.1994L38.8998 9.41963L40.9192 7.45121C42.1488 6.18019 41.7328 4.44979 39.8495 4.15906L37.0586 3.75344L35.8105 1.22446C35.0937 -0.275787 33.2174 -0.535368 32.3489 1.22446L31.1008 3.75344L28.31 4.15906C26.4914 4.54963 26.0255 6.11377 27.2404 7.45121ZM31.4225 5.72453C32.0514 5.63321 32.5947 5.23851 32.8759 4.66863L34.0799 2.22924L35.2838 4.66863C35.5649 5.23851 36.1083 5.63321 36.7372 5.72453L39.4291 6.11576L37.4812 8.01457C37.0262 8.45812 36.8188 9.09682 36.9261 9.72301L37.3859 12.4041L34.978 11.1383C34.3792 10.8427 33.7806 10.8427 33.1818 11.1383L30.7741 12.4041L31.2339 9.72288C31.3413 9.09655 31.1337 8.45798 30.6788 8.01457L28.7309 6.11576L31.4225 5.72453Z"
                                            fill=currentcolor />
                                        <path
                                            d="M12.5462 12.7753L14.5656 14.7437L14.0889 17.5233C13.8063 19.1707 15.6299 20.2202 16.8894 19.5582L19.3856 18.2458L21.8818 19.5582C23.4631 20.2636 24.8276 19.2752 24.6823 17.5235L24.2056 14.744L26.2252 12.7754C27.3901 11.5213 26.9907 9.90723 25.1554 9.48325L22.3646 9.07764L21.1165 6.54865C20.1354 4.8655 18.588 5.01526 17.6549 6.54865L16.4068 9.07764L13.6159 9.48325C11.7658 9.87395 11.3166 11.4546 12.5462 12.7753ZM16.7286 11.0485C17.3574 10.957 17.9005 10.5623 18.1818 9.99269L19.3857 7.5533L20.5896 9.99269C20.8708 10.5624 21.414 10.9571 22.0429 11.0486L24.7349 11.4398L22.7871 13.3385C22.332 13.7819 22.1245 14.4207 22.2319 15.0469L22.6917 17.7279L20.284 16.4621C19.6852 16.1663 19.0864 16.1663 18.4875 16.4621L16.0798 17.7279L16.5396 15.0469C16.647 14.4207 16.4396 13.782 15.9845 13.3385L14.0366 11.4397L16.7286 11.0485Z"
                                            fill=currentcolor />
                                        <path
                                            d="M12.7216 29.5035L12.245 26.7239L14.2644 24.7553C15.5093 23.5848 14.9273 21.7546 13.1948 21.4632L10.4038 21.0576L9.15567 18.5286C8.62067 17.262 6.56266 16.7688 5.69406 18.5286L4.44594 21.0576L1.65511 21.4632C-0.164885 21.8544 -0.397842 23.5517 0.585504 24.7555L2.60491 26.724L2.12821 29.5037C1.93173 31.339 3.22964 32.3372 4.92876 31.5384L7.425 30.226L9.92124 31.5384C11.1807 32.2003 13.0043 31.1509 12.7216 29.5035ZM10.8262 25.3184C10.3712 25.7618 10.1636 26.4005 10.2709 27.0269L10.7307 29.7079L8.32288 28.4421C7.76059 28.1464 7.08914 28.1464 6.52658 28.4421L4.11887 29.7079L4.57866 27.0267C4.68609 26.4004 4.47855 25.7617 4.02355 25.3184L2.07563 23.4196L4.76742 23.0285C5.39627 22.9372 5.93953 22.5425 6.22081 21.9726L7.42473 19.5332L8.62866 21.9725C8.90994 22.5424 9.45319 22.9371 10.0819 23.0284L12.7738 23.4196L10.8262 25.3184Z"
                                            fill=currentcolor />
                                        <path
                                            d="M66.5021 21.4632L63.7114 21.0576L62.4632 18.5286C61.5832 16.7462 59.87 16.7687 59.0015 18.5286L57.7533 21.0576L54.9626 21.4632C53.1399 21.8045 52.6646 23.4018 53.8927 24.7554L55.9123 26.7239L55.4354 29.5036C55.153 31.151 56.9765 32.2002 58.236 31.5383L60.7321 30.2259L63.2283 31.5383C64.9274 32.304 66.2586 31.3057 66.0287 29.5036L65.552 26.7239L67.5716 24.7554C68.7048 23.6681 68.1557 21.7212 66.5021 21.4632ZM64.1335 25.3185C63.6785 25.762 63.4711 26.4007 63.5786 27.0269L64.0383 29.7079L61.6305 28.4421C61.0317 28.1464 60.433 28.1464 59.8342 28.4421L57.4265 29.7079L57.8863 27.0269C57.9938 26.4004 57.7862 25.7617 57.3312 25.3185L55.3832 23.4197L58.0753 23.0284C58.704 22.9371 59.2473 22.5424 59.5286 21.9727L60.7326 19.5333L61.9365 21.9725C62.2177 22.5424 62.7609 22.9371 63.3898 23.0284L66.0819 23.4197L64.1335 25.3185Z"
                                            fill=currentcolor />
                                        <path
                                            d="M41.9737 12.7757L43.9931 14.7441L43.5163 17.5238C43.2968 19.3254 44.6112 20.2638 46.3168 19.5585L48.813 18.2461L51.3092 19.5585C52.5688 20.2204 54.3924 19.1713 54.1097 17.5238L53.633 14.7441L55.6524 12.7757C56.8574 11.3219 56.4914 9.85763 54.5827 9.48357L51.7919 9.07796L50.5436 6.54911C49.8357 5.11436 47.7901 5.11462 47.082 6.54911L45.8339 9.07809L43.0431 9.4837C41.167 9.84113 40.7011 11.3386 41.9737 12.7757ZM46.1562 11.0489C46.7849 10.9575 47.3282 10.5628 47.6094 9.99302L48.8134 7.55375L50.0173 9.99302C50.2984 10.5628 50.8417 10.9575 51.4707 11.0489L54.1626 11.4401L52.2147 13.3389C51.7597 13.7825 51.5523 14.4212 51.6596 15.0474L52.1194 17.7285L49.7118 16.4627C49.113 16.1671 48.5141 16.1671 47.9152 16.4627L45.5075 17.7285L45.9673 15.0475C46.0748 14.4213 45.8673 13.7826 45.4123 13.3391L43.4644 11.4403L46.1562 11.0489Z"
                                            fill=currentcolor />
                                    </svg>
                                </span>
                            </div>
                            <div class=it-funfact-content>
                                <h6><i class=purecounter data-purecounter-duration=1 data-purecounter-end=8130>0</i>+</h6>
                                <span> Languages & Counting 🗣️❤️</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-team-2-area p-relative fix pt-110 pb-130">
            <div class="it-team-2-shape-3 d-none d-xl-block">
                <img src="assets/img/team/shape-2-1.png" alt="">
            </div>
            <div class="it-team-2-shape-4 d-none d-xl-block">
                <img src="assets/img/team/shape-2-2.png" alt="">
            </div>
            {{-- <div class=container>
                <div class=row>
                    <div class=col-xl-12>
                        <div class="it-team-2-title-box text-center pb-55">
                            <span class=it-section-subtitle>Teacher</span>
                            <h3 class="it-section-title pb-20">Meet our expert & smart <br>
                                superheroes!</h3>
                        </div>
                    </div>
                    <div class=col-xl-12>
                        <div class="it-team-2-wrapper p-relative">
                            <div class="swiper-container it-team-2-active">
                                <div class=swiper-wrapper>
                                    <div class=swiper-slide>
                                        <div class="it-team-2-item text-center">
                                            <div class="it-team-2-thumb-box p-relative">
                                                <div class=it-team-2-thumb data-mask-src="assets/img/team/Image.png">
                                                    <img src="assets/img/team/team-2-1.jpg" alt="">
                                                    <div class=it-team-2-social>
                                                        <a href="#"><i class=flaticon-facebook-app-symbol></i></a>
                                                        <a href="#"><i class=flaticon-twitter></i></a>
                                                        <a href="#"><i class=flaticon-skype></i></a>
                                                    </div>
                                                </div>
                                                <div class="it-team-2-shape-2 d-none d-md-block">
                                                    <img src="assets/img/home-02/teacher/Vector.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="it-team-2-author-info mt-30">
                                                <h4 class=it-team-2-title><a href=teacher-details.html>Millie
                                                        Patrick</a></h4>
                                                <span>Teacher</span>
                                            </div>
                                            <div class=it-team-2-shape-1>
                                                <img src="assets/img/team/shape-1-1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=swiper-slide>
                                        <div class="it-team-2-item text-center">
                                            <div class="it-team-2-thumb-box p-relative">
                                                <div class=it-team-2-thumb data-mask-src="assets/img/team/Image.png">
                                                    <img src="assets/img/team/team-2-2.jpg" alt="">
                                                    <div class=it-team-2-social>
                                                        <a href="#"><i class=flaticon-facebook-app-symbol></i></a>
                                                        <a href="#"><i class=flaticon-twitter></i></a>
                                                        <a href="#"><i class=flaticon-skype></i></a>
                                                    </div>
                                                </div>
                                                <div class="it-team-2-shape-2 d-none d-md-block">
                                                    <img src="assets/img/home-02/teacher/Vector.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="it-team-2-author-info mt-30">
                                                <h4 class=it-team-2-title><a href=teacher-details.html>Adelaida
                                                        Garcia</a></h4>
                                                <span>Teacher</span>
                                            </div>
                                            <div class=it-team-2-shape-1>
                                                <img src="assets/img/team/shape-1-1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=swiper-slide>
                                        <div class="it-team-2-item text-center">
                                            <div class="it-team-2-thumb-box p-relative">
                                                <div class=it-team-2-thumb data-mask-src="assets/img/team/Image.png">
                                                    <img src="assets/img/team/team-2-3.jpg" alt="">
                                                    <div class=it-team-2-social>
                                                        <a href="#"><i class=flaticon-facebook-app-symbol></i></a>
                                                        <a href="#"><i class=flaticon-twitter></i></a>
                                                        <a href="#"><i class=flaticon-skype></i></a>
                                                    </div>
                                                </div>
                                                <div class="it-team-2-shape-2 d-none d-md-block">
                                                    <img src="assets/img/home-02/teacher/Vector.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="it-team-2-author-info mt-30">
                                                <h4 class=it-team-2-title><a href=teacher-details.html>David
                                                        Hernadez</a></h4>
                                                <span>Teacher</span>
                                            </div>
                                            <div class=it-team-2-shape-1>
                                                <img src="assets/img/team/shape-1-1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="it-team-dots text-center mt-55"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="it-choose-area p-relative z-index theme-bg-2 pt-150 pb-150">
            <div class=it-choose-shape-6>
                <img src="assets/img/choose/shape-2-1.png" alt="">
            </div>
            <div class=it-choose-shape-7>
                <img src="assets/img/choose/bg-2-1.png" alt="">
            </div>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5  wow itfadeLeft" data-wow-duration=.9s data-wow-delay=.5s>
                        <div class="it-choose-content z-index-4 p-relative">
                            <div class="it-choose-title-box mb-15">
                                <span class="it-section-subtitle text-white">God’s miracles aren’t just for
                                    grown-ups—they’re for YOU too!</span>
                                <h3 class="it-section-title text-white">🌟 Why You Should Be <br>Part of
                                    Healing Streams! </h3>
                            </div>
                            <div class="it-choose-text pb-5">
                                <p class="text-white">✨ Here’s why you’ll love it:</p>
                                <ul class="text-white" style="margin-top: 0.5em; padding-left: 1.2em; line-height: 1.5;">
                                    <li><strong>Superpower Prayers 🙌</strong>: Watch God answer prayers in awesome ways!
                                    </li>
                                    <li><strong>Happy Healing 😊</strong>: Jesus wants you strong, healthy, and full of joy!
                                    </li>
                                    <li><strong>Adventure with Friends 🌍</strong>: Join kids worldwide for a faith party!
                                    </li>
                                    <li><strong>Be a Hero 🦸</strong>: Help others discover God's love - just by sharing!
                                    </li>
                                </ul>
                            </div>
                            <a class="it-btn white-bg circle-effect" href=contact.html>
                                <span>👉 Yes! I Want Miracles!
                                    <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                            fill=currentcolor />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7  wow itfadeRight" data-wow-duration=.9s data-wow-delay=.7s>
                        <div class="it-choose-thumb-wrap text-center text-lg-start">
                            <div class="it-choose-2-thumb-box p-relative">
                                <div class="it-choose-shape-8 z-index">
                                    <img src="assets/img/choose/shape-2-2.png" alt="">
                                </div>
                                <div class="it-choose-2-thumb p-relative" data-mask-src="assets/img/choose/Image.png">
                                    <img src="assets/img/choose/thumb-2.png" alt="">
                                    <div class=it-choose-2-icon>
                                        <a class=popup-video href="https://enterthehealingschool.org/hsnew/imgs/bbv2.mp4"><i
                                                class="fa-regular fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-event-area pt-115 pb-90">
            <div class=container>
            </div>
        </div>
         <div class="it-event-area pt-115 pb-90">
            <div class=container>
                <div class="row justify-content-center">
                    <div class=col-xl-7>
                        <div class="it-event-title-box text-center mb-50">
                            <span class=it-section-subtitle>Testimonies</span>
                            <h3 class="it-section-title pb-20">Healing Streams Testimonies </h3>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-30  wow itfadeUp" data-wow-duration=.9s data-wow-delay=.3s>
                        <div class=it-event-item>
                            <div class="it-event-thumb-box p-relative">
                                <div class=it-event-thumb>
                                    <img src="https://hsch.ceflixcdn.com/eths3/vow_adrew_mar23a.jpg" alt="">
                                </div>
                                {{-- <div class=it-event-tag>
                                    <span>kindergarten</span>
                                </div>
                                <div class=it-event-meta>
                                    <span><i class=flaticon-calendar></i> April 15,2024</span>
                                    <span><i class=flaticon-clock></i> 4:30pm - 05:00pm</span>
                                </div> --}}
                            </div>
                            <div class=it-event-content>
                                {{-- <div class="it-event-location pb-15">
                                    <a href="#"><i class=flaticon-map></i>238, Arimantab, Moska - USA.</a>
                                </div> --}}
                                <h4 class="it-event-title pb-25"><a href=>ANAPHYLACTIC REACTION HEALED </a></h4>
                                <a class="it-btn popup-video" href="https://hsch.ceflixcdn.com/eths3/vow_adrew_mar23a.mp4">
                                    <span>
                                        Play
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-30  wow itfadeUp" data-wow-duration=.9s data-wow-delay=.5s>
                        <div class=it-event-item>
                            <div class="it-event-thumb-box p-relative">
                                <div class=it-event-thumb>
                                    <img src="https://hsch.ceflixcdn.com/eths3/vow_febwk2.jpg" alt="">
                                </div>
                                {{-- <div class=it-event-tag>
                                    <span>kindergarten</span>
                                </div> --}}
                                {{-- <div class=it-event-meta>
                                    <span><i class=flaticon-calendar></i> April 15,2024</span>
                                    <span><i class=flaticon-clock></i> 4:30pm - 05:00pm</span>
                                </div> --}}
                            </div>
                            <div class=it-event-content>
                                {{-- <div class="it-event-location pb-15">
                                    <a href="#"><i class=flaticon-map></i>1831 Beech StreetAntioch, CA 94509</a>
                                </div> --}}
                                <h4 class="it-event-title pb-25"><a href=>HEALED OF SEVERE AUTISM </a></h4>
                                <a class="it-btn popup-video" href="https://hsch.ceflixcdn.com/vow_febwk2.mp4">
                                    <span>
                                        Play
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-30  wow itfadeUp" data-wow-duration=.9s data-wow-delay=.7s>
                        <div class=it-event-item>
                            <div class="it-event-thumb-box p-relative">
                                <div class=it-event-thumb>
                                    <img src="https://hsch.ceflixcdn.com/eths3/vow_nov_24a.jpg" alt="">
                                </div>
                                {{-- <div class=it-event-tag>
                                    <span>school</span>
                                </div> --}}
                                {{-- <div class=it-event-meta>
                                    <span><i class=flaticon-calendar></i> April 15,2024</span>
                                    <span><i class=flaticon-clock></i> 4:30pm - 05:00pm</span>
                                </div> --}}
                            </div>
                            <div class=it-event-content>
                                {{-- <div class="it-event-location pb-15">
                                    <a href="#"><i class=flaticon-map></i>238, Arimantab, Moska - USA.</a>
                                </div> --}}
                                <h4 class="it-event-title pb-25"><a href=>RAISED FROM THE DEAD</a></h4>
                                <a class="it-btn popup-video" href="https://hsch.ceflixcdn.com/eths3/vow_nov_24.mp4">
                                    <span>
                                        play
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        {{-- <div class="it-event-area pt-115 pb-90">
            <div class=container>
                <div class="row justify-content-center">
                    <div class=col-xl-7>
                        <div class="it-event-title-box text-center mb-50">
                            <span class=it-section-subtitle>Latest Events</span>
                            <h3 class="it-section-title pb-20">Upcoming school activities &
                                events schedule</h3>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-30  wow itfadeUp" data-wow-duration=.9s data-wow-delay=.3s>
                        <div class=it-event-item>
                            <div class="it-event-thumb-box p-relative">
                                <div class=it-event-thumb>
                                    <img src="assets/img/event/thumb-1-1.jpg" alt="">
                                </div>
                                <div class=it-event-tag>
                                    <span>kindergarten</span>
                                </div>
                                <div class=it-event-meta>
                                    <span><i class=flaticon-calendar></i> April 15,2024</span>
                                    <span><i class=flaticon-clock></i> 4:30pm - 05:00pm</span>
                                </div>
                            </div>
                            <div class=it-event-content>
                                <div class="it-event-location pb-15">
                                    <a href="#"><i class=flaticon-map></i>238, Arimantab, Moska - USA.</a>
                                </div>
                                <h4 class="it-event-title pb-25"><a href=event-details.html>Father’s day sundaes and
                                        Shaving</a></h4>
                                <a class=it-btn href=event-details.html>
                                    <span>
                                        join event
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-30  wow itfadeUp" data-wow-duration=.9s data-wow-delay=.5s>
                        <div class=it-event-item>
                            <div class="it-event-thumb-box p-relative">
                                <div class=it-event-thumb>
                                    <img src="assets/img/event/thumb-1-2.jpg" alt="">
                                </div>
                                <div class=it-event-tag>
                                    <span>kindergarten</span>
                                </div>
                                <div class=it-event-meta>
                                    <span><i class=flaticon-calendar></i> April 15,2024</span>
                                    <span><i class=flaticon-clock></i> 4:30pm - 05:00pm</span>
                                </div>
                            </div>
                            <div class=it-event-content>
                                <div class="it-event-location pb-15">
                                    <a href="#"><i class=flaticon-map></i>1831 Beech StreetAntioch, CA 94509</a>
                                </div>
                                <h4 class="it-event-title pb-25"><a href=event-details.html>Last Day of School end of
                                        Year Picnic</a></h4>
                                <a class=it-btn href=event-details.html>
                                    <span>
                                        join event
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-30  wow itfadeUp" data-wow-duration=.9s data-wow-delay=.7s>
                        <div class=it-event-item>
                            <div class="it-event-thumb-box p-relative">
                                <div class=it-event-thumb>
                                    <img src="assets/img/event/thumb-1-3.jpg" alt="">
                                </div>
                                <div class=it-event-tag>
                                    <span>school</span>
                                </div>
                                <div class=it-event-meta>
                                    <span><i class=flaticon-calendar></i> April 15,2024</span>
                                    <span><i class=flaticon-clock></i> 4:30pm - 05:00pm</span>
                                </div>
                            </div>
                            <div class=it-event-content>
                                <div class="it-event-location pb-15">
                                    <a href="#"><i class=flaticon-map></i>238, Arimantab, Moska - USA.</a>
                                </div>
                                <h4 class="it-event-title pb-25"><a href=event-details.html>Let’s spend summer together
                                        with your teachers</a></h4>
                                <a class=it-btn href=event-details.html>
                                    <span>
                                        join event
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="it-contact-area pt-100 pb-100 p-relative black-bg fix">
            <div class="it-contact-shape-4 d-none d-md-block">
                <img src="assets/img/contact/shape-2-2.png" alt="">
            </div>
            <div class="it-contact-shape-6 d-none d-xxl-block">
                <img src="assets/img/contact/shape-1-2.png" alt="">
            </div>
            <div class="it-contact-shape-7 d-none d-xxl-block">
                <img src="assets/img/contact/shape-2-4.png" alt="">
            </div>
            <div class="it-contact-shape-8 d-none d-xl-block">
                <img src="assets/img/contact/shape-2-5.png" alt="">
            </div>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 order-1 order-lg-0  wow itfadeLeft" data-wow-duration=.9s
                        data-wow-delay=.5s>
                        <div class="it-contact-thumb-box text-center text-lg-start z-index p-relative">
                            <div class=it-contact-thumb data-mask-src="assets/img/contact/Image.png">
                                <img src="assets/img/contact/thumb-2-1.png" alt="">
                            </div>
                            <div class="it-contact-shape-3 d-none d-md-block">
                                <img src="assets/img/contact/shape-2-1.png" alt="">
                            </div>
                            <div class="it-contact-shape-5 d-none d-xl-block">
                                <img src="assets/img/contact/shape-2-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 order-0 order-lg-1  wow itfadeRight" data-wow-duration=.9s
                        data-wow-delay=.7s>
                        <div class="it-contact-form-box z-index">
                            <div class="it-funfact-2-title-box pb-55">
                                <h4 class="it-section-title pb-15 text-white">Contact with Us</h4>
                                <p class=text-white>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br>
                                    do eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <form action="#">
                                <div class=row>
                                    <div class="col-md-6 mb-20">
                                        <div class=it-contact-input-box>
                                            <input type=text placeholder="first name:">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class=it-contact-input-box>
                                            <input type=text placeholder="your subject:">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class=it-contact-input-box>
                                            <input type=email placeholder="Email address:">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <div class=it-contact-input-box>
                                            <input type=text placeholder=Phone:>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <div class=it-contact-textarea-box>
                                            <textarea placeholder="Write here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class=it-contact-button>
                                <button class="it-btn circle-effect theme-style">
                                    <span>book a visit
                                        <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                fill=currentcolor />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="it-blog-2-area pt-120 pb-90">
            <div class=container>
                <div class=row>
                    <div class=col-xl-12>
                        <div class="it-blog-2-title-box text-center pb-55">
                            <h3 class="it-section-title pb-20">Latest Blog</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                                tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-xl-12>
                        <div class=it-blog-2-wrapper>
                            <div class="swiper-container it-blog-2-active">
                                <div class=swiper-wrapper>
                                    <div class=swiper-slide>
                                        <div class="it-blog-2-item text-center p-relative">
                                            <div class="it-blog-2-item-bg d-flex align-items-center justify-content-center"
                                                data-mask-src="assets/img/blog/Bg.png">
                                                <div class=dddd>
                                                    <div class="it-blog-2-thumb-box p-relative mb-25">
                                                        <div class="it-blog-2-thumb text-center p-relative"
                                                            data-mask-src="assets/img/blog/Image.png">
                                                            <a href=blog-details.html><img
                                                                    src="assets/img/blog/blog-2-1.jpg" alt=""></a>
                                                        </div>
                                                        <div class=it-blog-2-category>
                                                            <span>Kids</span>
                                                        </div>
                                                        <div class="it-blog-2-date p-relative">
                                                            <i>30</i>
                                                            <span> march</span>
                                                            <div class=it-blog-2-date-bg>
                                                                <span>
                                                                    <svg width=67 height=63 viewBox="0 0 67 63" fill=none
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M49.0628 10.987C52.2431 0.624557 32.1691 -7.14622 31.7708 10.39C20.043 1.42119 7.12437 11.3843 17.4601 24.1386C-2.61389 21.3494 -4.00595 43.2681 6.32979 50.8413C2.15566 55.8228 9.31101 60.8044 13.286 55.4235C25.0117 67.3792 56.2181 64.5899 56.4152 51.2386C66.751 56.4198 69.9313 41.2755 60.3902 35.098C73.7071 30.7134 63.5706 19.1571 58.801 18.9574C67.7447 12.5802 52.8386 5.60609 49.0628 10.987Z"
                                                                            fill=currentcolor />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="it-blog-2-content z-index">
                                                        <h4 class="it-blog-2-title mb-25"><a
                                                                href=blog-details.html>Inspiring
                                                                Curiosity and critical
                                                                Thinking in kids</a></h4>
                                                        <div class=it-blog-2-button>
                                                            <a class=it-btn href=contact.html>
                                                                <span>book a visit
                                                                    <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                                            fill=currentcolor />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=swiper-slide>
                                        <div class="it-blog-2-item text-center p-relative">
                                            <div class="it-blog-2-item-bg d-flex align-items-center justify-content-center"
                                                data-mask-src="assets/img/blog/Bg.png">
                                                <div class=dddd>
                                                    <div class="it-blog-2-thumb-box p-relative mb-25">
                                                        <div class="it-blog-2-thumb text-center p-relative"
                                                            data-mask-src="assets/img/blog/Image.png">
                                                            <a href=blog-details.html><img
                                                                    src="assets/img/blog/blog-2-2.jpg" alt=""></a>
                                                        </div>
                                                        <div class=it-blog-2-category>
                                                            <span>Kids</span>
                                                        </div>
                                                        <div class="it-blog-2-date p-relative">
                                                            <i>30</i>
                                                            <span> march</span>
                                                            <div class=it-blog-2-date-bg>
                                                                <span>
                                                                    <svg width=67 height=63 viewBox="0 0 67 63" fill=none
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M49.0628 10.987C52.2431 0.624557 32.1691 -7.14622 31.7708 10.39C20.043 1.42119 7.12437 11.3843 17.4601 24.1386C-2.61389 21.3494 -4.00595 43.2681 6.32979 50.8413C2.15566 55.8228 9.31101 60.8044 13.286 55.4235C25.0117 67.3792 56.2181 64.5899 56.4152 51.2386C66.751 56.4198 69.9313 41.2755 60.3902 35.098C73.7071 30.7134 63.5706 19.1571 58.801 18.9574C67.7447 12.5802 52.8386 5.60609 49.0628 10.987Z"
                                                                            fill=currentcolor />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="it-blog-2-content z-index">
                                                        <h4 class="it-blog-2-title mb-25"><a href=blog-details.html>The
                                                                Role of
                                                                early literacy in
                                                                child development</a></h4>
                                                        <div class=it-blog-2-button>
                                                            <a class=it-btn href=contact.html>
                                                                <span>book a visit
                                                                    <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                                            fill=currentcolor />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=swiper-slide>
                                        <div class="it-blog-2-item text-center p-relative">
                                            <div class="it-blog-2-item-bg d-flex align-items-center justify-content-center"
                                                data-mask-src="assets/img/blog/Bg.png">
                                                <div class=dddd>
                                                    <div class="it-blog-2-thumb-box p-relative mb-25">
                                                        <div class="it-blog-2-thumb text-center p-relative"
                                                            data-mask-src="assets/img/blog/Image.png">
                                                            <a href=blog-details.html><img
                                                                    src="assets/img/blog/blog-2-3.jpg" alt=""></a>
                                                        </div>
                                                        <div class=it-blog-2-category>
                                                            <span>Kids</span>
                                                        </div>
                                                        <div class="it-blog-2-date p-relative">
                                                            <i>30</i>
                                                            <span> march</span>
                                                            <div class=it-blog-2-date-bg>
                                                                <span>
                                                                    <svg width=67 height=63 viewBox="0 0 67 63" fill=none
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M49.0628 10.987C52.2431 0.624557 32.1691 -7.14622 31.7708 10.39C20.043 1.42119 7.12437 11.3843 17.4601 24.1386C-2.61389 21.3494 -4.00595 43.2681 6.32979 50.8413C2.15566 55.8228 9.31101 60.8044 13.286 55.4235C25.0117 67.3792 56.2181 64.5899 56.4152 51.2386C66.751 56.4198 69.9313 41.2755 60.3902 35.098C73.7071 30.7134 63.5706 19.1571 58.801 18.9574C67.7447 12.5802 52.8386 5.60609 49.0628 10.987Z"
                                                                            fill=currentcolor />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="it-blog-2-content z-index">
                                                        <h4 class="it-blog-2-title mb-25"><a href=blog-details.html>The
                                                                art of story
                                                                telling for
                                                                early learners</a></h4>
                                                        <div class=it-blog-2-button>
                                                            <a class=it-btn href=contact.html>
                                                                <span>book a visit
                                                                    <svg width=15 height=14 viewBox="0 0 15 14" fill=none
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.6875 7.71875C14.0938 7.34375 14.0938 6.6875 13.6875 6.3125L8.6875 1.3125C8.3125 0.90625 7.65625 0.90625 7.28125 1.3125C6.875 1.6875 6.875 2.34375 7.28125 2.71875L10.5625 6H1C0.4375 6 0 6.46875 0 7C0 7.5625 0.4375 8 1 8H10.5625L7.28125 11.3125C6.875 11.6875 6.875 12.3438 7.28125 12.7188C7.65625 13.125 8.3125 13.125 8.6875 12.7188L13.6875 7.71875Z"
                                                                            fill=currentcolor />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}






        </div>
    </main>
@endsection

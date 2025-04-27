<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--  Perload  --}}
    <link rel="preload" href="/assets/img/cover/background.png" as="image">
    <link rel="preload" href="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743915202/cover_resize_tggzcq.jpg" as="image">
    <link rel="preload" href="/assets/css/styles.css" as="style">
    <link rel="preload" href="/vendor/aos/aos.css" as="style">
    <link rel="preload" href="/vendor/aos/aos.js" as="script">
    <link rel="preload" href="/assets/img/cover/left/top.png" as="image">
    <link rel="preload" href="/assets/img/cover/left/bottom.png" as="image">
    <link rel="preload" href="/assets/img/cover/right/top.png" as="image">
    <link rel="preload" href="/assets/img/cover/right/bottom.png" as="image">
    <link rel="preload" href="/assets/img/cover/billion.png" as="image">
    <link rel="preload" href="/assets/icons/play.png" as="image">
    <link rel="preload" href="/assets/img/cover/onepiece.png" as="image">
    <link rel="preload" href="/assets/img/cover/marvel.png" as="image">

    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/vendor/aos/aos.css">
    <title>Willy & Dhian</title>

    <style>
        .guest-messages-container {
            width: 90%;
            background-color: #1A1A1A;
            border-radius: 10px;
            padding: 1cm;
            margin-bottom: 1cm;
            color: #F3F2ED;
            margin-top: 2cm;
            font-family: "NetflixSans-Regular", sans-serif;
        }

        .guest-messages-title {
            font-weight: bolder;
            font-size: 18px;
            margin-bottom: 0.5cm;
            text-align: left;
        }

        .guest-messages-list {
            max-height: 250px;
            overflow-y: auto;
            padding: 0.5cm;
            background-color: #333333;
            border-radius: 5px;
            position: relative;
        }

        /* Indikator Scroll */
        .guest-messages-list::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 20px;
            background: linear-gradient(to top, rgba(51, 51, 51, 0.8), rgba(51, 51, 51, 0));
            pointer-events: none;
            display: none;
        }

        .guest-messages-list.scrolling::after {
            display: block;
        }

        .guest-message-item {
            margin-bottom: 0.5cm;
            padding-bottom: 0.5cm;
            border-bottom: 1px solid #555;
        }

        .guest-message-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .guest-name {
            font-weight: bold;
            font-size: 14px;
            color: #E50914;
            margin-bottom: 0.2cm;
        }

        .guest-wish {
            font-size: 12px;
            color: #F3F2ED;
        }

        .empty-message {
            font-style: italic;
            color: #8C8C8C;
            font-size: 12px;
            text-align: center;
        }
        .message-time {
            font-size: 0.8em;
            color: #666;
            margin-top: 0.3em;
        }
        .mobile-container .main-section .text-content .description-text {
            font-size: 12px;
            font-weight: 300;
            margin-top: 5px;
            width: 100%;
            text-align: left !important;
            text-align-last: left !important;
        }
    </style>
</head>

<body>

<div class="mobile-container">
    <section class="cover-section">
        <h1 class="invitation-title">INVITE YOU</h1>
        <div class="image-container">
            <img class="main-image"
                 src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743915202/cover_resize_tggzcq.jpg" alt=""
                 oncontextmenu="return false;">
        </div>

        <div class="details-container">
            <div class="left-details">
                <img class="detail-image" src="/assets/img/cover/left/top.png" alt=""
                     oncontextmenu="return false;">
                <img class="detail-image" src="/assets/img/cover/left/bottom.png" alt=""
                     oncontextmenu="return false;">
            </div>
            <div class="center-details">
                <h2 class="couple-names">WILLY AND DHIAN</h2>
                <h1 class="wedding-type">UNLIMITED LOVE</h1>
                <div class="date-display">
                    <img class="date-icon" src="/assets/img/cover/billion.png" alt=""
                         oncontextmenu="return false;">
                    <span class="date-text">20.5.2025</span>
                </div>
                <div class="bottom-message">
                    <p class="invitation-text">Join us on a legendary journey to celebrate our wedding!</p>
                </div>
            </div>
            <div class="right-details">
                <img class="detail-image" src="/assets/img/cover/right/top.png" alt=""
                     oncontextmenu="return false;">
                <img class="detail-image" src="/assets/img/cover/right/bottom.png" alt=""
                     oncontextmenu="return false;">
            </div>
        </div>
        <h1 class="recipient-name">
            {{$guest->name}} <br>
            {{$guest->institute}}
        </h1>
        <button class="action-button">
            <img class="button-icon" src="/assets/icons/play.png" alt="" oncontextmenu="return false;">
            <span class="button-text">Let's Sail</span>
        </button>
        <div class="logo-container">
            <img class="logo-image" src="/assets/img/cover/onepiece.png" alt="" oncontextmenu="return false;">
            <img class="logo-image" src="/assets/img/cover/marvel.png" alt="" oncontextmenu="return false;">
        </div>
    </section>
    <section class="main-section">
        <div class="top-content" data-animate data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
            <div class="icon-container">
                <img class="netflix-logo" src="/assets/img/main/bp.png" aria-checked="netflix-logo" alt=""
                     oncontextmenu="return false;">
                <img class="close-button" src="/assets//icons/close.png" alt="" oncontextmenu="return false;">
            </div>
            <img class="cover-image"
                 src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743761558/Group_39_1_xespam.png" alt=""
                 oncontextmenu="return false;">
            <div class="other-info">
                <img class="like-icon" src="/assets/icons/like.png" class="like" alt=""
                     oncontextmenu="return false;">
                <p class="year-text">2025</p>
                <p class="rating-text">WD-TV</p>
                <p class="season-text">1 Season</p>
            </div>
            <button class="play-button">
                <div class="button-split">
                    <img class="play-icon" src="/assets/icons/pause.png" class="play" alt=""
                         oncontextmenu="return false;">
                    <span class="button-label">PAUSE</span>
                </div>
            </button>
        </div>
        <div class="text-content" data-animate data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
            <h1 class="episode-title">S1:E1 Yoga Willy Utomo - Dhian Nur Aini</h1>
            <p class="description-text">Dengan penuh rasa syukur kepada Allah SWT, kami mengundang
                Bapak/Ibu/Saudara/i untuk hadir dan memberikan doa restu pada acara pernikahan kami. Kehadiran Anda
                adalah kebahagiaan dan kehormatan bagi kami. Semoga momen bahagia ini menjadi awal perjalanan yang
                penuh berkah.</p>
            <p class="subtitle">
                Cast : Yoga Willy Utomo, Dhian Nur Aini <br>
                <span class="creator-text">Creator : Allah SWT</span>
            </p>
        </div>
        <div class="slider-container" id="kesini">
            <p class="slider-title" data-animate data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                Popular
            </p>
            <div class="image-slider" data-animate data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746563/WhatsApp_Image_2025-03-31_at_7.58.10_PM_kmzyav.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746567/WhatsApp_Image_2025-04-01_at_8.00.55_AM_rkrtur.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746565/WhatsApp_Image_2025-04-01_at_8.00.55_AM_1_bjbtsx.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746565/WhatsApp_Image_2025-04-01_at_8.00.56_AM_ehsn9a.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746566/WhatsApp_Image_2025-04-01_at_8.00.57_AM_pvybmz.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746567/WhatsApp_Image_2025-04-01_at_8.00.57_AM_1_acav5z.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746567/WhatsApp_Image_2025-04-01_at_8.00.58_AM_bodyp6.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746568/WhatsApp_Image_2025-04-01_at_8.00.58_AM_1_qznukx.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746568/WhatsApp_Image_2025-04-01_at_8.00.59_AM_pc5eok.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746568/WhatsApp_Image_2025-04-01_at_8.00.59_AM_1_gmogns.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746571/WhatsApp_Image_2025-04-01_at_8.01.00_AM_ne8cpl.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746570/WhatsApp_Image_2025-04-01_at_8.01.00_AM_1_syz6uw.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746571/WhatsApp_Image_2025-04-01_at_8.01.01_AM_xeueu7.jpg"
                     alt="" oncontextmenu="return false;">
            </div>
            <p class="slider-title" data-animate data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                Trending
                Now</p>
            <div class="image-slider" data-animate data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747006/47c87170-d6f9-45a1-83a4-b09038eba115_o2752k.png"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747007/59d6cf06-bf5a-4edf-8c92-00359576bb34_rzt8hd.png"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747009/152fe6d2-2199-456b-8b5a-463c37e761f1_oqjjrl.png"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747011/WhatsApp_Image_2025-03-31_at_6.42.56_PM_dfi7c7.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747008/cd3e25f2-468c-4328-aa4b-45acbfc0d244_zefcuc.png"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747010/WhatsApp_Image_2025-03-31_at_6.42.54_PM_fbl1zq.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747010/ffeea06a-f02d-466c-bbfb-4b84a60f8590_ty2cdd.png"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747009/e62ac9c6-ad9d-4b7d-a803-70953becb4c0_byrwhm.png"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747010/WhatsApp_Image_2025-03-31_at_6.42.54_PM_1_u5raoc.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747011/WhatsApp_Image_2025-03-31_at_6.42.56_PM_dfi7c7.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747010/ffeea06a-f02d-466c-bbfb-4b84a60f8590_ty2cdd.png"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747014/WhatsApp_Image_2025-03-31_at_6.42.56_PM_2_cfucxa.jpg"
                     alt="" oncontextmenu="return false;">
                <img class="slider-image"
                     src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747014/WhatsApp_Image_2025-03-31_at_6.42.57_PM_1_yvqbo0.jpg"
                     alt="" oncontextmenu="return false;">
            </div>
        </div>
        <div class="quote-card" data-aos-duration="2000" data-aos-delay="250" data-aos="zoom-in">
            <img class="quote-image" src="/assets/img/main/luffy.png" alt="" oncontextmenu="return false;"
                 srcset="">
            <p class="quote-text">
                “Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu pasangan-pasangan dari
                jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antaramu
                rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi
                kaum yang berfikir.”
                <br>
                <br>
                <span class="quote-source">- QS. Ar-Rum: 21</span>
            </p>
        </div>
        <div class="card-container">
            <img class="card-image"
                 src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743746298/Willy_gm207k.jpg" alt=""
                 oncontextmenu="return false;" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
            <img class="card-image"
                 src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743915139/Dhian_nl9bgj.jpg" alt=""
                 oncontextmenu="return false;" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
        </div>
        <div class="countdown-container" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
            <div class="left-content">
                <img class="akad-image" src="/assets/img/main/akad.png" alt="">
                <div class="countdown-timer">
                    <div class="timer-item">
                        <p class="timer-number" data-unit="days">00</p>
                        <span class="timer-label">Days</span>
                    </div>
                    <div class="timer-item">
                        <p class="timer-number" data-unit="hours">00</p>
                        <span class="timer-label">Hours</span>
                    </div>
                    <div class="timer-item">
                        <p class="timer-number" data-unit="minutes">00</p>
                        <span class="timer-label">Minutes</span>
                    </div>
                    <div class="timer-item">
                        <p class="timer-number" data-unit="seconds">00</p>
                        <span class="timer-label">Seconds</span>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <img class="thanos-image" src="/assets/img/main/drstrange.png" alt=""
                     oncontextmenu="return false;">
            </div>
        </div>
        <div class="events-container">
            <div class="event-card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <p class="event-title">Akad Nikah</p>
                <table class="event-table">
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>Selasa, 20 Mei 2025</td>
                    </tr>
                    <tr>
                        <td>Pukul</td>
                        <td>:</td>
                        <td>08.00 WIB - Selesai</td>
                    </tr>
                </table>
            </div>
            <div class="event-card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <p class="event-title">Tasyakuran</p>
                <table class="event-table">
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>20-22 Mei 2025</td>
                    </tr>
                    <tr>
                        <td>Pukul</td>
                        <td>:</td>
                        <td>09.00 WIB - Selesai</td>
                    </tr>
                </table>
            </div>
            <div class="place-card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <p class="place-title">Tempat</p>
                <p class="place-description">Kalikajar RT 001/RW 003, Kec. Kaligondang, Kab. Purbalingga.</p>
            </div>
            <div class="place-card" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <p class="place-title">Maps</p>
                <iframe class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3956.800510638605!2d109.373751!3d-7.3762419999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjInMzQuNSJTIDEwOcKwMjInMjUuNSJF!5e0!3m2!1sen!2sid!4v1743928721743!5m2!1sen!2sid"
                        width="100%" height="200" style="border:0; margin-bottom: .5cm;margin-top: .2cm;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a class="map-link" href="https://maps.app.goo.gl/KpqqBLya1pRTiTk57">LINK</a>
            </div>
        </div>
        <div class="prayer-section" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
            <p class="prayer-text">“Bagi para tamu yang hadir, kami sangat menghargai kehadiran Anda yang turut
                menyaksikan kebahagiaan kami. Semoga doa dan restu Anda menjadi berkah yang tak terhingga bagi
                perjalanan hidup kami.”</p>
            <p class="prayer-author">- Willy & Dhian -</p>
        </div>
        <div class="wallet-section">
            <div class="wallet-vertical" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <div class="wallet-letter">W</div>
                <div class="wallet-letter">A</div>
                <div class="wallet-letter">L</div>
                <div class="wallet-letter">L</div>
                <div class="wallet-letter">E</div>
                <div class="wallet-letter">T</div>
            </div>
            <div class="payment-options" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <div class="qr-section">
                    <h3>QR Code</h3>
                    <div class="qr-container">
                        <div class="qr-item">
                            <img class="qr-image"
                                 src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747582/Bank_Jateng_rvpgew.jpg"
                                 alt="QR Bank Jateng" oncontextmenu="return false;">
                            <p class="bank-info">Bank Jateng</p>
                        </div>
                        <div class="qr-item">
                            <img class="qr-image"
                                 src="https://res.cloudinary.com/djhl6s1ch/image/upload/v1743747583/Dana_k3babo.jpg"
                                 alt="QR Dana" oncontextmenu="return false;">
                            <p class="bank-info">Dana</p>
                        </div>
                    </div>
                </div>
                <div class="bank-section">
                    <h3>Nomor Rekening</h3>
                    <div class="bank-container">
                        <div class="bank-item"
                             style="background-image: url('https://res.cloudinary.com/djhl6s1ch/image/upload/v1743761126/Background-atm-invitren_uumvpc.jpg');">
                            <p class="bank-name">BRI</p>
                            <img class="bank-pin" src="/assets/icons/chip.svg" alt="PIN Icon">
                            <p class="account-name">An. Dhian Nur Aini</p>
                            <p class="bank-number" id="bri-number">372401021630532</p>
                            <button class="copy-btn" onclick="copyToClipboard('bri-number')">Salin <img
                                    src="/assets/icons/copy-icon.png" alt=""></button>
                        </div>
                        <div class="bank-item"
                             style="background-image: url('https://res.cloudinary.com/djhl6s1ch/image/upload/v1743761126/Background-atm-invitren_uumvpc.jpg');">
                            <p class="bank-name">BCA</p>
                            <img class="bank-pin" src="/assets/icons/chip.svg" alt="PIN Icon">
                            <p class="account-name">An. Yoga Willy Utomo</p>
                            <p class="bank-number" id="bca-number">3580557651</p>
                            <button class="copy-btn" onclick="copyToClipboard('bca-number')">Salin <img
                                    src="/assets/icons/copy-icon.png" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section" data-aos-duration="2000" data-aos-delay="250" data-aos="zoom-in"
             data-aos-anchor-placement="top-bottom">
            <form class="response-form" action="{{route('store-message')}}" method="POST">
                @csrf
                <input type="hidden" name="username" value="{{$guest->username}}">
                <p class="form-title">Give a Wish</p>
                <input class="form-input" type="text" name="name" placeholder="Nama" id="" value="{{$guest->name}}" disabled>
                <select class="form-select" name="attendance" id="" required>
                    <option value="" disabled selected>Will You Board the Sunny?</option>
                    <option value="I Bring Sake for the Crew!">I Bring Sake for the Crew!</option>
                    <option value="My Heart Belongs to the Sea<">My Heart Belongs to the Sea</option>
                </select>
                <textarea class="form-textarea" name="message" id="" placeholder="Wish" required></textarea>
                <button class="form-button" type="submit">Submit</button>
            </form>
            <div class="guest-messages-container" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="250">
                <p class="guest-messages-title">Your Wishes:</p>
                <div class="guest-messages-list">
                    @if ($guestMessages->isNotEmpty())
                        @foreach ($guestMessages as $message)
                            <div class="guest-message-item">
                                <p class="guest-name">{{ $message->guest->name }}</p>
                                <p class="guest-wish">{{ $message->message }}</p>
                                <p class="message-time">{{ $message->created_at->format('D, d M Y H:i:s') }}</p> <!-- Tambahkan waktu -->
                            </div>
                        @endforeach
                    @else
                        <p class="empty-message">Belum ada ucapan.</p>
                    @endif
                </div>
            </div>
            <div class="thanks-message">
                <p class="thanks-text">“Terima kasih atas doa dan kehadiran Anda yang telah menambah kebahagiaan
                    kami.
                    Salam hangat dari kami keluarga besar mempelai pria dan wanita”</p>
                <p class="thanks-author">Hormat Kami <span class="couple-names">Willy & Dhian</span></p>
            </div>
        </div>
    </section>
</div>
<script src="/vendor/aos/aos.js"></script>
<script src="/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.response-form');
        const messagesList = document.querySelector('.guest-messages-list');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': formData.get('_token')
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Success!',
                            text: data.success,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            form.reset();
                            if (data.newMessage) {
                                const emptyMessage = messagesList.querySelector('.empty-message');
                                if (emptyMessage) {
                                    emptyMessage.remove();
                                }

                                const newMessageDiv = document.createElement('div');
                                newMessageDiv.classList.add('guest-message-item');
                                newMessageDiv.innerHTML = `
                            <p class="guest-name">${data.newMessage.name}</p>
                            <p class="guest-wish">${data.newMessage.message}</p>
                            <p class="message-time">${data.newMessage.created_at}</p> <!-- Tambahkan waktu -->
                        `;

                                if (messagesList.firstChild) {
                                    messagesList.insertBefore(newMessageDiv, messagesList.firstChild);
                                } else {
                                    messagesList.appendChild(newMessageDiv);
                                }
                            }
                        });
                    } else if (data.error) {
                        Swal.fire({
                            title: 'Failed!',
                            text: data.error,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan saat mengirim pesan.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
        });
    });
</script>
</body>

</html>

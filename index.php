<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCAPE</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="libs/slick-carousel/slick.css">
    <link rel="stylesheet" href="libs/animate.css/animate.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="index.html" class="logo wow animate__animated animate__zoomIn" data-wow-delay="0.6s">
                    <img src="images/logo.png" alt="logo">
                </a>
                <nav class="header__menu">
                    <ul class="menu__list">
                        <li class="menu__link wow animate__animated animate__fadeInLeft" data-wow-delay="0.7s">
                            <a class="active" href="index.php">ГЛАВНАЯ</a>
                        </li>
                        <li class="menu__link wow animate__animated animate__fadeInLeft" data-wow-delay="0.8s">
                            <a href="founder.php">ОСНОВАТЕЛЬ</a>
                        </li>
                        <li class="menu__link wow animate__animated animate__fadeInLeft" data-wow-delay="1s">
                            <a href="services.html">УСЛУГИ</a>
                        </li>
                        <li class="menu__link wow animate__animated animate__fadeInLeft" data-wow-delay="1.2s">
                            <a href="case.html">КЕЙСЫ</a>
                        </li>
                        <li class="menu__link wow animate__animated animate__fadeInLeft" data-wow-delay="1.4s">
                            <a href="reviews.html">ОТЗЫВЫ</a>
                        </li>
                        <li class="menu__link wow animate__animated animate__fadeInLeft" data-wow-delay="1.6s">
                            <a href="contacts.html">КОНТАКТЫ</a>
                        </li>
                        <li class="menu__links-social">
                            <a href="#" class="menu__link-social instagram">
                                <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0225 0H2.6045C1.91374 0 1.25128 0.274402 0.762839 0.762839C0.274402 1.25128 0 1.91374 0 2.6045L0 13.0225C0 13.7132 0.274402 14.3757 0.762839 14.8641C1.25128 15.3526 1.91374 15.627 2.6045 15.627H13.0225C13.7132 15.627 14.3757 15.3526 14.8641 14.8641C15.3526 14.3757 15.627 13.7132 15.627 13.0225V2.6045C15.627 1.91374 15.3526 1.25128 14.8641 0.762839C14.3757 0.274402 13.7132 0 13.0225 0V0ZM14.3247 13.0225C14.3247 13.3679 14.1875 13.6991 13.9433 13.9433C13.6991 14.1875 13.3679 14.3247 13.0225 14.3247H2.6045C2.25912 14.3247 1.92789 14.1875 1.68367 13.9433C1.43945 13.6991 1.30225 13.3679 1.30225 13.0225V2.6045C1.30225 2.25912 1.43945 1.92789 1.68367 1.68367C1.92789 1.43945 2.25912 1.30225 2.6045 1.30225H13.0225C13.3679 1.30225 13.6991 1.43945 13.9433 1.68367C14.1875 1.92789 14.3247 2.25912 14.3247 2.6045V13.0225Z" fill="white" />
                                    <path d="M7.813 3.90674C7.04032 3.90674 6.28499 4.13586 5.64253 4.56514C5.00006 4.99442 4.49933 5.60457 4.20364 6.31844C3.90794 7.0323 3.83058 7.81782 3.98132 8.57565C4.13206 9.33349 4.50414 10.0296 5.05051 10.576C5.59688 11.1223 6.29299 11.4944 7.05083 11.6452C7.80866 11.7959 8.59418 11.7185 9.30804 11.4228C10.0219 11.1272 10.6321 10.6264 11.0613 9.98395C11.4906 9.34149 11.7197 8.58616 11.7197 7.81348C11.7197 6.77735 11.3081 5.78365 10.5755 5.051C9.84283 4.31834 8.84913 3.90674 7.813 3.90674ZM7.813 10.418C7.29788 10.418 6.79432 10.2652 6.36602 9.97904C5.93771 9.69286 5.60388 9.28609 5.40676 8.81018C5.20963 8.33427 5.15805 7.81059 5.25854 7.30537C5.35904 6.80015 5.60709 6.33607 5.97134 5.97183C6.33558 5.60758 6.79966 5.35953 7.30488 5.25903C7.81011 5.15854 8.33379 5.21011 8.80969 5.40724C9.2856 5.60437 9.69237 5.9382 9.97856 6.3665C10.2647 6.79481 10.4175 7.29836 10.4175 7.81348C10.4175 8.50424 10.1431 9.1667 9.65465 9.65514C9.16622 10.1436 8.50375 10.418 7.813 10.418Z" fill="white" />
                                    <path d="M12.046 4.55835C12.5854 4.55835 13.0227 4.12108 13.0227 3.58167C13.0227 3.04226 12.5854 2.60498 12.046 2.60498C11.5066 2.60498 11.0693 3.04226 11.0693 3.58167C11.0693 4.12108 11.5066 4.55835 12.046 4.55835Z" fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li class="menu__links-social">
                            <a href="#" class="menu__link-social">
                                <svg width="6" height="11" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.53945 2.49062H8V0.105625C7.74802 0.073125 6.88143 0 5.87218 0C3.76635 0 2.32381 1.24187 2.32381 3.52437V5.625H0V8.29125H2.32381V15.5H5.1729V8.29187H7.40272L7.75669 5.62563H5.17224V3.78875C5.1729 3.01813 5.39422 2.49062 6.53945 2.49062Z" fill="white" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="menu">
                    <a href="#" class="phone__btn">
                        <img src="images/icons/phone.svg" alt="">
                    </a>
                    <div class="menu__btn">
                        <div class="menu__btn-line"></div>
                        <div class="menu__btn-line"></div>
                        <div class="menu__btn-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="main__intro">
            <video class="main__video-bg" width="100%" height="auto" preload="auto" muted autoplay="autoplay" loop="loop">
                <source src="video/bg.mp4" type="video/mp4">
            </video>
        </div>

        <div class="container">
            <div class="main__inner">
                <div class="main__suptitle suptitle wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                    ВЛАДИВОСТОК И ПРИМОРСКИЙ КРАЙ
                </div>
                <h1 class="main__title title wow animate__animated animate__fadeInUp" data-wow-delay="1.3s">
                    Профессиональная
                    юридическая помощь
                </h1>
                <div class="main__form wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
                    <form>
                        <input type="text" class="main__form-phone" placeholder="+7 (   ) _ _ _ _">
                        <button class="main__form-btn btn" type="submit">заКАЗАТЬ ЗВОНОК</button>
                    </form>
                    <div class="main__form-descr">
                        Оставляя заявку Вы соглашаетесь с политикой конфиденциальности
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="container">
            <div class="benefits__suptitle suptitle wow animate__animated animate__fadeInUp">
                ЮРИДИЧЕСКАЯ КОМПАНИЯ
            </div>
            <h1 class="title benefits__title wow animate__animated animate__fadeInUp">
                Escape
            </h1>
            <div class="benefits__text text wow animate__animated animate__fadeInUp">
                Адвокаты и юристы с многолетним опытом защитят ваши интересы в суде, разрешат семейные и корпоративные
                конфликты и спасут бизнес от любых юридических угроз. Мы возьмем на себя все вопросы по решению дела и
                поможем добиться выгодного решения.
            </div>
            <div class="benefits__items">
                <div class="benefits__item wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                    <div class="benefits__icon">
                        <img src="images/icons/benefits-icon.svg" class="lazyload" alt="">
                    </div>
                    <h3 class="benefits__item-title">
                        Решаем сложные вопросоы
                    </h3>
                    <div class="benefits__item-text">
                        У нас работают настоящие профи в гражданском, корпоративном, семейном, уголовном и других
                        областях права.
                    </div>
                </div>
                <div class="benefits__item wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                    <div class="benefits__icon">
                        <img src="images/icons/benefits-icon.svg" class="lazyload" alt="">
                    </div>
                    <h3 class="benefits__item-title">
                        Досудебное урегулирование
                    </h3>
                    <div class="benefits__item-text">
                        Встречаются дела, когда вопрос можно решить без суда и сэкономить деньги, время и нервы – мы это
                        сделаем!
                    </div>
                </div>
                <div class="benefits__item wow animate__animated animate__fadeInUp" data-wow-delay="1.3s">
                    <div class="benefits__icon">
                        <img src="images/icons/benefits-icon.svg" class="lazyload" alt="">
                    </div>
                    <h3 class="benefits__item-title">
                        Оповещаем о заведомо проигрышных делах
                    </h3>
                    <div class="benefits__item-text">
                        Не все можно решить полностью в вашу пользу. В таких случаях, мы честно предупреждаем об этом,
                        чтобы вы не тратили деньги.
                    </div>
                </div>
                <div class="benefits__item wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
                    <div class="benefits__icon">
                        <img src="images/icons/benefits-icon.svg" class="lazyload" alt="">
                    </div>
                    <h3 class="benefits__item-title">
                        Бесплатная первичная консультация
                    </h3>
                    <div class="benefits__item-text">
                        Если вы заключаете договор, то оплачивать первую консультацию отдельно не нужно.
                    </div>
                </div>
                <div class="benefits__item wow animate__animated animate__fadeInUp" data-wow-delay="1.5s">
                    <div class="benefits__icon">
                        <img src="images/icons/benefits-icon.svg" class="lazyload" alt="">
                    </div>
                    <h3 class="benefits__item-title">
                        Адекватные расценки
                        на услуги компании
                    </h3>
                    <div class="benefits__item-text">
                        Индивидуальный подход к каждому клиенту, оптимальное соотношение "цена-объем-качество"
                    </div>
                </div>
                <div class="benefits__item wow animate__animated animate__fadeInUp" data-wow-delay="1.6s">
                    <div class="benefits__icon">
                        <img src="images/icons/benefits-icon.svg" class="lazyload" alt="">
                    </div>
                    <h3 class="benefits__item-title">
                        За судебные расходы платит ваш оппонент
                    </h3>
                    <div class="benefits__item-text">
                        Мы включаем взыскание расходов на юридические улуги с вашего оппонента.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="services__suptitle suptitle wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                ПОМОЩЬ В ЛЮБОМ ВОПРОСЕ
            </div>
            <h1 class="title services__title wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                Ключевые практики
            </h1>
            <div class="services__inner">
                <a href="semeynoye-pravo.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1s" target="_blank">
                    Семейное право
                </a>
                <a href="grazhdanskoye-pravo.html" class="services__link wow animate__animated animate__fadeInUp " data-wow-delay="1.2s" target="_blank">
                    Гражданское право
                </a>
                <a href="korporativnoye-pravo.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1.3s" target="_blank">
                    Корпоративное право
                </a>
                <a href="nasledstvennoye-pravo.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1.4s" target="_blank">
                    Наследственное право
                </a>
                <a href="practice-law.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1.5s" target="_blank">
                    Уголовное право
                </a>
                <a href="administrativnoye-pravo.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1.6s" target="_blank">
                    Административное право
                </a>
                <a href="arbitrazhnoye-pravo.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1.7s" target="_blank">
                    Арбитражное право
                </a>
                <a href="predstavitelstvo-v-sude.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1.8s" target="_blank">
                    Представительство в суде
                </a>
                <a href="pravovoy-analiz-dokumentov.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1.9s" target="_blank">
                    Анализ и оценка документов
                </a>
                <a href="yuridicheskoye-soprovozhdeniye.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="2s" target="_blank">
                    Юридическое сопровождение
                </a>
                <a href="brachnyy-kontrakt.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="2.1s" target="_blank">
                    Составление брачных контрактов
                </a>
                <a href="sostavlenie-dogovorov.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="2.2s" target="_blank">
                    Составление договоров
                </a>
                <a href="pravovoy-audit.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="2.3s" target="_blank">
                    Правовой аудит
                </a>
                <a href="soprovozhdeniye-sdelok-s-nedvizhimostyu.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="2.4s" target="_blank">
                    Сопровождение сделок с недвижимостью
                </a>
                <a href="zashchita-prav-potrebiteley.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="2.5s" target="_blank">
                    Защита прав потребителей
                </a>
                <a href="drugiye-yuridicheskiye-voprosy.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="2.6s" target="_blank">
                    Другие юридические аспекты
                </a>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__content wow animate__animated animate__fadeInUp" data-wow-delay="2s" data-wow-duration="1.5s">
                    <div class="suptitle about__suptitle">
                        ОСНОВАТЕЛЬ КОМПАНИИ
                    </div>
                    <h1 class="about__title title">
                        Андрей Юрьевич
                        <span>Васильев</span>
                    </h1>
                    <div class="about__text text">
                        Адвокат, который работает на результат! Юрист с опытом работы не только в различных областях
                        права, но и в органах Прокуратуры и Следственного комитета. Такой опыт позволяет отстаивать
                        интересы клиентов со знанием всех нюансов и специфики процесса, будь то консультация,
                        представительство в суде или правовой аудит.
                    </div>
                    <a href="founder.html" class="about__link link">
                        Подробнее
                    </a>
                    <div class="about__inner">
                        <div class="about__experience">
                            10+
                        </div>
                        <div class="about__experience-text">
                            Лет стаж юридической практики
                        </div>
                        <div class="about__box">
                            <a href="https://www.instagram.com/auvasiliev/" class="about__link-social about__link-instagram"><img src="images/icons/instagram-icon.svg" alt="instagram"></a>
                            <a href="https://www.facebook.com/%D0%90%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D1%8C%D0%B5%D0%B2-%D0%90%D0%B4%D0%B2%D0%BE%D0%BA%D0%B0%D1%82-2221603111217790/?ref=page_internal" class="about__link-social about__link-facebook"><img src="images/icons/facebook-icon.svg" alt="facebook"></a>
                        </div>
                    </div>
                </div>
                <div class="about__img wow animate__animated animate__fadeInUp" data-wow-delay="2.2s" data-wow-duration="1.8s">
                    <picture>
                        <source srcset="images/about-img.jpg 1x">
                        <img src="images/about-img.jpg" class="lazyload" srcset="images/about-img@2x.jpg 2x, images/about-img@3x.jpg 3x">
                    </picture>
                </div>

            </div>
            <a href="founder.html" class="about__link link adaptive wow animate__animated animate__fadeInUp" data-wow-delay="2.2s">
                Подробнее
            </a>
        </div>
    </section>
    <section class="example">
        <div class="container">
            <div class="suptitle example__suptitle wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                КЕЙСЫ
            </div>
            <h1 class="title example__title wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                Дела из практики
            </h1>
            <div class="example__text text wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                Перед вами – примеры реальных дел из нашей практики. Мы всегда на вашей стороне и добиваемся выгодных
                решений даже в самых сложных ситуациях.
            </div>
            <div class="example__items">
                <div class=" example__item wow animate__animated animate__fadeInUp" data-wow-delay="1.4s" data-wow-duration="1.5s">
                    <h3 class="example__item-title">
                        Учётное ДТП (погиб водитель), проводилась доследственная проверка по ст.264 ч.3 УК РФ (до 5 лет
                        лишения свободы)
                    </h3>
                    <div class="example__item-suptitle">
                        Результат
                    </div>
                    <div class="example__item-text">
                        Водитель избежал уголовной ответственности - вынесено постановление об отказе в возбуждении
                        уголовного дела.
                    </div>
                    <div class="example__item-links">
                        <a data-fancybox="case" data-src="#case__item-1" href="javascript:;" class="example__item-descr link">Подробнее</a>
                        <a href="case.html" class="example__item-link link">Все дела</a>
                    </div>
                </div>
                <div class="example__item wow animate__animated animate__fadeInUp" data-wow-delay="1.6s" data-wow-duration="1.5s">
                    <h3 class="example__item-title">
                        По ст.158 ч.3 п.”а” УК РФ - кража совершённая группой лиц с незаконным проникновением в жилище
                        (до 6 лет лишения свободы)
                    </h3>
                    <div class="example__item-suptitle">
                        Результат
                    </div>
                    <div class="example__item-text">
                        Грамотно выстроенная позиция защиты, приговор суда – 3 года лишения свободы условно.
                    </div>
                    <div class="example__item-links">
                        <a data-fancybox="case" data-src="#case__item-2" href="javascript:;" class="example__item-descr link">Подробнее</a>
                        <a href="case.html" class="example__item-link link">Все дела</a>
                    </div>
                </div>
                <div class="example__item wow animate__animated animate__fadeInUp" data-wow-delay="1.8s" data-wow-duration="1.5s">
                    <h3 class="example__item-title">
                        Ордер на жильё, выданный во времена СССР, был утерян, других документов на жилое помещение не
                        было, возникла необходимость в приватизации жилья.
                    </h3>
                    <div class="example__item-suptitle">
                        Результат
                    </div>
                    <div class="example__item-text">
                        Администрацию Владивостока обязали заключить договор социального найма, произведена приватизация
                        жилья.
                    </div>
                    <div class="example__item-links">
                        <a data-fancybox="case" data-src="#case__item-3" href="javascript:;" class="example__item-descr link">Подробнее</a>
                        <a href="case.html" class="example__item-link link">Все дела</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews" class="reviews">
        <div class="container">
            <div class="reviews__wrapper">
                <div class="reviews__content wow animate__animated animate__fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
                    <div class="reviews__suptitle suptitle">
                        БЛАГОДАРНОСИТЬ
                    </div>
                    <h1 class="title reviews__title">
                        Пиьма и отзывы
                    </h1>
                    <div class="reviews__text text">
                        Ничто не говорит о нашей работе лучше, чем благодарности клиентов, чьи дела были успешно решены
                        в суде. Среди них и компании, и частные лица, которым мы каждый день помогаем решать проблемы в
                        различных областях права. Искренне благодарим за каждый оставленный отзыв и оказанное нам
                        доверие!
                    </div>
                    <a href="reviews.html" class="reviews__link link">Все отзывы</a>
                </div>
                <div class="reviews__tab wow animate__animated animate__fadeInUp" data-wow-delay="1.4s" data-wow-duration="1.5s">
                    <div class="tabs">
                        <span class="tab active" data-id="1">письма</span>
                        <span class="tab" data-id="2">ОТЗЫВЫ</span>
                    </div>
                    <div class="tab_content">
                        <div class="tab-item active-tab" id="1">
                            <div class="reviews__tab-mails">
                                <a href="images/letter-1.jpg" class="reviews__tab-mail" data-fancybox="images">
                                    <img src="images/letter-1.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/letter-2.jpg" class="reviews__tab-mail" data-fancybox="images">
                                    <img src="images/letter-2.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/letter-3.jpg" class="reviews__tab-mail" data-fancybox="images">
                                    <img src="images/letter-3.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/letter-4.jpg" class="reviews__tab-mail" data-fancybox="images">
                                    <img src="images/letter-4.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/letter-5.jpg" class="reviews__tab-mail" data-fancybox="images">
                                    <img src="images/letter-5.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/letter-6.jpg" class="reviews__tab-mail" data-fancybox="images">
                                    <img src="images/letter-6.jpg" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="tab-item" id="2">
                            <div class="reviews__tab-reviews">
                                <a href="images/review-1.jpg" class="reviews__tab-review" data-fancybox="review">
                                    <img src="images/review-1.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/review-2.jpg" class="reviews__tab-review" data-fancybox="review">
                                    <img src="images/review-2.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/review-3.jpg" class="reviews__tab-review" data-fancybox="review">
                                    <img src="images/review-3.jpg" alt="" class="lazyload">
                                </a>
                                <a href="images/review-4.jpg" class="reviews__tab-review" data-fancybox="review">
                                    <img src="images/review-4.jpg" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <h1 class="title feedback__title wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                Нужна квалифицированная юридическая
                <span>помощь во Владивостоке?</span>
            </h1>
            <div class="feedback__suptitle suptitle wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                ОСТАВЬТЕ СООБЩЕНИЕ И МЫ СВЯЖЕМСЯ С ВАМИ
            </div>
            <form class="feedback__form">
                <input type="text" class="feedback__form-input wow animate__animated animate__fadeInUp" data-wow-delay="1.3s" required placeholder="Ваше имя">
                <input type="tel" class="feedback__form-input feedback__form-phone wow animate__animated animate__fadeInUp" data-wow-delay="1.4s" required placeholder="Ваш телефон">
                <input type="email" class="feedback__form-input wow animate__animated animate__fadeInUp" data-wow-delay="1.5s" required placeholder="Ваше e-mail">
                <textarea class="feedback__form-input feedback__form-textarea wow animate__animated animate__fadeInUp" data-wow-delay="1.6s" required placeholder="Ваше сообщение"></textarea>
                <div class="feedback__form-descr wow animate__animated animate__fadeInUp" data-wow-delay="1.7s">
                    Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с политикой
                    конфиденциальности
                </div>
                <div class="feedback__form-buttons">
                    <div class="feedback__form-radios">
                        <div class="feedback__form-box wow animate__animated animate__fadeInUp" data-wow-delay="1.8s">
                            <input type="radio" checked class="feedback__form-radio" name="feedback__form-radio" id="feedback__call">
                            <label class="feedback__form-label" for="feedback__call">Позвоните мне</label>
                        </div>
                        <div class="feedback__form-box wow animate__animated animate__fadeInUp" data-wow-delay="1.9s">
                            <input id="feedback__whats" type="radio" class="feedback__form-radio" name="feedback__form-radio">
                            <label class="feedback__form-label" for="feedback__whats">Напишите в WhatsApp</label>
                        </div>
                        <div class="feedback__form-box wow animate__animated animate__fadeInUp" data-wow-delay="2s">
                            <input id="feedback__telegram" type="radio" class="feedback__form-radio" name="feedback__form-radio">
                            <label class="feedback__form-label" for="feedback__telegram">Напишите в Telegram</label>
                        </div>
                    </div>
                    <button class="feedback__form-btn btn wow animate__animated animate__fadeInUp" data-wow-delay="2.1s" type="submit">
                        ОТПРАВИТЬ
                    </button>
                </div>
            </form>
            <div class="feedback__form-descr adaptive">
                Оставляя заявку Вы соглашаетесь
                с политикой конфиденциальности
            </div>
        </div>
    </section>
    <section class="map">
        <div id="map" class="wow animate__animated animate__fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
        </div>
    </section>
    <?php
    include 'layout/footer.php';
    ?>


    <div id="case__item-1" class="case__item case__item-modal" style="display: none;">
        <div class="case__item-wrapper">
            <div class="case__item-inner">
                <div class="case__item-title">
                    Учётное ДТП (погиб велосипедист), проводилась доследственная проверка по ст.264 ч.3 УК РФ (до 5
                    лет лишения свободы).
                </div>
                <div class="case__item-heading">
                    Работа
                </div>
                <div class="case__item-text text">
                    Собраны доказательства, заявлены ходатайства о проведении ряда экспертиз, представлены иные
                    материалы.
                </div>
                <div class="case__item-heading">
                    Результат
                </div>
                <div class="case__item-text text">
                    Водитель избежал уголовной ответственности - вынесено постановление об отказе в возбуждении
                    уголовного дела.
                </div>
            </div>
            <a href="#" class="case__item-link">
                РЕШЕНИЕ СУДА
            </a>
        </div>
        <a href="case.html" class="case__item-more link">Все дела</a>
    </div>
    <div id="case__item-2" class="case__item case__item-modal" style="display: none;">
        <div class="case__item-wrapper">
            <div class="case__item-inner">
                <div class="case__item-title">
                    Учётное ДТП (погиб велосипедист), проводилась доследственная проверка по ст.264 ч.3 УК РФ (до 5
                    лет лишения свободы).
                </div>
                <div class="case__item-heading">
                    Работа
                </div>
                <div class="case__item-text text">
                    Собраны доказательства, заявлены ходатайства о проведении ряда экспертиз, представлены иные
                    материалы.
                </div>
                <div class="case__item-heading">
                    Результат
                </div>
                <div class="case__item-text text">
                    Водитель избежал уголовной ответственности - вынесено постановление об отказе в возбуждении
                    уголовного дела.
                </div>
            </div>
            <a href="#" class="case__item-link">
                РЕШЕНИЕ СУДА
            </a>
        </div>
        <a href="case.html" class="case__item-more link">Все дела</a>
    </div>
    <div id="case__item-3" class="case__item case__item-modal" style="display: none;">
        <div class="case__item-wrapper">
            <div class="case__item-inner">
                <div class="case__item-title">
                    Учётное ДТП (погиб велосипедист), проводилась доследственная проверка по ст.264 ч.3 УК РФ (до 5
                    лет лишения свободы).
                </div>
                <div class="case__item-heading">
                    Работа
                </div>
                <div class="case__item-text text">
                    Собраны доказательства, заявлены ходатайства о проведении ряда экспертиз, представлены иные
                    материалы.
                </div>
                <div class="case__item-heading">
                    Результат
                </div>
                <div class="case__item-text text">
                    Водитель избежал уголовной ответственности - вынесено постановление об отказе в возбуждении
                    уголовного дела.
                </div>
            </div>
            <a href="#" class="case__item-link">
                РЕШЕНИЕ СУДА
            </a>
        </div>
        <a href="case.html" class="case__item-more link">Все дела</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="libs/fancybox/jquery.fancybox.min.js"></script>
    <script src="libs/slick-carousel/slick.min.js"></script>
    <script src="libs/wow.js/wow.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAojGldvDEouGkCMX35PXbDpNB39G9yrSs&callback=initMap" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"></script>
    <script src="libs/lazysizes/lazysizes.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
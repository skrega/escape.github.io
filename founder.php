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
                            <a href="index.php">ГЛАВНАЯ</a>
                        </li>
                        <li class="menu__link wow animate__animated animate__fadeInLeft" data-wow-delay="0.8s">
                            <a class="active" href="founder.php">ОСНОВАТЕЛЬ</a>
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
    <section class="founder">
        <div class="container">
            <!-- <div class="founder__inner" style="background-image: url(images/founder-bg.png);"> -->
            <div class="founder__inner wow animate__animated animate__fadeInUpBg" data-wow-delay="1s">
                <div class="founder__name wow animate__animated animate__fadeInLeft" data-wow-delay="1.5s">
                    Андрей
                    Юрьевич
                    Васильев
                </div>
                <div class="founder__content">
                    <div class="founder__suptitle suptitle wow animate__animated animate__fadeInRight" data-wow-delay="2s">
                        ОСНОВАТЕЛЬ КОМПАНИИ
                    </div>
                    <h1 class="founder__title title wow animate__animated animate__fadeInRight" data-wow-delay="2.2s">
                        Ведущий адвокат
                    </h1>
                    <div class="founder__text text wow animate__animated animate__fadeInRight" data-wow-delay="2.3s">
                        Консультация – первый шаг к решению любой проблемы! Особенно если это консультация у Андрея
                        Васильева, профи со стажем более 10 лет и опытом работы в государственных органах. Этот адвокат
                        всегда добивается выгодных результатов в различных областях права.
                    </div>
                    <div class="founder__links">
                        <a href="https://www.instagram.com/auvasiliev/" class="founder__link-instagram about__link-social about__link-instagram wow animate__animated animate__fadeInRight" data-wow-delay="2.7s">
                            <img src="images/icons/instagram-icon.svg" alt="instagram">
                        </a>
                        <a href="https://www.facebook.com/%D0%90%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D1%8C%D0%B5%D0%B2-%D0%90%D0%B4%D0%B2%D0%BE%D0%BA%D0%B0%D1%82-2221603111217790/?ref=page_internal" class="founder__link about__link-social about__link-facebook wow animate__animated animate__fadeInRight" data-wow-delay="2.9s">
                            <img src="images/icons/facebook-icon.svg" alt="facebook">
                        </a>
                    </div>
                </div>
                <div class="founder__img wow animate__animated animate__fadeInUpFounder" data-wow-delay="1s" style="background-image: url(images/founder-bg.png);">
                </div>
            </div>
        </div>
    </section>
    <section class="resident">
        <div class="container">
            <div class="founder__content adaptive">
                <div class="founder__suptitle suptitle">
                    ОСНОВАТЕЛЬ КОМПАНИИ
                </div>
                <h1 class="founder__title title">
                    Ведущий адвокат
                </h1>
                <div class="founder__text text">
                    Стаж моей юридической практики составляет более 10 лет, включая работу в органах Прокуратуры РФ
                    и Следственного комитета РФ. Наличие такого опыта позволяет уверенно и результативно отстаивать
                    интересы моих клиентов.
                </div>
                <div class="founder__links">
                    <a href="#" class="founder__link-instagram about__link-social about__link-instagram">
                        <img src="images/icons/instagram-icon.svg" alt="instagram">
                    </a>
                    <a href="#" class="founder__link about__link-social about__link-facebook">
                        <img src="images/icons/facebook-icon.svg" alt="facebook">
                    </a>
                </div>
            </div>
            <div class="suptitle resident__suptitle wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                РЕЗИДЕНТ
            </div>
            <h1 class="title resident__title wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                Адвокатской Палаты Приморского края
                <div class="resident__question-box wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                    <div class="resident__question">?</div>
                    <div class="resident__number">
                        Регистрационный
                        номер 25/1667
                    </div>
                </div>
            </h1>
            <div class="resident__text text wow animate__animated animate__fadeInUp" data-wow-delay="1.5s">
                Стаж моей юридической практики составляет более 10 лет, включая работу в органах Прокуратуры РФ и
                Следственного комитета РФ. Наличие такого опыта позволяет уверенно и результативно отстаивать интересы
                клиентов.
            </div>
            <div class="resident__inner">
                <div class="resident__box about__box">
                    <div class="about__experience wow animate__animated animate__fadeInUp" data-wow-delay="2s">
                        10+
                    </div>
                    <div class="about__experience-text wow animate__animated animate__fadeInUp" data-wow-delay="2s">
                        Лет стаж юридической практики
                    </div>
                    <div class="resident__icons wow animate__animated animate__fadeInUp" data-wow-delay="2.3s">
                        <div class="resident__icon">
                            <img src="images/icons/resident__icon-1.png" alt="">
                        </div>
                        <div class="resident__icon">
                            <img src="images/icons/resident__icon-2.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <h1 class="clients__title title wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                Среди моих клиентов
            </h1>
            <div class="clients__items">
                <div class="clients__item wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                    <div class="clients__item-inner">
                        <div class="clients__item-icon">
                            <img src="images/icons/clients__icon-1.svg" alt="">
                        </div>
                        <h3 class="clients__item-title clients__title-width">
                            Частные лица
                        </h3>
                    </div>

                </div>
                <div class="clients__item wow animate__animated animate__fadeInUp" data-wow-delay="1.5s">
                    <div class="clients__item-inner">
                        <div class="clients__item-icon">
                            <img src="images/icons/clients__icon-2.svg" alt="">
                        </div>
                        <h3 class="clients__item-title">
                            Представители бизнеса
                        </h3>
                    </div>

                </div>
                <div class="clients__item wow animate__animated animate__fadeInUp" data-wow-delay="1.8s">
                    <div class="clients__item-inner">
                        <div class="clients__item-icon">
                            <img src="images/icons/clients__icon-3.svg" alt="">
                        </div>
                        <h3 class="clients__item-title">
                            Депутаты и гос. служащие
                        </h3>
                    </div>

                </div>
                <div class="clients__item wow animate__animated animate__fadeInUp" data-wow-delay="2s">
                    <div class="clients__item-inner">
                        <div class="clients__item-icon">
                            <img src="images/icons/clients__icon-4.svg" alt="">
                        </div>
                        <h3 class="clients__item-title clients__title-width">
                            Публичные персоны
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="guarantee">
        <div class="container">
            <div class="guarantee__inner wow animate__animated animate__fadeInUp" data-wow-delay="1s" style="background-image: url(images/guarantee-bg.png);">
                <div class="guarantee__content">
                    <div class="guarantee__suptitle suptitle">
                        ВЫИГРАЕМ ВАШ СУД
                    </div>
                    <h1 class="guarantee__title title">
                        Или вернем деньги!
                    </h1>
                    <div class="guarantee__text text">
                        Нужна помощь адвоката? Тогда вы на правильном пути! Мы всегда добиваемся выгодных решений для
                        наших клиентов и отстаиваем их интересы даже в самых сложных вопросах. А по особым делам вы
                        можете обратиться лично к адвокату Андрею Васильеву.
                    </div>
                    <div class="guarantee__links">
                        <a href="#" class="guarantee__link guarantee__mail wow animate__animated animate__fadeInRight" data-wow-delay="1s">
                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.84206 8.76956C4.51085 8.76956 3.17964 8.76956 1.84843 8.76956C1.44471 8.7779 1.04988 8.65046 0.727219 8.40767C0.404557 8.16488 0.172746 7.82079 0.0689364 7.43056C0.0274632 7.27819 0.00586329 7.1211 0.00467365 6.96319C0 5.69313 0 4.42073 0 3.14949C0 2.82 0.205641 2.69732 0.501249 2.85155C2.1604 3.71384 3.81837 4.57807 5.47518 5.44426C5.58647 5.51005 5.71337 5.54475 5.84265 5.54475C5.97192 5.54475 6.09883 5.51005 6.21011 5.44426C7.85913 4.58275 9.5101 3.72357 11.163 2.86674C11.211 2.84001 11.2625 2.82034 11.3161 2.80832C11.5428 2.76625 11.6818 2.87959 11.6818 3.1086C11.6818 4.20924 11.6818 5.31028 11.6818 6.4117C11.6952 6.69714 11.685 6.98321 11.6514 7.26698C11.5843 7.69017 11.3668 8.07496 11.0388 8.35074C10.7109 8.62652 10.2945 8.77481 9.86608 8.76839C8.78179 8.77774 7.69867 8.76839 6.61439 8.76839H5.84206V8.76956Z" fill="#0764E3" />
                                <path d="M5.82591 0.000649149C7.15323 0.000649149 8.47938 0.000649149 9.8067 0.000649149C10.586 0.000649149 11.1621 0.351173 11.5149 1.05222C11.6318 1.27772 11.5722 1.42494 11.3455 1.54295C9.58509 2.45743 7.82507 3.37347 6.06544 4.29106C5.99889 4.32907 5.92358 4.34907 5.84694 4.34907C5.77031 4.34907 5.695 4.32907 5.62845 4.29106L0.301657 1.51842C0.108869 1.41793 0.0679746 1.29291 0.154437 1.09662C0.492108 0.37571 1.06697 0.00999642 1.85681 0.00415436C3.17946 -0.00519295 4.5021 0.00415436 5.82942 0.00415436L5.82591 0.000649149Z" fill="#0764E3" />
                            </svg>

                            ceo@escape.legal
                        </a>
                        <a href="#" class="guarantee__link guarantee__whatsapp wow animate__animated animate__fadeInRight" data-wow-delay="1.2s">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M10.0755 8.29656L10.0704 8.33973C8.80479 7.70896 8.67242 7.62493 8.50897 7.8701C8.39559 8.03988 8.06525 8.4249 7.96568 8.53886C7.86496 8.65108 7.76482 8.65972 7.59389 8.58202C7.42124 8.49569 6.86701 8.3144 6.21092 7.72737C5.69985 7.26983 5.35684 6.7087 5.25555 6.53604C5.08693 6.24483 5.43972 6.20339 5.76086 5.59564C5.81841 5.47478 5.78906 5.37982 5.74647 5.29407C5.70331 5.20774 5.35972 4.36173 5.21584 4.02447C5.07772 3.68837 4.93556 3.73095 4.82909 3.73095C4.49759 3.70218 4.2553 3.70678 4.04178 3.92893C3.11289 4.94991 3.34713 6.00311 4.14192 7.12307C5.70388 9.16733 6.53609 9.54372 8.05776 10.0663C8.46869 10.1969 8.84335 10.1785 9.13974 10.1359C9.47009 10.0836 10.1567 9.72098 10.3 9.31523C10.4468 8.90949 10.4468 8.57281 10.4036 8.49512C10.361 8.41742 10.2482 8.37426 10.0755 8.29656Z" fill="#595959" />
                                    <path d="M11.8097 2.0465C7.38451 -2.23135 0.0610052 0.871285 0.0581276 6.9062C0.0581276 8.11249 0.374089 9.28885 0.976083 10.3277L0 13.874L3.64592 12.9233C8.19542 15.3807 13.8102 12.1175 13.8125 6.90965C13.8125 5.0818 13.0989 3.36156 11.8011 2.06894L11.8097 2.0465ZM12.6626 6.89066C12.6592 11.2836 7.83687 14.0271 4.02289 11.7849L3.8157 11.6617L1.6575 12.2229L2.2359 10.1251L2.09835 9.90926C-0.275099 6.13097 2.45172 1.193 6.94769 1.193C8.47512 1.193 9.90874 1.78867 10.9884 2.86777C12.0675 3.93766 12.6626 5.37128 12.6626 6.89066Z" fill="#595959" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="13.8125" height="13.8125" fill="white" transform="translate(0 0.0625)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            WhatsApp
                        </a>
                        <a href="#" class="guarantee__link guarantee__telegram wow animate__animated animate__fadeInRight" data-wow-delay="1.3s">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.90562 0.0625C10.7184 0.0625 13.8125 3.15659 13.8125 6.96938C13.8125 10.7809 10.7184 13.875 6.90562 13.875C3.09412 13.875 0 10.7809 0 6.96938C0 3.15659 3.09412 0.0625 6.90562 0.0625ZM6.90562 1.18413C10.0986 1.18413 12.6909 3.77644 12.6909 6.96938C12.6909 10.161 10.0986 12.7534 6.90562 12.7534C3.71397 12.7534 1.12166 10.161 1.12166 6.96938C1.12166 3.77644 3.71397 1.18413 6.90562 1.18413Z" fill="#595959" />
                                <path d="M9.83682 4.02015L3.3852 6.53427C3.17623 6.61572 3.18889 6.91559 3.404 6.9791L5.04342 7.46321L5.65526 9.40463C5.71917 9.60742 5.97615 9.66889 6.12491 9.517L6.97254 8.65153L8.63565 9.8723C8.83918 10.0217 9.12904 9.9107 9.18072 9.66358L10.2822 4.39733C10.3362 4.13938 10.0824 3.92446 9.83682 4.02015ZM9.02795 5.18886L6.03122 7.83888C6.00134 7.8653 5.98233 7.90186 5.97789 7.94149L5.86251 8.96713C5.85874 9.00058 5.81194 9.005 5.80194 8.97287L5.32725 7.44327C5.30551 7.37324 5.33385 7.29737 5.39616 7.25873L8.935 5.06391C9.01637 5.0134 9.0997 5.12543 9.02795 5.18886Z" fill="#595959" />
                            </svg>
                            Telegram
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="awards">
        <div class="container">
            <div class="awards__suptitle suptitle wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                ПРОФЕССИОНАЛЬНЫЕ
            </div>
            <div class="awards__inner">
                <h1 class="awards__title title wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                    Награды
                </h1>
                <a href="reviews.html" class="awards__link link wow animate__animated animate__fadeInUp" data-wow-delay="1.5s">
                    Посмотреть отзывы
                </a>
            </div>
            <div class="awards__items">
                <a href="images/letter-1.jpg" class="awards__item wow animate__animated animate__fadeInUp" data-wow-delay="1.7s" data-fancybox="images">
                    <img class="awards__item-img" src="images/letter-1.jpg" alt="">
                </a>
                <a href="images/letter-2.jpg" class="awards__item wow animate__animated animate__fadeInUp" data-wow-delay="1.8s" data-fancybox="images">
                    <img class="awards__item-img" src="images/letter-2.jpg" alt="">
                </a>
                <a href="images/letter-3.jpg" class="awards__item wow animate__animated animate__fadeInUp" data-wow-delay="1.9s" data-fancybox="images">
                    <img class="awards__item-img" src="images/letter-3.jpg" alt="">
                </a>
                <a href="images/letter-4.jpg" class="awards__item wow animate__animated animate__fadeInUp" data-wow-delay="2s" data-fancybox="images">
                    <img class="awards__item-img" src="images/letter-4.jpg" alt="">
                </a>
                <a href="images/letter-5.jpg" class="awards__item wow animate__animated animate__fadeInUp" data-wow-delay="2.1s" data-fancybox="images">
                    <img class="awards__item-img" src="images/letter-5.jpg" alt="">
                </a>
                <a href="images/letter-6.jpg" class="awards__item wow animate__animated animate__fadeInUp" data-wow-delay="2.2s" data-fancybox="images">
                    <img class="awards__item-img" src="images/letter-6.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="services__suptitle suptitle wow animate__animated animate__fadeInUp">
                ПОМОЩЬ В ЛЮБОМ ВОПРОСЕ
            </div>
            <h1 class="title services__title wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                Ключевые практики
            </h1>
            <div class="services__inner">
                <a href="semeynoye-pravo.html" class="services__link wow animate__animated animate__fadeInUp" data-wow-delay="1s" target="_blank">
                    <span>Семейное право</span>
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
    <section class="feedback">
        <div class="container">
            <h1 class="title founder__feedback-title feedback__title wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                Нужна <span>юридическая помощь</span> адвоката во Владивостоке?
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
    <?php
    include 'layout/footer.php';
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="libs/fancybox/jquery.fancybox.min.js"></script>
    <script src="libs/slick-carousel/slick.min.js"></script>
    <script src="libs/wow.js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"></script>
    <script src="libs/lazysizes/lazysizes.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
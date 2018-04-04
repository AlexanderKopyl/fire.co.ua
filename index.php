
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="icon" sizes="5x10" href="img/favicon-min.png" type="image/png">
    <!--[if IE]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"-->
    <!--integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/1.13.0/mocha.min.css">
    <link rel="stylesheet"  type="text/css" href="css/test.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">


    <title>Test work</title>
</head>
<body>



<div class="preloader"></div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Заголовок окна</h4>
            </div>
            <div class="modal-body">
                <form action="modal.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Name">Имя</label>
                            <input type="text" name="name" class="form-control" id="Name" placeholder="Александр">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Почта</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputTel">Телефон</label>
                        <input type="text" name="tel" class="form-control" id="inputTel" placeholder="+380630684458">
                    </div>
                    <div class="form-group">
                        <label for="Textarea1">Коментарий</label>
                        <textarea class="form-control" name="textArea" id="Textarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Заказать</button>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
        </div>
    </div>
</div>
<div class="box_main">
    <div class="container-fluid box_dark">
        <div class="container  padding_for_this_block">
            <div class="row line_for_block">
                <div class="colFOrdiv col-sm-9 col-md-9 col-lg-3">
                    <img id="logo" src="img/лого-min.png" alt="">
                </div>
                <div class="colForUnder col-md-3 col-sm-3 col-lg-9 navigation">
                    <nav class="navbar navbar-expand-lg navbar-dark">


                        <div class="collapse navbar-collapse" id="navbar1">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link anchor" href="#offers" >Услуги </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anchor" href="#lastObject">Последние объекты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anchor" href="#AboutUs">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anchor" href="#ContactsUs">Контакты</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link anchor" href="#RequestAcall">Заказать звонок</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <nav id="menu" class="menu">
                        <header class="menu-header">

                            <span class="menu-header-title">FLORIDABuilders</span>
                        </header>
                        </a>

                        <section class="menu-section">
                            <h3 class="menu-section-title">Меню</h3>
                            <ul class="menu-section-list">
                                <li class="nav-item">
                                    <a class="nav-link anchor" target="_blank"href="#offers">Услуги </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anchor" target="_blank" href="#lastObject">Последние объекты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anchor" target="_blank" href="#AboutUs">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anchor" target="_blank" href="#ContactsUs">Контакты</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anchor" target="_blank" href="#RequestAcall">Заказать звонок</a>
                                </li>
                            </ul>
                        </section>
                    </nav>

                    <main id="panel" class="panel">
                        <header class="panel-header">
                            <button class=" js-slideout-toggle"><i class="fas fa-bars"></i></button>
                        </header>
                    </main>

                </div>
            </div>
            <div class="row marg_for_this_block">
                <div class="col-md-6 col-sm-12 ">
                    <p class="class_for_P">Строительная компания <span class="color_for_span">№1</span></p>
                </div>
                <div class="col-md-6 col-sm-12 my_row">
                    <span class="fonts_for_block">Пн - Пт : 8:00 - 20:00 </span>
                    <span class="fonts_for_block">+1 (305) 753 9005</span>
                    <span>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5 media_for_block">
                    <h1 class="my-4">Строим вашу комфортную <br> жизнь</h1>
                    <p class="text_block">Строительная Компания “MIAMIBuILDERS”<br>
                        Строит и ремонтирует эксклюзивные,
                        элитные резиденции, а также объекты
                        эконом класса </p>
                    <div class="buttonGrup">
                        <a class="button padding_for_button active" href="#">наши услуги</a>
                        <a class="button" href="#">последние проекты</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="offers">
    <div class="row">
        <div class="col-1 parents">
            <div class="hr_line"></div>
        </div>
        <div class="col-md-12 col-lg-11">
            <div class="parents container">
                <h2>Что мы делаем для вас с 2008 года?</h2>
            </div>
        </div>
    </div>

</div>
<div class="container blockWhithOffer padding_for_block">
    <div class="row">
        <div class="col-12">
            <div class="container padding_for_block">
                <ul class="footer_menu">
                    <li><a class="buttonOffer" id="project">проэктируем</a></li>
                    <li><a class="buttonOffer" id="build">строим</a></li>
                    <li><a class="buttonOffer" id="fix">ремонтируем</a></li>
                    <li><a class="buttonOffer" id="updateTheinterior">обновляем интерьер</a></li>

                </ul>
            </div>
        </div>

    </div>

</div>
<div class="container changeContent">
    <div class="row ">
        <div class="col-xl-6 col-sm-12 position_for_block">
            <img id="leftPic" src="img/2-min.png" height="447"  alt="">
<!--            <span class="footer_block footerRight">РАЗРАБАТЫВАЕМ ДИЗАЙН<span class="colorfull colorfull1">ДОМОВ И РЕЗИДЕНЦИЙ</span></span>-->
            <span class="footer_block">
                <span>РАЗРАБАТЫВАЕМ ДИЗАЙН<span class="colorfull colorfull1">ДОМОВ И РЕЗИДЕНЦИЙ</span></span>
            <span class="footerLeft">НА ЛЮБОЙ ВКУС И БЮТЖЕТ</span>
            </span>

        </div>
        <div class="col-xl-6 col-sm-12 position_for_block">
            <img id="rightPic" src="img/картинка-min.png" height="447" alt="">
            <span  class="special"  data-toggle="modal" data-target="#myModal">специальное  предложение</span>
            <span class="footer_block">
                <span>ПРЕДЛОЖЕНИЕРАЗРАБАТЫВАЕМ ДИЗАЙН<span class="colorfull">ПОМЕЩЕНИЙ</span></span>
                   <span> <span class="colorfull">И ЗОН ОТДЫХА</span>ЛЮБОЙ СЛОЖНОСТИ</span>
                </span>

        </div>
    </div>
</div>
<div class="container">
    <div class="row margin_for_block">
        <div class="col-12">
            <a class="big_button" href="#">Наши последние проекты</a>
        </div>
    </div>
</div>
<div class="container specialOffer">
    <div class="row ">
        <div class="col-md-4 col-sm-12 myTool">
                    <span class="mx-4">Специальное предложение <br>
                        до 25 марта
                    </span>
            <p class="mx-4">
                Получите поиск участка для строительства вашего дома
                абсолютно бесплатно
            </p>
            <a data-toggle="modal" data-target="#myModal" class="mx-4">Узнать больше</a>
        </div>
        <div class="col-md-1 col-sm-12  miniHouse">
            <img class="housePng" src="img/house%20-min.png" alt="">
        </div>
        <div class="col-md-7 col-sm-12 houseOffer">
            <img src="img/проектирование-min.png" alt="">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row infoBlock">
        <div class="col-1 parents">
            <div class="hr_line"></div>
        </div>
        <div class="col-md-12 col-lg-11">
            <div class="parents container">
                <h2>Почему нас выбрают более 400 клиентов?</h2>
            </div>
        </div>
    </div>
</div>
<div class="container informBlock">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12">
            <img src="img/надежность-min.png" alt="">
            <span>Надежность</span>
            <ul>
                <li>Более 10 лет опыта</li>
                <li>5 лет гарантии на работы</li>
                <li>гарантия на материалы</li>
                <li>наличие строительной лицензии</li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
            <img src="img/ракета-min.png" alt="">
            <span>Оперативность</span>
            <ul>
                <li>Строим за 5-8 месяцев</li>
                <li>в договоре указан срок сдачи</li>
                <li>несем ответственность за срыв сроков
                    сдачи работ
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
            <img src="img/key-min.png" alt="">
            <span>Под ключ</span>
            <ul>
                <li>поэтапная оплата</li>
                <li>Все виды строительных работ</li>
                <li>оптовые цены на строительные и
                    отделочные материалы
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
            <img src="img/рукопожатие-min.png" alt="">
            <span>Прозрачность</span>
            <ul>
                <li>Официальный договор</li>
                <li>Фото и видео отчеты с объекта</li>
                <li>возможность поплаты частями</li>
                <li>помогаем в получении кредита</li>
            </ul>
        </div>
    </div>

</div>
<div class="container-fluid activeBlock" id="lastObject">
    <div class="row">
        <div class="col-1 parents">
            <div class="hr_line"></div>
        </div>
        <div class="col-md-12 col-lg-11">
            <div class="parents container">
                <h2>Активно создаем комфорт для вас <br>
                    <span>работаем опираясь на многолетние традиции и современные технологиии</span>

                </h2>
            </div>
        </div>

    </div>
    <div class="container blockWithActivePhoto">
        <div class="row ">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                <img src="img/leftPic-min.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                <img src="img/main-min.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-4">
                <img src="img/right-min.png" alt="">
            </div>
        </div>
        <div class="blockWhithButton">
            <a href="#">НАШИ РАБОТЫ</a>
        </div>
    </div>


</div>
<div class="container-fluid">
    <div class="row ideasOfourClients">
        <div class="col-1 parents">
            <div class="hr_line"></div>
        </div>
        <div class="col-md-12 col-lg-11">
            <div class="parents container">
                <h2>РЕАЛИЗОВАННЫЕ НАМИ ИДЕИ НАШИХ КЛИЕНТОВ</h2>
            </div>
        </div>
    </div>
</div>
<div class="container blockWithSlider d-none" >
    <div id="block-for-slider" >
        <div id="viewport">
            <ul id="slidewrapper">
                <li class="slide" ><img src="img/housePic-min.png"width="262" height="148" alt="1" class="slide-img"></li>
                <li class="slide" ><img src="img/housePic-min.png" width="262" height="148" alt="2" class="slide-img"></li>
                <li class="slide"><img src="img/housePic-min.png" width="262" height="148" alt="3" class="slide-img"></li>
                <li class="slide"><img src="img/housePic-min.png" width="262" height="148" alt="4" class="slide-img"></li>
                <li class="slide"><img src="img/housePic-min.png" alt="1" width="262" height="148" class="slide-img"></li>
                <li class="slide"><img src="img/housePic-min.png" alt="2" width="262" height="148" class="slide-img"></li>
                <li class="slide"><img src="img/housePic-min.png" alt="3" width="262" height="148" class="slide-img"></li>
                <li class="slide "><img src="img/housePic-min.png"  alt="4" width="262" height="148" class="slide-img"></li>
            </ul>
            <div id="prev-next-btns">
                <div id="prev-btn">
                    <img src="img/prev-min.png" alt="">
                </div>
                <div id="next-btn">
                    <img src="img/next-min.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container underSlider">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
            <a href="#" class="sliderButton" id="Design"><img width="262" height="148" src="img/housePic-min.png" alt=""></a>
            <span>ПРОЭКТИРОВАНИЕ И ДИЗАЙН</span>
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
            <a  href="#" class="sliderButton" id="buildings"><img width="262" height="148" src="img/строительство-min.png" alt=""></a>
            <span>СТРОИТЕЛЬСТВО</span>
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
            <a href="#" class="sliderButton" id="rapeir"><img width="262" height="148" src="img/ремонт-min.png" alt=""></a>
            <span>РЕМОНТ</span>
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
            <a href="#" class="sliderButton" id="landsCape"><img width="262" height="148" src="img/бассейны-min.png" alt="">
            </a>
            <span>БАСЕЙНЫ И ЛАНДШАФТ</span>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row twoSteps">
        <div class="col-1 parents">
            <div class="hr_line"></div>
        </div>
        <div class="col-md-12 col-lg-11">
            <div class="parents container">
                <h2>ВСЕГО ПАРУ ШАГОВ К ВАШЕЙ КОМФОРТНОЙ ЖИЗНИ</h2>
            </div>
        </div>
    </div>
</div>
<div class="container contentBlock">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xl-5">
            <img width="420" height="230" src="img/firstPic-min.png" alt="">
        </div>
        <div class="col-md-12 col-sm-12 col-xl-7">
            <span>НАЧНИТЕ С ИДЕИ</span>
            <div class="line"></div>
            <p>
                скорее всего у вас уже есть идеи и задумки, которые вы
                хотите воплотить в реальность, и вы на верном пути!
                Наши квалифицированные специалисты помогут вам
                в этом нелегком деле на любом этапе
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xl-5">
            <img width="420" height="230" src="img/secondPic-min.png" alt="">
        </div>
        <div class="col-md-12 col-sm-12 col-xl-7">
            <span>РЕАЛИЗАЦИЯ ПРОЭКТА</span>
            <div class="line"></div>
            <p>
                Забудьте о всех проблемах, которые могут появиться в процессе.
                благодаря большому опыту работы и штату квалифицированных специалистов,
                мы гарантируем оперативную работу на каждом этапе, включая получение
                разрешений, решение юридических вопросов, а также получения кредита
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xl-5">
            <img width="420" height="230" src="img/thirdPic-min.png" alt="">
        </div>
        <div class="col-md-12 col-sm-12 col-xl-7">
            <span>ФИНАЛЬНЫЙ РЕЗУЛЬТАТ</span>
            <div class="line"></div>
            <p>
                по завершению всех работ, Все что вам остается - это прийти к себе домой, чтобы оценить и
                наслаждаться трудами общей работы
            </p>
        </div>
    </div>
</div>
<div class="container specialOffer">
    <div class="row ">
        <div class="col-md-4 col-sm-12 myTool">
                    <span class="mx-4">Специальное предложение <br>
                        до 25 марта
                    </span>
            <p class="mx-4">
                Получите поиск участка для строительства вашего дома
                абсолютно бесплатно
            </p>
            <a class="mx-4" data-toggle="modal" data-target="#myModal">Узнать больше</a>
        </div>
        <div class="col-md-1 col-sm-12  miniHouse">
            <img class="housePng" src="img/house%20-min.png" alt="">
        </div>
        <div class="col-md-7 col-sm-12 houseOffer">
            <img src="img/room-min.png" alt="">
        </div>
    </div>
</div>
<div class="container-fluid beginBlockAboutUS" id="AboutUs">
    <div class="row">
        <div class="col-1 parents">
            <div class="hr_line"></div>
        </div>
        <div class="col-md-12 col-lg-11">
            <div class="parents container">
                <h2>О нашей компании </h2>
            </div>
        </div>
    </div>
</div>
<div class="container AboutUsBlock">
    <div class="row flexForRow">
        <div class="col-md-12 col-xl-6">
            <p>
                Наши проекты - это в первую очередь инновационность и эмоция, которая сначала зарождается на бумаге и
                шаг за шагом реализуется в уютное, уникальное и комфортное
                пространство для жизни.
            </p>
            <p>
                Мы трудимся над созданием новых архитектурных
                форм и дизайнов, поэтому все наши проекты уникальны.
                Каждый дом - это заренне продуманное пространство,
                которое соответствует современным стандартам дизайна, строительства и безопасности.
            </p>
            <p>
                Любой проект мы создаем с мыслью о том,
                как вы будете ощущать себы, живя в нашем доме.
                Продумываем и воплощаем такие иновационные решения, которые похволят вам чувствовать себя легко,
                свободно и комфортно вместе со своей семьей.
            </p>
        </div>
        <div class="col-md-12 col-xl-6">
            <img width="535" height="352" src="img/room2-min.png" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xl-6">
            <img width="535" height="352" src="img/leftPic-min.png" alt="">
        </div>
        <div class="col-md-12 col-xl-6">
            <p>
                наши достижения позволяют уверенно удерживать лидерские позиции
                на строительном рынке и занимать первое место среди большого количества строительных фирм.
            </p>
            <p>
                Держа руку на пульсе изменений, мы сосредоточены
                на развитии перспективных проектов
                и открыты к сострудничеству с покупателями,
                желающими повысить качество и комфорт своей жизни.
            </p>
            <a data-toggle="modal" data-target="#myModal" style="color: white">Перезвоните мне</a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row ContatcFirstBlock">
        <div class="col-1 parents">
            <div class="hr_line"></div>
        </div>
        <div class="col-md-12 col-lg-11">
            <div class="parents container">
                <h2>КОНТАКТЫ</h2>
            </div>
        </div>
    </div>
</div>
<div id="ContactsUs" class="container contactBLock ">


    <div class="map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d935.2642038584858!2d35.04269618424274!3d48.4694478894148!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1521379644599"
                width="400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <img src="img/poligon-min.png" alt="">
    </div>


    <div class="contacts">
        <div class="row myRowControl">
            <div class="col-xl-1 col-md-12  textAlign">
                <img src="img/дом-min.png" alt="">
                <img src="img/телефон-min.png" alt="">
                <img src="img/часы-min.png" alt="">
            </div>
            <div class="col-xl-5 col-md-12  formContact">
                    <span>
                        <span class="headerContant">ГРАФИК РАБОТЫ</span>
                        Monday-Friday 8am to 8pm

                        <span>Sat and Sunday closed</span>
                    </span>


                <span>
                    <span class="headerContant">ТЕЛЕФОН</span>
                    <span>(305)753 9005</span>
                    </span>

                <span>
                        <span class="headerContant">АДРЕС</span>
                        <span>6538 Collins Ave</span>
                        <span>Miami Beach FL 33141</span>
                    </span>


            </div>
            <div class="col-xl-6 col-md-12  flexFOrDiv" id="RequestAcall">
                <form>
                    <span>заявка на консультацию</span><br>
                    <input name="name" type="text" placeholder="ИМЯ"><br>
                    <input name="tel" type="text" placeholder="ТЕЛЕФОН"><br>
                    <textarea name="coments" id="" cols="30" rows="10" placeholder="КОМЕНТАРИЙ">

                        </textarea><br>
                    <button type="submit" id="formButton">ОТПРАВИТЬ</button>

                </form>
            </div>
        </div>

    </div>


</div>

<script src ="js/css3-mediaqueries.js" type="text/javascript"> </script >
<!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/1.13.0/mocha.min.js"></script>
<script>
    mocha.setup('bdd');
    var exports = null;
    function assert(expr, msg) {
        if (!expr) throw new Error(msg || 'failed');
    }
</script>
<script src="js/slideout.js" type="text/javascript"></script>
<script src="js/test.js" type="text/javascript"></script>
<script>
    window.onload = function() {
        document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
            slideout.toggle();
        });

        document.querySelector('.menu').addEventListener('click', function(eve) {
            if (eve.target.nodeName === 'A') { slideout.close(); }
        });

    };
</script>
<script src="js/fontawesome-all.min.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript" ></script>
<!--<script-->
<!--src="https://code.jquery.com/jquery-3.3.1.js"-->
<!--integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="-->
<!--crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous" type="text/javascript" ></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"-->
<!--integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"-->
<!--crossorigin="anonymous"></script>-->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/slider.js" type="text/javascript"></script>


<script type="text/javascript">
    $("body").on("click", "a.anchor", function(){
        var idtop = $($(this).attr("href")).offset().top;
        $('html,body').animate({scrollTop: idtop}, 3000);
        return false;
    });
    $( "body" ).prepend( '<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"> </div></div>' );
    $(window).on('load', function() { // makes sure the whole site is loaded
        $('.preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'});
    });
    $( ".buttonOffer" ).click(function( event ) {
        var id = $(this).attr('id');
        event.preventDefault();
        $.post('WhatWeDo.php', {id: id},
            function(data) {
            console.log(data);
                $('.changeContent').html(data);
            }
        );

    });
    $( ".sliderButton" ).click(function( event ) {
        var id = $(this).attr('id');
        event.preventDefault();
        $(".blockWithSlider").removeClass( "d-none" );
        $.post('sliderContent.php', {id: id},
            function(data) {
                console.log(data);
                $('.blockWithSlider').html(data);
            }
        );

    });

</script>


</body>
</html>
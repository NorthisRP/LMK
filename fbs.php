<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЛибхерМонолитКомплект - ФБС</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/beton.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-md g-4">
            <a href="index.php"><img src="Images/logo.png" alt="" width="60" height="60">
                <a class="navbar-brand m-2" href="index.php">ЛибхерМонолитКомплект</a></a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Прайс-листы
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item p-2" href="prices\Prays_Beton_LMK_xlsx.docx">Скачать
                                    бетон.doc</a></li>
                            <li><a class="dropdown-item p-2" href="prices\FBS_2020.doc">Скачать фбс.doc</a></li>
                            <li><a class="dropdown-item p-2" href="prices\Prays_dorozhnye_plity_LMK_2020.doc">Скачать
                                    плиты.doc</a></li>
                            <li><a class="dropdown-item p-2" href="prices\svai.doc">Скачать сваи.doc</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Каталог
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item p-2" href="beton.php">Бетон</a></li>
                            <li><a class="dropdown-item p-2" href="fbs.php">ФБС</a></li>
                            <li><a class="dropdown-item p-2" href="plite.php">Дорожные плиты</a></li>
                            <li><a class="dropdown-item p-2" href="svai.php">Сваи</a></li>
                        </ul>
                    </div>
                    <a class="nav-link" href="index.php">Контакты</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="background p-4" id="fbs">
    <section class="beton container-sm p-4">
        <div class="header text-center mb-4">
            <h1>Фундаментные блоки сплошного сечения</h1>
            <a href="https://internet-law.ru/gosts/gost/69904/">Гост 13579-78</a> 
            <h4>2380*300/400/500/600*580</h4>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 24-3-бт</p>
                    <p>Объем: 0,406</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>1980</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 24-4-бт</p>
                    <p>Объем: 0,543</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>2580</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 24-5-бт</p>
                    <p>Объем: 0,679</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>3240</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 24-6-бт</p>
                    <p>Объем: 0,815</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>3840</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            
        </div>
    </section>
    <section class="beton container-sm p-4">
        <div class="header text-center mb-4">
            <h4>1180*300/400/500/600*580</h4>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка:12-3-бт</p>
                    <p>Объем:0,203</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>1104</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 12-4-бт</p>
                    <p>Объем: 0,272</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>1476</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 12-5-бт</p>
                    <p>Объем: 0,339</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>1764</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 12-6-бт</p>
                    <p>Объем: 0,407</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>2064</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            
        </div>
    </section>
    <section class="beton container-sm p-4">
        <div class="header text-center mb-4">
            <h4>880*300/400/500/600*580</h4>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка:9-3-бт</p>
                    <p></p>Объем:0,146</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>888</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 9-4-бт</p>
                    <p>Объем: 0,195</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>1176</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 9-5-бт</p>
                    <p>Объем: 0,244</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>1380</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            <div class="card col-lg-2 col-sm-4 p-4 text-center">
                <div class="def">
                    <p>Марка: 9-6-бт</p>
                    <p>Объем: 0,293</p>
                </div>
                <div class="price">
                    <p>Цена руб/м³</p>
                    <h3>1680</h3>
                </div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Заказать</button>   
            </div>
            
        </div>
    </section>
    <div class="container-sm">
        <p>Производство, продажа и отгрузка изделий осуществляется по адресу:

            г. Волгоград, ул. Моторная, д.33.
        </p>
    </div>
    </div>
    
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Понравился наш товар?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-md text-center">
                        <p>Свяжитесь с нами по следующему номеру: <br> +7 927 111 12 34</p>
                    </div>
                    <div class="container-md text-center">
                        <p>Или же оставьте заявку и мы с вами свяжемся сами!</p>
                            <form action="send.php" method="post">
                                <div class="row g-4">
                                    <input class="form-control form-control-lg" type="text" placeholder="Имя"
                                    aria-label=".form-control-lg example" name="fio" required>
                                    <input class="form-control form-control-lg" type="text" placeholder="E-mail"
                                    aria-label=".form-control-lg example" name="email" required>
                                    <input class="form-control form-control-lg" type="text" placeholder="Телефон"
                                    aria-label=".form-control-lg example" name="phone" required>
                                    <button type="submit" class="btn btn-success btn-lg">Оставить заявку</button>
                                </div>
                            </form>                   
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <a href="index.php"><img src="Images/logo.png" alt="" width="90" height="90" style="display: block;"></a>
                </div>
                <div class="col-lg-4 col-sm-6">
                <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Прайс-листы
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item p-2" href="prices\Prays_Beton_LMK_xlsx.docx">Скачать
                                    бетон.doc</a></li>
                            <li><a class="dropdown-item p-2" href="prices\FBS_2020.doc">Скачать фбс.doc</a></li>
                            <li><a class="dropdown-item p-2" href="prices\Prays_dorozhnye_plity_LMK_2020.doc">Скачать
                                    плиты.doc</a></li>
                            <li><a class="dropdown-item p-2" href="prices\svai.doc">Скачать сваи.doc</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Каталог
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item p-2" href="beton.php">Бетон</a></li>
                            <li><a class="dropdown-item p-2" href="fbs.php">ФБС</a></li>
                            <li><a class="dropdown-item p-2" href="plite.php">Дорожные плиты</a></li>
                            <li><a class="dropdown-item p-2" href="svai.php">Сваи</a></li>
                        </ul>
                    </div>
                    <a href="index.php">Контакты</a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h3>Connect</h3>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                        <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
                    </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>
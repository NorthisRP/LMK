<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЛибхерМонолитКомплект - Бетон</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/svai.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto&display=swap"
        rel="stylesheet">
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
    <div class="background p-2" id="svai">
        <div class="container-sm">
        <div class="header text-center mb-4 py-4">
                <h1>Сваи железобетонные</h1>
                <a href="https://ohranatruda.ru/ot_biblio/standart/201127/">Гост 7473-2010, 23558-94</a> 
        </div>
        <div class="dropdown d-flex justify-content-center mb-2">
            <a class="btn btn-secondary dropdown-toggle p-2" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Выберите категорию
            </a>
            <ul class="dropdown-menu dropdown-menu-end-lg" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item category" data-f="30" href="#">30</a></li>
                <li><a class="dropdown-item category" data-f="35" href="#">35</a></li>
            </ul>
        </div>
        <table class="table table-hover" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
            <thead>
                <tr>
                    <th scope="col">Марка изделия</th>
                    <th scope="col">Объем(м³)</th>
                    <th scope="col">Вес(тн)</th>
                    <th scope="col">Цена б/н с НДС</th>
                </tr>
            </thead>
            <tbody>
                <tr class="30">
                    <th scope="row">С 30-30 (1-3)</th>
                    <td>0,28</td>
                    <td>0,7</td>
                    <th>3 467</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 40-30 (1-3)</th>
                    <td>0,37</td>
                    <td>0,93</td>
                    <th>4 449</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 50-30 (1-3)</th>
                    <td>0,46</td>
                    <td>1,15</td>
                    <th>5 350</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 50-30 (4-6)</th>
                    <td></td>
                    <td></td>
                    <th>5 691</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 60-30 (2-3)</th>
                    <td>0,55</td>
                    <td>1,38</td>
                    <th>5 944</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 60-30 (5-6)</th>
                    <td></td>
                    <td></td>
                    <th>6 405</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 60-30 (7-8))</th>
                    <td></td>
                    <td></td>
                    <th>7 003</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 70-30 (4-6)</th>
                    <td>0,64</td>
                    <td>1,6</td>
                    <th>7 858</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 70-30-8</th>
                    <td></td>
                    <td></td>
                    <th>8 618</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 70-30-9</th>
                    <td></td>
                    <td></td>
                    <th>9 252</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 80-30 (4-6)</th>
                    <td>0,73</td>
                    <td>1,83</td>
                    <th>9 303</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 80-30-8</th>
                    <td></td>
                    <td></td>
                    <th>9 797</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 80-30-9</th>
                    <td></td>
                    <td></td>
                    <th>10 380</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 80-30-10</th>
                    <td></td>
                    <td></td>
                    <th>11 768</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 80-30-11</th>
                    <td></td>
                    <td></td>
                    <th>13 378</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 90-30 (5-6)</th>
                    <td>0,82</td>
                    <td>2,05</td>
                    <th>10 646</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 90-30-8</th>
                    <td></td>
                    <td></td>
                    <th>11 153</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 90-30-9</th>
                    <td></td>
                    <td></td>
                    <th>12 167</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 90-30-10</th>
                    <td></td>
                    <td></td>
                    <th>13 779</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 90-30-11</th>
                    <td></td>
                    <td></td>
                    <th>16 224</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 100-30-6</th>
                    <td>0,91</td>
                    <td>2,28</td>
                    <th>12 065</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 100-30-8</th>
                    <td></td>
                    <td></td>
                    <th>12 624</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 100-30-9</th>
                    <td></td>
                    <td></td>
                    <th>13 561</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 100-30-10</th>
                    <td></td>
                    <td></td>
                    <th>15 425</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 100-30-11</th>
                    <td></td>
                    <td></td>
                    <th>17 428</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 100-30-12</th>
                    <td></td>
                    <td></td>
                    <th>18 835</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 100-30-13</th>
                    <td></td>
                    <td></td>
                    <th>21 052</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 110-30-8</th>
                    <td>1,0</td>
                    <td>2,5</td>
                    <th>14 195</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 110-30-9</th>
                    <td></td>
                    <td></td>
                    <th>15 241</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 110-30-10</th>
                    <td></td>
                    <td></td>
                    <th>16 529</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 110-30-11</th>
                    <td></td>
                    <td></td>
                    <th>19 073</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 110-30-12</th>
                    <td></td>
                    <td></td>
                    <th>20 618</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 110-30-13</th>
                    <td></td>
                    <td></td>
                    <th>23 206</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 120-30-8</th>
                    <td>1,09</td>
                    <td>2,73</td>
                    <th>15 636</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 120-30-9</th>
                    <td></td>
                    <td></td>
                    <th>16 765</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 120-30-10</th>
                    <td></td>
                    <td></td>
                    <th>18 188</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 120-30-11</th>
                    <td></td>
                    <td></td>
                    <th>21 631</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 120-30-12</th>
                    <td></td>
                    <td></td>
                    <th>23 379</td>
                </tr>
                <tr class="30">
                    <th scope="row">С 120-30-13</th>
                    <td></td>
                    <td></td>
                    <th>26 315</td>
                </tr>
<!-- ---------------------------------------------------------------------------------------------------- -->
                <tr class="35">
                    <th scope="row">С 40-35 (1-3)</th>
                    <td>0,52</td>
                    <td>1,3</td>
                    <th>6 147</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 50-35 (1-3)</th>
                    <td>0,64</td>
                    <td>1,5</td>
                    <th>7 484</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 60-35 (1-3)</th>
                    <td>0,76</td>
                    <td>1,9</td>
                    <th>8 833</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 60-35-6</th>
                    <td></td>
                    <td></td>
                    <th>9 180</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 70-35(4-6)</th>
                    <td>0,88</td>
                    <td>2,2</td>
                    <th>10 574</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 70-35-8</th>
                    <td></td>
                    <td></td>
                    <th>11 049</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 70-35-9</th>
                    <td></td>
                    <td></td>
                    <th>12 677</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 70-35-10</th>
                    <td></td>
                    <td></td>
                    <th>13 298</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 80-35(5-6)</th>
                    <td>1,0</td>
                    <td>2,5</td>
                    <th>12 029</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 80-35-8</th>
                    <td></td>
                    <td></td>
                    <th>12 568</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 80-35-9</th>
                    <td></td>
                    <td></td>
                    <th>14 422</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 80-35-10</th>
                    <td></td>
                    <td></td>
                    <th>15 120</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 80-35-11</th>
                    <td></td>
                    <td></td>
                    <th>15 907</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 90-35(5-6)</th>
                    <td>1,12</td>
                    <td>2,8</td>
                    <th>13 425</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 90-35-8</th>
                    <td></td>
                    <td></td>
                    <th>14 024</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 90-35-9</th>
                    <td></td>
                    <td></td>
                    <th>16 101</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 90-35-10</th>
                    <td></td>
                    <td></td>
                    <th>16 895</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 90-35-11</th>
                    <td></td>
                    <td></td>
                    <th>17 720</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 90-35-12</th>
                    <td></td>
                    <td></td>
                    <th>18 744</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 100-35-6</th>
                    <td>1,24</td>
                    <td>3,1</td>
                    <th>14 871</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 100-35-8</th>
                    <td></td>
                    <td></td>
                    <th>15 537</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 100-35-9</th>
                    <td></td>
                    <td></td>
                    <th>16 345</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 100-35-10</th>
                    <td></td>
                    <td></td>
                    <th>17 327</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 100-35-11</th>
                    <td></td>
                    <td></td>
                    <th>19 686</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 100-35-12</th>
                    <td></td>
                    <td></td>
                    <th>21 407</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 100-35-13</th>
                    <td></td>
                    <td></td>
                    <th>22 571</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 110-35-8</th>
                    <td>1,37</td>
                    <td>3,43</td>
                    <th>17 093</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 110-35-9</th>
                    <td></td>
                    <td></td>
                    <th>19 631</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 110-35-10</th>
                    <td></td>
                    <td></td>
                    <th>20 590</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 110-35-11</th>
                    <td></td>
                    <td></td>
                    <th>21 657</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 110-35-12</th>
                    <td></td>
                    <td></td>
                    <th>23 534</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 110-35-13</th>
                    <td></td>
                    <td></td>
                    <th>24 820</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 120-35-8</th>
                    <td>1,49</td>
                    <td>3,73</td>
                    <th>18 559</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 120-35-9</th>
                    <td></td>
                    <td></td>
                    <th>21 317</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 120-35-10</th>
                    <td></td>
                    <td></td>
                    <th>22 355</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 120-35-11</th>
                    <td></td>
                    <td></td>
                    <th>23 523</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 120-35-12</th>
                    <td></td>
                    <td></td>
                    <th>25 560</td>
                </tr>
                <tr class="35">
                    <th scope="row">С 120-35-13</th>
                    <td></td>
                    <td></td>
                    <th>26 691</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="staticBackdropLabel">Понравился наш товар?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-md text-center">
                        <p>Свяжитесь с нами по следующему номеру: <br> <strong>+7 927 111 12 34</strong> </p>
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
                    <a href="index.php"><img src="Images/logo.png" alt="" width="90" height="90"
                            style="display: block;"></a>
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
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-envelope-open" viewBox="0 0 16 16">
                            <path
                                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
                        </svg></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </div>
            </div>
        </div>
    </footer>
    <script src="filter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles_hotel.css">
</head>
<body>
<div class="container">
    <header>
        <?php include_once 'navigation/nav.php'?>
    </header>
    <main>
       <section class="section-menu">
           <div class="blur"></div>
          <div class="background1"> <!--height 217px -->
              <div class="content-menu1">
                  <div class="flexbox-container1">
                      <div class="menu3">
                          <h2>Инфраструктура:</h2>
                        <ul>
                          <li><div class="none"></div>Бассейн</li>
                          <li><div class="none"></div>Парковка</li>
                          <li><div class="none"></div>wi-fi</li>
                        </ul>
                      </div>

                      <div class="menu3">
                          <h2>тип жилья:</h2>
                        <ul>
                          <li><div class="none"></div>Гостиница</li>
                          <li><div class="none"></div>Мотель</li>
                          <li><div class="none"></div>Апартаменты</li>
                        </ul>
                      </div>
                  </div>
                  <div class="flexbox-container1">
                      <div class="menu3">
                      <h2>Стоимость в сутки:</h2>
                      <div class="flexbox-cont">
                          <div class="flex-r">
                            от 0
                          </div>
                          <div class="flex-r">
                              до 3000
                          </div>
                      </div>
                       <button class="view">Показать</button>
                      </div>
                  </div>
              </div>
          </div>
       </section>
        <section class="search-in">
            <div class="sort">
                <div class="first-sort">
                    <div class="searching1">
                        Найдено: 3
                    </div>
                    <div class="searching2">
                        Сортировка:
                    </div>
                    <div class="searching3 active1">
                        По цене
                    </div>
                    <div class="searching3 noneactive">
                        По типу
                    </div>
                    <div class="searching3 noneactive">
                        По рейтингу
                    </div>
                </div>
            </div>
        </section>

        <section class="podgruzka">
            <div class="flex-blocks">
                <div class="_flex">
                    <figure class="figure1">
                        <img class="img" src="img/Layer%2091.png" alt="img">
                    </figure>
                    <div class="column-block">
                        <h2>Amara resort & spa</h2>
                        <p> <span class="type">Гостиница</span> <span class="price">от 4000 руб.</span></p>
                        <div class="buttons">
                            <a class="a_inf" href="#">Подробнее</a>
                            <button class="blocking">Забронировать</button>
                        </div>
                    </div>
                </div>
                <div class="_flex_star">
                    <div class="stars">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">

                    </div>
                    <div class="rater">Рейтинг: 8.9</div>
                </div>
            </div>
        </section>

        <section class="podgruzka">
            <div class="flex-blocks">
                <div class="_flex">
                    <figure class="figure1">
                        <img class="img" src="img/Layer%2092.png" alt="img">
                    </figure>
                    <div class="column-block">
                        <h2>desert quallo inn</h2>
                        <p> <span class="type">Мотель</span> <span class="price">от 3000 руб.</span></p>
                        <div class="buttons">
                            <a class="a_inf" href="#">Подробнее</a>
                            <button class="blocking">Забронировать</button>
                        </div>
                    </div>
                </div>
                <div class="_flex_star">
                    <div class="stars">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">
                    </div>
                    <div class="rater">Рейтинг: 8.5</div>
                </div>
            </div>
        </section>

        <section class="podgruzka">
            <div class="flex-blocks">
                <div class="_flex">
                    <figure class="figure1">
                        <img class="img" src="img/Layer%2089%20copy.png" alt="img">
                    </figure>
                    <div class="column-block">
                        <h2>Villas at poco diablo</h2>
                        <p> <span class="type">Аппартаменты</span> <span class="price">от 2000 руб.</span></p>
                        <div class="buttons">
                            <a class="a_inf" href="#">Подробнее</a>
                            <button class="blocking">Забронировать</button>
                        </div>
                    </div>
                </div>
                <div class="_flex_star">
                    <div class="stars">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">
                        <img src="img/star.png" alt="star">
                        <img class="last" src="img/star.png" alt="star">
                    </div>
                    <div class="rater">Рейтинг: 9.2</div>
                </div>
            </div>
        </section>
    </main>
        <?php include_once 'footer/footer.php'?>

</div>


<script src="js/support/menu.js"></script>
<script src="js/support/background.js"></script>
<script src="js/support/rate.js"> </script>

<script src="js/hotel_iniz.js"></script>
</body>
</html>
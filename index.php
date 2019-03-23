<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sedona</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
<header class="header">
   <?php include_once "navigation/nav.php" ?>
    <figure class="figure">
        <div class="background">
         <div class="content-logo">
             <div class="w_w">
                <img class="welcome" src="img/Welcome.png" alt="Welcome">
                 <br>
                <img src="img/to%20the%20gorgeous.png" alt="to_the">
             </div>
                <div class="Sedona">
                    <img src="img/Sedona.png" alt="Sedona">
                </div>
             <div class="Canyon">
                <img src="img/Because%20the%20Grand%20%20Canyon%20sucks!.png" alt="Canyon">
             </div>
         </div>
        </div>
    </figure>
</header>
<main>
<section class="aboutSedona">
    <div class="text-container">
        <b>седона — небольшой городок в аризоне, заслуживающий большего!</b>
        <p>рассмотрим 5 причин, по которым седона круче чем гранд каньон!</p>
    </div>
</section>
<section id="foto" class="aboutCity">
        <div class="descriptionBlock">
        <h2>настоящий городок</h2>
        <span>- №1 -</span>
        <p>седона - не атракцион для туристов, там течет своя жизнь</p>
        </div>

    <div class="img"></div>

</section>
<section class="HF-inf">
    <div class="flex-container">
        <div class="recomendation">
            <img src="img/icon-1.png" alt="House">
            <h2>жилье</h2>
            <p>рекомендуем пожить в настоящем мотеле, все как в кино!</p>
        </div>
        <div class="recomendation">
            <img src="img/icon-3.png" alt="food">
            <h2>Еда</h2>
            <p>всегда заказывайте фирменный бургер, вы не разочаруетесь!</p>
        </div>
        <div class="recomendation">
            <img src="img/icon-2.png" alt="present">
            <h2>сувениры</h2>
            <p>не только китайского, но и местного производства!
            </p>
        </div>
    </div>
</section>
    <section class="aboutCity reverse">
        <div class="descriptionBlock">
            <h2>там есть мост дьявола</h2>
            <span>– №2 –</span>
            <p>да, по нему можно пройти! если вы осмелитесь, конечно</p>
        </div>
        <div class="img"></div>
    </section>
    <section class="HF-inf grey">
        <div class="flex-container">
            <div class="recomendation2">
                <h2>небольшая площадь</h2>
                <span>– №3 –</span>
                <p>все находится очень близко</p>
            </div>
            <div class="recomendation2">
                <h2>красивая дорога</h2>
                <span>– №4 –</span>
                <p>ехать в седону из лас- вегаса совсем не скучно!</p>
            </div>
            <div class="recomendation2">
                <h2>мало туристов</h2>
                <span>– №5 –</span>
                <p>большинство едет в гранд каньон и толпятся там</p>
            </div>
        </div>
    </section>
    <section class="search">
        <div class="container-block">
            <p class="interest">Заинтересовались?</p>
            <p class="search-inf">укажите предполагаемые даты поездки, и мы покажем вам лучшие предложения гостиниц в седоне</p>
            <button class="searcher">Найти гостиницу</button>
            <div class="popUp">
                <form action="" class="form">
                    <div class="flexer">
                    <label for="in">Дата заезда:</label><input id='in' class="input-date" type="text" placeholder="Дата заезда">
                    </div>

                    <div class="flexer">
                        <label for="out">Дата выезда:</label><input id='out' class="input-date" type="text" placeholder="Дата выезда">
                    </div>
                    <div class="flexer">
                        <div class="fl-content">
                            <label for="children">Дети:</label>
                            <div class="obert"><div class="minus"></div><input id='children' class="c-a-inp" type="text" value="0"><div class="plus"></div></div>
                        </div>
                        <div class="fl-content">
                            <label for="adults">Взрослые:</label>
                            <div class="obert"><div class="minus"></div><input id='adults' class="c-a-inp" type="text" value="0"><div class="plus"></div></div>
                        </div>
                    </div>
                    <input type="submit" class="subs" value="Найти">
                </form>
            </div>

        </div>
    </section>


    <article>
        <div class="map" id="map">
            <iframe class="map__source js-hide" src="https://www.google.com/maps/d/embed?mid=zgoB38dwcy1c.kicKgWgtcwcc"></iframe>
        </div>
    </article>

</main>
  <?php include_once "footer/footer.php" ?>
</div>

<script src="js/support/popup.js"></script>
<script src="js/support/menu.js"></script>
<!--<script src="js/support/plusMinus.js"></script>-->
<script src="js/iniz.js"></script>
</body>
</html>
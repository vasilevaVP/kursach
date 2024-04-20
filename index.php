<?

$connect = new mysqli('localhost', 'root', '', 'salvador');
$query=mysqli_query($connect, "SELECT * FROM `Form`");

if (isset($_POST['email']) != $_SESSION['email'] ) {


    $email = $_POST["email"];

    $query=$connect->query("INSERT INTO `Form` (`id`,`email` )
    VALUES (NULL, '$email' )");
      header('Location:/kursach/index.php');
    
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://c.webfontfree.com/c.js?f=Airborne" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Play:wght@400;700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Play:wght@400;700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Сальвадор</title>
    <link rel="icon" href="/img/lg.ico">
    
</head>

<body>
    <header id="start">
        <div class="head">
            <div class="logo"><a href="index.php"><img src="./img/logo.svg" alt=""></a></div>
            <div class="nav">
                <ul>
                <a href="index.php"><li>Главная</li></a>
                <a href="#sec3"><li>О нас</li></a>
                <a href="#sec4"><li>Каталог</li></a>
                <a href="#sec5"><li>Рассылка</li></a>
                <a href="#sec6"><li>Контакты</li></a>
                </ul>
            </div>
            <div class="icon">
                <div class="img2"><img src="./img/person.svg" alt=""></div>
                <div class="img2"><img src="./img/shopping.svg" alt=""></div>
                <div class="img3"><img src="./img/heart.svg" alt=""></div>
            </div>
        </div>
    </header>
    <section id="sec1">
        <div class="minetext">
            <div class="title">
                <h1>Добро пожаловать в мир творчества и вдохновения!</h1>
                <p>Превратите свои творческие идеи в произведения искусства c «Сальвадором»</p>
            </div>
            <form action="catalog.html">
            <button>В каталог</button>
            </form>
        </div>
        <div class="mineimg"><img src="./img/main.png" alt="" width="631px" height="577px"></div>
    </section>
    <section2>
        <div class="veri">
            <div class="img_veri"><img src="./img/verified.svg" alt=""></div>
            <p>Качество и надежность</p>
        </div>
        <div class="list">
            <div class="img_list"><img src="./img/list.svg" alt=""></div>
            <p>Широкий ассортимент</p>
        </div>
        <div class="brush">
            <div class="img_brush"><img src="./img/brush.svg" alt=""></div>
            <p>Творческое сообщество</p>
        </div>
    </section2>
    <section3 id="sec3">
        <div class="imgas"><img src="./img/imgas.png" alt="" width="512px" height="431px"></div>
        <div class="textblock" >
            <h2>О нас</h2>
            <p>«Сальвадор» — это не просто интернет-магазин художественных материалов, это место, где каждый мечтатель,
                каждый любитель искусства, каждый художник найдёт своё вдохновение и инструменты для самовыражения.</p>
            <p>Наша команда — это профессионалы с теплом в сердце, готовые подобрать идеальный продукт для вашего
                проекта, ответить на ваши вопросы и помочь воплотить в жизнь любую художественную задумку.</p>
            <p>Наши клиенты — это наша главная ценность, и мы готовы помочь вам реализовать ваши творческие задумки.
                Давайте вместе создавать искусство!</p>
        </div>
    </section3>
    <section4 id="sec4">
        <div class="titlel">
            <h2>Популярные товары</h2>
            <p><a href ="catalog.html">показать больше</p></a>
        </div>
        <div class="cards">
            <div class="card1">
                <img src="./img/card1.jpg" alt="">
                <p>Набор кистей из волоса барсука</p>
                <h2>147 ₽</h2>
                <button>В корзину</button>
            </div>
            <div class="card2">
                <img src="./img/card2.jpg" alt="">
                <p>Набор акварельных красок «Белые Ночи»</p>
                <h2>3 759 ₽</h2>
                <button>В корзину</button>
            </div>
            <div class="card3">
                <img src="./img/card3.jpg" alt="">
                <p>Набор маркёров «COPIC» 36 штук</p>
                <h2>24 071 ₽</h2>
                <button>В корзину</button>
            </div>
            <div class="card4">
                <img src="./img/card4.jpg" alt="">
                <p>Холст на картоне «Гамма» 15×20см</p>
                <h2>75 ₽</h2>
                <button>В корзину</button>
            </div>
        </div>
    </section4>
    <section5 id="sec5">
    <form method="POST">
        <div class="sec">
        <div class="txt">
            <h2>Подпишись на рассылку!</h2>
            <p>Будь в курсе всех новинок и акций</p>
        </div>
        <input type="text" name="email" placeholder="Email">
    <div class="check">
        <input type="checkbox" name="ok">
        <p>Я соглашаюсь с <u>обработкой персональных данных</u></p>
    </div>
        <button>Отправить</button>
    </div>
</form>
    </section5>
    <footer id="sec6">
       <div class="foo">
        <div class="imgw"><a href="#start"><img src="./img/logow.svg" alt=""></a></div>
        <div class="listt">
            <ul>
                <li>Главная</li>
                <li>О нас</li>
                <li>Каталог</li>
                <li>Рассылка</li>
                <li>Контакты</li>
            </ul>
            <ul>
                <li>Лицензии</li>
                <li>Адреса</li>
                <li>Спонсоры</li>
                <li>Частые вопросы</li>
                <li>Сотруднрчество</li>
            </ul>
            <div class="mail">
                <div class="tx"><img src="./img/mail.svg" alt=""><p>salvador_dali@mail.ru</p></div>
                <div class="tx1"><img src="./img/gps.svg" alt=""><p>г. Оренбург, ул. Онина, д. 13</p></div>
            </div>
            <div class="soc">
                <img src="./img/telegram.svg" alt="">
                <img src="./img/vk.svg" alt="">
                <img src="./img/instagram.svg" alt="">
               </div>
        </div>
       
       
    </div> 
    </footer>
</body>

</html>
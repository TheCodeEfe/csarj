<? include_once __DIR__."/static/head.inc.php"; ?>

<? include_once __DIR__."/static/header.inc.php"; ?>



<? if( $_GET["title"] == "bireysel-kurulumlar" ) {?>
<section class="title-page">
    <div class="container">
        <div class="title-page--bg">
            <div class="title-page--bread">
                <a href="./"><img src="app/img/svg/home.svg" alt=""></a>
                <img src="app/img/svg/arrow-right.svg" alt="" class="arrow">
                <a href="#"><span>Bireysel Kurulumlar</span></a>
            </div>
            <div class="title-page--title">
                <h1>Bireysel Kurulumlar</h1>
                <p>Bireysel kurulumlarınız için hemen başvuru formunu doldurun.</p>
            </div>
        </div>
    </div>
</section>
<section class="main">
    <div class="container">
        <div class="main-bg">
            <img src="app/img/hizmetlerimiz/one.png" alt="">
            <div class="main-bg--title">
                <h3>Bireysel Kurulumlar</h3>
                <p class="main-bg--dic">Eviniz, iş yeriniz, yazlığınız veya dilediğiniz herhangi bir noktaya ev
                    tipi</br> cihazınızın kurulumunu gerçekleştiriyoruz.</p>
                <button class="btn"><a href="?pg=contact-us"><span>Hemen Başvur</span></a></button>
            </div>
        </div>
    </div>
</section>
<section class="contact-row">
    <div class="container">
        <div class="contact-row-bg">
            <div class="contact-row-bg-image">
                <img src="app/img/contact.png" alt="">
            </div>
            <div class="contact-row-title">
                <h4>Bizimle İletişime Geçin</h4>
                <p>C-Şarj kurulumu yaptırmak için başvuru formunu doldurarak bizimle iletişime geçebilirsiniz.</p>
                <button class="btn  btn-white"><a href="?pg=contact-us">Şimdi Başvur</a></button>
            </div>
        </div>
    </div>
</section>

<? }elseif($_GET["title"] == "kurumsal-kurulumlar") {?>
<section class="title-page">
    <div class="container">
        <div class="title-page--bg">
            <div class="title-page--bread">
                <a href="./"><img src="app/img/svg/home.svg" alt=""></a>
                <img src="app/img/svg/arrow-right.svg" alt="" class="arrow">
                <a href="#"><span>Kurumsal Kurulumlar</span></a>
            </div>
            <div class="title-page--title">
                <h1>Kurumsal Kurulumlar</h1>
                <p>Kurumsal Kurulumlarınız için hemen başvuru formunu doldurun.</p>
            </div>
        </div>
    </div>
</section>
<section class="main">
    <div class="container">
        <div class="main-bg">
            <img src="app/img/hizmetlerimiz/four.png" alt="">
            <div class="main-bg--title">
                <h3>Kurumsal Kurulumlar</h3>
                <ul>
                        <li><p>Bina, toplu konut ya da alışveriş merkezlerinin açık/kapalı otoparklarında şarj cihazı kurulumu gerçekleştiriyor, </p></li>
                        <li><p>Şirket bünyesinde bulunan makam veya ortak kullanım araçları için özel çözümler üretiyoruz.</p></li>
                        <li><p>Otopark İşletmelerinin açık/kapalı alanlarında şarj cihazı kurulumları</p></li>
                </ul>
                <button class="btn"><a href="?pg=contact-us"><span>Hemen Başvur</span></a></button>
            </div>
        </div>
    </div>
</section>
<section class="contact-row">
    <div class="container">
        <div class="contact-row-bg">
            <div class="contact-row-bg-image">
                <img src="app/img/contact.png" alt="">
            </div>
            <div class="contact-row-title">
                <h4>Bizimle İletişime Geçin</h4>
                <p>C-Şarj kurulumu yaptırmak için başvuru formunu doldurarak bizimle iletişime geçebilirsiniz.</p>
                <button class="btn  btn-white"><a href="?pg=contact-us">Şimdi Başvur</a></button>
            </div>
        </div>
    </div>
</section>



<? }elseif($_GET["title"] == "is-ortakligi") {?>
<section class="title-page">
    <div class="container">
        <div class="title-page--bg">
            <div class="title-page--bread">
                <a href="./"><img src="app/img/svg/home.svg" alt=""></a>
                <img src="app/img/svg/arrow-right.svg" alt="" class="arrow">
                <a href="#"><span>İş Ortaklığı</span></a>
            </div>
            <div class="title-page--title">
                <h1>İş Ortaklığı</h1>
                <p>İş Ortaklığı için hemen başvuru formunu doldurun.</p>
            </div>
        </div>
    </div>
</section>
<section class="main">
    <div class="container">
        <div class="main-bg">
            <img src="app/img/hizmetlerimiz/tree.png" alt="">
            <div class="main-bg--title">
                <h3>İş Ortaklığılar</h3>
                    <ul>
                        <li>
                            <p>Otellerde konaklayan müşterileriniz, </p>
                        </li>
                        <li>
                            <p>Restoran ve kafelerde keyifle vakit geçiren konuklarınız, </p>
                        </li>
                        <li>
                            <p>Özel otoparklarda verilen park, temizlik ve kuaför hizmetlerinin yanı sıra elektrikli araç şarj hizmeti de sunmak için kurulum sağlıyoruz.</p>
                        </li>
                    </ul>
                <button class="btn"><a href="?pg=contact-us"><span>Hemen Başvur</span></a></button>
            </div>
        </div>
    </div>
</section>
<section class="contact-row">
    <div class="container">
        <div class="contact-row-bg">
            <div class="contact-row-bg-image">
                <img src="app/img/contact.png" alt="">
            </div>
            <div class="contact-row-title">
                <h4>Bizimle İletişime Geçin</h4>
                <p>C-Şarj kurulumu yaptırmak için başvuru formunu doldurarak bizimle iletişime geçebilirsiniz.</p>
                <button class="btn  btn-white"><a href="?pg=contact-us">Şimdi Başvur</a></button>
            </div>
        </div>
    </div>
</section>





<? }elseif($_GET["title"] == "filo-anlasmalari") {?>
<section class="title-page">
    <div class="container">
        <div class="title-page--bg">
            <div class="title-page--bread">
                <a href="./"><img src="app/img/svg/home.svg" alt=""></a>
                <img src="app/img/svg/arrow-right.svg" alt="" class="arrow">
                <a href="#"><span>Filo Anlaşmaları</span></a>
            </div>
            <div class="title-page--title">
                <h1>Filo Anlaşmaları</h1>
                <p>Filo Anlaşmalarınız için hemen başvuru formunu doldurun.</p>
            </div>
        </div>
    </div>
</section>
<section class="main">
    <div class="container">
        <div class="main-bg">
            <img src="app/img/hizmetlerimiz/two.png" alt="">
            <div class="main-bg--title">
                <h3>Filo Anlaşmaları</h3>
                <p class="main-bg--dic">Araç filolarınız yeni güne enerji dolu başlasın diye fabrikalarınız ve dağıtım depolarınıza, özel filo imkanlarımız sayesinde ücretsiz olarak C-Şarj cihazlarının kurulumunu sağlıyoruz.</p>
                <button class="btn"><a href="?pg=contact-us"><span>Hemen Başvur</span></a></button>
            </div>
        </div>
    </div>
</section>
<section class="contact-row">
    <div class="container">
        <div class="contact-row-bg">
            <div class="contact-row-bg-image">
                <img src="app/img/contact.png" alt="">
            </div>
            <div class="contact-row-title">
                <h4>Bizimle İletişime Geçin</h4>
                <p>C-Şarj kurulumu yaptırmak için başvuru formunu doldurarak bizimle iletişime geçebilirsiniz.</p>
                <button class="btn  btn-white"><a href="?pg=contact-us">Şimdi Başvur</a></button>
            </div>
        </div>
    </div>
</section>


<? }?>

<? include_once __DIR__."/static/footer.inc.php"; ?>
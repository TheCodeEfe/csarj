
<? include_once __DIR__."/static/head.inc.php"; ?>

<? include_once __DIR__."/static/header.inc.php"; ?>




<section class="title-page">
        <div class="container">
            <div class="title-page--bg">
                <div class="title-page--bread">
                    <a href=""><img src="app/img/svg/home.svg" alt=""></a>
                    <img src="app/img/svg/arrow-right.svg" alt="" class="arrow">
                    <a href=""><span>İletişim</span></a>
                </div>
                <div class="title-page--title">
                    <h1>İletişim</h1>
                    <p>Bize kolayca ulaşmak için haritada yerinizi işaretleyin.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="container">
            <div class="main-bg">
                <!-- <img src="app/img/map.png" alt=""> -->
                <div class="map" style="width:588px;height:440px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6356125.1194824185!2d28.13231255868141!3d38.933651227550506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab77b9bb229b9%3A0xa7e8daf088fcd5a0!2sDetay%20G%C4%B1da!5e0!3m2!1str!2str!4v1654087466369!5m2!1str!2str" width="588" height="440" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="main-bg--title">
                    <ul class="main__contact_us">
                        <li>
                            <img src="app/img/svg/contact-map.svg" alt="">
                            <span>Ömer Avni Mahallesi, İnebolu Sokak, Ekemen İş Hanı, No: 1A 
                                Kabataş, Beyoğlu / İstanbul, Türkiye</span>
                        </li>
                        <li>
                            <img src="app/img/svg/contact-gmail.svg" alt="">
                            <span>musteri.hizmetleri@csarj.com</span>
                        </li>
                        <li>
                            <img src="app/img/svg/contact-call.svg" alt="">
                            <span>442 7275</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_form">
        <div class="container">
            <div class="contact_form__bg">
                <div class="contact_form__bg__left">
                    <form  class="form_contact" method="post" id="forms">
                        <div class="form_contact__box">
                            <input id="Ad" type="text" class="form_contact__box__input" name="fullName">
                            <label class="input-text" for="Ad">Ad Soyad</label>
                        </div>
                        <div class="form_contact__box">
                            <input id="Cep" type="text" class="form_contact__box__input"  name="phone">
                            <label for="Cep" class="input-text">Cep Telefonu*</label>
                        </div>
                        <div class="form_contact__box">
                            <label class="input-select" for="text"><img src="app/img/svg/arrow bottom .svg" alt=""></label>
                            <select id="text"  name="subject">
                                <option value="Bireysel Kurulumlar">Bireysel Kurulumlar</option>
                                <option value="Kurumsal Kurulumlar">Kurumsal Kurulumlar</option>
                                <option value="İş Ortaklığı">İş Ortaklığı</option>
                                <option value="Filo Anlaşmaları">Filo Anlaşmaları</option>
                            </select>
                        </div>
                        <div class="form_contact__box">     
                            <textarea id="w3review" rows="4" cols="50"  name="message"></textarea> 
                            <label class="input-textarea" for="w3review">Mesajınız*</label>
                        </div>
                        <div class="alert ">

                        </div>
                        <div class="form_contact__box">
                            <input type="hidden" name="islem" value="forms">
                            <button class="btn" type="button" id="contact"><span>Gönder</span></button>
                        </div>
                    </form>
                </div>
                <div class="contact_form__bg__right">
                    <img src="app/img/svg/contact gmail big.svg" alt="">
                    <h4>Bize Ulaşın</h4>
                    <p>Merak ettiğiniz tüm detaylar için iletişim formunu doldurabilirsiniz. </p>
                </div>
            </div>
        </div>
    </section>

    
    <? include_once __DIR__."/static/footer.inc.php"; ?>
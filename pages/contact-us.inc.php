
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
                <img src="app/img/map.png" alt="">
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
                    <form action="" class="form_contact">
                        <div class="form_contact__box">
                            <input id="Ad" type="text" class="form_contact__box__input">
                            <label class="input-text" for="Ad">Ad Soyad</label>
                        </div>
                        <div class="form_contact__box">
                            <input id="Cep" type="text" class="form_contact__box__input">
                            <label for="Cep" class="input-text">Cep Telefonu*</label>
                        </div>
                        <div class="form_contact__box">
                            <label class="input-select" for="text"><img src="app/img/svg/arrow bottom .svg" alt=""></label>
                            <select id="text">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="form_contact__box">     
                            <textarea id="w3review" name="w3review" rows="4" cols="50">
                            </textarea> 
                            <label class="input-textarea" for="w3review">Mesajınız*</label>
                        </div>
                        <div class="form_contact__box">
                            <button class="btn"><a href=""><span>Gonder</span></a></button>
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
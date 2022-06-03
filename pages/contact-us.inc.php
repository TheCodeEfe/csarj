
<? include_once __DIR__."/static/head.inc.php"; ?>

<? include_once __DIR__."/static/header.inc.php"; ?>


<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx3QlwbBWxEip1KMZO7k-neya36_2cG8o&callback=initMap&v=weekly&language=tr&region=TR"
      defer
    ></script>

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
                
                <div class="ContactMap" id="mapxx">
                    <div id="map"></div>
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
                            <label for="cep" class="error" style="display: none;">Error</label>

                        </div>
                        <div class="form_contact__box">
                            <input id="Cep" type="text" class="form_contact__box__input"  name="phone">
                            <label for="Cep" class="input-text">Cep Telefonu*</label>
                        </div>
                        <div class="form_contact__box">
                            <label class="input-select" for="text"><img src="app/img/svg/arrow bottom .svg" alt=""></label>
                            <select id="text"  name="subject">
                                <option value="Bireysel Kurulumlar">Konu</option>
                                <option value="Bireysel Kurulumlar">Bireysel Kurulumlar</option>
                                <option value="Kurumsal Kurulumlar">Kurumsal Kurulumlar</option>
                                <option value="İş Ortaklığı">İş Ortaklığı</option>
                                <option value="Filo Anlaşmaları">Filo Anlaşmaları</option>
                            </select>
                        </div>
                        <div class="form_contact__box">     
                            <textarea id="w3review" class="form_contact__box__input" rows="4" cols="50"  name="message"></textarea> 
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

<script>

    let map;
    let markersArray ;
    let marker;
    
    function initMap() {
        var map;
         map = new google.maps.Map(document.getElementById("map"), {
            zoom: 17,
            center:{lat: 41.0342747217909, lng: 28.991538061372125}
        });
        


        var marker = new google.maps.Marker({
			position: {lat: 41.0342747217909, lng: 28.991538061372125},
			map: map,
            icon: '/app/img/map-pin.svg'
		});

         var infowindow ;
        const contentString =
            '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h2 id="firstHeading" class="firstHeading">Csarj</h2>' +
            '<div id="bodyContent">' +"</div>" +
            "</div>";

             infowindow = new google.maps.InfoWindow({
            content: contentString,
        }); 

        marker.addListener("click", () => {
            infowindow.open({
            anchor: marker,
            map,
            shouldFocus: false,
            });
        });
        infowindow.open(map,marker); 
    }


    

    

window.initMap = initMap;
    

</script>
    <? include_once __DIR__."/static/footer.inc.php"; ?>
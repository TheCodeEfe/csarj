
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
                        <div id="map" class="map" style="width:588px;height:440px"></div>
          
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




    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx3QlwbBWxEip1KMZO7k-neya36_2cG8o&callback=initMap"></script>
    <? include_once __DIR__."/static/footer.inc.php"; ?>


    <script>

    let map;
    let markersArray ;
    let marker;
    //let infoWindow;
    var geocoder;



    function initMap() {
        geocoder = new google.maps.Geocoder();
        map = new google.maps.Map(document.getElementById('map'),
            {
                //center: {lat: 41.208277, lng: 28.957777},
                center:{lat: 41.0342747217909, lng: 28.991538061372125},
                zoom: 11.5
               
            });


        map.addListener('click', function(e) {
            //addMarker(e.latLng);
        });




    
    }

 
    


    function addMarker(latLng,Title) {
        if (marker && marker.setMap) {
            marker.setMap(null);
        }

		/*var infowindow = new google.maps.InfoWindow({
		 content: "Add your popup content here 1",
		 title: "Uluru (Ayers Rock)"
		 });*/

        //console.log(latLng);
        marker = new google.maps.Marker({
            position: latLng,
            draggable: true,
            title: "Title for marker",
            map: map,
            labelContent: "ABCDxx",
            labelAnchor: new google.maps.Point(15, 65),
            labelClass: "labels", // the CSS class for the label
            labelInBackground: false,
            label: {
                fontSize: "8pt",
                text: Title
            },
            optimized: false,


        });
       
        markersArray = marker;
       

        var enlem  = marker.getPosition().lat();
        var boylam = marker.getPosition().lng();



    


    }





    



    function showLocation(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        console.log(latitude+"-"+longitude);
        //alert("11dsadsadsa");

        var latLng = {lat: latitude, lng:longitude};
        var marker = new google.maps.Marker({
            position: latLng,
            map: map,    
            title: 'Csarj',
            optimized:false,
            label: {
                fontSize: "14px",
                text: "Csarj"
            },
            labelContent : "Csarj Cont",
            labelClass: "labels",
            labelInBackground: true

        });

        const contentString =
            '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h2 id="firstHeading" class="firstHeading">Csarj</h2>' +
            '<div id="bodyContent">' +"</div>" +
            "</div>";

            const infowindow = new google.maps.InfoWindow({
            content: contentString,
        });   

        marker.addListener("click", () => {
            infowindow.open({
            anchor: marker,
            map,
            shouldFocus: false,
            });
        });
    }
    function errorHandler(err) {
        if(err.code == 1) {
            alert("Error: Access is denied!");
        } else if( err.code == 2) {
            alert("Error: Position is unavailable!");
        }
    }
    function getLocation(){
        if(navigator.geolocation){
            // timeout at 60000 milliseconds (60 seconds)
            var options = {timeout:6000};
            navigator.geolocation.getCurrentPosition
            (showLocation, errorHandler, options);
        } else{
            alert("Sorry, browser does not support geolocation!");
        }
    }
    getLocation();





    

</script>
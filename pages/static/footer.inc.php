

    <footer class="footer">
        <div class="footer-main">
            <div class="footer-main-left">
                <img src="app/img/svg/Logo.svg" alt="" class="logo-footer">
                <p class="title-footer">2M Elektrikli Araç Şarj Ağı ve İstasyon 
                    İşletmeciliği A.Ş.</p>
                <p class="footer-adress">Ömer Avni Mah., İnebolu Sk., Ekemen İş Hanı, No: 1A
                    Kabataş / Beyoğlu / İstanbul</p>
                <div class="footer-main-left-social">
                    <ul>
                        <li><a href=""><img src="app/img/svg/social/facebook.svg" alt=""></a></li>
                        <li><a href=""><img src="app/img/svg/social/instagram.svg" alt=""></a></li>
                        <li><a href=""><img src="app/img/svg/social/twitter.svg" alt=""></a></li>
                        <li><a href=""><img src="app/img/svg/social/youtube.svg" alt=""></a></li>
                        <li><a href=""><img src="app/img/svg/social/linkedin.svg" alt=""></a></li>
                    </ul>
                </div>
                <div class="footer-main-left-phone">
                    <div class="footer-main-left-phone-dic">
                        <h4><b>444</b>2725</h4>
                        <span>CŞARJ</span>
                    </div>
                </div>
            </div>
            <div class="footer-main-right">
                <div class="footer-main-right-box">
                    <div class="head">
                        <img src="app/img/svg/car.svg" alt="">
                        <h4>HAKKIMIZDA</h4>
                    </div>
                    <ul class="footer-menu">
                        <li><a href="?pg=about"><span>Biz Kimiz?</span></a></li>
                        <li><a href="?pg=blog"><span>Haberler</span></a></li>
                        <li><a href="?pg=contact-us"><span>İletişim</span></a></li>
                    </ul>
                </div>
                <div class="footer-main-right-box">
                    <div class="head">
                        <img src="app/img/svg/star.svg" alt="">
                        <h4>HİZMETLER</h4>
                    </div>
                    <ul class="footer-menu">
                        <li><a href=""><span>Bireysel Kurulumlar</span></a></li>
                        <li><a href=""><span>Kurumsal Kurulumlar</span></a></li>
                        <li><a href=""><span>Filo Anlaşmaları</span></a></li>
                        <li><a href=""><span>İş Ortaklığı</span></a></li>
                    </ul>
                </div>
                <div class="footer-main-right-box">
                    <div class="head">
                        <img src="app/img/svg/diger.svg" alt="">
                        <h4>DİĞER</h4>
                    </div>
                    <ul class="footer-menu">
                        <li><a href=""><span>Sıkça Sorulan Sorular</span></a></li>
                        <li><a href=""><span>İstasyon Haritası</span></a></li>
                        <li><a href=""><span>Genel Bilgiler</span></a></li>
                        <li><a href=""><span>Rezervasyon</span></a></li>
                        <li><a href=""><span>Üyelik</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-bg">
                <span class="copy-rgith">© 2022</span>
                <ul>
                    <li><a href=""><span>Gizlilik Politikası</span></a></li>
                    <li><a href=""><span>Kişisel Verilerin Korunması</span></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script  type="text/javascript">
    $(".menu--btn").click(function(){
        $(".header-mobile").toggleClass("active");
        $(this).toggleClass("menu--btnimg")
    });
    $(document).ready(function () {
          $(document).on('click', '.questions-app', function () {
            var open = $(this).parent().hasClass('open');
            if (open) {
              $(this).siblings('.questions-content').slideUp(500, function () {
                $(this).parent().removeClass('open');
              });
            } else {
              $(this).siblings('.questions-content').slideDown(500, function () {
                $(this).parent().addClass('open');
              });
            }
          });
    });
    $(".head").click(function () {
        if(window.matchMedia("(max-width: 767px)").matches){
            $(this).parent("div").addClass("active");
            $(this).parent("div").find("ul").toggleClass("active").slideToggle(500);
        } else{
    }
    });
    $(".menu--nav > ul > li > a").click(function(){
        $(".menu--nav > ul > li").removeClass("active");
        $(this).next("ul").toggleClass("active").slideToggle(500);
    });
    </script>
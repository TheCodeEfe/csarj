

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
                        <li><a href="https://facebook.com"><img src="app/img/svg/social/facebook.svg" alt=""></a></li>
                        <li><a href="https://instagram.com"><img src="app/img/svg/social/instagram.svg" alt=""></a></li>
                        <li><a href="https://twitter.com"><img src="app/img/svg/social/twitter.svg" alt=""></a></li>
                        <li><a href="https://youtube.com"><img src="app/img/svg/social/youtube.svg" alt=""></a></li>
                        <li><a href="https://linkedin.com"><img src="app/img/svg/social/linkedin.svg" alt=""></a></li>
                    </ul>
                </div>
                <div class="footer-main-left-phone">
                    <div class="footer-main-left-phone-dic">
                        <h4><b>442</b>7275</h4>
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
                        <h4>HİZMETLERİMİZ</h4>
                    </div>
                    <ul class="footer-menu">
                        <li><a href="?pg=single-services&title=bireysel-kurulumlar"><span>Bireysel Kurulumlar</span></a></li>
                        <li><a href="?pg=single-services&title=kurumsal-kurulumlar"><span>Kurumsal Kurulumlar</span></a></li>
                        <li><a href="?pg=single-services&title=filo-anlasmalari"><span>Filo Anlaşmaları</span></a></li>
                        <li><a href="?pg=single-services&title=is-ortakligi"><span>İş Ortaklığı</span></a></li>
                        <li><a href="?pg=services"><span>Tümünü Gör</span></a></li>
                    </ul>
                </div>
                <div class="footer-main-right-box">
                    <div class="head">
                        <img src="app/img/svg/diger-ico.svg" alt="">
                        <h4>DİĞER</h4>
                    </div>
                    <ul class="footer-menu">
                        <li><a href="?pg=faq"><span>Sıkça Sorulan Sorular</span></a></li>
                        <li><a href=""><span>İstasyon Haritası</span></a></li>
                        <li><a href="?pg=info"><span>Genel Bilgiler</span></a></li>
                        <li><a href="?pg=reservation"><span>Rezervasyon</span></a></li>
                        <li><a href="?pg=member-detail"><span>Üyelik</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-bg">
                <span class="copy-rgith">© 2022</span>
                <ul>
                    <li><a href="?pg=cookie"><span>Çerez Politikası</span></a></li>
                    <li><a href="?pg=privacy"><span>Gizlilik Politikası</span></a></li>
                    <li><a href="?pg=kvkk"><span>Kişisel Verilerin Korunması</span></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script src="app/js/app.js" type="text/javascript"></script>
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


<script>
$(function () {
//$("#phone").mask("(999)-999-9999");


//focus

$(document).on('keyup',".form_contact__box .form_contact__box__input",function () {
   
    let value = $(this).val();
    let thisIndex = $(".form_contact__box .form_contact__box__input").index(this);

    console.log(value);

    if( value.length > 0 ){
        $(".form_contact__box > label").eq(thisIndex).addClass("inputValid");
    }
    
});


$("#contact").click(
function (e) 
{

 
    
    e.preventDefault();

var form = $("#forms").serialize();
$(".alert").html("");
$.post('ajaxIslemler.php', form, function (data) {
	
  if(data.err == 0 || data.err == 2)
  {
  	 //location.href = "?pg=thanks&pID="+pID;
  	 $(".alert").html(data.msg);
  	 $("#forms")[0].reset();
  }
  else
  {
  
  	$(".alert").html(data.msg);
      
  }
},'json');
return false;
});

});
</script>
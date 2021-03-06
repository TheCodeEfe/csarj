<?php include_once "./static/head.inc.php"; ?>

<body>

<?php include_once "./static/header.inc.php"; ?>

<section class="slide">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <img src="app/img/slide.png" alt="slide img" class="deskimg">
        <img src="app/img/resimg.png" alt="slide img" class="resimg">
      </div>
      <div class="slide__btn">
        <a href="" class="btn">
          <span>HEMEN KAZAN</span>
          <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.29002 5.46C4.38298 5.55373 4.49359 5.62812 4.61544 5.67889C4.7373 5.72966 4.86801 5.7558 5.00002 5.7558C5.13203 5.7558 5.26274 5.72966 5.3846 5.67889C5.50646 5.62812 5.61706 5.55373 5.71002 5.46L8.71002 2.46C8.80589 2.36676 8.88245 2.25556 8.93533 2.13273C8.98822 2.0099 9.0164 1.87786 9.01826 1.74414C9.02011 1.61043 8.99561 1.47766 8.94616 1.35341C8.8967 1.22916 8.82326 1.11587 8.73002 1.02C8.63678 0.924137 8.52558 0.847576 8.40275 0.794689C8.27992 0.741802 8.14788 0.713625 8.01416 0.711768C7.88045 0.709911 7.74767 0.734409 7.62343 0.783865C7.49918 0.83332 7.38589 0.906763 7.29002 1L5.00002 3.34L2.71002 1C2.51641 0.811698 2.25593 0.708018 1.98588 0.711768C1.71583 0.715519 1.45833 0.826394 1.27002 1.02C1.08172 1.21361 0.978037 1.47409 0.981788 1.74414C0.985539 2.0142 1.09641 2.2717 1.29002 2.46L4.29002 5.46ZM7.29002 6.54L5.00002 8.84L2.71002 6.54C2.51641 6.3517 2.25593 6.24802 1.98588 6.25177C1.71583 6.25552 1.45833 6.36639 1.27002 6.56C1.08172 6.75361 0.978037 7.01409 0.981788 7.28414C0.985539 7.5542 1.09641 7.8117 1.29002 8L4.29002 11C4.38298 11.0937 4.49359 11.1681 4.61544 11.2189C4.7373 11.2697 4.86801 11.2958 5.00002 11.2958C5.13203 11.2958 5.26274 11.2697 5.3846 11.2189C5.50646 11.1681 5.61706 11.0937 5.71002 11L8.71002 8C8.89833 7.8117 9.00411 7.5563 9.00411 7.29C9.00411 7.0237 8.89833 6.76831 8.71002 6.58C8.52172 6.3917 8.26632 6.28591 8.00002 6.28591C7.73372 6.28591 7.47833 6.3917 7.29002 6.58V6.54Z" fill="white"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="form">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12">
        <form action="">
          <div class="form__title">
            <h1>Formu doldur,  hemen oyuna kat??l!</h1>
            <p>T??m T??rkiye'ye hizmet vermemizi b??y??k ??ekili?? kampanyas??yla hep beraber kutluyoruz. </br>
              Sen de hemen formu doldurarak sorulara cevaplar verip kolayca ??ekili??e kat??labilirsin.</p>
          </div>
          <div class="form__content">
            <div class="form__content-bg">
              <input id="name" class="input-text js-input" type="text" required>
              <span class="label" for="name">??sim Soyisim</span>
            </div>
            <div class="form__content-bg">
              <input  id="name" class="input-text js-input" type="text" required>
              <span class="label" for="name">Telefon</span>
            </div>
            <div class="form__content-bg">
              <input id="name" class="input-text js-input" type="text" required>
              <span class="label" for="name">E-Mail</span>
            </div>
            <div class="form__content-bg">
              <input id="name" class="input-text js-input" type="text" required>
              <span class="label" for="name">Firma</span>
            </div>
            <div class="form__content-bg">
              <div class="form__content-bg-text">
                <div class="form__content-bg-text-box">
                  <input type="checkbox" name="a">
                  <span><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Veri payla????m iznini</a> okudum onayl??yorum.</span>
                </div>
                <div class="form__content-bg-text-box">
                  <input type="checkbox" name="a">
                  <span><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Kullan??m ko??ullar??n??</a> okudum onayl??yorum.</span>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-ku">
                    <div class="modal-content">
                      <div class="modal-title text-center">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Veri Payla????m ??zni</h5>
                      </div>
                      
                      <a class="modal-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24ZM12 1.5C6.20101 1.5 1.5 6.20101 1.5 12C1.5 17.799 6.20101 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.4945 6.2033 17.7967 1.50551 12 1.5ZM17.5003 18.2503C17.3073 18.2355 17.1279 18.1458 17.0003 18.0003L12.0002 13.0002L7.00002 18.0003C6.87245 18.1458 6.69296 18.2355 6.50002 18.2503C6.30707 18.2355 6.12759 18.1458 6.00002 18.0003C5.74537 17.7156 5.74537 17.285 6.00002 17.0003L11.0002 12.0002L6.00029 7.00029C5.86331 6.71349 5.92199 6.37148 6.14674 6.14674C6.37148 5.92199 6.71349 5.86331 7.00029 6.00029L12.0002 11.0002L17 6.00029C17.2868 5.86332 17.6288 5.92199 17.8536 6.14674C18.0783 6.37148 18.137 6.71349 18 7.00029L13.0002 12.0002L18.0003 17.0003C18.2549 17.285 18.2549 17.7156 18.0003 18.0003C17.8727 18.1458 17.6932 18.2355 17.5003 18.2503Z" fill="#111B1C"/>
                          </svg>                          
                      </a>
                      <div class="modal-body">
                        <p class="text-justify">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at placerat tellus. Integer vestibulum laoreet sem ut sagittis. Vestibulum nec leo sed felis eleifend vestibulum. Mauris consectetur eleifend justo, a rutrum nisl efficitur eget. Aliquam sed facilisis dolor, eu dictum odio. Quisque purus lorem, laoreet sed aliquam et, aliquet eu neque. Maecenas mattis mauris commodo consectetur aliquet. In auctor consequat ante quis efficitur. Nunc sagittis mauris in arcu ornare, sed ullamcorper ipsum congue.</br></br>

Suspendisse urna lectus, laoreet a aliquam nec, rhoncus et nisl. Curabitur nec lacinia lacus, vestibulum sodales velit. Pellentesque aliquam purus nec tincidunt consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et aliquam nunc, vel ornare metus. Duis elementum leo vel elit lobortis, in viverra elit sagittis. Aliquam ut diam accumsan ipsum viverra egestas. Praesent orci lacus, suscipit sit amet odio lobortis, pellentesque ultricies urna. Aliquam ut lectus eu dolor varius mattis.</br></br>

Sed convallis eros bibendum pharetra laoreet. Sed eget magna eros. In vehicula turpis eget bibendum fermentum. Phasellus ullamcorper tortor vel est laoreet, eu mollis est fermentum. Nam gravida tortor tortor, ac venenatis odio consectetur ut. Suspendisse vel velit mauris. Nunc et nunc scelerisque, suscipit risus non, tempor lacus. Quisque velit elit, pellentesque tempor sollicitudin id, condimentum et leo. Curabitur sed volutpat ex, accumsan vulputate lorem. Fusce dapibus ligula libero, non tincidunt augue faucibus eu. Suspendisse vel purus et justo pharetra interdum. Donec quis augue nec lacus auctor malesuada vel eget turpis. Vivamus et elementum enim. Proin eu sagittis velit. Sed sed nibh ex.</br></br>

Nullam odio nulla, volutpat eu porttitor non, faucibus quis sapien. Sed sit amet egestas tortor. Sed laoreet magna nec arcu vestibulum, nec aliquet massa sodales. Nunc lacinia est purus, bibendum fermentum diam porta non. Integer sagittis, dolor eu commodo aliquam, massa lacus vestibulum purus, sit amet venenatis ipsum ante quis sem. Proin eu nisi suscipit, mattis metus nec, auctor diam. Pellentesque aliquam sapien eu tortor facilisis, vitae luctus tellus consectetur. Sed vitae dapibus mauris. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                      </div>
                      <div class="modal-btn">
                        <a href="" class="btn" data-bs-dismiss="modal" aria-label="Close">
                          <span>ANLADIM</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form__footer">
            <a href="" class="btn btn100" data-bs-toggle="modal" data-bs-target="#numbermob">
              <span>BA??LAYALIM</span>
            </a>
            <!-- Modal -->
                <div class="modal fade" id="numbermob" tabindex="-1" aria-labelledby="numbermob" aria-hidden="true">
                  <div class="modal-dialog modal-ku modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-title text-center">
                        <img src="app/img/logotimer.png" alt="">
                        <h5 class="title-timer-modal modal-title text-center" id="exampleModalLabel">Telefonunu Do??rula</h5>
                        <p class="p-modal"><b>0539 321 12 32</b>numaral?? telefon numaras??na g??nderilen 4 haneli</br> do??rulama kodunu gir.</p>
                      </div>
                      
                      <a class="modal-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24ZM12 1.5C6.20101 1.5 1.5 6.20101 1.5 12C1.5 17.799 6.20101 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.4945 6.2033 17.7967 1.50551 12 1.5ZM17.5003 18.2503C17.3073 18.2355 17.1279 18.1458 17.0003 18.0003L12.0002 13.0002L7.00002 18.0003C6.87245 18.1458 6.69296 18.2355 6.50002 18.2503C6.30707 18.2355 6.12759 18.1458 6.00002 18.0003C5.74537 17.7156 5.74537 17.285 6.00002 17.0003L11.0002 12.0002L6.00029 7.00029C5.86331 6.71349 5.92199 6.37148 6.14674 6.14674C6.37148 5.92199 6.71349 5.86331 7.00029 6.00029L12.0002 11.0002L17 6.00029C17.2868 5.86332 17.6288 5.92199 17.8536 6.14674C18.0783 6.37148 18.137 6.71349 18 7.00029L13.0002 12.0002L18.0003 17.0003C18.2549 17.285 18.2549 17.7156 18.0003 18.0003C17.8727 18.1458 17.6932 18.2355 17.5003 18.2503Z" fill="#111B1C"/>
                          </svg>                          
                      </a>
                      <div class="modal-body">
                        <div class="modal-timer-bg">
                          <div class="title-timer">
                            <span>Do??rulama Kodu</span>
                            <div class="block"></div>
                          </div>
                          <div class="input-timer">
                            <input type="text" maxlength="1" max="9">
                            <input type="text" maxlength="1" max="9">
                            <input type="text" maxlength="1" max="9">
                            <input type="text" maxlength="1" max="9">
                          </div>
                        </div>
                      </div>
                      <div class="modal-btn">
                        <a href="" class="btn btn-timer-modal" data-bs-dismiss="modal" aria-label="Close">
                          <span>DO??RULA</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



<?php include_once "./static/footer.inc.php"; ?>

</body>
</html>
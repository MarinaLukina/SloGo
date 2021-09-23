

	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>КОНТАКТЫ</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Контакты</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

	<!-- ================ contact section start ================= -->
  <section class="section-margin--small">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map"></div>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7d7eaba3aeb70c0f36f798ca2d1bf4e569f3302bf13dee2dd4f3e55c172ea2e5&amp;width=1013&amp;height=531&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>
       <div class="row">
         <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Россия, Московская область</h3>
              <p>Сергиев Посад</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:9670483450">+7 (967)048-34-50</a></h3>
              <p>Понедельник -  Пятница с  9:00 до 18:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">myxobojka01@gmail.com</a></h3>
              <p>Отправьте нам свой вопрос в любое время!</p>
            </div>
          </div>
         </div>
         <div class="col-md-8 col-lg-9">
         <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Ваше имя">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Ваш E-mail">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Ваш вопрос">
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                    <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Напишите ваше сообщение"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
               <button type="submit" class="button header__logo">Отправить</button>
            </div>
         </form>
         </div>
      </div>
   </div>
</section>
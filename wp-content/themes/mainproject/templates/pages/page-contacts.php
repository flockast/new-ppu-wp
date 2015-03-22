<?php get_header(); ?>
<div class="mainContent full">
  <input type="hidden" name="data-file" value="templates/pages/page-contacts.php">
  <h1 class="pageTitle"><span>Контакты</span></h1>
  <div class="pageContacts">
    <div class="row">
      <div class="ourContacts">
        <p>
          Строительные и ремонтные работы в квартирах и домах 
        </p>
        <p><b>Телефоны:</b><br> 
        <a href="tel:+79057417454">+7 (905) 741-74-54</a><br>
        <a href="tel:+79296759794">+7 (929) 675-97-94</a><br>
        <a href="tel:+79163658127">+7 (916) 365-81-27</a></p>
        <p>
          <b>Почта:</b> <a href="mailto:vpu@mail.ru">vpu@mail.ru</a>
        </p>
        <p><b>Адрес: </b>г.Москва, Литовский б-р, д.46, к.1</p>
      </div>
      <div class="ourMap">
        <script type="text/javascript" charset="utf-8" src="http://api-maps.yandex.ru/services/constructor/1.0/js/?sid=uZpe5qv-QgNyIn2iHD0QMbQQc7FCJo66&width=100%&height=192"></script>
      </div>  
    </div>
    <h3 class="pageTitle simpleTitle"><span>Напишите нам</span></h3>
    <div class="callBackForm">
      <form action="#">
        <div class="form-group"><input type="text" class="form-control" placeholder="Ваше Имя"></div>
        <div class="form-group"><input type="text" class="form-control" placeholder="Ваши Контакты"></div>
        <div class="form-group"><textarea class="form-control" rows="3" placeholder="Интересующий Вас вопрос"></textarea></div>
        <div class="form-group">
          <button class="btn btn-default">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php get_footer(); ?>
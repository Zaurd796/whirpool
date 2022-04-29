<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Whirpool corporation</title>
  <link rel="stylesheet" href="libs/normalize.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/first.css">
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/menu.css">
</head>

<body>
  <div id="panel"></div>
  <div class="site">
    <div class="menu" data-menu>
      <div class="container">
        <form class="menu__form" action="#">
          <h3 class="menu__form-text">Обратная связь</h3>
          <p class="menu__form-input-block">
            <label class="menu__form-label" for="name">Ваше имя</label>
            <input class="menu__input" name="name" id="name" type="text">
          </p>
          <p class="menu__form-input-block">
            <label class="menu__form-label" for="tel">Ваш телефон</label>
            <input class="menu__input" name="tel" id="tel" type="tel">
          </p>
          <p class="menu__form-input-block">
            <label class="menu__form-label" for="email">Ваш email</label>
            <input class="menu__input" name="email" id="email" type="email">
          </p>
          <p class="menu__form-input-block">
            <label class="menu__form-label" for="area">Введите сообщение здесь</label>
            <textarea class="menu__input" name="text" id="area"></textarea>
          </p>
          <p class="menu__checkbox-content">
            <input class="menu__input" type="checkbox" name="check" id="check">
            <label for="check">
              Согласие на обработку персональных данных
            </label>
          </p>
          <button class="menu__button" type="submit">Сохранить</button>
        </form>
      </div>
    </div>
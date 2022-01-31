<div id="form-popup" class="popup mfp-hide">
    <div class="popup__header">
        <div class="form-authorization__title">
            Вход/Регистрация
        </div>
    </div>
    <div class="popup__content">
        <form action="#" class="form" >
            <div class="form-authorization__tel">
                <input id="tel" type="tel" name placeholder="+380 (97) 015-61-72" data-rules='["require"]'/>
                <label for="tel">Ваш номер телефона</label>
            </div>
            <div class="form-authorization__block" data-onclick-content>
                <button class="btn-back" data-back>
                    <div class="btn-back__svg">
                        <svg class="arrow" width="16" height="8">
                            <use xlink:href="dist/icons.svg#arrow-left"></use>
                        </svg>
                    </div>
                    <div class="btn-back__text">Ввести другой номер телефона</div>
                </button>
                <div class="form-authorization__info">
                    С таким номером телефона еще нет пользователей, хотите зарегистрироваться?
                </div>
                <div class="login">
                    <div class="login__info">Я регистрируюсь как</div>
                    <div class="login-accordion">
                        <div class="login-accordion__text">Частное лицо</div>
                        <div class="login-accordion__svg">
                            <svg class="arr-down" width="16" height="8">
                                <use xlink:href="dist/icons.svg#arr-down"></use>
                            </svg>
                        </div>
                    </div>
                </div>

                <button  class="button button--registration">
                    <input class="button__txt" type="submit" value="Регистрация">
                </button>
            </div>
            <button class="button button--authorization" data-onclick>
                <input id="btn" class="button__txt" type="button" value="Далее">
            </button>
            <div class="form-authorization__help">
                или с помощью
            </div>
            <div class="button button--social">
                <a class="form-authorization__social" target="_blank"
                   href="https://www.google.ru/intl/ru/chrome/?brand=IXYC&gclsrc=aw.ds&gclid=Cj0KCQiA2NaNBhDvARIsAEw55hgiZ-iJn-gbDkoKxY-2QZB9ZswxNjEvKaH8NUWBAm6EvTCqIN77mp4aAuS4EALw_wcB">
                    <svg class="social-networks chrome" width="20" height="20">
                        <use xlink:href="dist/icons.svg#chrome"></use>
                    </svg>
                </a>
                <a class="form-authorization__social" target="_blank" href="https://www.facebook.com/">
                    <svg class="social-networks facebook" width="12" height="24">
                        <use xlink:href="dist/icons.svg#facebook"></use>
                    </svg>
                </a>
            </div>
            <div class="form-authorization__check">
                <input class="form__input" id="name" type="checkbox" name="" data-rules='["require"]'>
                <label class="form__custom" for="name">Даю согласие на обработку своих персональных данных в
                    соответствии с
                    <a class="form__link" href="#">данной офертой</a></label>
            </div>
        </form>
    </div>
    <div class="popup__footer">
        <div class="stock">
            <div class="user">
                <svg class="client" width="22" height="26">
                    <use xlink:href="dist/icons.svg#user"></use>
                </svg>
            </div>
            <div class="stock__txt">Акции, скидки и специальные предложения для зарегистрированных пользователей</div>
        </div>
    </div>

</div>

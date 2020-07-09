<template>
  <div class="body">
    <main class="main section__shadow-1">
      <div class="container">
        <div class="main__bcg-1"><span>Digital</span> <span>studio</span></div>

        <div class="main__content">
          <div 
            class="main__header" 
            :class="{'nav--scroll':  headerScroll}"
          >
            <div>
              <div class="main__left-block">
                <a href="/" class="main__logo">
                  <img src="./assets/images/logo-white.png" alt="Tirax.pro" 
                    itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"
                  />
                </a>
                <a href="tel:+79373720099" class="main__phone" itemprop="telephone">+7(937)372-00-99</a>
              </div>
              <div class="main__menu" 
                :class="{open: menu}"
                @click="toggleMenu">
                <div class="hamberger" />
              </div>
              <nav class="main__nav"
                :class="{open: menu}"
                itemscope itemtype="http://schema.org/SiteNavigationElement"
              >
                <ul>
                  <li><a href="#0" @click.prevent="openModalRecord" 
                    class="nav--request">Оставить заявку</a></li>
                  <li><a href="#0" 
                    itemprop="url"
                    @click.prevent="moveLink('services')">Услуги</a></li>
                  <!-- <li><a href="#0" @click="moveLink('portfolio')">Портфолио</a></li> -->
                  <li><a href="#0" 
                    itemprop="url"
                    @click.prevent="moveLink('about-us')">О нас</a></li>
                  <li><a href="#0" 
                    itemprop="url"
                    @click.prevent="moveLink('contacts')">Контакты</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="main__body">
            <div class="main__text">
              <div class="main__caption">
                <h2>Digital-агенство в Чебоксарах</h2>
                <h1>TIRAX<span>.pro
                  <a href="#0" @click.prevent=""><strong><i>Верифицированное сообщество.</i> 
                    Это официальное сообщество известной 
                    персоны или организации</strong></a></span>
                </h1>
                <p>SMM.SEO с 2014 года</p>
              </div>
              <div class="main__list">
                <ul>
                  <li><a href="#0" @click.prevent="moveLink('service-design')">Дизайн</a></li>
                  <li><a href="#0" @click.prevent="moveLink('service-development')">Разработка</a></li>
                  <li><a href="#0" @click.prevent="moveLink('service-smm')">Продвижение</a></li>
                </ul>
              </div>
              <div class="main__btn">
                <button class="btn-1 btn--green"
                  @click="openModalRecord"
                >Оставить заявку</button>
              </div>
            </div>
            <div class="main__img" ref="mainGallery">
              <div class="main__img__item">
                <lazy-component>
                  <picture>
                    <source media="(min-width: 574px)" srcset="./assets/images/rider-1.png">
                    <img src="./assets/images/rider-1_m.png" alt="tirax.pro" />
                  </picture>
                </lazy-component>
              </div>
              <div class="main__img__item">
                <lazy-component>
                  <picture>
                    <source media="(min-width: 574px)" srcset="./assets/images/rider-2.png">
                    <img src="./assets/images/rider-2_m.png" alt="tirax.pro" />
                  </picture>
                </lazy-component>
              </div>
              <div class="main__img__item">
                <lazy-component>
                  <picture>
                    <source media="(min-width: 574px)" srcset="./assets/images/rider-3.png">
                    <img src="./assets/images/rider-3_m.png" alt="tirax.pro" />
                  </picture>
                </lazy-component>
              </div>
            </div>
          </div>
          <div class="main__social">
            <a href="https://www.instagram.com/smm.cheb/" 
              class="icon"
              rel="noopener"
              target="_blank"
            >
              <svg viewBox="0 0 512.001 512.001" xmlns="http://www.w3.org/2000/svg">
                <path d="M373.406 0H138.594C62.172 0 0 62.172 0 138.594V373.41C0 449.828 62.172 512 138.594 512H373.41C449.828 512 512 449.828 512 373.41V138.594C512 62.172 449.828 0 373.406 0zm108.578 373.41c0 59.867-48.707 108.574-108.578 108.574H138.594c-59.871 0-108.578-48.707-108.578-108.574V138.594c0-59.871 48.707-108.578 108.578-108.578H373.41c59.867 0 108.574 48.707 108.574 108.578zm0 0"/><path d="M256 116.004c-77.195 0-139.996 62.8-139.996 139.996S178.804 395.996 256 395.996 395.996 333.196 395.996 256 333.196 116.004 256 116.004zm0 249.976c-60.64 0-109.98-49.335-109.98-109.98 0-60.64 49.34-109.98 109.98-109.98 60.645 0 109.98 49.34 109.98 109.98 0 60.645-49.335 109.98-109.98 109.98zm0 0M399.344 66.285c-22.813 0-41.367 18.559-41.367 41.367 0 22.813 18.554 41.371 41.367 41.371s41.37-18.558 41.37-41.37-18.558-41.368-41.37-41.368zm0 52.719c-6.258 0-11.352-5.094-11.352-11.352 0-6.261 5.094-11.351 11.352-11.351 6.261 0 11.355 5.09 11.355 11.351 0 6.258-5.094 11.352-11.355 11.352zm0 0"/>
              </svg>Instagram
            </a>
            <a href="https://vk.com/social_cheb" 
              class="icon"
              rel="noopener"
              target="_blank"
            >
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.145 19.5c3.472 0 2.234-2.198 2.502-2.83-.004-.472-.008-.926.008-1.202.22.062.739.325 1.811 1.367 1.655 1.67 2.078 2.665 3.415 2.665h2.461c.78 0 1.186-.323 1.389-.594.196-.262.388-.722.178-1.438-.549-1.724-3.751-4.701-3.95-5.015a2.84 2.84 0 0 1 .103-.175h-.002c.632-.835 3.044-4.449 3.399-5.895a.019.019 0 0 0 .002-.008c.192-.66.016-1.088-.166-1.33-.274-.362-.71-.545-1.299-.545h-2.461c-.824 0-1.449.415-1.765 1.172-.529 1.345-2.015 4.111-3.129 5.09a64.114 64.114 0 0 1 .007-3.233c.036-1.535.152-3.029-1.441-3.029H9.339c-.998 0-1.953 1.09-.919 2.384.904 1.134.325 1.766.52 4.912-.76-.815-2.112-3.016-3.068-5.829-.268-.761-.674-1.466-1.817-1.466H1.594C.596 4.501 0 5.045 0 5.956 0 8.002 4.529 19.5 12.145 19.5zM4.055 6.001c.217 0 .239 0 .4.457.979 2.883 3.175 7.149 4.779 7.149 1.205 0 1.205-1.235 1.205-1.7l-.001-3.702C10.372 6.98 9.926 6.37 9.633 6l3.508.004c.002.017-.02 4.095.01 5.083 0 1.403 1.114 2.207 2.853.447 1.835-2.071 3.104-5.167 3.155-5.293.075-.18.14-.241.376-.241H22.006l-.002.009c-.225 1.05-2.446 4.396-3.189 5.435l-.034.05c-.327.534-.593 1.124.045 1.954h.001c.058.07.209.234.429.462.684.706 3.03 3.12 3.238 4.08-.138.022-.288.006-2.613.011-.495 0-.882-.74-2.359-2.23-1.328-1.292-2.19-1.82-2.975-1.82-1.524 0-1.413 1.237-1.399 2.733.005 1.622-.005 1.109.006 1.211-.089.035-.344.105-1.009.105C5.8 18 1.668 7.929 1.509 6.004c.055-.005.812-.002 2.546-.003z"/>
              </svg>VK
            </a>
          </div>
        </div>

        <kinesis-container class="bcg-balls main__bcg-2">
          <kinesis-element :strength="10" :type="'translate'" class="bcg-ball bcg-ball--1" />
          <kinesis-element :strength="10" :type="'translate'" class="bcg-ball bcg-ball--2" />
          <kinesis-element :strength="2" :type="'translate'" class="bcg-ball bcg-ball--3" />
          <kinesis-element :strength="10" :type="'translate'" class="bcg-ball bcg-ball--4" />
          <kinesis-element :strength="2" :type="'translate'" class="bcg-ball bcg-ball--5" />
          <kinesis-element :strength="2" :type="'translate'" class="bcg-ball bcg-ball--6" />
        </kinesis-container>
      </div>
    </main>

    

    <section class="about-us" id="about-us">
      <div class="container">
        <div class="caption">
          <h2><strong>О</strong> компании</h2>
          <h3>Мы креативная компания</h3>
        </div>
        <div class="about-us__body">
          <div class="about-us__caption" >
            <div>
              <h3 class="caption__h3"><strong>Хотите</strong> ежемесячно получать <strong>новых 
                клиентов?</strong></h3>
            </div>
            <img v-lazy="require('./assets/images/men-1.png')" alt="Новые клиенты для бизнеса"
              data-aos="slide-left"
              data-aos-once="false"
            />
          </div>
          <div class="about-us__text">
            <p class="text__p">
              <strong>Digital-агенство TIRAX.PRO</strong> - это профессиональая команда специалистов: 
              контент-менеджеры, дизайнеры, таргетологи, директологи и программисты! Мы предлагаем 
              комплексную работу от прототипирования до продвижения сайтов, интернет магазины «под 
              ключ» В контакте для компаний, которым важно стать лидерами в своей сфере и охватить 
              максимально свою целевую аудиторию.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="services section__shadow-1" id="services">
      <div class="container">
        <div class="caption">
          <h2><strong>Наши</strong> услуги</h2>
          <h3>Это наша миссия</h3>
        </div>

        <div>
          <article class="services__block" id="service-smm">
            <div itemscope itemtype="http://schema.org/Offer">
              <div class="services__bcg">
                <div class="bcg-balls services__bcg-1">
                  <div class="bcg-ball bcg-ball--1"></div>
                  <div class="bcg-ball bcg-ball--2"></div>
                  <div class="bcg-ball bcg-ball--3"></div>
                  <div class="bcg-ball bcg-ball--4"></div>
                  <p>SMM</p>
                </div>
                <div class="bcg-fill">
                  <div class="bcg-fill--1"></div>
                  <div class="bcg-fill--2"></div>
                  <p itemprop="name">SMM</p>
                </div>
              </div>
              <div class="services__content">
                <div class="services__body">
                  <div class="services__img services--smm">
                    <img v-lazy="require('./assets/images/service-phone.png')" alt="SMM продвижение"
                      data-aos="slide-left"
                      data-aos-once="false"
                    />
                  </div>
                  <div class="services__description" itemprop="description">
                    <h3>SMM продвижение</h3>
                    <p class="text__p">
                      SMM - Social Media Marketing означает дословно «Маркетинг в Социальных Сетях». 
                      По сути, SMM представляет из себя комплекс действий, состоящий из 
                      управления сообществами и подписочной базой. А продвижение - «наполнение» контентом 
                      и активное взаимодействие с людьми
                    </p>
                    <p class="text__p">
                      SMM-продвижение успешно используется в абсолютно разных направлениях для:
                    </p>
                    <ul class="text__ul">
                      <li>увеличить продажи;</li>
                      <li>создать сообщество;</li>
                      <li>организовать мероприятие;</li>
                      <li>поделиться своим творчеством;</li>
                      <li>провести исследование;</li>
                    </ul>
                    <p class="services__price"
                      data-aos="zoom-in"
                      data-aos-once="false"
                      itemprop="price"
                    >от 16 000 рублей</p>
                    <div class="services__btn">
                      <button class="btn-1 btn--green"
                        data-service="SMM продвижение"
                        @click="openModalRecord"
                      >Оставить заявку</button>
                    </div>
                  </div>
                </div>
                <div class="services__advantages">
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/seo-and-web.png')" 
                        alt="Точное попадание в ЦА" />
                      <p>Точное попадание в ЦА</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/online-learning.png')" 
                        alt="Контент, вовлекающий в ваш бизнес" />
                      <p>Контент, вовлекающий в ваш бизнес</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/bot.png')" 
                        alt="Разработка чат-ботов" />
                      <p>Разработка чат-ботов</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/gamepad.png')" 
                        alt="Геймификация в сообществе" />
                      <p>Геймификация в сообществе</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/message.png')" 
                        alt="Получение подписчиков, заявок и продаж" />
                      <p>Получение подписчиков, заявок и продаж</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/group.png')" 
                        alt="Возвращение теплой аудитории и повтор продаж" />
                      <p>Возвращение теплой аудитории и повтор продаж</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <article class="services__block" id="service-seo">
            <div itemscope itemtype="http://schema.org/Offer">
              <div class="services__bcg">
                <div class="bcg-balls services__bcg-2">
                  <div class="bcg-ball bcg-ball--1"></div>
                  <div class="bcg-ball bcg-ball--2"></div>
                  <div class="bcg-ball bcg-ball--3"></div>
                  <div class="bcg-ball bcg-ball--4"></div>
                  <p>SEO</p>
                </div>
                <div class="bcg-fill">
                  <div class="bcg-fill--1"></div>
                  <div class="bcg-fill--2"></div>
                  <p itemprop="name">SEO</p>
                </div>
              </div>
              <div class="services__content">
                <div class="services__body">
                  <div class="services__description" itemprop="description">
                    <h3>SEO продвижение сайта</h3>
                    <p class="text__p">SEO - Search Engine Optimization поисковая оптимизация. Продвижение 
                      заключается в развитии сайта для его выхода на высокие позиции в результатах 
                      выдачи поисковых систем. Чем выше позиция сайта в результатах поиска, 
                      тем больше пользователей переходит на него.
                    </p>
                    <p class="text__p">Поисковики постоянно стремятся улучшить качество выдачи, поэтому 
                      необходимо продвигать интернет-ресурс комплексно.</p>
                    <p class="services__price"
                      data-aos="zoom-in"
                      data-aos-once="false"
                      itemprop="price"
                    >от 14 000 рублей</p>
                    <div class="services__btn">
                      <button class="btn-1 btn--green"
                        data-service="SEO продвижение"
                        @click="openModalRecord"
                      >Оставить заявку</button>
                    </div>
                  </div>
                  <div class="services__img services--seo">
                    <img v-lazy="require('./assets/images/service-book.png')" 
                        alt="SMM продвижение" />
                  </div>
                </div>
                <div class="services__advantages">
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/search.png')" 
                        alt="Высокие позиции в поиске" />
                      <p>Высокие позиции в поиске</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/searching-bar.png')" 
                        alt="Стабильный поток клиентов из поиска" />
                      <p>Стабильный поток клиентов из поиска</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/camping.png')" 
                        alt="Модернизация сайта" />
                      <p>Модернизация сайта</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/order.png')" 
                        alt="Увеличение заказов" />
                      <p>Увеличение заказов</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <article class="services__block" id="service-design">
            <div itemscope itemtype="http://schema.org/Offer">
              <div class="services__bcg">
                <div class="bcg-balls services__bcg-1">
                  <div class="bcg-ball bcg-ball--1"></div>
                  <div class="bcg-ball bcg-ball--2"></div>
                  <div class="bcg-ball bcg-ball--3"></div>
                  <div class="bcg-ball bcg-ball--4"></div>
                  <p>Design</p>
                </div>
                <div class="bcg-fill">
                  <div class="bcg-fill--1"></div>
                  <div class="bcg-fill--2"></div>
                  <p itemprop="name">Design</p>
                </div>
              </div>
              <div class="services__content">
                <div class="services__body">
                  <div class="services__img services--design">
                    <img v-lazy="require('./assets/images/service-pad.png')" 
                        alt="Дизайн" />
                  </div>
                  <div class="services__description" itemprop="description">
                    <h3>Дизайн</h3>
                    <p class="text__p">Дизайн – первое и самое важное впечатление о ресурсе. 
                      От него зависит успех бизнес-проекта. При посещении ресурса у посетителя 
                      на формирование собственного мнения уходит 3-4 секунды. Поэтому важно 
                      воспользоваться услугами дизайнера и создать эксклюзивный внешний вид 
                      и оформление</p>
                    <p class="text__p">Дизайн должен быть:</p>
                    <ul class="text__ul">
                      <li>дорогим, иметь статус;</li>
                      <li>индивидуальным, отличаться от конкурентов;</li>
                      <li>понятным, удобным для использования;</li>
                      <li>отвечать требованиям и эфективно решать поставленные задачи;</li>
                    </ul>
                    <p class="services__price"
                      data-aos="zoom-in"
                      data-aos-once="false"
                      itemprop="price"
                    >от 500 рублей</p>
                    <div class="services__btn">
                      <button class="btn-1 btn--green"
                        data-service="Дизайн"
                        @click="openModalRecord"
                      >Оставить заявку</button>
                    </div>
                  </div>
                </div>
                <div class="services__advantages">
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/nano.png')" 
                        alt="Дизайн до мелочей" />
                      <p>Дизайн, продуманный до мелочей</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/girl.png')" 
                        alt="Красивый и продающий" />
                      <p>Не просто красивый, а еще и продающий</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/picture.png')" 
                        alt="От дизайна групп до фирменного стиля" />
                      <p>От дизайна групп до фирменного стиля</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/tablet-pen.png')" 
                        alt="Готовы к правкам" />
                      <p>Не делаем как Артем Лебедев. Готовы к правкам</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <article class="services__block" id="service-development">
            <div itemscope itemtype="http://schema.org/Offer">
              <div class="services__bcg">
                <div class="bcg-balls services__bcg-2">
                  <div class="bcg-ball bcg-ball--1"></div>
                  <div class="bcg-ball bcg-ball--2"></div>
                  <div class="bcg-ball bcg-ball--3"></div>
                  <div class="bcg-ball bcg-ball--4"></div>
                  <p>Development</p>
                </div>
                <div class="bcg-fill">
                  <div class="bcg-fill--1"></div>
                  <div class="bcg-fill--2"></div>
                  <p itemprop="name">Development</p>
                </div>
              </div>
              <div class="services__content">
                <div class="services__body">
                  <div class="services__description" itemprop="description">
                    <h3>Разработка сайта</h3>
                    <p class="text__p">Сайт представляет визитную карточку компании, является 
                      элементом коммуникации с потребителем. Для обеспечения устойчивого роста 
                      и успеха вашего бизнеса, рекомендуемым шагом является выход в онлайн-среду.</p>
                    <p class="text__p">Качествено выполненный сайт решает следующие задачи:</p>
                    <ul class="text__ul">
                      <li>продвигает и поддерживает имидж компании;</li>
                      <li>педоставляет подробную информацию о товарах/услугах фирмы;</li>
                      <li>обеспечивает качественную рекламу компании в интернете;</li>
                      <li>привлекает новых клиентов, партнеров, поставщиков;</li>
                      <li>создает возможность продажи услуг/товаров через сайт компании;</li>
                    </ul>
                    <p class="services__price"
                      data-aos="zoom-in"
                      data-aos-once="false"
                      itemprop="price"
                    >от 8 000 рублей</p>
                    <div class="services__btn">
                      <button class="btn-1 btn--green"
                        data-service="Разработка сайта"
                        @click="openModalRecord"
                      >Оставить заявку</button>
                    </div>
                  </div>
                  <div class="services__img services--dev">
                    <img v-lazy="require('./assets/images/service-pc.png')" 
                        alt="Разработка сайта" />
                  </div>
                </div>
                <div class="services__advantages">
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/project-management.png')" 
                        alt="Инновационный подход" />
                      <p>Инновационный подход</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/wall.png')" 
                        alt="Надежность" />
                      <p>Надежность</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/teacher.png')" 
                        alt="Обучение" />
                      <p>Обучение</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/guarantee.png')" 
                        alt="Гарантия" />
                      <p>Гарантия</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/punctual.png')" 
                        alt="Персональный менеджер" />
                      <p>Персональный менеджер</p>
                    </div>
                  </div>
                  <div class="services__advantage"
                    data-aos="flip-right"
                    data-aos-once="false"
                  >
                    <div>
                      <img v-lazy="require('./assets/images/icon/briefcase.png')" 
                        alt="Более 30 выполненных работ" />
                      <p>Более 30 выполненных работ</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>

      </div>
    </section>

    <section class="advantages">
      <div class="container">
        <div class="caption">
          <h2>Преимущества</h2>
          <h3>мы не боимся трудностей</h3>
        </div>
        <div class="advantages__body">
          <div class="advantages__img">
            <div class="advantages__bcg">
              <div class="advantages__bcg--1"
                data-aos="fade-down"
                data-aos-once="false"
              ></div>
              <div class="advantages__bcg--2"
                data-aos="fade-up"
                data-aos-once="false"
              ></div>
              <div class="advantages__bcg--3"
                data-aos="fade-right"
                data-aos-once="false"
              ></div>
              <div class="advantages__bcg--4"
                data-aos="fade-left"
                data-aos-once="false"
              ></div>
              <div class="advantages__bcg--5"
                data-aos="fade-right"
                data-aos-once="false"
              ></div>
              <div class="advantages__bcg--6"
                data-aos="fade-up"
                data-aos-once="false"
              ></div>
            </div>
            <img v-lazy="require('./assets/images/peoples.png')" 
              alt="Преимущества" />
          </div>
          <div class="advantages__blocks">
            <div class="advantages__block"
              data-aos="fade-left"
              data-aos-once="false"
            >
              <h3>Удобство</h3>
              <p>Красота и удобство разработок</p>
            </div>
            <div class="advantages__block"
              data-aos="fade-left"
              data-aos-once="false"
            >
              <h3>Эффективность</h3>
              <p>Проверенные и эффективные методы раскрутки</p>
            </div>
            <div class="advantages__block"
              data-aos="fade-left"
              data-aos-once="false"
            >
              <h3>Уникальность</h3>
              <p>Уникальность создания и разработки</p>
            </div>
            <div class="advantages__block"
              data-aos="fade-left"
              data-aos-once="false"
            >
              <h3>Индивидуальность</h3>
              <p>Индивидуальный подход к каждому клиенту</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="clients section__shadow-1">
      <div class="container">
        <div class="caption">
          <h2><strong>К нам</strong> обращались</h2>
          <h3>Наши клиенты лучшие</h3>
        </div>
        <div class="clients__body">
          <div class="clients__figures" ref="scrollNumber">
            <div class="clients__figure">
              <p>больше</p>
              <p><strong class="number" data-num="100">100</strong> клиентов</p>
            </div>
            <div class="clients__figure">
              <p>больше</p>
              <p><strong class="number" data-num="200">200</strong> проектов</p>
            </div>
          </div>
          <div class="clients__logos">
            <div>
              <img v-lazy="require('./assets/images/logos/colt.jpg')" 
                alt="colt" />
            </div>
            <div>
              <img v-lazy="require('./assets/images/logos/masaj.jpg')" 
                alt="masaj" />
            </div>
            <div>
              <img v-lazy="require('./assets/images/logos/likato.jpg')" 
                alt="likato" />
            </div>
            <div>
              <img v-lazy="require('./assets/images/logos/sushi.jpg')" 
                alt="sushi" />
            </div>
            <div>
              <img v-lazy="require('./assets/images/logos/volga.jpg')" 
                alt="volga" />
            </div>
            <div>
              <img v-lazy="require('./assets/images/logos/playhard.jpg')" 
                alt="playhard" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="reviews">
      <div class="container">
        <div class="caption">
          <h2><strong>О нас</strong> говорят</h2>
        </div>
        <div class="reviews__blocks">
          <article class="reviews__block" 
            itemprop="review" itemscope itemtype="http://schema.org/Review">
            <div class="reviews__block__img">
              <img src="https://sun1-98.userapi.com/K8YBZveg2b4bnWn9xl3bmAyDiwTpRWFPw5dPIQ/1dzeVDmQeok.jpg?ava=1" alt="Никита Кузин" />
            </div>
            <div>
              <h4 class="reviews__block__name" itemprop="author">Никита Кузин</h4>
              <p itemprop="reviewBody">Digital-агентство TIRAX.PRO, спасибо за Вашу отличную работу ! Думаю, мы еще потеребим Самару))</p>
              <p class="reviews__block__date" 
                itemprop="datePublished" datetime="2020-04-09T17:13">9 апр 2020 в 17:13</p>
            </div>
          </article>
          <article class="reviews__block" 
            itemprop="review" itemscope itemtype="http://schema.org/Review">
            <div class="reviews__block__img">
              <img src="https://sun9-29.userapi.com/c850636/v850636921/1ec241/fKWB0aI6c5U.jpg?ava=1" alt="Алим Нахушев" />
            </div>
            <div>
              <h4 class="reviews__block__name" itemprop="author">Алим Нахушев</h4>
              <p itemprop="reviewBody">Нам создали группу в вк и Инстаграм, настроили и отрегулировали 
                эффективный таргетинг по приемлемой цене. Всячески участвовали в развитии 
                сообщества и помогали даже сверх своих оплаченных обязанностей.
                Ребята молодцы, по части ВК уж точно, мы определенно добились чего хотели. 
                И о нас узнал весь город в первую очередь благодаря их хорошему старту.</p>
              <p class="reviews__block__date"
                itemprop="datePublished" datetime="2020-04-11T15:51"
              >11 апр 2020 в 15:51</p>
            </div>
          </article>
        </div>

        <div class="reviews__btn">
          <a 
            href="https://vk.com/topic-154476999_40731544" 
            class="btn-1 btn--white"
            target="_blank"
          >Больше отзывов</a>
        </div>

        <div class="bcg-balls reviews__bcg">
          <div class="bcg-ball bcg-ball--1"></div>
          <div class="bcg-ball bcg-ball--2"></div>
          <div class="bcg-ball bcg-ball--3"></div>
          <div class="bcg-ball bcg-ball--4"></div>
        </div>
      </div>
    </section>

    <section class="contact section__shadow-1" id="contacts">
      <div class="container">
        <div class="contact_body">
          <div class="contact__form">
            <div>
              <h3 class="caption__h3"><strong>Хотите</strong> ежемесячно получать <strong>новых 
                клиентов?</strong></h3>            
              <form action="">
                <input type="text" name="name" placeholder="Имя" v-model="dataSend.name.value">
                <input type="text" name="phone" placeholder="Телефон" v-model="dataSend.phone.value">
                <app-select 
                  :list="servicesList"  
                  @emitselect="onSelectService"
                />
                <input type="text" name="phone" placeholder="Ссылка на группу/сайт" v-model="dataSend.link.value">
                <input type="hidden" name="test"  v-model="dataSend.test.value">

                <p class="form__licenze">Отправляя форму Вы соглашаетесь на обработку персональных данных</p>
                <button class="btn-1 btn--white" type="submit"
                  @click.prevent="send(dataSend)"
                >Отправить</button>
              </form>
            </div>
          </div>
          <div class="contact__map">
            <div class="contact__text" itemscope itemtype="http://schema.org/Organization">
              <h4 itemprop="name">Tirax.pro</h4>
              <p><strong>Тел.:</strong> <a href="tel:+79373720099" 
                itemprop="telephone">+7(937)372-00-99</a></p>
              <p><strong>E-mail:</strong> <a href="mailto:s.admin@tirax.pro" 
                itemprop="email">s.admin@tirax.pro</a></p>
              <p itemprop="address">г. Чебоксары, ул. Н.Смирнова, 7</p>
            </div>
            <div class="contact__ya" ref="map">
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" itemtype="http://schema.org/WPFooter">
      <div class="container">
        <p>© Digital-агенство TIRAX.PRO г. Чебоксары 
          <span itemprop="copyrightYear">2020</span> г.</p>
      </div>
    </footer>

    <div class="link-fix">
      <a href="https://wa.me/89373720099"
        class="link-fix__btn btn__wup"
      >
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-1 0 511 512" xml:space="preserve">
          <g fill-rule="evenodd"><path d="m255.851562 50c112.46875 0 203.617188 91.152344 203.617188 203.621094s-91.148438 203.617187-203.617188 203.617187c-34.277343 0-67.742187-8.480469-97.796874-24.980469l-14.125-7.753906-75.921876 20.519532 20.699219-73.867188-8.609375-14.667969c-18.359375-31.289062-27.867187-66.59375-27.867187-102.867187 0-112.46875 91.152343-203.621094 203.621093-203.621094zm-117.042968 417.320312c34.734375 19.070313 74.621094 29.917969 117.042968 29.917969 134.546876 0 243.617188-109.070312 243.617188-243.617187 0-134.550782-109.070312-243.621094-243.617188-243.621094-134.550781 0-243.621093 109.070312-243.621093 243.621094 0 44.914062 12.167969 86.984375 33.371093 123.113281l-35.101562 125.265625zm0 0" fill="#fff"/><path d="m459.46875 253.621094c0-112.46875-91.148438-203.621094-203.617188-203.621094s-203.621093 91.152344-203.621093 203.621094c0 36.273437 9.507812 71.578125 27.871093 102.867187l8.605469 14.667969-20.699219 73.867188 75.921876-20.519532 14.128906 7.753906c30.050781 16.5 63.515625 24.980469 97.792968 24.980469 112.46875 0 203.617188-91.148437 203.617188-203.617187zm-261.710938-10.386719c9.160157 15.867187 25.152344 33.699219 39.933594 45.144531 17.855469 13.824219 45.863282 31.988282 54.96875 23.933594 4.296875-3.800781 16.121094-20.933594 17.695313-22.15625 1.578125-1.226562 6.824219-9.988281 19.210937-3.984375 12.382813 6.007813 43.28125 21.335937 43.28125 21.335937s6.695313 2.703126 6.410156 13.195313c-.28125 10.488281-.738281 13.175781-.738281 13.175781s-4.488281 35.972656-53.589843 37.40625c-22.226563.648438-47.964844-8.414062-70.769532-20.046875-38.925781-19.847656-63.238281-41.785156-89.238281-75.90625-17.65625-23.167969-35.292969-53.609375-32.175781-80.667969 5.410156-46.949218 35.265625-51.277343 35.265625-51.277343s2.703125-.324219 13.199219-.109375c10.492187.214844 12.871093 7.03125 12.871093 7.03125s14.496094 33.105468 19.90625 45.761718c5.410157 12.65625-.433593 18.171876-1.730469 19.6875-1.296874 1.515626-9.085937 10.710938-13.089843 14.820313-4.003907 4.109375-3.050781 9.808594-1.410157 12.65625zm0 0" fill="#2bb140"/><path d="m213.984375 196.066406c-5.40625-12.65625-19.902344-45.757812-19.902344-45.757812s-2.378906-6.816406-12.875-7.03125c-10.492187-.214844-13.199219.109375-13.199219.109375s-29.855468 4.328125-35.265624 51.277343c-3.117188 27.058594 14.519531 57.496094 32.175781 80.667969 26.003906 34.121094 50.316406 56.058594 89.238281 75.90625 22.808594 11.628907 48.546875 20.695313 70.773438 20.046875 49.101562-1.433594 53.589843-37.40625 53.589843-37.40625s.453125-2.6875.738281-13.179687c.285157-10.488281-6.410156-13.191407-6.410156-13.191407s-30.898437-15.328124-43.285156-21.335937c-12.382812-6.007813-17.632812 2.757813-19.207031 3.980469-1.574219 1.226562-13.402344 18.359375-17.699219 22.160156-9.101562 8.054688-37.113281-10.109375-54.96875-23.933594-14.777344-11.445312-30.769531-29.277344-39.929688-45.144531-1.644531-2.847656-2.597656-8.546875 1.40625-12.660156 4.003907-4.109375 11.792969-13.304688 13.089844-14.816407 1.300782-1.515624 7.140625-7.03125 1.730469-19.691406zm0 0" fill="#fff"/></g><path d="m435.1875 74.28125c-47.902344-47.898438-111.59375-74.28125-179.335938-74.28125-53.28125 0-104.277343 16.34375-147.472656 47.269531-4.492187 3.214844-5.527344 9.460938-2.3125 13.953125 3.21875 4.492188 9.464844 5.523438 13.953125 2.308594 39.78125-28.476562 86.75-43.53125 135.832031-43.53125 128.816407 0 233.617188 104.800781 233.617188 233.621094 0 128.816406-104.800781 233.617187-233.617188 233.617187-39.242187 0-78.050781-9.917969-112.230468-28.683593-2.269532-1.242188-4.929688-1.558594-7.421875-.886719l-111.320313 30.085937 30.351563-108.320312c.734375-2.617188.371093-5.417969-1.003907-7.757813-20.933593-35.671875-31.996093-76.492187-31.996093-118.054687 0-49.085938 15.054687-96.054688 43.53125-135.832032 3.214843-4.488281 2.179687-10.734374-2.308594-13.949218-4.492187-3.214844-10.738281-2.183594-13.953125 2.308594-30.925781 43.191406-47.269531 94.1875-47.269531 147.472656 0 43.683594 11.261719 86.617187 32.609375 124.460937l-33.96875 121.21875c-.972656 3.464844-.003906 7.183594 2.523437 9.738281 1.90625 1.917969 4.472657 2.960938 7.105469 2.960938.871094 0 1.746094-.113281 2.609375-.347656l124.464844-33.636719c36.238281 19.128906 77.042969 29.222656 118.273437 29.222656 67.746094 0 131.4375-26.378906 179.335938-74.285156 47.902344-47.898437 74.285156-111.589844 74.285156-179.335937 0-67.742188-26.378906-131.429688-74.28125-179.335938zm0 0"/><path d="m419.769531 374.839844c4.59375 3.066406 10.804688 1.828125 13.871094-2.765625 23.4375-35.117188 35.828125-76.078125 35.828125-118.457031 0-57.0625-22.21875-110.710938-62.5625-151.054688s-93.988281-62.5625-151.054688-62.5625c-57.066406 0-110.714843 22.21875-151.058593 62.5625s-62.5625 93.992188-62.5625 151.058594c0 38.007812 10.113281 75.328125 29.246093 107.929687l6.453126 11-19.550782 69.773438c-.972656 3.460937-.007812 7.179687 2.523438 9.734375 2.53125 2.554687 6.242187 3.554687 9.714844 2.617187l72.03125-19.46875 10.59375 5.816407c31.242187 17.152343 66.722656 26.214843 102.605468 26.214843 42.382813 0 83.34375-12.390625 118.457032-35.832031 4.59375-3.0625 5.832031-9.273438 2.765624-13.867188-3.066406-4.59375-9.273437-5.832031-13.867187-2.765624-31.816406 21.238281-68.9375 32.464843-107.355469 32.464843-32.527344 0-64.679687-8.210937-92.980468-23.746093l-14.125-7.757813c-2.265626-1.242187-4.925782-1.558594-7.421876-.886719l-58.9375 15.929688 15.953126-56.925782c.730468-2.617187.371093-5.417968-1.003907-7.757812l-8.609375-14.667969c-17.332031-29.535156-26.492187-63.355469-26.492187-97.808593 0-106.761719 86.859375-193.617188 193.621093-193.617188 106.761719 0 193.617188 86.855469 193.617188 193.621094 0 38.410156-11.226562 75.53125-32.464844 107.351562-3.066406 4.59375-1.828125 10.800782 2.765625 13.867188zm0 0"/><path d="m219.304688 222.902344.660156-.769532c8.957031-10.054687 6.695312-21.863281 3.21875-29.996093-5.136719-12.011719-18.574219-42.714844-19.847656-45.621094-1.984376-5.015625-8.605469-12.960937-21.921876-13.238281-10.382812-.210938-13.796874.082031-14.59375.179687-.082031.007813-.164062.019531-.242187.03125-1.53125.222657-37.546875 6.050781-43.765625 60.03125-2.859375 24.816407 8.632812 54.378907 34.15625 87.875 28.257812 37.082031 54.234375 59.164063 92.648438 78.75 19.128906 9.753907 47.070312 21.171875 73.082031 21.171875.84375 0 1.6875-.011718 2.523437-.039062 29.214844-.851563 44.816406-12.992188 52.757813-23.027344 8.429687-10.652344 10.191406-21.148438 10.445312-22.96875.167969-1.15625.574219-4.804688.832031-14.308594.359376-13.316406-7.265624-20.308594-12.179687-22.53125-2.777344-1.378906-31.410156-15.574218-43.148437-21.265625-7.925782-3.847656-19.578126-6.042969-30.066407 5.335938-.054687.058593-.105469.117187-.15625.167969-1.417969 1.238281-2.820312 3.085937-7.082031 8.789062-2.625 3.511719-7.863281 10.519531-10.089844 12.859375-4.703125.332031-20.429687-6.59375-42.722656-23.855469-14.050781-10.882812-29.054688-27.824218-37.355469-42.175781-.082031-.203125-.132812-.574219-.109375-.761719 3.441406-3.539062 9.042969-10.042968 12.957032-14.632812zm12.261718 73.382812c6.664063 5.160156 19.730469 14.773438 32.363282 21.183594 5.972656 3.027344 24.148437 12.25 35.355468 2.332031 3.09375-2.738281 7.488282-8.507812 13.355469-16.359375 1.691406-2.261718 3.769531-5.039062 4.574219-6 .523437-.476562.957031-.945312 1.351562-1.375 1.800782-1.953125 2.621094-2.84375 6.632813-.898437 12.046875 5.84375 42.101562 20.75 43.179687 21.28125.371094.371093.949219 1.578125.882813 3.980469-.222657 8.289062-.546875 11.285156-.613281 11.847656-.042969.207031-.023438.082031-.046876.308594-.117187.679687-1.375 7.382812-6.886718 13.964843-7.773438 9.289063-20.246094 14.246094-37.074219 14.734375-22.5.667969-48.269531-9.945312-65.941406-18.957031-35.953125-18.335937-59.214844-38.136719-85.828125-73.058594-21.96875-28.828125-32.410156-54.234375-30.195313-73.464843 4.171875-36.207032 24.015625-41.894532 26.675781-42.496094.9375-.058594 4.109376-.191406 11.648438-.035156 2.402344.050781 3.578125.6875 3.933594 1.074218.496094 1.132813 14.59375 33.335938 19.855468 45.648438 2.628907 6.152344 1.015626 7.964844.238282 8.835937-.140625.15625-.261719.296875-.367188.414063l-.574218.675781c-5.777344 6.769531-9.84375 11.375-12.085938 13.675781-7.382812 7.585938-6.683594 18.085938-2.902344 24.632813 9.617188 16.664062 26.289063 35.523437 42.46875 48.054687zm0 0"/><path d="m83.585938 91.351562c2.402343 0 4.8125-.859374 6.726562-2.601562 4.085938-3.714844 4.390625-10.039062.675781-14.125-3.71875-4.085938-10.039062-4.386719-14.128906-.671875l-.003906.003906c-4.085938 3.714844-4.382813 10.035157-.667969 14.125 1.972656 2.167969 4.679688 3.269531 7.398438 3.269531zm0 0"/><path d="m392.433594 390.871094-.003906.007812c-3.714844 4.085938-3.410157 10.40625.675781 14.121094 1.914062 1.742188 4.320312 2.601562 6.722656 2.601562 2.71875 0 5.429687-1.105468 7.402344-3.277343 3.71875-4.085938 3.414062-10.410157-.671875-14.125-4.085938-3.714844-10.410156-3.414063-14.125.671875zm0 0"/>
        </svg>
      </a>
    </div>

    <transition name="modal">
      <app-record 
        v-if="modalRecord"
        :loading="loading"
        :service="selectService"
        @emitclosemodal="closeModalRecord"
        @emitsend="send"
      />
    </transition>

    <transition name="modal">
      <div
        v-if="alertShow"
        class="alert"
        @click.stop="closeAlert"
      >
        <div>
          <article 
            class="alert__body"
            v-for="(alert, idx) in alertData"
            :key="idx"
            @click.stop="closeAlert(idx)"
          >
            <div class="alert__img">
              <img src="./assets/images/error.png"
                v-if="alert.type == 'error'"
              />
              <img src="./assets/images/success.png"
                v-else />
            </div>
            <div class="alert__text">
              {{ alert.message }}
            </div>
          </article>
        </div>
      </div>
    </transition>

  </div>
</template>

<script>
export default {
  name: 'Main',
  components: {
    'app-record': () => import('./components/Record.vue'),
    'app-select': () => import('./components/Select.vue')
  },
  data() {
    return {
      TIME: 10000,
      activeGall: 0,
      gallItemList: [],
      headerScroll: false, // Прокуручен ли сайт

      modalRecord: false,

      servicesList: [
        {name: 'SMM', brief: 'smm'},
        {name: 'SEO', brief: 'seo'},
        {name: 'Дизайн', brief: 'design'},
        {name: 'Разработка сайта', brief: 'development'}
      ],
      dataSend: {
        name: {
          value: '',
        },
        phone: {
          value: '',
          error: false
        },
        link: {
          value: ''
        },
        course: {
          value: ''
        },
        test: {
          value: ''
        },
      },
      selectService: null,
      loading: false,

      alertShow: false,
      alertData: [],

      menu: false
    }
  },
  mounted() {
    this.init();
  },
  methods: {
    init() {
      this.scrollWindow();
      this.scrollNavBar();
      this.loadAnimationNumber();
      this.loadYMap();
      this.initGallery();
    },
    scrollWindow() {
      window.addEventListener('scroll', this.loadAnimationNumber);
      window.addEventListener('scroll', this.loadYMap);
      window.addEventListener('scroll', this.scrollNavBar);
    },
    loadAnimationNumber() {
      let elemNumber = this.$refs.scrollNumber;
      const h1 = 300;
      const h2 = -300;
      const time = 2;

      if (!elemNumber) 
        return;
      
      let aPos = elemNumber.scrollTop + elemNumber.getBoundingClientRect().top;

      if (aPos < h1 && aPos > h2) { 
        window.removeEventListener('scroll', this.loadAnimationNumber);
      } else {
        return;
      }

      let numbers = elemNumber.querySelectorAll('.number');
      
      numbers.forEach(number => {
        let num = Number(number.dataset.num);
        let i = 1;
        let step = 1000 * time / num;
        let int;
        let stepI = Math.ceil(num / 400);

        if (!num)
          return;

        int = setInterval(() => {
          if (i + stepI < num) {
            number.innerHTML = i;
          } else {
            number.innerHTML = num;
            clearInterval(int);
          }
          i += stepI;
        }, step);
      });
    },
    scrollNavBar() {
      if (window.pageYOffset > 100) 
        this.headerScroll = true;
      else 
        this.headerScroll = false;
    },
    loadYMap() {
      let elemMap = this.$refs.map;
      const h1 = 300;
      const h2 = -300;

      if (!elemMap) 
        return;
      
      let aPos = elemMap.scrollTop + elemMap.getBoundingClientRect().top;

      if (aPos < h1 && aPos > h2) { 
        window.removeEventListener('scroll', this.loadYMap);
      } else {
        return;
      }
      
      this.$refs['map'].innerHTML = '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aed4ffd443d17ef450afc077968bf47d9b9097fbe2731d664364cbaf56b472b9f&amp;source=constructor" width="100%" height="100%" frameborder="0" />';
    },

    initGallery() {
      this.gallItemList = this.$refs['mainGallery'].querySelectorAll('.main__img__item');
      this.gallItemList[this.activeGall].classList.add('active');

      setTimeout(() => {
        this.gallControl();
      }, this.TIME);
    },
    gallControl() {
      let oldGall = this.activeGall;
      let activeGall = (this.activeGall + 1 <= this.gallItemList.length - 1) 
        ? this.activeGall + 1
        : 0;

      this.gallItemList[oldGall].classList.remove('active');
      this.gallItemList[activeGall].classList.add('active');
      this.activeGall = activeGall;

      setTimeout(() => {
        this.gallControl();
      }, this.TIME);
    },

    onSelectService(value) {
      this.dataSend['service'] = {value: value.name};
    },

    // Мдальные окна
    openModalRecord(e) {
      let target = e.target
      let service = target.dataset.service;

      if (service) 
        this.selectService = service;
      else
        this.selectService = null;
      
      this.modalRecord = true;
    },
    closeModalRecord() {
      this.selectService = null;
      this.modalRecord = false;
    },

    /*Меню перемещение*/
    moveLink(link) {
      if (!link) return;

      this.menu = false;

      link = '#' + link;
      let w = window.pageYOffset;
      let t = document.querySelector(link).getBoundingClientRect().top;

      window.scrollTo(0, w + t);
    },

    send(data) {
      this.loading = true;
      let resRequired = this.checkRequired(data);
      let dataSend = {};

      if (!resRequired) {
        this.loading = false;

        return;
      }

      let body = '';

      for (let name in data) {
        if (data[name].value) {
          dataSend[name] = data[name].value;

          body += (body)
            ? ('&' + name + '=' + encodeURIComponent(data[name].value))
            : (name + '=' + encodeURIComponent(data[name].value));
        }
      }

      if (window.ym)
        window.ym(64748545,'reachGoal','CEL');

      let xhr = new XMLHttpRequest();

      xhr.open('POST', window.location.href + 'scripts/mail.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
      xhr.onreadystatechange = () => { 
        if (xhr.readyState !== 4) return; 

        if (xhr.status === 200) {
          this.alertMessage({
            message: 'Заявка успешно отправлена',
            type: 'success'
          });
          this.loading = false;
        } else {
          console.log('HTTP error', xhr.status, xhr.statusText);
          this.alertMessage({
            message: 'Произошла ошибка. Попробуйте позже',
            type: 'error'
          });
          this.loading = false;
        }
      };
      xhr.send(body);
    },
    checkRequired(data) {
      let success = true;
      let require = {
        phone: (value) => {
          let phone = value.match(/\d/g);
          
          if (!phone) {
            this.alertMessage({
              message: 'Введите номер телефона',
              type: 'error'
            });
            success = false;
            this.dataSend.phone.error = true;
          } else if (phone.length < 6) {
            this.alertMessage({
              message: 'Введите номер телефона правильно',
              type: 'error'
            });
            success = false;
            this.dataSend.phone.error = true;
          }
        }
      };

      for(let input in data) {
        if (require[input])
          require[input](data[input].value);
      }

      return success;
    },

    alertMessage(data){
      this.alertShow = true;
      this.alertData.push(data);
      
      setTimeout(() => {
        if (this.alertShow) {
          this.alertShow = false;
          this.alertData = [];
        }
      }, 5000);
    },

    closeAlert(idx) {
      let length = this.alertData.length;

      if (!length) {
        this.alertShow = false;

        return;
      }
      if (length === 1) 
        this.alertShow = false;
      
      if (idx + 1)
        this.alertData.splice(idx, 1)
      else
        this.alertData.pop();
    },

    toggleMenu() {
      console.log('open');
      this.menu = !this.menu;
    },
  }
}
</script>

<style lang="less">
  @import "./assets/style/style.less";
</style>



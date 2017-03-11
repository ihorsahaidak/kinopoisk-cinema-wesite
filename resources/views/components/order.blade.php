<span id="section3"></span>
<div class="hall movie-h1-cont" id="hall">
    <div class="order-head">
        <div class="container">
            <div class="col-md-12">
                <h1>Зарезервувати місце</h1>
            </div>
        </div>
    </div>


    <!-- Высота wrapper это высота зала плюс, его pagging 50px сверху 10px снизу   -->
    <div class="hall__wrapper" style="height: 400px; /*background-image: url('files/shot.png'}})*/">
        <div class="hall__box" style="width: 260px;">
            <div class="hall__screen">
                <span class="hall__screen-tip _left">Екран</span>
                <div class="hall__screen-cloth"></div>
                <span class="hall__screen-tip _right">Екран</span>
            </div>
            <div class="hall_places">
                @for($i = 1; $i <= 16; $i++)

                    <span class="hall__row">
                            <!-- Левая метка метка -->
                        <!-- Дублирует data-row data-trubune и top в стилях -->
                        <!-- Атрибут data-row выводится контекстом, data-trubune не используется, но мб понадобится для чего то-->
                            <div class="hall__places-row _left" data-row="{{$i}}" data-tribune="3"
                                 style="top: {{$i*20}}px"></div>
                        @if($i>5)
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="1" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="1" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 40px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top">1</div>
                            </div>
                        @endif
                        @if($i>2)
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="1" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="2" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 60px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top">2</div>
                            </div>
                        @endif
                        <div class="hall__places-item is-free" data-row="{{$i}}" data-column="2" data-sector="Б"
                             data-tribune="3" data-price-id="3" data-pos-x="3" data-pos-y="{{$i}}" data-state="free"
                             data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                             data-show-id="2821" data-place-size="20" style="left: 80px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top">3</div>
                            </div>
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="3" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="4" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 100px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 4</div>
                            </div>
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="4" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="5" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 120px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 5</div>
                            </div>
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="5" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="6" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 140px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 6</div>
                            </div>
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="6" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="7" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 160px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 7</div>
                            </div>
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="7" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="8" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 180px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 8</div>
                            </div>
                        @if($i>2)
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="8" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="9" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 200px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 9</div>
                            </div>
                        @endif
                        @if($i>5)
                            <div class="hall__places-item is-free" data-row="{{$i}}" data-column="9" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="10" data-pos-y="{{$i}}"
                                 data-state="free" data-price="60" data-id="387686" data-building-id="6397"
                                 data-hall-id="6398" data-show-id="2821" data-place-size="20"
                                 style="left: 220px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 10</div>
                            </div>
                    @endif
                    <!-- Правая метка -->
                        <div class="hall__places-row _right" data-row="{{$i}}" data-tribune="3"
                             style="top: {{$i*20}}px"></div>
                        </span>
                @endfor


            </div>
        </div>
        <div class="hall__box _lines">
            @for($i = 1; $i <= 16; $i++)
                <div class="hall__line" id="hallLine_{{$i}}_3" style="top: {{$i*20}}px"></div>
            @endfor

        </div>
    </div>
    <div class="hall-info">
        <div class="hall-info__title">

        </div>
        <div class="hall-info__legend is-dark">
            <div class="hall-info__story is-free">
                <div class="hall-info__story-pointer"></div>
                <div class="hall-info__story-descr">Місце вільне</div>
            </div>
            <div class="hall-info__story is-busy">
                <div class="hall-info__story-pointer"></div>
                <div class="hall-info__story-descr">Місце зайнято</div>
            </div>
            <div class="hall-info__story is-checked">
                <div class="hall-info__story-pointer"></div>
                <div class="hall-info__story-descr">Місце выбрано</div>
            </div>
        </div>
    </div>
</div>
<div class="hall-buy">
    <div class="hall-buy__no-data col-xs-12 col-md-8" id='hallNoData'>
        Виберіть місця
    </div>
    <div class="hall-buy__data hidden col-xs-12 col-md-8" id='hallData'>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 hall-buy__overall">
                Разом
                <br \>
                <span class="hall-buy__overall-count" id='hallCountTickets'>0 билетов</span>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 hall-buy__places" id='hallPlaces'>
                <!-- <div class="hall-buy__places-row">
                                <div class="hall-buy__places-row-num">
                                    ряд <span class="hall-buy__places-row-value">7</span>
                                </div>
                                <div class="hall-buy__places-row-num">
                                    место <span class="hall-buy__places-row-value">7</span>
                                </div>
                            </div> -->
            </div>
        </div>
    </div>
    <div class="hall-buy__btns col-xs-12 col-md-4">
        <div class="hall-buy__cost">
            <div class="hall-buy__cost-value">
                Разом <span class="hall-buy__cost-total" id='hallTotalSum'>0 грн</span>
            </div>
            <div class="hall-buy__cost-tax">
                Знижка <span class="hall-buy__cost-tax-total">0 грн</span>
            </div>
        </div>
        <a href="#section4" id="link4" class="hall-buy__btn-buy ">
            Зарезервувати
        </a>
    </div>
</div>
</div>
<div class="col-xs-12" style="background-image: url({{asset('files/bg.jpg')}}); background-size:cover;" id="section4">

    <div class="ticket-form row">
        <form action="#" class="ticket-form__form col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 ticket-form__info">
                    <div class="ticket-form__timer">
                        <span id="ticketTimer"></span>
                    </div>
                    <div class="ticket-form__data">
                        <div class="ticket-form__date">
                            <br>
                        </div>
                        <div class="ticket-form__cinema">
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="ticket-form__film-title">

                        Виберіть фільм
                    </div>
                    <div class="ticket-form__places">

                    </div>
                </div>
                <div class="ticket-form__fields col-xs-12 col-sm-6 col-md-5">
                    <div class="form-group ticket-form__form-group">
                        <input type="tel" class="ticket-form__input" placeholder="Ім'я Прізвище">
                    </div>
                    <div class="form-group ticket-form__form-group">
                        <input type="tel" class="ticket-form__input" placeholder="Телефон">
                    </div>
                    <div class="form-group ticket-form__form-group">
                        <select name="movie" id="check-movie" class="ticket-form__select">
                            <option value="" disabled selected>Фильм</option>
                            <option value="1">Ла ла ленд</option>
                            <option value="4">Lgan</option>
                            <option value="3">Ex machine</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="ticket-form__form-bottom row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 ticket-form__offer">
                    Бронь знімається за 30 хв до початку сеансу!
                    <br/> <a href="#" class="ticket-form__offer-link"> <span
                                class="glyphicon glyphicon-hd-video"></span><span> Киномания</span> +380(98) 765 43 21
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 ">
                    <button class="ticket-form__btn">Резервувати</button>
                    <div class="ticket-form__total" id="common-price">

                    </div>
                </div>
            </div>
        </form>
        <div class="col-xs-12 ticket-form__timeout hidden" id="timeoutPopUp">
            <div class="ticket-form__timeout-message">
                <div class="ticket-form__timeout-message-title">Начните покупку заново</div>
                <div class="ticket-form__timeout-message-descr">Истекло время отведенное на завершение оплаты</div>
                <button class="ticket-form__timeout-btn">Начать заново</button>
            </div>
        </div>
    </div>
</div>
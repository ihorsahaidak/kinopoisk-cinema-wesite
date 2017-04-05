<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Киномания</title>

    <link rel="shortcut icon" type="image/ico" href="{{asset("files/favicon.ico")}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel='stylesheet prefetch'
          href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css")}}'>
    <link rel='stylesheet prefetch' href='{{asset("https://raw.githubusercontent.com/jaredreich/notie/master/dist/notie.css")}}'>
    <link rel='stylesheet prefetch'
          href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.6/select2-bootstrap.min.css")}}'>
    <link rel='stylesheet prefetch' href='{{asset("https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css")}}'>

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>



<div class="col-xs-12" style="padding: 0;" id="order-place-form">
    <span id="section3"></span>
    <div class="hall movie-h1-cont" id="hall">
        <div class="order-head">
            <div class="container">
                <div class="col-md-12">
                    <h1>Бронювати місця на фільм <em>"{{$movie->name ?? ''}}"</em> на <em>{{str_replace('/', '.', $_GET['date'])}}</em></h1>
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

                                <div class="{{$booking_arr->booking_arr[$i][1] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="1" data-sector="Б"
                                     data-tribune="3" data-price-id="3" data-pos-x="1" data-pos-y="{{$i}}" data-state="free"
                                     data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                     data-show-id="2821" data-place-size="20" style="left: 40px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top">1 </div>
                            </div>

                                <div class="{{$booking_arr->booking_arr[$i][2] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="1" data-sector="Б"
                                     data-tribune="3" data-price-id="3" data-pos-x="2" data-pos-y="{{$i}}" data-state="free"
                                     data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                     data-show-id="2821" data-place-size="20" style="left: 60px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top">2</div>
                            </div>

                            <div class="{{$booking_arr->booking_arr[$i][3] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="2" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="3" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 80px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top">3</div>
                            </div>
                            <div class="{{$booking_arr->booking_arr[$i][4] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="3" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="4" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 100px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 4</div>
                            </div>
                            <div class="{{$booking_arr->booking_arr[$i][5] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="4" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="5" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 120px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 5</div>
                            </div>
                            <div class="{{$booking_arr->booking_arr[$i][6] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="5" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="6" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 140px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 6</div>
                            </div>
                            <div class="{{$booking_arr->booking_arr[$i][7] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="6" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="7" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 160px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 7</div>
                            </div>
                            <div class="{{$booking_arr->booking_arr[$i][8] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="7" data-sector="Б"
                                 data-tribune="3" data-price-id="3" data-pos-x="8" data-pos-y="{{$i}}" data-state="free"
                                 data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                 data-show-id="2821" data-place-size="20" style="left: 180px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 8</div>
                            </div>

                                <div class="{{$booking_arr->booking_arr[$i][9] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="8" data-sector="Б"
                                     data-tribune="3" data-price-id="3" data-pos-x="9" data-pos-y="{{$i}}" data-state="free"
                                     data-price="60" data-id="387686" data-building-id="6397" data-hall-id="6398"
                                     data-show-id="2821" data-place-size="20" style="left: 200px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 9</div>
                            </div>

                                <div class="{{$booking_arr->booking_arr[$i][10] == 0 ? 'hall__places-item is-free' : 'hall__places-item is-busy'}}" data-row="{{$i}}" data-column="9" data-sector="Б"
                                     data-tribune="3" data-price-id="3" data-pos-x="10" data-pos-y="{{$i}}"
                                     data-state="free" data-price="60" data-id="387686" data-building-id="6397"
                                     data-hall-id="6398" data-show-id="2821" data-place-size="20"
                                     style="left: 220px;top: {{$i*20}}px">
                                <div class="hall__places-chair" data-title="60 грн." data-toggle="tooltip"
                                     data-placement="top"> 10</div>
                            </div>

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
        <a href="{{route('real')}}" target="_blank" id="link4" class="hall-buy__btn-buy ">
            Вигляд з місць
        </a>
    </div>
</div>
</div>
<div class="col-xs-12" style="background-image: url({{asset($movie->photo ?? 'files/bg.jpg')}}); background-size:cover;" id="section4">

    <div class="ticket-form row">
        <form action="{{route('order-places')}}"  class="ticket-form__form col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 ticket-form__info">
                    <div class="ticket-form__timer">
                        <span id="ticketTimer"></span>
                    </div>
                    <div class="ticket-form__data">
                        <div class="ticket-form__date">
                            Дата: {{str_replace('/', '.', $_GET['date'])}}
                            <br>
                        </div>
                        <div class="ticket-form__cinema">
                            Час: {{$movie->time ?? ''}}
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="ticket-form__film-title">

                        {{$movie->name ?? ''}}
                    </div>
                    <div class="ticket-form__places">

                    </div>
                </div>
                <br><br><br>
                <div class="ticket-form__fields col-xs-12 col-sm-6 col-md-5">
                    <div class="form-group ticket-form__form-group">
                        <input type="tel" required class="ticket-form__input" name="name" placeholder="Ім'я Прізвище">
                    </div>
                    <div class="form-group ticket-form__form-group">
                        <input type="tel" required class="ticket-form__input" name="phone" placeholder="Телефон">
                    </div>
                    <input type="hidden" name="places-key" id="hiddenJsFromOrderForm">
                    <input type="hidden" name="date" value="{{$_GET['date']}}">
                    <input type="hidden" name="movie_id" value="{{$_GET['movie']}}">
                    <button class="ticket-form__btn" id="seserveId" type="submit">Резервувати</button>

                    <div class="ticket-form__total" id="common-price">

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


<script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js")}}'></script>
<script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js")}}'></script>
<script src='{{asset("js/raw.js")}}'></script>
<script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js")}}'></script>

<script src='{{asset("https://cdn.rawgit.com/gijsroge/tilt.js/38991dd7/dest/tilt.jquery.js")}}'></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>




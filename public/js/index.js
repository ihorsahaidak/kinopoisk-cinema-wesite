$( document ).ready(function() {
    'use strict';

    function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

    $('[data-toggle="tooltip"]').tooltip();
    var HallStorage = {
        totalTickets: 0,
        ticket: {},
        summ: 0
    };

    var HallActions = function () {
        function HallActions(data) {
            _classCallCheck(this, HallActions);

            this.storage = data;
        }

        HallActions.prototype.addTicket = function addTicket(ticket) {
            var id = ticket.row + '-' + ticket.tribune;

            if (id in this.storage.ticket) {
                this.storage.ticket[id].push(ticket);
            } else {
                this.storage.ticket[id] = [];
                this.storage.ticket[id].push(ticket);
            }
            ++this.storage.totalTickets;
            this.storage.summ += ticket.price;
            this.rerender();
            return this;
        };

        HallActions.prototype.removeTicket = function removeTicket(ticket) {
            var id = ticket.row + '-' + ticket.tribune;

            this.storage.ticket[id].splice(this.storage.ticket[id].indexOf(ticket.place), 1);

            if (this.storage.ticket[id].length === 0) {
                delete this.storage.ticket[id];
            }

            --this.storage.totalTickets;
            this.storage.summ -= ticket.price;
            this.rerender();
            return this;
        };

        HallActions.prototype.validate = function validate() {
            if (this.storage.totalTickets >= 6) {
				$(".hall-info__title").text("За раз можна зарезервувати не більше 5 мість!");
                return false;
            } else {
                return true;
            }
        };

        HallActions.prototype._renderRow = function _renderRow(places) {
            //Тут получение шаблона и заполнение переменными
            var string = '<div class="hall-buy__places-row"><div class="hall-buy__places-row-num">ряд <span class="hall-buy__places-row-value">' + places[0].row + '</span></div>';
            var arr = [];
            for (var key in places) {
                arr.push(places[key].place);
            }
            string += '<div class="hall-buy__places-row-num">місце <span class="hall-buy__places-row-value">' + arr.join(', ') + '</span></div></div>';
            return string;
        };

        HallActions.prototype.rerender = function rerender() {
            if (!$.isEmptyObject(this.storage.ticket)) {
                $('#hallNoData').addClass('hidden');
                $('#hallData').removeClass('hidden');
            } else {
                $('#hallNoData').removeClass('hidden');
                $('#hallData').addClass('hidden');
            }

            //Todo сделать окончание
            $('#hallCountTickets').html(this.storage.totalTickets + ' квитків');
            $('#hallTotalSum').html(this.storage.summ + ' грн');
            $('#common-price').html('Квитків: '+this.storage.totalTickets);
            var html = '';
            //А это переделайте на _.template а то на скорую руку лиж бы работало
            for (var ticket in this.storage.ticket) {
                html += this._renderRow(this.storage.ticket[ticket]);
            }
            $('#hallPlaces').html(html);
            $('.ticket-form__places').html(html);
            return this;
        };

        return HallActions;
    }();

    var hall = new HallActions(HallStorage);

    var $hall = $('#hall');
    var $item = $('.hall__places-item', $hall);
    var $itemFree = $('.hall__places-item.is-free', $hall);

// Убирам наведение
    var blur = function blur() {
        $('.hall__line', $hall).removeClass('is-hover');
        $('.hall__row').removeClass('is-dark');
    };

    $item.on('mouseenter', function () {
        blur();
        //Ставим наведение родителям
        $(this).parents('.hall__row').addClass('is-dark');
        var row = $(this).data('row');
        var tribune = $(this).data('tribune');
        $('#hallLine_' + row + '_' + tribune, $hall).addClass('is-hover');
    });

    $item.on('mouseout', blur);

    $itemFree.on('click', function () {
        var ticket = {
            row: $(this).data('row'),
            tribune: $(this).data('tribune'),
            place: $(this).data('pos-x'),
            price: $(this).data('price')
        };
        if ($(this).hasClass('is-checked')) {
            $(this).removeClass('is-checked');
            hall.removeTicket(ticket);
        } else {
            if (!hall.validate()) {
                Notification.requestPermission(function (permission) {
                    var notification = new Notification("Не можна так", { body: 'За один раз можна зарезервувати не більше 5 квитків.', icon: 'https://avatars0.githubusercontent.com/u/9361325?v=3&s=466', dir: 'auto' });
                });
                return false;
            }
            $(this).addClass('is-checked');
            hall.addTicket(ticket);
        }
    });
    hall.rerender();

    var cancelBooking = function cancelBooking() {
        // Делаем еще что то чтобы сбросить бронь
        $('#timeoutPopUp').removeClass('hidden');
    };

    $('select').select2({
        minimumResultsForSearch: -1,
        placeholder: 'Вибріть фільм'
    });
    window.cancelBooking = cancelBooking;



    $('.tilt-poster').tilt({
        scale: 1.05,
        perspective: 100
    })


    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 400);
                return false;
            }
        }
    });


    var box = document.getElementsByClassName("movieBox");
    var hoverBox = document.getElementsByClassName("whiteBox")[0];
    var hoverBoxRates = document.getElementsByClassName("whiteBoxText")[0];
    var Close = document.getElementsByClassName("X")[0];
    Close.addEventListener("click",closeDown,false);
    var info,x,y;
    var read = hoverBox.childNodes[5];
    for(var i = 0; i < box.length; i ++){
        box[i].addEventListener("click",displayMovie,false);
    }
    function displayMovie(){
        var id = this.id;
        var bg = this.className.replace('movieBox ','');
        x = this.offsetLeft;
        y = this.offsetTop - document.body.scrollTop;
        hoverBox.style.transition = "ease 0s";
        read.className = "readNew";
        hoverBox.childNodes[3].innerHTML = this.childNodes[3].innerHTML;
        hoverBox.childNodes[5].childNodes[3].innerHTML = this.childNodes[5].innerHTML;
        var img = document.getElementsByClassName(bg)[0],
            style = img.currentStyle || window.getComputedStyle(img, false),
            bi = style.backgroundImage.slice(4, -1);
        var url = document.getElementsByClassName(bg)[0].style.background;
        bi = style.backgroundImage.slice(4, -1).replace(/"/g, "");
        hoverBox.style.display = "Block";
        hoverBox.style.background = "url(" + bi + ")";
        hoverBox.style.backgroundSize = "cover";
        hoverBox.style.backgroundPosition = "50% 50%";
        hoverBox.style.marginLeft = x + "px";
        hoverBox.style.marginTop = y + "px";
        hoverBox.style.transition = "ease 0s";

        setTimeout(function(){
            document.body.style.overflowY = "hidden";
            hoverBox.style.overflowY = "auto";
            hoverBox.style.transition = "ease 1s";
            hoverBox.style.width = "100vw";
            hoverBox.style.height = "100vh";
            hoverBox.style.marginLeft = 0;
            hoverBox.style.marginTop = 0;
            var text = hoverBox.childNodes[3];
            var rates = hoverBox.childNodes[1];
            var X = hoverBox.childNodes[7];
            console.log(rates.innerHTML);
            text.className = "clicked";
            rates.className = "newRates";
            X.style.opacity = "1";
            var readH1 = read.childNodes[1];
            readH1.innerHTML = text.innerHTML;
        }, 100);
    }
    function closeDown(){
        document.body.style.overflowY = "auto";
        hoverBox.style.marginLeft = x + "px";
        hoverBox.style.overflow = "hidden";
        hoverBox.scrollTop = 0;
        hoverBox.style.marginTop = y + "px";
        hoverBox.style.width = "19vw";
        hoverBox.style.height = "20vw";
        var text = hoverBox.childNodes[3];
        var rates = hoverBox.childNodes[1];
        var X = hoverBox.childNodes[7];
        text.className = "text";
        rates.className = "whiteBoxRates";
        X.style.opacity = "0";
        setTimeout(function(){
            hoverBox.style.display = "none";
        }, 1000);
    }






    $("#check-movie").on("change", function () {
        var dt = new Date();
        var time_curr = dt.getHours() + ":" + dt.getMinutes();

        var curr = $(".pop").find('#'+$("#check-movie option:selected" ).val());
        var img = curr.find('.rates').data('img');
        var time = curr.find('.rates').data('time');
        var name = curr.find(".text").text();

        var start = time_curr;
        var end = time;

        var s = start.split(':');
        var e = end.split(':');

        var min = e[1]-s[1];
        var hour_carry = 0;
        if(min < 0){
            min += 60;
            hour_carry += 1;
        }
        var hour = e[0]-s[0]-hour_carry;

        var diff;
        if(hour > 0){
            diff = hour + " години " + min + ' хвилини';
        }else if(hour < 0){
            diff = 24 + hour + " години " + min + ' хвилини';
        }
        else if(hour == 0){
            diff =  min + ' хвилини';
        }

        $("#ticketTimer").text('Найближчий сеанс через ' + diff);

        $(".ticket-form__film-title").text(name);
       $("#section4").css('background-image', 'url(' + img + ')');
    });

});






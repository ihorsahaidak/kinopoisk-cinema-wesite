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
            if (this.storage.totalTickets >= 5) {
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
            var html = '';
            //А это переделайте на _.template а то на скорую руку лиж бы работало
            for (var ticket in this.storage.ticket) {
                html += this._renderRow(this.storage.ticket[ticket]);
            }
            $('#hallPlaces').html(html);
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
    console.log($item);
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
        placeholder: 'Вибраний фільм'
    });
    window.cancelBooking = cancelBooking;



    $('.tilt-poster').tilt({
        scale: 1.05,
        perspective: 500
    })


    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });


    $(".add_movie").on('click', function () {
        $("html, body").animate({ scrollTop: $(document).height()-1270 }, "slow");
        return false;
    });
});






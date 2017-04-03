<main>
    <div class="title" id="section2">
        <div class="container">
            <div class="col-md-12">
                Бронювати білет
            </div>
        </div>
    </div>
    <div class="col-xs-12" style="background-image: url({{asset('files/bg.jpg')}}); background-size:cover; padding: 0" id="section3">
        <div class="ticket-form row">
            <form action="{{route('order-form')}}" class="ticket-form__form col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 ticket-form__info">
                        <br><br>
                        <div class="ticket-form__timer">
                            <span id="ticketTimer"></span>
                        </div>
                        <div class="ticket-form__data">
                            <div class="ticket-form__date">
                                <br>
                            </div>
                            <div class="ticket-form__cinema">

                                <br>
                            </div>
                        </div>
                        <div class="ticket-form__film-title">

                            Виберіть фільм
                        </div>
                        <div class="ticket-form__places">

                        </div>
                    </div>
                    <br><br>
                    <div class="ticket-form__fields col-xs-12 col-sm-6 col-md-5">
                        <div class="form-group ticket-form__form-group">
                            <select name="movie" id="check-movie" class="ticket-form__select" data-form="{{route('get-movie-times')}}">
                                <option value="" disabled selected>Фильм</option>
                                @foreach($movies as $movie)
                                    <option value="{{$movie->id}}">{{$movie->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ticket-form__form-group">
                            <select name="date" class="ticket-form__select" disabled data-form="{{route('order-form')}}">
                                <option value="" disabled selected>Дата</option>

                            </select>
                        </div>
                        <br><br>
                        <input type="submit" id="go-to-reserve" style="display: none" value="перейти">
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

</main>
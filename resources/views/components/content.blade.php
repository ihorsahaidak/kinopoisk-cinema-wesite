<div class="col-xs-12" style="padding: 0;" id="order-place">
    <svg>
        <defs>
            <symbol id="icon-heart" viewBox="0 0 32 32">
                <title>heart</title>
                <path class="path1"
                      d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
            </symbol>
            <symbol id="icon-eye" viewBox="0 0 32 32">
                <title>eye</title>
                <path class="path1"
                      d="M16 6c-6.979 0-13.028 4.064-16 10 2.972 5.936 9.021 10 16 10s13.027-4.064 16-10c-2.972-5.936-9.021-10-16-10zM23.889 11.303c1.88 1.199 3.473 2.805 4.67 4.697-1.197 1.891-2.79 3.498-4.67 4.697-2.362 1.507-5.090 2.303-7.889 2.303s-5.527-0.796-7.889-2.303c-1.88-1.199-3.473-2.805-4.67-4.697 1.197-1.891 2.79-3.498 4.67-4.697 0.122-0.078 0.246-0.154 0.371-0.228-0.311 0.854-0.482 1.776-0.482 2.737 0 4.418 3.582 8 8 8s8-3.582 8-8c0-0.962-0.17-1.883-0.482-2.737 0.124 0.074 0.248 0.15 0.371 0.228v0zM16 13c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z"></path>
            </symbol>
            <symbol id="icon-thumbs-up" viewBox="0 0 20 20">
                <title>thumbs-up</title>
                <path class="path1"
                      d="M13.648 7.362c-0.133-0.355 3.539-3.634 1.398-6.291-0.501-0.621-2.201 2.975-4.615 4.603-1.332 0.898-4.431 2.81-4.431 3.867v6.842c0 1.271 4.914 2.617 8.648 2.617 1.369 0 3.352-8.576 3.352-9.938 0-1.368-4.221-1.344-4.352-1.7zM5 7.457c-0.658 0-3 0.4-3 3.123v4.848c0 2.721 2.342 3.021 3 3.021 0.657 0-1-0.572-1-2.26v-6.373c0-1.768 1.657-2.359 1-2.359z"></path>
            </symbol>
            <symbol id="icon-cancel" viewBox="0 0 32 32">
                <title>cancel</title>
                <path class="path1"
                      d="M30.721 6.774l-9.197 9.253 9.197 9.198c0.385 0.384 0.385 1.007 0 1.392l-4.176 4.175c-0.383 0.385-1.006 0.385-1.391 0l-9.182-9.182-9.127 9.182c-0.384 0.385-1.007 0.385-1.392 0l-4.175-4.175c-0.384-0.385-0.384-1.008 0-1.392l9.127-9.182-9.126-9.126c-0.384-0.384-0.384-1.007 0-1.392l4.175-4.175c0.384-0.385 1.007-0.385 1.392 0l9.11 9.11 9.199-9.253c0.385-0.385 1.008-0.385 1.391 0l4.176 4.175c0.383 0.385 0.383 1.008-0.001 1.392z"></path>
            </symbol>
        </defs>
    </svg>
    <div class="whiteBox">
        <div class="whiteBoxRates">
            <p>
                <svg class="icon icon-heart">
                    <use xlink:href="#icon-heart"></use>
                </svg>
                8.2
            </p>
            <p>
                <svg class="icon icon-eye">
                    <use xlink:href="#icon-eye"></use>
                </svg>
                120M
            </p>
            <p>
                <svg class="icon icon-thumbs-up">
                    <use xlink:href="#icon-thumbs-up"></use>
                </svg>
                10K
            </p>
        </div>
        <div class="text">ghostbusters</div>
        <div class="readT">
            <h1>korv</h1>
            <div class="thriller-cont">as</div>
            <div class="bt bt1">Watch the Movie</div>
            <div class="bt">Share the Movie</div>
            <div class="bt">Rate the movie</div>
        </div>
        <div class="X">
            <svg class="icon2 icon-cancel">
                <use xlink:href="#icon-cancel"></use>
            </svg>
        </div>
    </div>
    <div class="title" id="section2">
        <div class="container">
            <div class="col-md-12">
                Зараз в кіно
            </div>
        </div>
    </div>
<div class="poper">
    @foreach($movies as $movie)

                <div class="movieBox A{{$movie->id}}" id="{{$movie->id}}"
                     style="background:url({{$movie->photo}});background-size:cover;background-position:50% 50%;">
                    <div class="rates" data-img="{{--{{asset('files/movie-files/1.jpg')}}--}}{{$movie->photo}}" data-time="20:00">
                        <p>
                            <svg class="icon icon-heart">
                                <use xlink:href="#icon-heart"></use>
                            </svg>
                            8.2
                        </p>
                        <p>
                            <svg class="icon icon-eye">
                                <use xlink:href="#icon-eye"></use>
                            </svg>
                            22:00
                        </p>
                        <p>
                            <svg class="icon icon-thumbs-up">
                                <use xlink:href="#icon-thumbs-up"></use>
                            </svg>
                            10K
                        </p>
                    </div>
                    <div class="text">{{$movie->name}}</div>
                    <div class="thriller" style="text-align: center">
                        <iframe width="650" height="415"
                                src="https://www.youtube.com/embed/{{substr($movie->thriller, strpos($movie->thriller, "=") + 1)}}"
                                frameborder="0" allowfullscreen></iframe>
                        <br><br>
                        {{$movie->description}}
                        {{substr($movie->thriller, strpos($movie->thriller, "=") + 1)}}
                    </div>
                </div>

    @endforeach
</div>

</div>
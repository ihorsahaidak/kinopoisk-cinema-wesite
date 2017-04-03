<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.12.2016
 * Time: 17:28
 */

namespace App\Http\Controllers;


use App\Entities\Group;
use App\Entities\Lesson;
use App\Entities\Teacher;
use Illuminate\Http\Request;
use RabbitCMS\Backend\Entities\Booking;
use RabbitCMS\Backend\Entities\BookingArr;
use RabbitCMS\Backend\Entities\Movie;

class IndexController extends Controller
{
    public function getIndex()
    {
        $movies = Movie::query()->where('enabled', '=', 1)->get();

        return view("index", compact('movies'));
    }

    public function real()
    {
        return view('real');
    }

    public function getOrderPlaceForm(Request $request)
    {
        $movie_id = $request['movie'];

        $date = $request['date'];

        $booking_arr = BookingArr::query()->where('movie_id', '=', $movie_id)->where('date', '=', $date)->first();

        $movie = Movie::query()->findOrFail($movie_id);

        return view("components.order", compact('booking_arr', 'movie'));
    }

    public function getMovieTimes(Request $request)
    {
        $model = BookingArr::query()->where('movie_id', '=', $request['movie_id'])->get();

        $arr = [];

        for ($i = 0; $i < count($model); $i++) {
            $arr[$i] = $model[$i]->date;
        }
        return $arr;
    }

    public function orderPlaces(Request $request)
    {
        $arrOne = explode('|', $request['places-key']);

        $arrOne[0] = explode(',', $arrOne[0]);

        for ($i = 0; $i < count($arrOne[0]); $i++) {
            $arrOne[0][$i] = explode('_', $arrOne[0][$i]);
        }
        $model = BookingArr::query()->where('movie_id', '=', $request['movie_id'])->where('date', '=', $request['date'])->first();
        $booking_arr = $model->booking_arr;
        for ($a = 0; $a < count($arrOne[0]); $a++) {
            $booking_arr[$arrOne[0][$a][0]][$arrOne[0][$a][1]] = 1;
        }
        $model->booking_arr = $booking_arr;
        $model->save();

        $newOrderPlaces = str_replace('_', ', місце - ' ,str_replace(',',',<br> ряд - ',$request['places-key']));

        $newOrder = new Booking();
        $newOrder->name = $request['name'];
        $newOrder->phone = $request['phone'];
        $newOrder->movie_id = $request['movie_id'];
        $newOrder->time = $request['date'];
        $newOrder->places = 'ряд - ' . $newOrderPlaces;
        $newOrder->tmp = $request['places-key'];
        $newOrder->save();

        return redirect(route('index'))->with('success', ['success']);
    }
}
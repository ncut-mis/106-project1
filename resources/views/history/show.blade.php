@extends('layouts.test')
@section('content')
    {{--    <form action="{{ route('schedules.create') }}" method="get">--}}
    {{--        <button type="submit" class="btn btn-success" value="{{$cc}}" name="cc" id="cc">新增行程</button>--}}
    {{--    </form>--}}

    {{--新增行程不在這新增了--}}
    {{--<a href="{{route('schedules.create',$cc)}}" class="btn btn-secondary btn-sm">新增行程</a>--}}


    {{--之後排版用--}}
    {{--<div class="container">--}}
    {{--    <div class="row">--}}
    {{--        <div class="col"><span>旅遊日期</span></div>--}}
    {{--        <div class="col"><span>行程內容</span></div>--}}
    {{--        <div class="col"><span>住宿</span></div>--}}

    {{--    </div>--}}
    {{--    <div class="col1"><span>11</span></div>--}}
    {{--    <div class="col1"><span>11</span></div>--}}

    <div class=out1 style='text-align:center'><font size="7">
            <b>{{$name}}</b>
        </font>
    </div>
    <div >
        <table class="table table-bordered table-hover" >
            <thead>
            <tr>

                <th>出遊日期</th>
                <th>區域</th>
                <th>景點</th>
                <th>住宿</th>
                <th>早餐</th>
                <th>午餐</th>
                <th>晚餐</th>
                <th>交通</th>
                <th>內容</th>
                <th>花費</th>
            </tr>
            </thead>
            <div style="display:none">
            </div>
            @foreach($b1 as $b1)
                <tr>
                    <td>{{$b1->start}}</td>
                    <td>{{$b1->region}}</td>
                    <td>{{$b1->name}}</td>
                    <td>{{$b1->room}}</td>
                    <td>{{$b1->breakfast}}</td>
                    <td>{{$b1->lunch}}</td>
                    <td>{{$b1->dinner}}</td>
                    <td>{{$b1->traffic}}</td>
                    <td>{{$b1->content}}</td>
                    <td>{{$b1->cost}}</td>

                </tr>
            @endforeach
        </table>
    </div>

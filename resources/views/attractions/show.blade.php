@extends('layouts.guide')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <h2>{{$attraction->name}}</h2>
            <a href="{{route('attractions.index')}}" class="btn btn-secondary btn-sm">返回</a>
            <a href="{{route('attractions.edit',$attraction->id)}}" class="btn btn-primary btn-sm">編輯</a>
            <a href="{{route('attractions.open',$attraction->id)}}" class="btn btn-success btn-sm" >啟用</a>
            <a href="{{route('attractions.stop',$attraction->id)}}" class="btn btn-warning btn-sm">停用</a>
            <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete').submit()">刪除</a>


            <form method="post" action="{{route('attractions.destroy',$attraction->id)}}" id="delete">
                @csrf
                {{ method_field('DELETE') }}
            </form>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    內容
                </div>
                <div class="card-body">
                    {{$attraction->content}}
                </div>

                <div class="card">
                    <div class="card-header">
                        圖片
                    </div>
                    <img class="card-img-bottom" src="{{asset('storage/12.jpg')}}" alt="">
                </div>

                <div class="card">
                    <div class="card-header">
                        影片
                    </div>
                    <img class="card-img-bottom" src="..." alt="">
                </div>

                <div class="card-footer">
                    附件:<br>
                    @foreach($files as $file)
                        <a href="{{route('attractions.download',['id'=>$attraction->id,'filename'=>$file])}}"> {{$file}}</a>><br>
                    @endforeach
                </div>
        </div>
    </div>
</div>

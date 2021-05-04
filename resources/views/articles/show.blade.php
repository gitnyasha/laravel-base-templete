@extends('layouts/app')
@section('content')
<div class="super_container">
    <div class="single_article">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="image_selected"><img class="prod-img" src="/storage/{{ $article->image }}" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="article_description">
                        <div class="article_name">{{ $article->title }}</div>
                        <div> <span class="article_price">{{ $article->description }}</span> </div>
                        <hr class="singleline">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
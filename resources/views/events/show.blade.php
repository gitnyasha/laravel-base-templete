@extends('layouts/app')
@section('content')
<div class="super_container">
    <div class="single_event">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="image_selected"><img class="prod-img" src="{{ $event->image }}" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="event_description">
                        <div class="event_name">{{ $event->name }}</div>
                        <div> <span class="event_price">${{ $event->file }}</span> </div>
                        <hr class="singleline">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
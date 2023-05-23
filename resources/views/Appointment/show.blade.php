@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex justify-center flex-col align-items-center">
        <div class="text-center">
            <h1 class="font-bold text-lg mb-5">Appointment Details</h1>
            <ul>
                <li>{{ __('message.titleFourDetailOne') }} - {{ $dataInfo->dr_name }}</li>
                <li>{{ __('message.titleRoom') }} - {{ $dataInfo->room_no }} </li>
                <li>{{ __('message.titleFourDetailTwo') }} - {{ $dataInfo->app_time }}</li>
            </ul>
        </div>
    </div>
@endsection

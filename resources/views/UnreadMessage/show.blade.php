@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex justify-center flex-col align-items-center">
        <div class="text-center">
            <h1 class="font-bold text-lg mb-5">{{ __('message.titleTwo') }}</h1>
            <ul>
                <li>{{ __('message.titleTwoDetailOne') }} - {{ $dataInfo->msg_details }}</li>
                <li> {{ __('message.titleTwoDetailTwo') }} - @if ($dataInfo->vip == 0)
                        Original
                    @else
                        Vip
                    @endif
                </li>
                <li>{{ __('message.titleTwoDetailThree') }} - {{ $dataInfo->msg_time }}</li>
            </ul>
        </div>
    </div>
@endsection

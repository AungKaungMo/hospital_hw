@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex justify-center flex-col align-items-center">
        <div class="text-center">
            <h1 class="font-bold text-lg mb-5">{{ __('message.titleOne') }}</h1>
            <ul>
                <li> {{ __('message.titleRoom') }} - {{ $dataInfo->room_no }}</li>
                <li> {{ __('message.titleOneDetailOne') }} - @if ($dataInfo->status == 0)
                        Active
                    @elseif ($dataInfo->status == 1)
                        Lock
                    @elseif ($dataInfo->status == 2)
                        Avaliable
                    @endif
                </li>
                <li>{{ __('message.titleOneDetailTwo') }} - {{ $dataInfo->person }}</li>
                <li> {{ __('message.titlePrice') }} -> $ {{ $dataInfo->price }}</li>
            </ul>
        </div>
    </div>
@endsection

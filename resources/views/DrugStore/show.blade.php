@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex justify-center flex-col align-items-center">
        <div class="text-center">
            <h1 class="font-bold text-lg mb-5">{{ __('message.titleThree') }}</h1>
            <ul>
                <li>{{ __('message.titleThreeDetailOne') }} - {{ $dataInfo->drug_name }}</li>
                <li>{{ __('message.titleThreeDetailTwo') }} - {{ $dataInfo->drug_amount }} </li>
                <li>{{ __('message.titleThreeDetailThree') }} - {{ $dataInfo->drug_stock }}</li>
                <li>{{ __('message.titlePrice') }} -> $ {{ $dataInfo->drug_price }}</li>
            </ul>
        </div>
    </div>
@endsection

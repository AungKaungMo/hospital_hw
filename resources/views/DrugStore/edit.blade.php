@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex flex-col justify-center align-items-center">

        <form class="w-96 m-auto" method="POST" action="/drugstore/{{ $dataInfo->id }}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titleThreeDetailOne') }}</label>
                <input type="text" name="dname" required value="{{ $dataInfo->drug_name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('message.titleThreeDetailTwo') }}</label>
                <input type="text" name="damount" required value="{{ $dataInfo->drug_amount }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>
            <div class="mb-6">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titleThreeDetailThree') }}</label>
                <input type="text" name="dinstock" required value="{{ $dataInfo->drug_stock }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>
            <div class="mb-6">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titlePrice') }}</label>
                <input type="number" required name="dprice" value="{{ $dataInfo->drug_price }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('message.update') }}</button>
        </form>
    </div>
@endsection

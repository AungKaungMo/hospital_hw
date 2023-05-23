@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex flex-col justify-center align-items-center">

        <form class="w-96 m-auto" method="POST" action="/unreadmessage/{{ $dataInfo->id }}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titleTwoDetailOne') }}</label>
                <input type="text" name="msgdetails" required value="{{ $dataInfo->msg_details }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('message.titleTwoDetailTwo') }}
                </label>
                <select name="msgtype"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @if ($dataInfo->vip == 1)
                        <option value="0">Original</option>
                        <option value="1" selected>Vip</option>
                    @elseif ($dataInfo->vip == 0)
                        <option value="0" selected>Original</option>
                        <option value="1">Vip</option>
                    @else
                        <option value="0">Original</option>
                        <option value="1">Vip</option>
                    @endif

                </select>
            </div>
            <div class="mb-6">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titleTwoDetailThree') }}</label>
                <input type="time" name="msgtime" required value="{{ $dataInfo->msg_time }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('message.update') }}</button>
        </form>
    </div>
@endsection

@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex flex-col justify-center align-items-center">

        <form class="w-96 m-auto" method="POST" action="/appointment/{{ $dataInfo->id }}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('message.titleFourDetailOne') }}</label>
                <input type="text" name="dname" required value="{{ $dataInfo->dr_name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('message.titleRoom') }}</label>
                <select name="room"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @for ($i = 0; $i < 100; $i++)
                        @if ($dataInfo->room_no == "Room $i")
                            <option selected>Room {{ $i }}</option>
                        @endif
                        <option>Room {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-6">
                <label
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titleFourDetailTwo') }}

                </label>

                <input type="datetime-local" name="datetime" required value="{{ $dataInfo->app_time }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('message.update') }}</button>
        </form>
    </div>
@endsection

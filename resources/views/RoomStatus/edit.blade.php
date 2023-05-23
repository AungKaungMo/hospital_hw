@extends('layout.app')
@section('content')
    <div class="w-screen h-screen overflow-hidden flex flex-col justify-center align-items-center">
        <h1 class="text-center mb-5 font-bold text-lg mt-10">{{ __('message.actionOne') }}</h1>
        <form class="w-96 m-auto" method="POST" action="/roomstatus/{{ $dataInfo->id }}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
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
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titleOneDetailOne') }}
                </label>
                <select name="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @if ($dataInfo->status == 0)
                        <option value="0" selected>Active</option>
                        <option value="1">Lock</option>
                        <option value="2">Avaliable</option>
                    @elseif ($dataInfo->status == 1)
                        <option value="0">Active</option>
                        <option value="1" selected>Lock</option>
                        <option value="2">Avaliable</option>
                    @elseif ($dataInfo->status == 2)
                        <option value="0">Active</option>
                        <option value="1">Lock</option>
                        <option value="2" selected>Avaliable</option>
                    @endif

                </select>
            </div>
            <div class="mb-6">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('message.titleOneDetailTwo') }}</label>
                <select name="person"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @for ($i = 0; $i < 30; $i++)
                        @if ($dataInfo->person == $i)
                            <option selected>{{ $i }}</option>
                        @endif
                        <option>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('message.titlePrice') }}</label>
                <input type="number" required name="price" value="{{ $dataInfo->price }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('message.update') }}</button>
        </form>
    </div>
@endsection

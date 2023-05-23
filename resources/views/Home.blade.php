@extends('layout.app')
@section('content')
    <div class="flex  justify-end mt-3 mr-6">
        <a href="/lang/mm" class="mr-5 cursor-pointer hover:underline">Myanmar</a>
        <a href="/lang/en" class="cursor-pointer hover:underline">English</a>
    </div>
    <div class=" mt-10 grid grid-cols-2">
        <div class="mx-6">

            <div class="relative sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class=" text-gray-700 bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 bg-red-500 text-white" colspan="5">
                                <div class="flex align-items-center">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M3 20v-8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v8M5 10V6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M3 18h18" />
                                    </svg>
                                    <span class="ml-3">{{ __('message.titleOne') }}</span>
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roomStatus as $rs)
                            <tr class=" border-b">
                                <th class="px-5 py-4 text-gray-400">
                                    {{ $rs->room_no }}
                                </th>
                                <td class="px-5 py-4">
                                    @if ($rs->status == 0)
                                        Active
                                    @elseif ($rs->status == 1)
                                        Lock
                                    @elseif ($rs->status == 2)
                                        Avaliable
                                    @endif
                                </td>
                                <td class="px-5 py-4">
                                    {{ $rs->person }}
                                </td>
                                <td class="px-5 py-4 text-black font-bold">
                                    $ {{ $rs->price }}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-end mt-4">

                    <div class="text-white">
                        <a href="/roomstatus">
                            <button class="p-2 px-8 flex align-items-center bg-red-500 rounded-sm">
                                {{ __('message.checkOne') }}</button>
                    </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="mx-6">

            <div class="relative sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class=" text-gray-700 bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 bg-gray-400" colspan="5">
                                <div class="flex align-items-center">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M22 7v9c0 1.1-.9 2-2 2H6l-4 4V4c0-1.1.9-2 2-2h10.1c-.1.3-.1.7-.1 1c0 2.8 2.2 5 5 5c1.1 0 2.2-.4 3-1m-6-4c0 1.7 1.3 3 3 3s3-1.3 3-3s-1.3-3-3-3s-3 1.3-3 3Z" />
                                    </svg>
                                    <span class="ml-3">{{ __('message.titleTwo') }}</span>
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unreadMessage as $um)
                            <tr class=" border-b">
                                <th class="pl-6 pr-14 py-4 text-gray-400" colspan="5">
                                    <div class="flex justify-between">
                                        <p> {{ $um->msg_details }}</p>
                                        <p class="ml-14">
                                            @if (Str::substr($um->msg_time, 0, 2) <= 12)
                                                {{ $um->msg_time }} AM
                                            @else
                                                {{ $um->msg_time }} PM
                                            @endif
                                        </p>
                                    </div>
                                    @if ($um->vip == 1)
                                        <div class="mt-3 flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" class="text-red-700">
                                                <path fill="currentColor"
                                                    d="M5.75 1a.75.75 0 0 1 .75.75V3.6l1.72-.344a8.677 8.677 0 0 1 4.925.452l.413.165a7.3 7.3 0 0 0 4.482.304a.73.73 0 0 1 .803 1.084l-1.278 2.131c-.342.57-.513.854-.553 1.163c-.017.13-.017.26 0 .39c.04.309.211.594.553 1.163l1.56 2.6a.9.9 0 0 1-.553 1.336l-.1.025a8.677 8.677 0 0 1-5.327-.361a8.676 8.676 0 0 0-4.924-.452L6.5 13.6v8.15a.75.75 0 0 1-1.5 0v-20A.75.75 0 0 1 5.75 1Z" />
                                            </svg>

                                            <p class="ml-3">
                                                Vip Message
                                            </p>
                                        </div>
                                    @endif
                                </th>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="flex justify-end mt-4">

                    <div class="text-black font-bold">
                        <a href="/unreadmessage">
                            <button class="p-2 px-8 flex align-items-center border border-gray-400 rounded-sm">
                                {{ __('message.checkTwo') }}</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="my-8 mx-6">

            <div class="relative sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class=" text-gray-700 bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 bg-cyan-700 text-white" colspan="5">
                                <div class="flex align-items-center">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M10.5 13.5v2q0 .625.438 1.063T12 17q.625 0 1.063-.438T13.5 15.5v-2h2q.625 0 1.063-.438T17 12q0-.625-.438-1.063T15.5 10.5h-2v-2q0-.625-.438-1.063T12 7q-.625 0-1.063.438T10.5 8.5v2h-2q-.625 0-1.063.438T7 12q0 .625.438 1.063T8.5 13.5h2ZM5 21q-.825 0-1.413-.588T3 19V5q0-.825.588-1.413T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.588 1.413T19 21H5Z" />
                                    </svg>
                                    <span class="ml-3">{{ __('message.titleThree') }}</span>
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($drugStore as $ds)
                            <tr class=" border-b">
                                <th class="px-5 py-4 text-gray-400">
                                    {{ $ds->drug_name }}
                                </th>
                                <td class="px-5 py-4">
                                    {{ $ds->drug_amount }}
                                </td>
                                <td class="px-5 py-4">
                                    {{ $ds->drug_stock }}
                                </td>
                                <td class="px-5 py-4 text-black font-bold" colspan="2">
                                    $ {{ $ds->drug_price }} /per item
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4 flex justify-end">
                    <div class="text-white">
                        <a href="/drugstore">
                            <button class="p-2 px-8 flex align-items-center bg-cyan-700 rounded-sm">
                                {{ __('message.checkOne') }}</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-8 mx-6">

            <div class="relative   sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class=" text-gray-700 bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 bg-black text-white" colspan="4">
                                <div class="flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 15 15">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 2h1.5A1.5 1.5 0 0 1 15 3.5v10a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 0 13.5v-10A1.5 1.5 0 0 1 1.5 2H3V0h1v2h7V0h1v2ZM6 8H3V7h3v1Zm6-1H9v1h3V7Zm-6 4H3v-1h3v1Zm3 0h3v-1H9v1Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-3">{{ __('message.titleFour') }}</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointment as $app)
                            <tr class=" border-b">
                                <th class="px-5 py-4 text-gray-400">
                                    {{ $app->dr_name }}
                                </th>
                                <td class="px-5 py-4">
                                    {{ $app->room_no }}
                                </td>
                                <td class="px-5 py-4 text-black font-bold">
                                    {{ $app->app_time }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4 flex justify-end">
                    <div class="text-white">
                        <a href="/appointment">
                            <button class="p-2 px-8 flex align-items-center bg-black rounded-sm">
                                {{ __('message.checkOne') }}</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

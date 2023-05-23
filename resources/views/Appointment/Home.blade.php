@extends('layout.app')
@section('content')
    <div class="mt-5 ml-8">
        <h1>{{ trans_choice('message.appointmentList', $appointment) }}</h1>
    </div>
    <div class=" flex justify-end mt-5 mr-9">
        <a href="/appointment/create">
            <button
                class="py-3 px-10 bg-blue-700 text-white rounded-md">{{ __('message.titleFour') }}{{ __('message.add') }}</button>
        </a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-9">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{ __('message.titleFourDetailOne') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('message.titleRoom') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('message.titleFourDetailTwo') }}
                    </th>
                    <th scope="col" colspan="2" class=" px-6 py-3">
                        {{ __('message.titleAction') }}
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointment as $app)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/appointment/{{ $app->id }}" class="underline">
                                {{ $app->dr_name }}
                            </a>
                        </th>
                        <td class="px-6 py-4">
                            {{ $app->room_no }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $app->app_time }}
                        </td>
                        <td class=" py-4">
                            <a href="/appointment/{{ $app->id }}/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('message.actionOne') }}</a>
                        </td>
                        <td class=" py-4">
                            <form method="POST" action="/appointment/{{ $app->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">{{ __('message.actionTwo') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

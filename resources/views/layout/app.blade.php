<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Hospital</title>

</head>

<body>

    <div class="flex overflow-x-hidden">
        <div class=" w-64 h-auto bg-gray-800 text-white text-center">
            <div class="mt-3 text-lg font-bold">Sakura Hospital</div>
            <ul>
                <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z"/></svg>
                        <a href='/home' class="ml-2">Dashboard</a>
                    </div>
                </li>
                <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256a128 128 0 1 0 0-256a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512h388.6c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16h-16c-8.8 0-16-7.2-16-16s7.2-16 16-16v-24c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16h-16c-8.8 0-16-7.2-16-16v-40c0-29.8 20.4-54.9 48-62v-57.1c-6-.6-12.1-.9-18.3-.9h-91.4c-6.2 0-12.3.3-18.3.9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7v-59.1zM144 448a24 24 0 1 0 0-48a24 24 0 1 0 0 48z"/></svg>
                       <a href='/doctorList' class="ml-2">Doctor List</a>
                    </div>
                </li>
                <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="currentColor" d="M5.374 7.113A4.25 4.25 0 0 1 9.47 4h13.06a4.25 4.25 0 0 1 4.096 3.113l3.22 11.588c.738 2.664-1.265 5.299-4.03 5.299H6.183c-2.765 0-4.768-2.635-4.028-5.299l3.22-11.588ZM8 26a1 1 0 1 0 0 2h16.002a1 1 0 1 0 0-2H7.999Z"/></svg>
                        <a class="ml-2">Room View</a>
                    </div>
                </li>
                <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="currentColor" d="M7 9.5a.5.5 0 1 1-1 0a.5.5 0 0 1 1 0ZM6.5 14a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1ZM3 6a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v3.6a5.47 5.47 0 0 0-2.5-.6h-5a.5.5 0 0 0 0 1h1.837A5.493 5.493 0 0 0 9 14.5c0 .9.216 1.75.6 2.5H6a3 3 0 0 1-3-3V6Zm2.5-1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9Zm1 6a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3ZM8 13.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0Zm11 1a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0Zm-4-2a.5.5 0 0 0-1 0V14h-1.5a.5.5 0 0 0 0 1H14v1.5a.5.5 0 0 0 1 0V15h1.5a.5.5 0 0 0 0-1H15v-1.5Z"/></svg>
                        <a class="ml-2">News</a>
                    </div>
                </li>
                <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M12 2h1.5A1.5 1.5 0 0 1 15 3.5v10a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 0 13.5v-10A1.5 1.5 0 0 1 1.5 2H3V0h1v2h7V0h1v2ZM6 8H3V7h3v1Zm6-1H9v1h3V7Zm-6 4H3v-1h3v1Zm3 0h3v-1H9v1Z" clip-rule="evenodd"/></svg>
                        <a class="ml-2">Appointment Form</a>
                    </div>
                </li>
                <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M7 7h2v2H7V7m0 4h2v2H7v-2m0 4h2v2H7v-2m10 2h-6v-2h6v2m0-4h-6v-2h6v2m0-4h-6V7h6v2Z"/></svg>
                        <a class="ml-2">Doctor Form</a>
                    </div>
                </li>
                <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M7 7h2v2H7V7m0 4h2v2H7v-2m0 4h2v2H7v-2m10 2h-6v-2h6v2m0-4h-6v-2h6v2m0-4h-6V7h6v2Z"/></svg>
                        <a class="ml-2">Drug Form</a>
                    </div>
                </li>  <li class='mt-3 ml-3'>
                    <div class='flex items-center hover:bg-red-500 py-5 pl-3 rounded-tl-full rounded-bl-full cursor-pointer transition duration-400'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M11 2H4V0H3v2H1.5A1.5 1.5 0 0 0 0 3.5v8A1.5 1.5 0 0 0 1.5 13h12a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 13.5 2H12V0h-1v2ZM3 6a2 2 0 1 1 4 0a2 2 0 0 1-4 0Zm-.618 4.618a2.927 2.927 0 0 1 5.236 0l.33.658A.5.5 0 0 1 7.5 12h-5a.5.5 0 0 1-.447-.724l.329-.658ZM9 6h3V5H9v1Zm0 3h3V8H9v1Z" clip-rule="evenodd"/><path fill="currentColor" d="M15 14v1H0v-1h15Z"/></svg>
                        <a class="ml-2">Contact</a>
                    </div>
                </li>


            </ul>
        </div>
        <div>
    @yield('content')
        </div>
    </div>


    {{-- <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script> --}}
</body>

</html>

<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('admin.admincss')
        <title>Nic's Diner</title>

    </head>

    <body class="bg-orange-300">
        <div class="container-scroller">
            @include('admin.navbar')
        </div>
        @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>

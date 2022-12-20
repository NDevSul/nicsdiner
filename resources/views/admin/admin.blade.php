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
            <h1 style="font-bold">WELCOME BACK ADMIN!</h1>

        </div>
        @include('admin.adminscript')
        <br><br>

    </body>

    @include('footer')

    </html>

</x-app-layout>

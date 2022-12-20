<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nic's Diner</title>
</head>

<body>
    <x-app-layout>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            @include('admin.admincss')
        </head>

        <body>
            <div class="container-scroller">
                @include('admin.navbar')


                <div style="position: relative; top: 60px; right: -400px; py-10">
                    <h3 class="text-center font-bold">Control The Users</h3>
                    <table bgcolor="orange" class="border-collapse border border-slate-500 pb-20">
                        <tr align="center">
                            <th class="border border-slate-600" style="padding: 30px">Name</th>
                            <th class="border border-slate-600" style="padding: 30px">Email</th>
                            <th class="border border-slate-600" style="padding: 30px">Action</th>
                        </tr>

                        @foreach ($data as $data)
                            <tr align="center">
                                <td class="border border-slate-600">{{ $data->name }}</td>
                                <td class="border border-slate-600">{{ $data->email }}</td>

                                @if ($data->usertype == '0')
                                    <td class="border border-slate-600"><a
                                            href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
                                @else
                                    <td class="border border-slate-600"><a>Can't Delete</a></td>
                                @endif
                            </tr>
                        @endforeach


                    </table>
                </div>
            </div>
            @include('admin.adminscript')
        </body>

        </html>

    </x-app-layout>
</body>

</html>

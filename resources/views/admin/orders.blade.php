<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('admin.admincss')
    </head>

    <body>
        <div class="container-scroller">
            @include('admin.navbar')
            <div class="container">

                <form action="{{ url('/search') }}" method="get">
                    @csrf
                    <input type="text" name="search" style="color:blue;">

                    <input type="submit" value="Search" class="btn btn-success">

                </form>

                <table>
                    <tr align="center">
                        <td style="padding:30px">Name</td>
                        <td style="padding:30px">Phone</td>
                        <td style="padding:30px">Address</td>
                        <td style="padding:30px">Food Name</td>
                        <td style="padding:30px">Price</td>
                        <td style="padding:30px">Quantity</td>  
                        <td style="padding:30px">Date</td>
                        <td style="padding:30px">Total Price</td>
                        <td style="padding:30px">Notes</td>
                        <td style="padding:30px"></td>
                    </tr>

                    @foreach ($data as $data)
                        <tr align="center" style="background-color: black">
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->foodname }}</td>
                            <td>Rp.{{ $data->price }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->date }}</td>
                            <td>Rp.{{ $data->price * $data->quantity }}K</td>
                            <td>{{ $data->notes }}</td>
                            <td><a href="{{ url('/deleteorder', $data->id) }}">Delete</td>
                        </tr>
                    @endforeach


                </table>
            </div>
        </div>
        @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>

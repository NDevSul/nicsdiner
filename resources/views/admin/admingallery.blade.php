<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('admin.admincss')
    </head>

    <body>
        <div class="container-scroller">
            @include('admin.navbar')

            <form action="{{ url('uploadgallery') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Name</label>
                    <input style="color: blue" type="text" name="name" required="" placeholder="Judul">
                </div>

                <div>
                    <input type="file" name="image" required="">
                </div>

                <div>
                    <input type="submit" value="Save">
                </div>

            </form>

            <div class="py-24">
                <table bgcolor="orange">
                    <tr>
                        <th style="padding: 30px">Nama Foto</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Update</th>
                        <th style="padding: 30px">Delete</th>
                    </tr>
    
                    @foreach ($data as $data)
                        <tr align="center">
                            <td>{{ $data->name }}</td>
                            <td><img height="100" width="100" src="/galleryimage/{{ $data->image }}"></td>
                            <td><a href="{{ url('/updategallery', $data->id) }}">Update</a></td>
                            <td><a href="{{ url('/deletegallery', $data->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>    
            </div>

        </div>
        @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>

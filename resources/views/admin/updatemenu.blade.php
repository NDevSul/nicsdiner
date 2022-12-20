<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Nic's Diner Admin</title>
        <base href="/public">
        @include('admin.admincss')
    </head>

    <body>
        <div class="container-scroller">
            @include('admin.navbar')

            <div style="position: relative; top: 60px; right : -150px">
                <form action="{{ url('/update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label>Name</label>
                        <input style="color:black" type="text" name="title" value="{{ $data->title }}" required>
                    </div>

                    <div>
                        <label>Price</label>
                        <input style="color:black" type="num" name="price" value="{{ $data->price }}" required>
                    </div>


                    <div>
                        <label>Category</label>
                        <input style="color:black" type="text" name="category" value="{{ $data->category }}"
                            required>
                    </div>

                    <div>
                        <label>Description</label>
                        <input style="color:black" type="text" name="description" value="{{ $data->description }}"
                            required>
                    </div>

                    <div>
                        <label>Old Image</label>
                        <img height="200" width="200" src="/foodimage/{{ $data->image }}">
                    </div>

                    <div>
                        <label>New Image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div>
                        <button
                            class="bg-yellow-200 hover:bg-orange-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"><input
                                style="color:#834a00" type="submit" value="Save"></button>
                    </div>
                </form>

                <div>
                </div>
                @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>

<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('admin.admincss')
    </head>

    <body class="bg-orange-300">
        <div class="container-scroller">
            @include('admin.navbar')
            
            <div style="position: relative; top: 60px;">
                <h3 class="text-center font-bold">Add New Menu</h3>
                <div class="px-20">
                    <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data"
                        class="content-center; right: -400px;">
                        @csrf

                        <div class="pb-2">
                            <label class="font-bold">Name</label>
                            <br>
                            <input style="color:#000" type="text" name="title" placeholder="Menu Name" required>
                        </div>

                        <div class="pb-2">
                            <label class="font-bold">Price (in IDR per portion, please input without 000-thousand)</label>
                            <br>
                            <input style="color:#000" type="number" name="price" placeholder="Menu Price"
                                required>
                        </div>

                        <div class="pb-2">
                            <label class="font-bold">Image</label>
                            <br>
                            <input type="file" name="image" required>
                        </div>

                        <div class="pb-2">
                            <label class="font-bold">Category</label>
                            <br>
                            <input style="color:#000" type="text" name="category" placeholder="Category" required>
                        </div>

                        <div class="pb-2">
                            <label class="font-bold">Description</label>
                            <br>
                            <input style="color:#000" type="text" name="description" placeholder="Description"
                                required>
                        </div>

                        <div class="pb-10 pt-2">
                            <button
                                class="bg-orange-700 hover:bg-yellow-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow justify-items-center"><input
                                    style="color:#fff" type="submit" value="Save"></button>
                        </div>
                    </form>



                    <table bgcolor="orange">
                        <tr>
                            <th style="padding: 30px"> Food Name </th>
                            <th style="padding: 30px">Price (in IDR per portion)</th>
                            <th style="padding: 30px">Description</th>
                            <th style="padding: 30px">Category</th>
                            <th style="padding: 30px">Image</th>
                            <th style="padding: 30px">Delete</th>
                            <th style="padding: 30px">Action</th>
                        </tr>


                        @foreach ($data as $fooddata)
                            <tr align="center">
                                <td style="padding-bottom: 30px">{{ $fooddata->title }}</td>
                                <td style="padding-bottom: 30px">{{ $fooddata->price }}</td>
                                <td style="padding-bottom: 30px">{{ $fooddata->description }}</td>
                                <td style="padding-bottom: 30px">{{ $fooddata->category }}</td>
                                <td style="padding-bottom: 30px"><img height="200" width="200"
                                        src="/foodimage/{{ $fooddata->image }}"></td>
                                <td><a href="{{ url('/deletemenu', $fooddata->id) }}">Delete</td>
                                <td><a href="{{ url('/updatemenu', $fooddata->id) }}">Update</td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>

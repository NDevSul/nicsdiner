<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('admin.admincss')
    </head>

    <body>
        <div class="container-scroller">
            @include('admin.navbar')
            <div style="position: relative; top: 60px; right : -150px">
                <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label>Name</label>
                        <input style="color:black" type="text" name="title" placeholder="Menu Name" required>
                    </div>

                    <div>
                        <label>Price</label>
                        <input style="color:black" type="num" name="price" placeholder="Menu Price" required>
                    </div>

                    <div>
                        <label>Image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div>
                        <label>Category</label>
                        <input style="color:black" type="text" name="category" placeholder="Category" required>
                    </div>

                    <div>
                        <label>Description</label>
                        <input style="color:black" type="text" name="description" placeholder="Description" required>
                    </div>

                    <div>
                        <input style="color:aqua" type="submit"  value="Save">
                    </div>
                </form>

                <div>

                    <table bgcolor="black">
                        <tr>    
                            <th style="padding: 30px"> Food Name </th>
                            <th style="padding: 30px">Price</th>
                            <th style="padding: 30px">Description</th>
                            <th style="padding: 30px">Category</th>
                            <th style="padding: 30px">Image</th>
                            <th style="padding: 30px">Delete :</th>
                            <th style="padding: 30px">Action :</th>
                        </tr>


                        @foreach ($data as $fooddata)
                        <tr align="center">
                            <td style="padding-bottom: 30px">{{$fooddata->title}}</td>
                            <td style="padding-bottom: 30px">{{$fooddata->price}}</td>
                            <td style="padding-bottom: 30px">{{$fooddata->description}}</td>
                            <td style="padding-bottom: 30px">{{$fooddata->category}}</td>
                            <td style="padding-bottom: 30px"><img height="200" width="200" src="/foodimage/{{$fooddata->image}}"></td>
                            <td><a href="{{url('/deletemenu',$fooddata->id)}}">Delete</td>
                            <td><a href="{{url('/updatemenu',$fooddata->id)}}">Update</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>

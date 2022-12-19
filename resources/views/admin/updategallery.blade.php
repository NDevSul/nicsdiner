<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <base href="/public">
        @include('admin.admincss')
    </head>

    <body>
        <div class="container-scroller">
            @include('admin.navbar')

            <form action="{{url('/updatefoodgallery', $data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf 
                <div>
                    <label> Food Name </label>
                    <input style="color:blue" type="text" name="name" value="{{ $data->name }}">
                </div>

                <div>
                    <label> Old Image </label>
                    <img height="200" width="200" src="/galleryimage/{{ $data->image }}">
                </div>

                <div>
                    <label> New Image </label>
                    <input type="file" name="image" required="">
                </div>

                <div> 
                <input style="color:blue" type="submit" value="Update Gallery" required="">
                 </div>


            </form>
        </div>
        @include('admin.adminscript')
    </body>

    </html>

</x-app-layout>

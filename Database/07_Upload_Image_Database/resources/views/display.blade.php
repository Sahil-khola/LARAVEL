<h1>Display</h1>
<a href="upload">upload more image</a>
@foreach ($images as $image)
    <img src="{{url("storage/images/$image->path")}}" alt="images">
@endforeach

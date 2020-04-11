<h1>Welcome</h1>
@foreach($products as $product)
{{$product->id}} - {{$product->name}} - {{$product->price}} - {{$product->description}} <br>
@endforeach
<!-- <?php
// echo $idSanPham;
?> -->
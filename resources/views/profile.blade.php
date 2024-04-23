@extends("layouts.layout")
@section('content') 
	 
<table style="border: 2px">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Count</th>
		<th>Description</th>
		<th>Photo</th>
	</tr>
	@foreach ($myproduct as $p) 
	<tr>
    <td> {{$p["name"]}} </td> 
    <td> {{$p["price"]}} </td>
    <td> {{$p["count"]}} </td>
	<td> {{$p["description"]}} </td>
	<td><img src="{{ asset('product_images/'.$p->photo[0]->url)}}" width="200"></td>
<td>  <a href="{{url('product/item/'.$p['id'])}}"> Details </a> <td> </tr>
@endforeach
 
</table>	


@endsection
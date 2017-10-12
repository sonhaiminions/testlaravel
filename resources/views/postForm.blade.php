<form action="{{route('goitentoidi')}}" method="post" accept-charset="utf-8">
	<input type="text" name="HoTen" value="" placeholder="enter yourname">
	<input type="text" name="user" value="" placeholder="enter user">
	<input type="text" name="id" value="" placeholder="enter id">

	{{csrf_field()}} 
	<input type="submit" name="gui" value="login">

</form>
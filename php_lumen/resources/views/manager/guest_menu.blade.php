@extends('layouts.app')

@section('content')

<a href="/"><button type="button" class="btn btn-primary">Back to Homepage</button></a>
<a href="/manager-menu/food-add"><button type="button" class="btn btn-primary">Add Food</button></a>
@for ($i = 1; $i <= count($foods); $i++)
    @if ($i % 3 == 1)
    <div class="card-deck">
    @endif
    <div class="card">
    <img class="card-img-top" src="{{$foods[$i-1]->picture}}" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">{{$foods[$i-1]->name}}</h4>
    </div>
    <div class="card-footer">
      <big class="text-muted">ราคา {{$foods[$i-1]->price}} บาท</big>
    </div>
<<<<<<< HEAD
=======
	<form method="post" action="/manager-menu/food-delete">
		<input type="hidden" name="id" value="{{ $foods[$i-1]->id}}">
		<td><button type="submit" class="btn btn-danger" value="delete">Delete</button></td>
	</form>

>>>>>>> 6d34065e2048f701478135f4543f9aff15487a11
  </div>
    @if ($i % 3 == 0)
  </div> <br>
    @endif
@endfor


@endsection
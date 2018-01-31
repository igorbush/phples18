@extends('header')
@section('edit')

		<form action="/contacts/{{ $id }}" method="POST">
   			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="id" placeholder="ФИО" value="{{ $id }}"><br>
			<input type="text" name="name" placeholder="ФИО" value="{{ $name }}"><br>
			<input type="text" name="number" placeholder="НОМЕР ТЕЛЕФОНА" value="{{ $number }}"><br>
			<button type="submit">изменить</button>
			
		</form>
@endsection
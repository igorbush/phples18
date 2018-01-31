@extends('header')
@section('search')
		<h3>результаты поиска:</h3>
		<table border=1>
			<tr>
				<td>контакт</td>
				<td>телефон</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->name }}</td>
			<td>{{ $row->number }}</td>
		</tr>
		@endforeach
		</table><br>
		<a href="/contacts">на главную</a>	
@endsection
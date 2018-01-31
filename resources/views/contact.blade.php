@extends('header')
@section('contact')
		<form action="{{ route('searchcontact') }}" method="GET">
			<input type="text" name="number" placeholder="поиск по номеру телефона ">
			<button type="submit">найти</button>
		</form><br>
		<table border=1>
			<tr>
				<td>контакт</td>
				<td>телефон</td>
				<td>редактировать</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->name }}</td>
			<td>{{ $row->number }}</td>
			<td>
				<form action="/contacts/{{ $row->id }}/edit" method="GET">
					<button name="id" value="{{ $row->id }}">Редактировать</button>
				</form>
				<!-- <a href="">Редактировать</a> -->
			</td>
		</tr>
		@endforeach
		</table><br>
		<form method="get" action="/contacts/create"><br>
			<input type="text" name="name" placeholder="ФИО"><br><br>
			<input type="text" name="number" placeholder="НОМЕР ТЕЛЕФОНА"><br><br>
			<button type="submit">добавить</button>
			{{ csrf_field() }}
		</form>
		@endsection
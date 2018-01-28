<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="margin: 50px auto; width:20%;">
		<h1>записная книжка</h1>
		<form action="/search" method="GET">
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
				<a href="edit/{{ $row->id }}">Редактировать</a>
			</td>
		</tr>
		@endforeach
		</table><br>
		<form method="POST" action="{{ route('addcontact') }}"><br>
			<input type="text" name="name" placeholder="ФИО"><br><br>
			<input type="text" name="number" placeholder="НОМЕР ТЕЛЕФОНА"><br><br>
			<button type="submit">добавить</button>
			{{ csrf_field() }}
		</form>
	</div>
</body>
</html>
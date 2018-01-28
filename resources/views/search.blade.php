<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="margin: 50px auto; width:20%;">
		<h1>записная книжка</h1>
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
		<a href="/">на главную</a>	
	</div>
</body>
</html>
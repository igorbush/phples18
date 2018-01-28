<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="margin: 50px auto; width:40%;">
		<h1>записная книжка</h1>
		</table>
		<form method="POST" action="/edit/{{ $id }}/save">
			<input type="hidden" name="id" placeholder="ФИО" value="{{ $id }}"><br>
			<input type="text" name="name" placeholder="ФИО" value="{{ $name }}"><br>
			<input type="text" name="number" placeholder="НОМЕР ТЕЛЕФОНА" value="{{ $num }}"><br>
			<button type="submit">изменить</button>
			{{ csrf_field() }}
		</form>
	</div>
</body>
</html>
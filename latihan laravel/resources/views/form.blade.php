<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Buat Account Baru</h1>

<h3>Sign Up Here</h3>

<form action="/biodata" method="post">
@csrf 
	<label>First Name:</label><p>
		<input type="text" name="first">
		<p>
	<label>Last Name:</label><p>
		<input type="text" name="last">
		<p>
	<label>Gender:</label>
	<p>
	<input type="radio" id="male" name="gender" value="male">Male
	<p>
	<input type="radio" id="female" name="gender" value="female">Female
	<p>
	<input type="radio" id="other" name="gender" value="other">Other
	<p>

	<label>Nationality:</label><p>
		<select name="national">
			<option value="">Pilih Nationality</option>
			<option value="ina">Indonesia</option>
			<option value="trk">Turki</option>
		</select>
	<p>
	<label>Language Spoken:</label><p>
		<input type="checkbox" id="speak" name="speak" value="inggris">Inggris<p>
		<input type="checkbox" id="speak" name="speak" value="indonesia">Indonesia<p>
		<input type="checkbox" id="speak" name="speak" value="other">Other<p>

	<label>Bio</label><p>
		<textarea name="Bio"></textarea><p>
	<button type="submit">Simpan</button>
</form>
</body>
</html>
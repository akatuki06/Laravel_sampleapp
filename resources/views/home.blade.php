<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	Hello World!!
	@if (Auth::check())
		{{ \Auth::user()->name }}さん<br/>
		<a href="/auth/logout">ログアウト</a>
	@else
		ゲストさん<br />
		<a href="/auth/login" >ログイン</a><br/>
		<a href="/auth/register" >会員登録</a>
	@endif
</body>
</html>

@extends('layouts.app')

@section('subtitle', 'Login')

@section('content')
<form method="POST" action="{{ route('login') }}">
  @csrf
  <label>メールアドレス</label>
  <input type="email" name="email" placeholder="例: test@example.com">

  <label>パスワード</label>
  <input type="password" name="password" placeholder="例: coachtech1106">

  <button type="submit">ログイン</button>
</form>
@endsection
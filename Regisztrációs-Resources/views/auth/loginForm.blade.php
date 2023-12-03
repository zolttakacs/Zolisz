<form action="{{route('login.process')}}" method="POST">
@csrf
@method('POST')

@if ($errors->has('email'))
<span style="color: red">{{$errors->first('email')}}</span><br/>
@endif
<input type="email" name="email" placeholder="E-mail cím"  value="{{old('email')}}"><br/>

@if ($errors->has('password'))
<span style="color: red">{{$errors->first('password')}}</span><br/>
@endif
<input type="text" name="password" placeholder="Jelszó"><br/>

<button type="submit">Bejelentkezés</button>
</form>

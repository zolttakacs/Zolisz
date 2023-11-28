<form action="{{route('registration.process')}}" method="POST">
    @csrf
    @method('POST')
    @if ($errors->has('name'))
        <span style="color: red">{{$errors->first('name')}}</span><br/>
    @endif
    <input type="text" name="name" placeholder="Név" value="{{old('name')}}"><br/>
    
    @if ($errors->has('email'))
    <span style="color: red">{{$errors->first('email')}}</span><br/>
    @endif
    <input type="email" name="email" placeholder="E-mail cím"  value="{{old('email')}}"><br/>

    @if ($errors->has('password'))
    <span style="color: red">{{$errors->first('password')}}</span><br/>
    @endif
    <input type="text" name="password" placeholder="Jelszó"><br/>

    @if ($errors->has('password_confirmation'))
    <span style="color: red">{{$errors->first('password_confirmation')}}</span><br/>
    @endif
    <input type="text" name="password_confirmation" placeholder="Jelszó újra"><br/>
    <button type="submit">Regisztráció</button>
</form>

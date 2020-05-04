<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @php
    $users = [
      [
        'name' => '<p>Pippo</p>',
        'email' => 'pippo@email.it',
        'age' => 30
      ],
      [
        'name' => '<p>Topolino</p>',
        'email' => 'topolino@email.it',
        'age' => 50
      ],
      [
        'name' => '<p>Minnie</p>',
        'email' => 'minnie@email.it',
        'age' => 25
      ],
    ];
  @endphp

  <main>  
  <a href="{{route('home')}}">Home</a>
    {{-- foreach ($users as $user) {
      echo $user['name'];
    } --}}
    @foreach ($users as $user)
    {{-- @dd('blade') --}}
    @if ($loop->first) 
      {{$user['name']}}
    @endif
    @if ($user['age'] > 30)
    <ul>
      <li>{!!$user['name']!!}</li>
      <li>{{$user['email']}}</li>
      <li>{{$user['age']}}</li>
    </ul>
    @endif 
    @endforeach


    {{-- @forelse ($users as $user)
      <li>{{ $user['name']}}</li>
    @empty
      <p>No users</p>
    @endforelse --}}

  </main>
</body>
</html>
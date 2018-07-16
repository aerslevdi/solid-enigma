<h1>Lista de actores</h1>

  <ul>



  @foreach ($actores as $value)



        <li>{{$value->first_name}} {{$value->last_name}}</li>



  @endforeach

  </ul>

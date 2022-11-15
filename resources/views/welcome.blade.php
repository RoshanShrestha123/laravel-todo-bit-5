<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo app</title>
</head>

<body>
  <h1>Todo App </h1>

  <form action="{{route('saveTodo')}}" method="post">
    @csrf
    <input type="text" placeholder="Enter todo" name="todo">
    <button type="submit">Add</button>
  </form>

  <pre>

  {{$list}}
  </pre>
  <div>
    <table>
      <th>Todo item</th>
      <th>Action </th>

      <tbody>
        @foreach ($list as $value)
        <tr>

          <td>{{$value->title}}</td>
          <td>
            <a href="{{url('/edit/'. $value->id)}}">Edit</a>
            <a href="{{url('/delete/'. $value->id)}}">delete</a>

          </td>
        </tr>

        @endforeach
      </tbody>
    </table>



  </div>
</body>

</html>
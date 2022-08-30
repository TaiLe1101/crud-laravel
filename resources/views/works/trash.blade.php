<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>
    <link rel="stylesheet" href="{{ asset("assets/css/styles.css") }}">
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="intro col-12">
          <h1>CASH</h1>
          <div>
            <div class="border1"></div>
          </div>
        </div>
      </div>
      {{-- <form action="{{ route("works.store")  }}" method="POST">
        @csrf
          <div class="row">
            <div class="col-12">
              <input name="name" id="userInput" type="text" placeholder="Công việc nhà..." maxlength="27">
              <button id="enter">Thêm</button>
            </div>
          </div>
      </form> --}}
      <div class="row">
        <div class="listItems col-12">
          <ul class="col-12 offset-0 col-sm-8 offset-sm-2">
            <a href="{{ route("works.index") }}">Trang To-Dos</a>
            @foreach ($works as $work)
                @if($work -> isDeleted)
                <li class="item">
                    {{ $work -> name }}
                    <div class="control">
                        <form  method="POST" action="{{ route("works.delete", ["id" => $work -> id]) }}">
                            @csrf
                            @method("DELETE")
                            <button>Xóa vĩnh viễn</button>
                        </form>
                        <button><a href="{{ route("works.restore",["id" => $work -> id]) }}">Phục hồi</a></button>
                    </div>
                </li>
                @endif
            @endforeach
          </ul>
        </div>
      </div>
  
    </div>
</body>
  
</html>
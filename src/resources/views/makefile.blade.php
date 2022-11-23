<header>
  <h1 class='headline'>
    <a>ファイル作成画面</a>
  </h1>

</header>

<body>
  <form method="POST" action="{{route('save')}}" autocomplete="off">
    @csrf
    ファイル名：<input name="file_name" type="text">

    @if($errors->has('file_name'))
      <p>{{$errors->first('file_name')}}</p>
    @endif

    <br> <br>

    <input name="text" type="text">

    <br> <br>

    <button type="submit">
      保存
    </button>
  </form>
</body>
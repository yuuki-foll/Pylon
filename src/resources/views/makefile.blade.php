<header>
  <h1 class='headline'>
    <a>ファイル作成画面</a>
  </h1>

</header>

<body>
  <form method="POST" action="{{ route('regist')}}" autocomplete="off">
    @csrf
    ファイル名：<input name="file_name" type="text">

    <br> <br>

    <input name="text" type="text">

    <br> <br>

    <button type="submit">
      保存
    </button>
  </form>
</body>
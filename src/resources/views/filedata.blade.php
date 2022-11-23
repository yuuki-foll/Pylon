<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Pylon</title>
</head>

<body>
  ファイル一覧 <br><br>

  @foreach($filedatas as $filedata)
  ファイルID: {{ $filedata->id }} <br>
  ファイル名: {{ $filedata->file_name }} <br>
  内容: {{ $filedata->text }} <br>
  作者ID: {{ $filedata->user_id }} <br><br>
  @endforeach
</body>

</html>
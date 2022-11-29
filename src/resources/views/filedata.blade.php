<x-pylon_template>
  <x-slot name="header"></x-slot>
  <x-slot name="slot">
    <table width=90% class="mx-10 my-5">
      <tr>
        <th>ファイル名</th>
        <th>オーナー</th>
        <th>更新日時</th>
      </tr>
      @foreach($filedatas as $filedata)
      <tr>
        <th>{{ $filedata->file_name }}</th>
        <th>名無し</th>
        <th>{{ $filedata->created_at }}</th>
      </tr>
      @endforeach
    </table>
  </x-slot>
</x-pylon_template>
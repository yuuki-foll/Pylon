<x-pylon_template>
  <x-slot name="header"></x-slot>
  <x-slot name="slot">
    <table width=90% class="mx-10 my-5">
      <tr>
        <th align="left">ファイル名</th>
        <th>オーナー</th>
        <th>更新日時
          <button type="button" onclick="" class="text-black">↓</button>
        </th>
        <th>最終更新者</th>
      </tr>
      @foreach($filedatas as $filedata)
      <tr>
        <td>{{ Str::limit($filedata->file_name,10) }}</td>
        <td align="center">名無し</td>
        <td align="center">{{ $filedata->created_at }}</td>
        <td align="center">名無し</td>
      </tr>
      @endforeach
    </table>
  </x-slot>
</x-pylon_template>
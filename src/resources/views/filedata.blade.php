<x-pylon_template>
  <x-slot name="header"></x-slot>
  <x-slot name="slot">
    <form name="pageDatail" action="{{route('editFile')}}" method="POST">
      @csrf
      <table width=90% class="mx-10 my-5">
        <tr>
          <th align="left">
            ファイル名
            <form class="inline-block" action="{{ route('fileList') }}">
              <button type="submit" name="sort" class="text-black" value="">↓</button>
            </form>
          </th>
          <th>オーナー</th>
          <th>更新日時
            <form class="inline-block" action="{{ route('fileList') }}">
              <button type="submit" name="sort" class="text-black" value="{{ serialize(true) }}">↓</button>
            </form>
          </th>
          <th>最終更新者</th>
        </tr>
        @foreach($filedatas as $filedata)
        <tr class="hover:bg-gray-300">
          <td><a href="javascript:pageDatailSubmit({{$filedata->id}},{{$filedata->user_id}});">{{ Str::limit($filedata->file_name,10) }}</a></td>
          <td align="center">名無し</td>
          <td align="center">{{ $filedata->updated_at }}</td>
          <td align="center">名無し</td>
        </tr>
        @endforeach
      </table>
      <input type="hidden" name="fileId" value="">
      <input type="hidden" name="userId" value="">
    </form>
    <script language="javascript">
      function pageDatailSubmit(id, user_id) {
        console.log("push!!");
        document.pageDatail.fileId.value = id;
        document.pageDatail.userId.value = user_id;
        document.pageDatail.submit();
      }
    </script>
  </x-slot>
</x-pylon_template>
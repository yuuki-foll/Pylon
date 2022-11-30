<x-pylon_template>
  <x-slot name="header"></x-slot>
  <x-slot name="slot">
    <form method="POST" onsubmit="return false" action=" {{route('save')}}" autocomplete="off" class="mx-8 my-8">
      @csrf
      <div class="mb-8">
        <label class="text-base block">ファイル名</label>
        <input type="text" name="file_name" class="w-1/4">
      </div>

      @if($errors->has('file_name'))
      <label class="text-red-500">{{$errors->first('file_name')}}</label>
      @endif

      <div class="mb-8">
        <textarea name=”text” style="width:100%; height:60vh;" class="whitespace-pre-wrap"></textarea>
      </div>
      <button type="button" onclick="submit();" class="bg-blue-800 hover:bg-blue-700 text-white rounded px-4 py-2">保存</button>
    </form>
  </x-slot>
</x-pylon_template>
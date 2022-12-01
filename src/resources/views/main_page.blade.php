<x-pylon_template>
    <x-slot name="header"></x-slot>
    <x-slot name="slot">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center items-center pt-8 sm:pt-0 text-center text-7xl" style="font-family: 'Rubik Distressed', cursive;">
                Pylon
            </div>
        </div>
        <div class="absolute top-3/4  w-screen">        
            <div class="flex justify-center text-center">
                <div class="m-5">            
                    <a href="{{route('makeFile')}}" class="inline-block w-56 text-xl text-white bg-gray-800 px-7 hover:bg-gray-700 rounded-xl" style="font-family: 'Noto Sans JP', sans-serif;">ファイル作成</a>
                </div>
                <div class="m-5">
                    <a href="{{route('fileList')}}" class="inline-block w-56 text-xl text-white bg-gray-800 px-7 hover:bg-gray-700 rounded-xl" style="font-family: 'Noto Sans JP', sans-serif;">ファイル一覧表示</a>
                </div>
            </div>
        </div>
    </x-slot>
</x-pylon_template>

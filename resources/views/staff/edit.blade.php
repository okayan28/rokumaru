<x-layout>
    <h1 class="text-3xl my-8">スタッフ編集</h1>
    <form method="POST" action="/staffs/{{$staff->id}}/edit/confirm">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                スタッフ名を入力して下さい。
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline"
                   name="name" 
                   id="name" 
                   type="text"
                   placeholder="スタッフ名" 
                   @if(old('name'))
                   value="{{old('name')}}"
                   @elseif(isset($staff) and $staff['name'])
                   value="{{$staff['name']}}"
                   @endif
                   >
            @if ($errors->has('name'))
                <div class="text-red-700 text-xs ml-2">{{$errors->first('name')}}</div>
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                パスワードを入力して下さい。
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline" name="password" id="password" type="password" placeholder="パスワード">
            @if ($errors->has('password'))
                <div class="text-red-700 text-xs ml-2">{{$errors->first('password')}}</div>
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password2">
                パスワードをもう一度入力して下さい。
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline" name="password2" id="password2" type="password" placeholder="パスワード（確認）">
            @if ($errors->has('password2'))
            <div class="text-red-700 text-xs ml-2">{{$errors->first('password2')}}</div>
            @endif
        </div>
        <div class="mb-4">
            <a href="/staffs" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る
            </a>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                確認画面へ進む
            </button>
        </div>
    </form>
</x-layout>
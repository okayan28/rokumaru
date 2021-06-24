<x-layout>
    <h1 class="text-3xl my-8">スタッフ編集確認</h1>
    <form method="POST" action="/staffs/{{$data['id']}}/update">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">スタッフ名</label>
            <p>{{$data['name']}}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">パスワード</label>
            <p>●●●●●●●●●</p>
        </div>
        <input type="hidden" name="name" value="{{$data['name']}}">
        <input type="hidden" name="password" value="{{$data['password']}}">
        <div class="mb-4">
            <a href="/staffs/{{$data['id']}}/edit" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る 
            </a>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                保存
            </button>
        </div>
    </form>
</x-layout>
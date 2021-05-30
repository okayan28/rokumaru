<x-layout>
    <h1 class="text-3xl my-8">スタッフ追加確認</h1>
    <form method="POST" action="/staffs/create">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
            スタッフ名
        </label>
        <p>
            {{$data['name']}}
        </p>
    </div>
    <div>password: {{$data['password']}}</div>

        <input type="hidden" name="name" value="{{$data['name']}}">
        <input type="hidden" name="password" value="{{$data['password']}}">
        <div class="mb-4">
            <a href="#" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る 
            </a>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                保存
            </button>
        </div>
    </form>
</x-layout>
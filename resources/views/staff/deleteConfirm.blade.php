<x-layout>
    <h1 class="text-3xl my-8">スタッフ削除確認</h1>
    <form method="POST" action="/staffs/{{$data['id']}}/delete">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">スタッフ名</label>
            <p>{{$data['name']}}</p>
        </div>
        <div class="mb-4">
            <button formaction="/staffs/{{$data['id']}}/edit/back" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る 
            </button>
            <button class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                削除
            </button>
        </div>
    </form>
</x-layout>
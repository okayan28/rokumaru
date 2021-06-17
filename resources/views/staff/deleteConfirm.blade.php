<x-layout>
    <h1 class="text-3xl my-8">スタッフ削除確認</h1>
    <form method="POST" action="/staffs/{{$data['id']}}/delete">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">スタッフ名</label>
            <p>{{$data['name']}}</p>
            <P class="">削除しますか？</P>
        </div>
        <div class="mb-4">
            <a href="/staffs/{{$data['id']}}" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る
            </a>
            <button class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                削除
            </button>
        </div>
    </form>
</x-layout>
<x-layout>
    <h1 class="text-3xl my-8">商品追加確認</h1>
    <form method="POST" action="/products/create">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">商品名</label>
            <p>{{$product['name']}}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">価格</label>
            <p>&yen;{{$product['price']}}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">画像</label>
            <img class="max-w-md" src="{{asset($product['gazou_path'])}}">
        </div>
        <input type="hidden" name="name" value="{{$product['name']}}">
        <input type="hidden" name="price" value="{{$product['price']}}">
        <input type="hidden" name="gazou" value="{{$product['gazou_path']}}">
        <div class="mb-4">
            <a href="/products/new" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る
            </a>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                保存
            </button>
        </div>
    </form>
</x-layout>
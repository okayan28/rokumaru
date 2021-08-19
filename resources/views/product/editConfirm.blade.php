<x-layout>
    <h1 class="text-3xl my-8">商品編集確認</h1>
    <form method="POST" action="/products/{{$product['id']}}/update">
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
            @if ($product['gazou_path'])
            <img class="max-w-md" src="{{asset($product['gazou_path'])}}">
            @else
            <img class="max-w-md" src="{{asset($product->get_gazou_path())}}">
            @endif
        </div>
        <input type="hidden" name="id" value="{{$product['id']}}">
        <input type="hidden" name="name" value="{{$product['name']}}">
        <input type="hidden" name="price" value="{{$product['price']}}">
        <input type="hidden" name="gazou" value="{{$product['gazou_path']}}">
        <div class="mb-4">
            <a href="/products/{{$product['id']}}/edit" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る
            </a>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                保存
            </button>
        </div>
    </form>
</x-layout>
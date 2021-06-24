<x-layout>
    <h1 class="text-3xl mt-8">商品を削除しようとしています。</h1>
    <P class="text-red-600 text-base font-bold mb-8">※本当に削除しますか？※</P>
    <form method="POST" action="/products/{{$product['id']}}/delete">
        @csrf
        <input type="hidden" name="id" value="{{$product['id']}}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">商品名</label>
            <p>{{$product['name']}}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">価格</label>
            <p>&yen;{{$product['price']}}</p>
        </div>
        <div class="mb-4">
            <a href="/products/{{$product['id']}}" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る
            </a>
            <button class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                削除
            </button>
        </div>
    </form>
</x-layout>
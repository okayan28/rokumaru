<x-layout>
    <h1 class="text-3xl my-8">商品詳細</h1>
    <table class="table-auto mb-4">
        <tbody>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <td class="border px-4 py-2">{{$product['id']}}</td>
            </tr>
            <tr>
                <th class="border px-4 py-2">商品名</th>
                <td class="border px-4 py-2">{{$product['name']}}</td>
            </tr>
            <tr>
                <th class="border px-4 py-2">価格</th>
                <td class="border px-4 py-2">{{$product['price']}}</td>
            </tr>
            <tr>
                <th class="border px-4 py-2">サムネイル</th>
                <td class="border px-4 py-2">
                    <img src="{{asset($product['gazou'])}}">
                </td>
            </tr>
        </tbody>
    </table>
    <div class="mb-4">
        <a href="/products" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            戻る
        </a>
        <a href="/products/{{$product['id']}}/edit" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            編集
        </a>
        <a href="/products/{{$product['id']}}/delete/confirm" class="inline-flex items-center bg-red-400 hover:bg-red-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            削除
        </a>
    </div>
</x-layout>
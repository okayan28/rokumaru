<x-layout>
    <h1 class="text-3xl my-8">商品一覧</h1>
    @if (Session::has('flash'))
        <p class="text-yellow-600">{{Session::get('flash')}}</p>
    @endif
    <table class="table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">商品名</th>
                <th class="border px-4 py-2">価格</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{$product->id}}</td>
                    <td class="border px-4 py-2"><a href="/products/{{$product->id}}">{{$product->name}}</a></td>
                    <td class="border px-4 py-2">{{$product->price}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-4">
        <a href="/products/new" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            新規作成
        </a>
    </div>
</x-layout>
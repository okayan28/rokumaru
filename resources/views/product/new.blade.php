<x-layout>
    <h1 class="text-3xl my-8">商品追加</h1>
    <form method="POST" action="/products/new/confirm" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                商品名を入力して下さい。
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline"
                   name="name"
                   id="name" 
                   type="text"
                   placeholder="商品名" 
                   value="{{old('name')}}">
            @if ($errors->has('name'))
                <div class="text-red-700 text-xs ml-2">{{$errors->first('name')}}</div>
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                価格を入力して下さい。
            </label>
            <input class="shadow appearance-none boreditder rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline" 
                   name="price" 
                   id="price"
                   type="number"
                   placeholder="価格"
                   value="{{old('price')}}">
            @if ($errors->has('price'))
                <div class="text-red-700 text-xs ml-2">{{$errors->first('price')}}</div>
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="gazou">
                画像を選んでください。
            </label>
            <input type="file"
                   id="gazou"
                   name="gazou"
                   value="{{old('gazou')}}">
            @if ($errors->has('gazou'))
                <div class="text-red-700 text-xs ml-2">{{$errors->first('gazou')}}</div>
            @endif
        </div>
        <div class="mb-4">
            <a href="/products" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                戻る
            </a>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                確認画面へ進む
            </button>
        </div>
    </form>
</x-layout>
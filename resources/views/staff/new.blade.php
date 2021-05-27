<x-layout>
    <h1 class="text-3xl my-8">スタッフ追加</h1>
    <form action="">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                スタッフ名を入力して下さい。
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline" id="name" type="text" placeholder="スタッフ名">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                パスワードを入力して下さい。
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline" id="name" type="text" placeholder="パスワード">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                パスワードをもう一度入力して下さい。
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none foucus:shadow-outline" id="name" type="text" placeholder="パスワード（確認）">
        </div>
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
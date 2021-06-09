<x-layout>
    <h1 class="text-3xl my-8">スタッフ詳細</h1>
    <table class="table-auto mb-4">
        <tbody>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <td class="border px-4 py-2">{{$staff['id']}}</td>
            </tr>
            <tr>
                <th class="border px-4 py-2">スタッフ名</th>
                <td class="border px-4 py-2">{{$staff['name']}}</td>
            </tr>
        </tbody>
    </table>
    <div class="mb-4">
        <a href="/staffs" class="inline-flex items-center bg-gray-400 hover:bg-gray-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            戻る
        </a>
        <a href="/staffs/{{$staff['id']}}/edit" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            編集
        </a>
        <a href="/staffs/{{$staff['id']}}/delete/confirm" class="inline-flex items-center bg-red-400 hover:bg-red-700 text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            削除
        </a>
    </div>
</x-layout>
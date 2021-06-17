<x-layout>
    <h1 class="text-3xl my-8">スタッフ一覧</h1>
    @if (Session::has('flash'))
        <p>{{Session::get('flash')}}</p>
    @endif
    <table class="table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">スタッフ名</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td class="border px-4 py-2">{{$item->id}}</td>
                    <td class="border px-4 py-2"><a href="/staffs/{{$item->id}}">{{$item->name}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-4">
        <a href="/staffs/new" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            新規作成
        </a>
    </div>
</x-layout>
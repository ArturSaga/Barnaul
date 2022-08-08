<x-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Обращения
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('appeals.create') }}"> Создать обращение </a>
        </div>
    </h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ФИО</th>
            <th>Номер телефона</th>
            <th>Поликлиника</th>
            <th>Причина обращения</th>
            <th>Описание</th>
        </tr>
        @foreach($appeals as $appeal)
            <tr>
                <td>{{$appeal->fio}}</td>
                <td>{{$appeal->phone}}</td>
                <td>{{$appeal->filial}}</td>
                <td>{{$appeal->cause}}</td>
                <td>{{$appeal->description}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>

<x-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Обращения
        <div class="pull-right">
            <a class="btn btn-primary" href="/appeals"> На главную </a>
        </div>
    </h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('appeals.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Фамилия Имя Отчество:</strong>
                    <input type="text" name="fio" class="form-control" placeholder="ФИО">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Номер телефона:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Телефон">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Поликлиника:</strong>
                    <select type="text" name="filial" class="form-control">
                        <option>Поликлиника 1</option>
                        <option>Поликлиника 2</option>
                        <option>Поликлиника 3</option>
                        <option>Поликлиника 4</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Причина:</strong>
                    <input type="text" name="cause" class="form-control" placeholder="Причина">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Описание:</strong>
                    <textarea class="form-control" style="height:150px" name="description"
                              placeholder="Описание"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </form>
</x-layout>

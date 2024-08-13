<link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css" rel="stylesheet">

<div class="d-flex flex-column align-items-center">
    <h3 class="text-center mt-4"> Группа {{ $group->title }} </h3>

    <p class="mt-4">Дата начала обучения: {{ $group->start_from }}</p>
    <p mt-4>Группа {{ $group->is_active ? 'начала' : 'не начала' }} обучение</p>

    @csrf

    <h5 class="mt-4">Список студентов:</h5>
    <ul class="d-flex flex-column align-items-center list-unstyled">
        @foreach ($group->students as $student)
            <li><a href="{{ route('groups.students.show', [$group->id, $student->id]) }}">{{ $student->name }} {{ $student->surname }}</a></li>
        @endforeach
    </ul>
    <a class="btn btn-outline-success mt-4" href="{{ route('groups.students.create', $group->id) }}">Добавить студента</a>

<footer class="footer">
    <a class="btn btn-outline-success mt-4" href="{{ route('groups.index') }}">Вернуться к списку групп</a>
</footer>
</div>
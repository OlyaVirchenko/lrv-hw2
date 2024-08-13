<link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css" rel="stylesheet">

<div class="d-flex flex-column align-items-center">
    <h3 class="text-center mt-4">Информация о студенте</h3>

    <p class="mt-4">Фамилия: {{ $student->surname}}</p>
    <p>Имя: {{$student->name}}</p>
    <p>Группа: {{$student->group->title}}</p>

<footer class="footer">
    <a class="btn btn-outline-success mt-4" href="{{ route('groups.show', $group->id) }}">Вернуться к группе</a>
</footer>
</div>

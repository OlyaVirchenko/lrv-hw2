<link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css" rel="stylesheet">
<div class="d-flex flex-column align-items-center">
    <h3 class="text-center mt-4"> Список групп </h3>

    <div>
    <ul class="d-flex flex-column align-items-center list-unstyled mt-4">
        @foreach ($groups as $group)
            <li><a href="{{ route('groups.show', $group->id) }}">{{ $group->title }}</a></li>
        @endforeach
    </ul>
    <a class="btn btn-outline-success mt-4" href="{{ route('groups.create') }}">Создать новую группу</a>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css" rel="stylesheet">
<div class="d-flex flex-column align-items-center">
    <h3 class="text-center mt-4"> Создание новой группы </h3>

    <form action=" {{ route('groups.store') }} " method="POST" class="d-flex flex-column align-items-center">
        @csrf

        <div>
            <label for="title" class="col-form-label mt-4">Название группы:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="FS-01" >
        </div>

         <div>
            <label class="col-form-label mt-4" for="start_from">Дата начала обучения:
                <input  type="date" class="form-control" id="start_from" name="start_from" placeholder="дд.мм.гггг" >
            </label>
        </div>

        <div>
            <label class="col-form-label mt-4" for="is_active">Группа начала обучение?
                <input type="hidden" value="false">
                <input type="checkbox" id="is_active" name="is_active" value="true" {{ old('is_active') ? 'checked' : '' }}>
            </label>
  
        </div>

        <div>
            <button class="btn btn-outline-success mt-4" type="submit">Создать группу</button>
         </div>
    </form>


<footer class="footer">
    <a class="btn btn-outline-success mt-4 " href="{{ route('groups.index') }}">Вернуться к списку групп</a>
</footer>
</div>


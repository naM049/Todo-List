@props([
    'todo'
])

<button class="btn text-dark px-3 mb-0" data-bs-toggle="modal"
        data-bs-target="#editTodo{{ $todo->id }}">
    <i class="fa-solid fa-pen text-dark me-2"></i>
</button>
<div class="modal fade" id="editTodo{{ $todo->id }}" tabindex="-1" aria-labelledby="#editTodoLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <x-modal.modal-header title="Edit Todo" id="editTodoLabel"/>
            <form action="/todos/{{ $todo->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body text-start">
                    <div class="mb-2">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" name="title" id="title" class="form-control"
                               placeholder="Title" value="{{ $todo->title }}">
                        @error('title')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-2">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea name="description" id="description" class="form-control"
                                  placeholder="Description" rows="4">{{ $todo->description }}</textarea>
                    </div>
                    <div class="mb-2">
                        <label for="completed"
                               class="col-form-label d-flex align-items-center"><span class="me-2">Completed:</span>
                            <input type="checkbox" id="completed" name="completed"
                                   class="mr-2" {{ $todo->completed?'checked':'' }}>
                        </label>
                    </div>
                </div>
                <x-modal.modal-footer buttonName="Save" class="btn-primary"/>
            </form>
        </div>
    </div>
</div>

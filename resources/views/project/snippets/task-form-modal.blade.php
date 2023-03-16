<div class="modal-container open-task-animated" id="task-form-modal">
    <header>
        <h2>Create Task</h2>
    </header>
    <hr>

    <main>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="hidden" name="projetoId" value="{{ $project->id }}">
            <input type="hidden" name="coluna">

            <fieldset class="titulo">
                <label>Title</label>
                <input type="text" name="titulo" required>
            </fieldset>


            <fieldset class="cor">
                <label>Color</label>
                <select name="cor">
                    <option>Default</option>
                    <option value="azul">Blue</option>
                    <option value="vermelho">Red</option>
                    <option value="verde">Green</option>
                    <option value="amarelo">Yellow</option>
                    <option value="rosa">Pink</option>
                    <option value="roxo">Purple</option>
                </select>
            </fieldset>

            <fieldset class="descricao">
                <label>Description</label>
                <textarea name="descricao" rows="5"></textarea>
            </fieldset>

            <fieldset class="categoria">
                <label>Category</label>
                <select name="categoria">
                    <option></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset class="etiqueta">
                <label>Tag</label>
                <input type="text" name="etiqueta" id="">
            </fieldset>

            <fieldset class="designado">
                <label>Designated</label>
                <select name="designado">
                    <option></option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset class="referencia">
                <label>Reference</label>
                <input type="text" name="referencia">
            </fieldset>


            <fieldset class="evento">
                <label>event</label>
                <input type="date" name="evento">
            </fieldset>

            <fieldset class="vencimento">
                <label>Expiration</label>
                <input type="date" name="vencimento">
            </fieldset>

            <div class="enviar">
                <input type="submit" class="btn blue">
            </div>
        </form>
    </main>
</div>

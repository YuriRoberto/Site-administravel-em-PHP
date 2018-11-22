<h3>Administração de páginas</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" clas="form-control" placeholder="Aqui vai o título da página..." required>
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" 
            placeholder="URL amigável, deixe em branco para informar a página inicial..." >
        </div>
    </div>

    <div class="form-group">
        <input id="pagesBody" type="hidden" name="body" required>
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>

</form>

<hr>

<a href="/admin/pages" class="btn btn-secondary">Ir para home</a>

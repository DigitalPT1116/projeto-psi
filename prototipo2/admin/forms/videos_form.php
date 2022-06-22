<fieldset>

    <div class="form-group">
        <label for="title">Titulo *</label>
          <input type="text" name="title" value="<?php echo htmlspecialchars($edit ? $videos['title'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Titulo" class="form-control" required="required" id = "title" >
    </div> 

    <div class="form-group">
        <label for="description">Descricao *</label>
        <input type="text" name="description" value="<?php echo htmlspecialchars($edit ? $videos['description'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Descricao" class="form-control" required="required" id="description">
    </div> 

    <div class="form-group">
        <label for="link">Link *</label>
        <input type="text" name="link" value="<?php echo htmlspecialchars($edit ? $videos['link'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Link video" class="form-control" required="required" id="link">
    </div> 

    <div class="form-group">
        <label for="tags">tags *</label>
        <input type="text" name="tags" value="<?php echo htmlspecialchars($edit ? $videos['tags'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Tags" class="form-control" required="required" id="tags">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>

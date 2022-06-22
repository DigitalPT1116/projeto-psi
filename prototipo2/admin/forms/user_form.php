<fieldset>

    <div class="form-group">
        <label for="id">ID *</label>
          <input type="text" name="id" value="<?php echo htmlspecialchars($edit ? $utilizador['id'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="ID" class="form-control" required="required" id = "ID" >
    </div> 


    <div class="form-group">
        <label for="username">Username *</label>
          <input type="text" name="username" value="<?php echo htmlspecialchars($edit ? $utilizador['username'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Username" class="form-control" required="required" id = "username" >
    </div> 

    <div class="form-group">
        <label for="fullname">Nome Completo *</label>
        <input type="text" name="fullname" value="<?php echo htmlspecialchars($edit ? $utilizador['fullname'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Nome Completo" class="form-control" required="required" id="fullname">
    </div> 

    <div class="form-group">
        <label for="dateofbirth">Data de nascimento *</label>
        <input type="date" name="dateofbirth" value="<?php echo htmlspecialchars($edit ? $utilizador['dateofbirth'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Data de Nascimento" class="form-control" required="required" id="dateofbirth">
    </div> 

    <div class="form-group">
        <label for="email">email *</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($edit ? $utilizador['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Email" class="form-control" required="required" id="email">
    </div> 
    <div class="form-group">
        <label for="password">password *</label>
        <input type="text" name="password" value="<?php echo htmlspecialchars($edit ? $utilizador['password'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Password" class="form-control" required="required" id="password">
    </div> 
    <div class="form-group">
        <label for="cargo">Cargo *</label>
        <input type="text" name="cargo" value="<?php echo htmlspecialchars($edit ? $utilizador['cargo'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="cargo" class="form-control" required="required" id="cargo">
    </div> 
    <div class="form-group">
        <label for="fk_playlist ">Playlits *</label>
        <input type="text" name="fk_playlist" value="<?php echo htmlspecialchars($edit ? $utilizador['fk_playlist'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Fk_playlist" class="form-control" required="required" id="fk_playlist">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>

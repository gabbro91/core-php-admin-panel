<fieldset>
    <div class="form-group">
        <label for="denominazione">Denominazione *</label>
        <input type="text" name="denominazione" value="<?php echo htmlspecialchars($edit ? $farmacie['denominazione'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Denominazione" class="form-control" required="required" id="denominazione">
    </div>

    <div class="form-group">
        <label for="emailFarmacia">Email *</label>
        <input type="text" name="emailFarmacia" value="<?php echo htmlspecialchars($edit ? $farmacie['emailFarmacia'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Email" class="form-control" required="required" id="email">
    </div>

    <div class="form-group">
        <label for="partita_iva">P.IVA *</label>
        <input type="text" name="partita_iva" value="<?php echo htmlspecialchars($edit ? $farmacie['partita_iva'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="partita_iva" class="form-control" required="required" id="partita_iva">
    </div>

    <div class="form-group">
        <label for="indirizzo">Indirizzo</label>
        <textarea name="indirizzo" placeholder="Indirizzo" class="form-control" id="indirizzo"><?php echo htmlspecialchars($edit ? $farmacie['indirizzo'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

<!--    <div class="form-group">-->
<!--        <label for="fk_id_tipologia_farmacia">Tipologia</label>-->
<!--        --><?php //$opt_arr = array("Farmacista"); ?>
<!--        <select name="fk_id_tipologia_farmacia" class="form-control selectpicker" required>-->
<!--            <option value="">Seleziona la tipologia</option>-->
<!--            --><?php
//            foreach ($opt_arr as $opt) {
//                $sel = $edit && $opt == $farmacia['fk_id_tipologia_farmacia'] ? "selected" : "";
//                echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
//            }
//            ?>
<!--        </select>-->
<!--    </div>-->

    <div class="form-group">
        <label for="telefonoFarmacia">Telefono</label>
        <input name="telefonoFarmacia" value="<?php echo htmlspecialchars($edit ? $farmacie['telefonoFarmacia'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="987654321" class="form-control" type="text" id="telefonoFarmacia">
    </div>

    <div class="form-group">
        <label for="cap">CAP</label>
        <input name="cap" value="<?php echo htmlspecialchars($edit ? $farmacie['cap'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="05100" class="form-control" type="text" id="cap">
    </div>

    <!-- Campo di input per l'ID utente -->
    <div class="form-group">
        <label for="fk_id_utente">ID Utente *</label>
        <input type="number" name="fk_id_utente" value="<?php echo htmlspecialchars($edit ? $farmacie['fk_id_utente'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="ID Utente" class="form-control" required="required" id="fk_id_utente">
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-warning">Save <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>

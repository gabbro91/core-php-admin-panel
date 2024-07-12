<fieldset>
    <!-- Form Name -->
    <legend>Add new user</legend>

    <!-- Text input-->
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label">Email</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" name="email" autocomplete="off" placeholder="Email" class="form-control" value="<?php echo ($edit) ? $admin_account['email'] : ''; ?>">
            </div>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" autocomplete="off" placeholder="Password" class="form-control" required="" autocomplete="off">
            </div>
        </div>
    </div>

    <!-- Text input-->


    <div class="form-group">
        <label class="col-md-4 control-label">User type</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="fk_id_ruolo" value="1" required="" <?php echo ($edit && $admin_account['fk_id_ruolo'] =='1') ? "checked": "" ; ?>/> user
                </label>
            </div>
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="fk_id_ruolo" value="2" required="" <?php echo ($edit && $admin_account['fk_id_ruolo'] =='2') ? "checked": "" ; ?>/> super user
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="fk_id_ruolo" value="2" required="" <?php echo ($edit && $admin_account['fk_id_ruolo'] =='2') ? "checked": "" ; ?>/> Admin
                </label>
            </div>
        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning">Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
</fieldset>

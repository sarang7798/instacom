<div class="row">
    <div class="col-lg-12">
        <a href="<?php echo site_url('Contact/Add_contact'); ?>"><button class="btn btn-success pull-right">Add Contact</button></a>
        <button style="    margin: 0px 0px 10px 0px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#customer" >Create group</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <?php //echo form_open('Contact/Add_group'); ?>
    <table  class="table table-bordered table-responsive table-striped">

        <tr>
<!--            <th><label class="control-label">Check</label></th>-->
            <th><label class="control-label">Mobile</label></th>
            <th><label class="control-label">First Name</label></th>
            <th><label class="control-label">Last Name</label></th>
            <th><label class="control-label">Edit</label></th>
            <th><label class="control-label">Delete</label></th>


        </tr>
        <?php foreach ($show as $sh) :
            ?>
            <tr>

                <!--                <td><input type="checkbox" class="" name="check[]" value="<?php echo $sh->contact_id; ?>"/></td>-->
                <td><?php echo $sh->mobile; ?></td>
                <td><?php echo $sh->fname; ?></td>
                <td><?php echo $sh->lname; ?></td>
                <td><a href="<?php echo site_url() ?>/Contact/Edit_Contact?id=<?php echo $sh->contact_id; ?>">Edit</a></td>
                <td><a href="<?php echo site_url() ?>/Contact/Delete_Contact?id=<?php echo $sh->contact_id; ?>">Delete</a></td>

            </tr>            
        <?php endforeach ?>

    </table>
<<<<<<< HEAD
    

    <!--    <div class="row">
            <div class="col-lg-6 ">
            </div>
            <div class="col-lg-3 ">
                <select class="form-control pull-right" name="list">
                    <option value="">-Select Group-</option>
    <?php foreach ($list as $li): ?>
                                <option value="<?php echo $li->id ?>"><?php echo $li->group_name; ?></option>
    <?php endforeach; ?>
   
                </select>
=======
</div>
</div>
<!--</form>-->
<div  class="modal fade " tabindex="-1" role="dialog" aria-labelledby="ModalLabel" id="customer" aria-hidden="true">
    <div style="width:40%;" class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"> Create Group</h4>
            </div>

            <?php echo form_open('Contact/create_group') ?>
            <div class="modal-body">
                <div class=" form-group">
                    Name: <span class="error">*</span> <input type="text" class="form-control" name="name" placeholder="Enter Group Name"/>
                </div>
>>>>>>> 8993197505c49a7904931b3bd43b3b8f96a955b9
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit"  name="save" value="save" class="btn btn-primary"/ >
            </div>
<<<<<<< HEAD
        </div>-->
    <!--</form>--> 
    <div  class="modal fade " tabindex="-1" role="dialog" aria-labelledby="ModalLabel" id="customer" aria-hidden="true">
        <div style="width:40%;" class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel"> Create Group</h4>
                </div>
                
                    <?php echo form_open('Contact/create_group') ?>
                    <div class="modal-body">
                        <div class=" form-group">
                            Name: <span class="error">*</span> <input type="text" class="form-control" name="name" placeholder="Enter Group Name"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit"  name="save" value="save" class="btn btn-primary"/ >
                    </div>
                    </form>
=======
            </form>
>>>>>>> 8993197505c49a7904931b3bd43b3b8f96a955b9

        </div>
    </div>
</div>
<<<<<<< HEAD
</div>
=======
>>>>>>> 8993197505c49a7904931b3bd43b3b8f96a955b9

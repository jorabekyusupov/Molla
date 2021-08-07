<?php if ($_POST['edit'] == 'p_edit') { ?>
    <form action="./assets/php/action/update.php" method="post" enctype="multipart/form-data">
        <?php foreach ($u_product as $item) {  ?>


            <div class="card">
                <div class="card-header">
                    <h4>Write Product</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label hidden class="col-form-label text-md-right col-12 col-md-3 col-lg-3">id</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="id" hidden value="<?= $item->id ?>" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label hidden class="col-form-label text-md-right col-12 col-md-3 col-lg-3">updated_at</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="updated_at" hidden value="<? $timezone  = +5; echo gmdate("Y/m/j H:i:s", time() + 3600 * ($timezone + date("I"))); ?>" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="title" value="<?= $item->title ?>" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="name" value="<?= $item->name ?>" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Currency</label>
                        <div class="input-group col-sm-12 col-md-7">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    $
                                </div>
                            </div>
                            <input type="text" class="form-control currency" name="price" value="<?= $item->price ?>" required>
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="category_id" required>
                                <?php foreach ($category as $items) { ?>

                                    <option value="<?= $items->id ?>" <?= $items->id == $item->category_id ? 'selected' : '' ?>><?= $items->name ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discription</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="summernote-simple" name="discription" required><?= $item->discription ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Main Image</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image" id="image-upload" value="<?= $item->image ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discription</label>
                        <div class="col-sm-12 col-md-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Multiple Upload</h4>
                                </div>
                                <div class="card-body">

                                    <div class="fallback">
                                        <input name="file[]" type="file" multiple required />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Author</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="user_id" required>

                                <?php foreach ($admin as $item) { ?>
                                    <option selected value="<?= $item->id ?>"><?= $item->username ?></option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="status">
                                <option selected value="true">Active</option>
                                <option value="false">Deactive</option>

                            </select>
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary" name="p_update" type="submit">Updated Product</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>
<?php   } ?>
<?php } ?>
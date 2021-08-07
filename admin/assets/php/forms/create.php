<?php if ($_POST['create'] == 'p_create') {  ?>

  <form action="./assets/php/action/create.php" method="post" enctype="multipart/form-data">
  
    <div class="card">
      <div class="card-header">
        <h4>Write Product</h4>
      </div>
      <div class="card-body">
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="title" required>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About</label>
          <div class="col-sm-12 col-md-7">
            <textarea class="summernote-simple" name="name" required></textarea>
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
            <input type="text" class="form-control currency" name="price" required>
          </div>
        </div>
  
  
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
          <div class="col-sm-12 col-md-7">
            <select class="form-control selectric" name="category_id" required>
              <?php foreach ($category as $item) { ?>
  
                <option value="<?= $item->id ?>"><?= $item->name ?></option>
  
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discription</label>
          <div class="col-sm-12 col-md-7">
            <textarea class="summernote-simple" name="discription" required></textarea>
          </div>
        </div>
       
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Main Image</label>
          <div class="col-sm-12 col-md-7">
            <div id="image-preview" class="image-preview">
              <label for="image-upload" id="image-label">Choose File</label>
              <input type="file" name="image" id="image-upload" required />
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
            <button class="btn btn-primary" name="p_create" type="submit">Create Product</button>
          </div>
        </div>
      </div>
    </div>
    
  </form>
<?php  } else if ($_POST['create'] == 'c_create') 
{?>
  <form action="./assets/php/action/create.php" method="post">
    <div class="card">
        <div class="card-header">
            <h4>Write Category</h4>
        </div>
        <div class="card-body">
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="parent_id">
                        <option hidden disabled selected >Parent Category</option>   
                        <?php foreach ( $category as $item) { ?>
                        
                        <option value="<?= $item->id ?>"><?= $item->name ?></option>
                        
                        <?php } ?>
                    </select>
                </div>
            </div>
    
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary" type="submit" name="c_create">Create Post</button>
                </div>
            </div>
        </div>
    </div>
</form>
  <?php } ?>
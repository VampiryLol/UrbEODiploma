<option
    value="<?= $category['id']?>"
    <?php if($category['id'] == $this->model->category_id) echo ' selected'?> >
    <?= $tab . $category['type']?> </option>
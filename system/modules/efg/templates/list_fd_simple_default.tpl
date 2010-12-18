
<div class="<?php echo $this->class; ?> listing block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>
<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<?php if ($this->searchable): ?>
<!-- indexer::stop -->
<div class="list_search">
<form action="<?php echo $this->action; ?>" method="get">
<div class="formbody">
<input type="hidden" name="order_by" value="<?php echo $this->order_by; ?>" />
<input type="hidden" name="sort" value="<?php echo $this->sort; ?>" />
<input type="hidden" name="per_page" value="<?php echo $this->per_page; ?>" />

<?php if ($this->search_form_type == 'dropdown'): ?>
<select name="search" class="select">
<?php echo $this->search_fields; ?>
</select>
<input type="text" name="for" class="text" value="<?php echo $this->for; ?>" />
<input type="submit" class="submit" value="<?php echo $this->search_label; ?>" />
<?php endif; ?>

<?php if ($this->search_form_type == 'singlefield'): ?>
<input type="hidden" name="search" value="<?php echo $this->search_fields; ?>" />
<input type="text" name="for" class="text" value="<?php echo $this->for; ?>" />
<input type="submit" class="submit" value="<?php echo $this->search_label; ?>" />
<?php endif; ?>

<?php if ($this->search_form_type == 'multiplefields'): ?>
<input type="hidden" name="search" value="<?php echo $this->search_fields; ?>" />
<?php foreach ($this->search_searchfields as $field): ?>
<div class="search_field <?php echo $field['name']; ?>">
<label for="search_for_<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label>
<input type="text" id="search_for_<?php echo $field['name']; ?>" name="for[<?php echo $field['name']; ?>]" class="text" value="<?php echo $this->for[$field['name']]; ?>" />
</div>
<?php endforeach; ?>
<input type="submit" class="submit" value="<?php echo $this->search_label; ?>" />
<?php endif; ?>

</div>
</form>
</div>
<!-- indexer::continue -->
<?php endif; ?>

<?php if ($this->list_perPage): ?>
<div class="list_per_page">
<form action="<?php echo $this->action; ?>" method="get">
<div class="formbody">
<input type="hidden" name="order_by" value="<?php echo $this->order_by; ?>" />
<input type="hidden" name="sort" value="<?php echo $this->sort; ?>" />
<input type="hidden" name="search" value="<?php echo $this->search; ?>" />
<input type="hidden" name="for" value="<?php echo $this->for; ?>" />
<select name="per_page" class="select">
<?php if ($this->list_perPage && $this->list_perPage != 10): ?>
  <option value="<?php echo $this->list_perPage; ?>"<?php if ($this->per_page == $this->list_perPage): ?> selected="selected"<?php endif; ?>><?php echo $this->list_perPage; ?></option>
<?php endif; ?>
  <option value="10"<?php if ($this->per_page == 10): ?> selected="selected"<?php endif; ?>>10</option>
  <option value="20"<?php if ($this->per_page == 20): ?> selected="selected"<?php endif; ?>>20</option>
  <option value="50"<?php if ($this->per_page == 50): ?> selected="selected"<?php endif; ?>>50</option>
  <option value="100"<?php if ($this->per_page == 100): ?> selected="selected"<?php endif; ?>>100</option>
  <option value="250"<?php if ($this->per_page == 250): ?> selected="selected"<?php endif; ?>>250</option>
  <option value="500"<?php if ($this->per_page == 500): ?> selected="selected"<?php endif; ?>>500</option>
</select>
<input type="submit" class="submit" value="<?php echo $this->per_page_label; ?>" />
</div>
</form>
</div>
<?php endif; ?>

<?php if ($this->exportable): ?>
<div class="list_export">
<form action="<?php echo $this->action; ?>" method="get">
<div class="formbody">
<input type="hidden" name="order_by" value="<?php echo $this->order_by; ?>" />
<input type="hidden" name="sort" value="<?php echo $this->sort; ?>" />
<input type="hidden" name="search" value="<?php echo $this->search; ?>" />
<input type="hidden" name="for" value="<?php echo $this->for; ?>" />
<input type="hidden" name="per_page" value="<?php echo $this->per_page; ?>" />
<input type="hidden" name="act" value="export" />
<input type="submit" class="submit" value="<?php echo $this->textlink_export[0]; ?>" />
</div>
</form>
</div>
<?php endif; ?>

<div class="list_totalnumber"><?php echo $this->totalNumberOfItems['content']; ?></div>

<?php foreach ($this->listItems as $item => $fields): $intField = -1; ?>
<?php foreach ($fields as $field): $intField++; ?>
<?php if ($intField == 0): ?>
<div class="record <?php echo $field['record_class']; ?>">
<?php endif; ?>
<div class="field <?php echo $field['class']; ?>">
<?php echo $field['label']; ?>:&nbsp;
<?php if ($field['type']=='file' && $field['multiple']): ?>
<?php foreach ($field['content'] as $file): ?>	
<?php if ($file['display']=='image'): ?><img src="<?php echo($this->getImage($file['src'], 80, null)); ?>" alt="<?php echo urldecode(basename($file['src'])); ?>" title="<?php echo urldecode(basename($file['src'])); ?>" /> <?php else: ?><img src="<?php echo $file['icon']; ?>" alt="<?php echo $file['linkTitle']; ?>" />&nbsp;<a href="<?php echo $file['href']; ?>"><?php echo $file['linkTitle'] . $file['size']; ?></a><?php endif; ?>
<?php endforeach; ?>
<?php elseif ($field['type']=='file' && $field['src']): ?><?php if ($field['display']=='image'): ?><img src="<?php echo($this->getImage($field['src'], 80, null)); ?>" alt="<?php echo urldecode(basename($field['src'])); ?>" title="<?php echo urldecode(basename($field['src'])); ?>" /> <?php else: ?><img src="<?php echo $field['icon']; ?>" alt="<?php echo $field['linkTitle']; ?>" />&nbsp;<a href="<?php echo $field['href']; ?>"><?php echo $field['linkTitle'] . $field['size']; ?></a><?php endif; ?>
<?php else: ?><?php echo $field['content']; ?>
<?php endif; ?>

</div>
<?php endforeach; ?>

<?php if($this->details): ?><div class="fd_info"><a href="<?php echo $field['link_details']; ?>" class="fd_info" title="<?php echo $this->textlink_details[1]; ?>"><?php echo $this->textlink_details[0]; ?></a></div>
<?php endif; ?>
<?php if ($this->arrEditAllowed[$field['id']]): ?>
<div class="fd_edit"><a href="<?php echo $field['link_edit']; ?>" class="fd_edit" title="<?php echo $this->textlink_edit[1]; ?>"><?php echo $this->textlink_edit[0]; ?></a></div>
<?php endif; ?>
<?php if ($this->arrDeleteAllowed[$field['id']]): ?>
<div class="fd_delete"><a href="<?php echo $field['link_delete']; ?>" class="fd_delete" onclick="if (!confirm('<?php echo $this->text_confirmDelete; ?>')) return false;" title="<?php echo $this->textlink_delete[1]; ?>"><?php echo $this->textlink_delete[0]; ?></a></div>
<?php endif; ?>
<?php if ($this->arrExportAllowed[$field['id']]): ?>
<div class="fd_export"><a href="<?php echo $field['link_export']; ?>" class="fd_export" title="<?php echo $this->textlink_export[1]; ?>"><?php echo $this->textlink_export[0]; ?></a></div>
<?php endif; ?>
</div>
<?php endforeach; ?>

<?php echo $this->pagination; ?>

</div>
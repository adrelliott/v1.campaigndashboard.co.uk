<h3>See a list of all the dataset records here. (<?php echo anchor('config/dataset/view/edit/new', 'Create a new Dataset') ;?>)</h3>
<?php include('tables/dataset_table.php');
 print_array($this->data);
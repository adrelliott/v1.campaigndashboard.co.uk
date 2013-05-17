<h3>See a list of all the User records here. (<?php echo anchor('config/user/view/edit/new', 'Create a new User') ;?>)</h3>
<?php include('tables/user_table.php');
 print_array($this->data);
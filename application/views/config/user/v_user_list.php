<h3>See a list of all the User records here. (<?php echo anchor('config/user/view/edit/new', 'Create a new User') ;?>, or <?php echo anchor('config/user?show_deleted', 'See deleted records') ;?>)</h3>
<?php include('tables/user_table.php');
 print_array($this->data);
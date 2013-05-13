<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo form_open('admin/categories/create');
        echo "<p><label for='catname'>Name</label><br/>";
        $data = array('name' => 'name', 'id' => 'catname', 'size' => 25);
        echo form_input($data) . "</p>";

        echo "<p><label for='short'>Short Description</label><br/>";
        $data = array('name' => 'shortdesc', 'id' => 'short', 'size' => 40);
        echo form_input($data) . "</p>";

        echo "<p><label for='long'>Long Description</label><br/>";
        $data = array('name' => 'longdesc', 'id' => 'long', 'rows' => 5, 'cols' => '40');
        echo form_textarea($data) . "</p>";

        echo "<p><label for='status'>Status</label><br/>";
        $options = array('active' => 'active', 'inactive' => 'inactive');
        echo form_dropdown('status', $options) . "</p>";

        echo "<p><label for='parent'>Category Parent</label><br/>";
        echo form_dropdown('parentid', $categories) . "</p>";


        echo form_submit('submit', 'create category');
        echo form_close();
        ?>
    </body>
</html>

<!-- Main page container -->
<section class="container" role="main">
    
    <!-- Alert Box -->
    <div class="alert alert-error fade in">
        <button class="close" data-dismiss="alert">&times;</button >
        <strong>Error alert box!</strong> Nice red alert when something goes wrong.
    </div>
    <!-- /Alert Box -->
    
    <!-- Data block -->
    <div class="row">
        
        <article class="span12 blue data-block">
            <header>
                <h2><span class="icon-thumbs-up"></span> Your Contacts</h2>
                <ul class="data-header-actions">
                    <li>

                        <!-- DataTable column filter -->
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Column filter</a>
                        <ul class="dropdown-menu datatable-controls">
                            <li><label class="checkbox" for="dt_col_1"><input type="checkbox" value="0" id="dt_col_1" name="toggle-cols" checked="checked"> Rendering engine</label></li>
                            <li><label class="checkbox" for="dt_col_2"><input type="checkbox" value="1" id="dt_col_2" name="toggle-cols" checked="checked"> Browser</label></li>
                            <li><label class="checkbox" for="dt_col_3"><input type="checkbox" value="2" id="dt_col_3" name="toggle-cols" checked="checked"> Platform(s)</label></li>
                            <li><label class="checkbox" for="dt_col_4"><input type="checkbox" value="3" id="dt_col_4" name="toggle-cols" checked="checked"> Engine version</label></li>
                            <li><label class="checkbox" for="dt_col_5"><input type="checkbox" value="4" id="dt_col_5" name="toggle-cols" checked="checked"> CSS grade</label></li>
                        </ul>
                        <!-- /DataTable column filter -->

                    </li>
                </ul>
            </header>
            <section>

                <table class="datatable table table-striped table-bordered table-hover" id="example-2">
                    <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>4</td>
                            <td>X</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td>5.5</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
                <section class="span2 offset9">
                    <button class="btn btn-alt btn-inverse pull-right btn-block ">Create New Contact</button>
                </section>
                
            </section>

        </article>
        
    </div>
    <!-- /Grid row -->

</section>
<!-- /Main page container -->
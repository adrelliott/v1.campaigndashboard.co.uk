<!-- Main page container -->
<section class="container" role="main">
    
    <!-- Alert Box -->
    <div class="alert alert-error fade in">
        <button class="close" data-dismiss="alert">&times;</button >
        <strong>Error alert box!</strong> Nice red alert when something goes wrong.
    </div>
    <!-- /Alert Box -->
    
    <!-- Grid row -->
    <div class="row">

        <!-- Left hand col -->
        <div class="span8">
            
            <!-- Welcome screen -->
            <div class="hero-unit">
                    <h1>Hello Al!</h1>
                    <p>While you've been away, I've been super busy helping your customers to love you that little bit more.</p>
                    <p><a class="btn btn-alt btn-info btn-large pull-right">Learn more</a></p>
            </div>
            <!-- /Welcome screen -->
            
        </div>
        <!-- /Left hand col -->
        
        
        <!-- Right hand col -->
        <div class="span4">

            <!-- Grid row -->
            <div class="row">
                
                <!-- Data block -->
                <a class="span2 data-block widget-block" href="#">
                    <section>
                        <span class="icon-pencil"></span>
                        <strong>Send an Email</strong>
                    </section>
                </a>
                <!-- /Data block -->
                
                <!-- Data block -->
                <a class="span2 data-block widget-block" href="#">
                    <section>
                        <span class="icon-search"></span>
                        <strong>Find Someone</strong>
                    </section>
                </a>
                <!-- /Data block -->

                <!-- Data block -->
                <a class="span2 data-block widget-block" href="#">
                    <section>
                        <span class="icon-address-book-alt"></span>
                        <strong>Add a Person</strong>
                    </section>
                </a>
                <!-- /Data block -->
                
                <!-- Data block -->
                <a class="span2 data-block widget-block" href="#">
                        <section>
                                <span class="icon-file-new-alt"></span>
                                <strong>Add a Product</strong>
                        </section>
                </a>
                <!-- /Data block -->
                

            </div>
            <!-- /Grid row -->

        </div>
        <!-- /Right hand col -->
        
        

    </div>
    <!-- /Grid row -->
    
    <!-- Data block -->
    <div class="row">
        
        <article class="span12 blue data-block">
            <header>
                <h2><span class="icon-thumbs-up"></span> Your orders</h2>
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

            </section>

        </article>
        
    </div>
					
					<!-- /Data block -->

    <!-- Grid row -->
    <div class="row">

        <article class="span7 data-block todo-block">

            <div class=" data-block">
                <header>
                    <h2><span class="awe-edit"></span> Your Tasks</h2>
                </header>
                <section>
                    <form>
                        <table class="table">
                            <tbody>
                                <tr class="done">
                                    <td><input type="checkbox" value="done" checked=""></td>
                                    <td>
                                        <p>doItNow();</p>
                                        <span>completed <time>Apr 12</time></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value="done"></td>
                                    <td>
                                        <p><span class="label label-important">Important</span> meeting</p>
                                        <span>due <time>Apr 12</time></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" value="done"></td>
                                    <td>
                                        <p>take out the trash</p>
                                        <span>due <time>Apr 17</time></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
            </div>

        </article>
        <!-- /Data block -->
        
        <!-- Data block -->
        <article class="span5">

            <div class=" data-block">
                <header>
                    <h2><span class="icon-glasses"></span> Campaign Spotlight</h2>
                    <ul class="data-header-actions">
                        <li class="demoTabs active"><a href="#one">First</a></li>
                        <li class="demoTabs"><a href="#two">Second</a></li>
                    </ul>
                </header>
                <section class="tab-content">
                    <div class="tab-pane active" id="one">
                        <h3>First tab</h3>
                        <p>Lorem ipsum do</p>
                    </div>
                    <div class="tab-pane" id="two">
                        <h3>second tab</h3>
                        <p>2Lorem 22222 ipsum do</p>
                    </div>
                </section>
            </div>

        </article>
        <!-- /Data block -->
        
    </div>
    <!-- /Grid row -->

</section>
<!-- /Main page container -->
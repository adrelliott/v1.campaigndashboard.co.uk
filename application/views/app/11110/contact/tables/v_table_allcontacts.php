<?php 
echo form_open('app/ajax/form');
$attr = array(
    'name' => 'testname', 'id' => 'countries_uk1', 'data-source' => site_url('app/ajax/autocomplete/contacts/Id?FirstName&LastName&Id'));
echo form_input($attr);
echo form_hidden('ContactId');
echo form_submit('Go');
echo form_close();?>


<hr />

<table class="ajax-table" data-table-source="<?php echo site_url('app/ajax/get_table/contacts?Id&FirstName&LastName&dID'); ?>" >
    <thead>
        <tr>
            <th width="20%">Id</th>
            <th width="25%">FirstName</th>
            <th width="25%">Last Name</th>
            <th width="15%">dID</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="5" class="dataTables_empty">Loading data from server...</td>
        </tr>
    </tbody>
</table>



<table class="dataTable" >
    <thead>
        <tr>

            <th></th>
            <th class="align-left">Rendering engine</th>
            <th class="align-left">Browser</th>
            <th class="align-left">Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>

        </tr>
    </thead>
    <tbody>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>

            <td>Win 95+</td>
            <td class="center">4</td>
            <td class="center">X</td>
        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Trident</td>

            <td>Internet Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center">5</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>

            <td>Trident</td>
            <td>Internet
                Explorer 5.5</td>

            <td>Win 95+</td>
            <td class="center">5.5</td>
            <td class="center">A</td>
        </tr>

        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>Internet
                Explorer 6</td>

            <td>Win 98+</td>
            <td class="center">6</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>Internet Explorer 7</td>

            <td>Win XP SP2+</td>

            <td class="center">7</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>

            <td>Win XP</td>
            <td class="center">6</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Firefox 1.0</td>

            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.7</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Firefox 1.5</td>

            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Firefox 2.0</td>

            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Firefox 3.0</td>

            <td>Win 2k+ / OSX.3+</td>

            <td class="center">1.9</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Camino 1.0</td>

            <td>OSX.2+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Camino 1.5</td>

            <td>OSX.3+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Netscape 7.2</td>

            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center">1.7</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Netscape Browser 8</td>

            <td>Win 98SE+</td>
            <td class="center">1.7</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>

            <td>Win 98+ / OSX.2+</td>

            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.0</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Mozilla 1.1</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.2</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.2</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.3</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.3</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.4</td>

            <td>Win 95+ / OSX.1+</td>

            <td class="center">1.4</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.5</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.5</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Mozilla 1.6</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.6</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.7</td>

            <td>Win 98+ / OSX.1+</td>
            <td class="center">1.7</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.8</td>

            <td>Win 98+ / OSX.1+</td>
            <td class="center">1.8</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>

            <td>Win 98+ / OSX.2+</td>

            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Epiphany 2.20</td>

            <td>Gnome</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>

            <td>Safari 1.2</td>

            <td>OSX.3</td>
            <td class="center">125.5</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>Safari 1.3</td>

            <td>OSX.3</td>
            <td class="center">312.8</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>Safari 2.0</td>

            <td>OSX.4+</td>
            <td class="center">419.3</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>Safari 3.0</td>

            <td>OSX.4+</td>

            <td class="center">522.1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>

            <td>OSX.4+</td>
            <td class="center">420</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>

            <td>iPod Touch / iPhone</td>

            <td>iPod</td>
            <td class="center">420.1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>S60</td>

            <td>S60</td>
            <td class="center">413</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 7.0</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">-</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 7.5</td>

            <td>Win 95+ / OSX.2+</td>

            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 8.0</td>

            <td>Win 95+ / OSX.2+</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>

            <td>Opera 8.5</td>

            <td>Win 95+ / OSX.2+</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 9.0</td>

            <td>Win 95+ / OSX.3+</td>
            <td class="center">-</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 9.2</td>

            <td>Win 88+ / OSX.3+</td>
            <td class="center">-</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 9.5</td>

            <td>Win 88+ / OSX.3+</td>

            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera for Wii</td>

            <td>Wii</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>

            <td>Nokia N800</td>

            <td>N800</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Nintendo DS browser</td>

            <td>Nintendo DS</td>
            <td class="center">8.5</td>
            <td class="center">C/A<sup>1</sup></td>

        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>KHTML</td>

            <td>Konqureror 3.1</td>
            <td>KDE 3.1</td>
            <td class="center">3.1</td>

            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>KHTML</td>

            <td>Konqureror 3.3</td>
            <td>KDE 3.3</td>

            <td class="center">3.3</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>KHTML</td>

            <td>Konqureror 3.5</td>

            <td>KDE 3.5</td>
            <td class="center">3.5</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Tasman</td>

            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td class="center">-</td>
            <td class="center">X</td>
        </tr>
        <tr class="gradeC">

            <td><input type="checkbox" /></td>
            <td>Tasman</td>

            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td class="center">1</td>
            <td class="center">C</td>

        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Tasman</td>

            <td>Internet Explorer 5.2</td>
            <td>Mac OS 8-X</td>
            <td class="center">1</td>

            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>NetFront 3.1</td>
            <td>Embedded devices</td>

            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>NetFront 3.4</td>

            <td>Embedded devices</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td class="center">-</td>
            <td class="center">X</td>
        </tr>
        <tr class="gradeX">

            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>Links</td>
            <td>Text only</td>
            <td class="center">-</td>
            <td class="center">X</td>

        </tr>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>Lynx</td>
            <td>Text only</td>
            <td class="center">-</td>

            <td class="center">X</td>
        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>

            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Misc</td>
            <td>PSP browser</td>

            <td>PSP</td>
            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeU">
            <td><input type="checkbox" /></td>
            <td>Other browsers</td>

            <td>All others</td>
            <td>-</td>
            <td class="center">-</td>
            <td class="center">U</td>
        </tr>
    </tbody>
</table>
<div class="margin_bottom_120"></div>
<table class="dataTable" >
    <thead>
        <tr>

            <th></th>
            <th class="align-left">Rendering engine</th>
            <th class="align-left">Browser</th>
            <th class="align-left">Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>

        </tr>
    </thead>
    <tbody>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>

            <td>Win 95+</td>
            <td class="center">4</td>
            <td class="center">X</td>
        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Trident</td>

            <td>Internet Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center">5</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>

            <td>Trident</td>
            <td>Internet
                Explorer 5.5</td>

            <td>Win 95+</td>
            <td class="center">5.5</td>
            <td class="center">A</td>
        </tr>

        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>Internet
                Explorer 6</td>

            <td>Win 98+</td>
            <td class="center">6</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>Internet Explorer 7</td>

            <td>Win XP SP2+</td>

            <td class="center">7</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>

            <td>Win XP</td>
            <td class="center">6</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Firefox 1.0</td>

            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.7</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Firefox 1.5</td>

            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Firefox 2.0</td>

            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Firefox 3.0</td>

            <td>Win 2k+ / OSX.3+</td>

            <td class="center">1.9</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Camino 1.0</td>

            <td>OSX.2+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Camino 1.5</td>

            <td>OSX.3+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Netscape 7.2</td>

            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center">1.7</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Netscape Browser 8</td>

            <td>Win 98SE+</td>
            <td class="center">1.7</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>

            <td>Win 98+ / OSX.2+</td>

            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.0</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Mozilla 1.1</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.2</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.2</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.3</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.3</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.4</td>

            <td>Win 95+ / OSX.1+</td>

            <td class="center">1.4</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.5</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.5</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>

            <td>Mozilla 1.6</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">1.6</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.7</td>

            <td>Win 98+ / OSX.1+</td>
            <td class="center">1.7</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Mozilla 1.8</td>

            <td>Win 98+ / OSX.1+</td>
            <td class="center">1.8</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>

            <td>Win 98+ / OSX.2+</td>

            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Gecko</td>
            <td>Epiphany 2.20</td>

            <td>Gnome</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>

            <td>Safari 1.2</td>

            <td>OSX.3</td>
            <td class="center">125.5</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>Safari 1.3</td>

            <td>OSX.3</td>
            <td class="center">312.8</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>Safari 2.0</td>

            <td>OSX.4+</td>
            <td class="center">419.3</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>Safari 3.0</td>

            <td>OSX.4+</td>

            <td class="center">522.1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>

            <td>OSX.4+</td>
            <td class="center">420</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Webkit</td>

            <td>iPod Touch / iPhone</td>

            <td>iPod</td>
            <td class="center">420.1</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Webkit</td>
            <td>S60</td>

            <td>S60</td>
            <td class="center">413</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 7.0</td>

            <td>Win 95+ / OSX.1+</td>
            <td class="center">-</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 7.5</td>

            <td>Win 95+ / OSX.2+</td>

            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 8.0</td>

            <td>Win 95+ / OSX.2+</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>

            <td>Opera 8.5</td>

            <td>Win 95+ / OSX.2+</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 9.0</td>

            <td>Win 95+ / OSX.3+</td>
            <td class="center">-</td>
            <td class="center">A</td>

        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 9.2</td>

            <td>Win 88+ / OSX.3+</td>
            <td class="center">-</td>

            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera 9.5</td>

            <td>Win 88+ / OSX.3+</td>

            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Opera for Wii</td>

            <td>Wii</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Presto</td>

            <td>Nokia N800</td>

            <td>N800</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">

            <td><input type="checkbox" /></td>
            <td>Presto</td>
            <td>Nintendo DS browser</td>

            <td>Nintendo DS</td>
            <td class="center">8.5</td>
            <td class="center">C/A<sup>1</sup></td>

        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>KHTML</td>

            <td>Konqureror 3.1</td>
            <td>KDE 3.1</td>
            <td class="center">3.1</td>

            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>KHTML</td>

            <td>Konqureror 3.3</td>
            <td>KDE 3.3</td>

            <td class="center">3.3</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>KHTML</td>

            <td>Konqureror 3.5</td>

            <td>KDE 3.5</td>
            <td class="center">3.5</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Tasman</td>

            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td class="center">-</td>
            <td class="center">X</td>
        </tr>
        <tr class="gradeC">

            <td><input type="checkbox" /></td>
            <td>Tasman</td>

            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td class="center">1</td>
            <td class="center">C</td>

        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Tasman</td>

            <td>Internet Explorer 5.2</td>
            <td>Mac OS 8-X</td>
            <td class="center">1</td>

            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>NetFront 3.1</td>
            <td>Embedded devices</td>

            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>NetFront 3.4</td>

            <td>Embedded devices</td>
            <td class="center">-</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td class="center">-</td>
            <td class="center">X</td>
        </tr>
        <tr class="gradeX">

            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>Links</td>
            <td>Text only</td>
            <td class="center">-</td>
            <td class="center">X</td>

        </tr>
        <tr class="gradeX">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>Lynx</td>
            <td>Text only</td>
            <td class="center">-</td>

            <td class="center">X</td>
        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Misc</td>

            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>

            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeC">
            <td><input type="checkbox" /></td>
            <td>Misc</td>
            <td>PSP browser</td>

            <td>PSP</td>
            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeU">
            <td><input type="checkbox" /></td>
            <td>Other browsers</td>

            <td>All others</td>
            <td>-</td>
            <td class="center">-</td>
            <td class="center">U</td>
        </tr>
    </tbody>
</table>
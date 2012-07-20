<div class="sidebar">

    <div class="navbar sidebar-toggle">
        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

        </div>
    </div>

    <div class="nav-collapse collapse leftmenu">

        <ul>
            <li class="current"><a class="dashboard smronju" href="<?php echo url_for("dashboard/index"); ?>" title="Dashboard"><span><em>Dashboard</em></span></a></li>
            <li><a class="editor" href="javascript:void(0)" title="Forms"><span><em>Бүртгэл</em></span></a>
                <ul class="dropdown" style="left: 222px; visibility: hidden; display: none; ">
                    <li><a class="wizard-form smronju" href="<?php echo url_for("student/new"); ?>" title="Бүртгэлийн хуудас"><span><em>Оюутан</em></span></a></li>
                    <li><a class="wizard-form smronju" href="<?php echo url_for("teacher/new"); ?>" title="Бүртгэлийн хуудас"><span><em>Багү</em></span></a></li>
                </ul>
            </li>
            <li><a class="list" href="javascript:void(0)" title="Tables"><span><em>Tables</em></span></a>
                <ul class="dropdown" style="left: 222px; visibility: hidden; display: none; ">
                    <li><a class="tables" href="tables.html" title="Tables"><span><em>Tables</em></span></a>
                    </li><li><a class="widgets smronju" href="pricingtables.html" title="Pricing Tables"><span><em>Pricingtables</em></span></a></li>
                </ul>
            </li>
            <li><a class="tables" href="typography.html" title="Typography"><span><em>Typography</em></span></a></li>
            <li><a class="elements" href="maps.html" title="Maps"><span><em>Maps</em></span></a></li>
            <li><a class="charts" href="charts.html" title="Graphs &amp; Charts"><span><em>Charts</em></span></a></li>
            <li><a class="barcode" href="barcode.html" title="Barcode"><span><em>Barcode</em></span></a></li>

            <li><a class="tables" href="javascript:void(0)" title="Тохирго"><span><em>Тохирго</em></span></a>
                <ul class="dropdown" style="left: 222px; visibility: hidden; display: none; ">
                    <li><a class="wizard-form" href="<?php echo url_for("fields/new"); ?>" title="Талбар"><span><em>Талбар</em></span></a></li>
                    <li><a class="wizard-form" href="<?php echo url_for("student_form_fields/new"); ?>" title="Оюутаны бүртгэл"><span><em>Оюутаны бүртгэл</em></span></a></li>
                    <li><a class="wizard-form" href="<?php echo url_for("teacher_form_fields/new"); ?>" title="Багшын бүртгэл"><span><em>Багшын бүртгэл</em></span></a></li>
                </ul>
            </li>
            <li><a class="grid" href="grid.html" title="Grid"><span><em>Grid</em></span></a></li>
            <li><a class="calendar" href="calendar.html" title="Calendar"><span><em>Calendar</em></span></a></li>
            <li><a class="icons" href="icons.html" title="Icons"><span><em> Icons</em></span></a></li>
            <li><a class="chat" href="conversation.html" title="Conversation"><span><em>Conversation</em></span></a></li>
            <li><a class="error" href="error.html" title="Error Page"><span><em>Error Page</em></span></a></li>
        </ul>

    </div>

</div>
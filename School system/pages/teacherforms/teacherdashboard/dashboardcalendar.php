<div class="box box-solid bg-aqua">
    <div class="box-header ui-sortable-handle" style="cursor: move;">
        <i class="fa fa-calendar"></i>
        <h3 class="box-title">Calendar</h3>
        <!-- tools box -->
<!--        <div class="pull-right box-tools">-->
<!--            <!-- button with a dropdown -->
<!--            <div class="btn-group">-->
<!--                <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>-->
<!--                <ul class="dropdown-menu pull-right" role="menu">-->
<!--                    <li><a href="#">Add new event</a></li>-->
<!--                    <li><a href="#">Clear events</a></li>-->
<!--                    <li class="divider"></li>-->
<!--                    <li><a href="#">View calendar</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
<!--            <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>-->
<!--        </div><!-- /. tools -->
    </div><!-- /.box-header -->
    <div class="box-body no-padding" style="display: block;">
        <!--The calendar -->
        <div id="calendar" style="width: 100%">
            <!--                                    <div class="datepicker datepicker-inline">-->
            <!--                                        <div class="datepicker-days" style="display: block;">-->
            <!--                                            <table class="table table-condensed">-->
            <!--                                                <thead><tr><th class="prev" style="visibility: visible;">«</th>-->
            <!--                                                    <th colspan="5" class="datepicker-switch">September 2018</th>-->
            <!--                                                    <th class="next" style="visibility: visible;">»</th>-->
            <!--                                                </tr><tr><th class="dow">Su</th><th class="dow">Mo</th>-->
            <!--                                                    <th class="dow">Tu</th><th class="dow">We</th>-->
            <!--                                                    <th class="dow">Th</th><th class="dow">Fr</th>-->
            <!--                                                    <th class="dow">Sa</th></tr></thead>-->
            <!--                                                <tbody><tr><td class="old day">26</td><td class="old day">27</td>-->
            <!--                                                    <td class="old day">28</td><td class="old day">29</td>-->
            <!--                                                    <td class="old day">30</td><td class="old day">31</td>-->
            <!--                                                    <td class="day">1</td></tr><tr><td class="day">2</td>-->
            <!--                                                    <td class="day">3</td><td class="day">4</td>-->
            <!--                                                    <td class="day">5</td><td class="day">6</td>-->
            <!--                                                    <td class="day">7</td><td class="day">8</td></tr>-->
            <!--                                                <tr><td class="day">9</td><td class="day">10</td>-->
            <!--                                                    <td class="day">11</td><td class="day">12</td>-->
            <!--                                                    <td class="day">13</td><td class="day">14</td>-->
            <!--                                                    <td class="day">15</td></tr><tr><td class="day">16</td>-->
            <!--                                                    <td class="day">17</td><td class="day">18</td>-->
            <!--                                                    <td class="day">19</td><td class="day">20</td>-->
            <!--                                                    <td class="day">21</td><td class="day">22</td>-->
            <!--                                                </tr><tr><td class="day">23</td><td class="day">24</td>-->
            <!--                                                    <td class="day">25</td><td class="day">26</td>-->
            <!--                                                    <td class="day">27</td><td class="day">28</td>-->
            <!--                                                    <td class="day">29</td></tr><tr><td class="day">30</td>-->
            <!--                                                    <td class="new day">1</td><td class="new day">2</td>-->
            <!--                                                    <td class="new day">3</td><td class="new day">4</td>-->
            <!--                                                    <td class="new day">5</td><td class="new day">6</td>-->
            <!--                                                </tr></tbody><tfoot><tr>-->
            <!--                                                    <th colspan="7" class="today" style="display: none;">Today</th></tr>-->
            <!--                                                <tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr>-->
            <!--                                                </tfoot>-->
            <!--                                            </table>-->
            <!--                                        </div>-->
            <!--                                        <div class="datepicker-months" style="display: none;">-->
            <!--                                            <table class="table table-condensed"><thead>-->
            <!--                                                <tr><th class="prev" style="visibility: visible;">«</th>-->
            <!--                                                    <th colspan="5" class="datepicker-switch">2018</th>-->
            <!--                                                    <th class="next" style="visibility: visible;">»</th>-->
            <!--                                                </tr>-->
            <!--                                                </thead>-->
            <!--                                                <tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td>-->
            <!--                                                </tr>-->
            <!--                                                </tbody>-->
            <!--                                                <tfoot>-->
            <!--                                                <tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr>-->
            <!--                                                </tfoot>-->
            <!--                                            </table>-->
            <!--                                        </div>-->
            <!--                                        <div class="datepicker-years" style="display: none;">-->
            <!--                                            <table class="table table-condensed">-->
            <!--                                                <thead><tr><th class="prev" style="visibility: visible;">«</th>-->
            <!--                                                    <th colspan="5" class="datepicker-switch">2010-2019</th>-->
            <!--                                                    <th class="next" style="visibility: visible;">»</th>-->
            <!--                                                </tr></thead>-->
            <!--                                                <tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr>-->
            <!--                                                </tbody>-->
            <!--                                                <tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr>-->
            <!--                                                <tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
        </div>
    </div><!-- /.box-body -->
    <!--                            <div class="box-footer text-black" style="display: block;">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-sm-6">-->
    <!--                                        <!-- Progress bars -->
    <!--                                        <div class="clearfix">-->
    <!--                                            <span class="pull-left">Task #1</span>-->
    <!--                                            <small class="pull-right">90%</small>-->
    <!--                                        </div>-->
    <!--                                        <div class="progress xs">-->
    <!--                                            <div class="progress-bar progress-bar-green" style="width: 90%;"></div>-->
    <!--                                        </div>-->
    <!---->
    <!--                                        <div class="clearfix">-->
    <!--                                            <span class="pull-left">Task #2</span>-->
    <!--                                            <small class="pull-right">70%</small>-->
    <!--                                        </div>-->
    <!--                                        <div class="progress xs">-->
    <!--                                            <div class="progress-bar progress-bar-green" style="width: 70%;"></div>-->
    <!--                                        </div>-->
    <!--                                    </div><!-- /.col -->
    <!--                                    <div class="col-sm-6">-->
    <!--                                        <div class="clearfix">-->
    <!--                                            <span class="pull-left">Task #3</span>-->
    <!--                                            <small class="pull-right">60%</small>-->
    <!--                                        </div>-->
    <!--                                        <div class="progress xs">-->
    <!--                                            <div class="progress-bar progress-bar-green" style="width: 60%;"></div>-->
    <!--                                        </div>-->
    <!---->
    <!--                                        <div class="clearfix">-->
    <!--                                            <span class="pull-left">Task #4</span>-->
    <!--                                            <small class="pull-right">40%</small>-->
    <!--                                        </div>-->
    <!--                                        <div class="progress xs">-->
    <!--                                            <div class="progress-bar progress-bar-green" style="width: 40%;"></div>-->
    <!--                                        </div>-->
    <!--                                    </div><!-- /.col -->
    <!--                                </div><!-- /.row -->
    <!--                            </div>-->
</div>

            @extends('layouts.admin')
            @section('content')
            <div class="app-content content">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">

                        <!-- Candlestick Multi Level Control Chart -->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h4 class="card-title text-center">area of expertise</h4>
                                    {{-- @foreach ($most as $mo)

                                        <input class="most-app"  name="name" type="hidden" value="{{ $mo -> name }}" qty-id="{{ $mo -> qty }}">

                                    @endforeach --}}

                                    </div>
                                    <div class="card-content collapse show">
                                    <div class="card-body">
                                        <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">الفجوات</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-de mb-0">
                                                <thead>
                                                    <tr>
                                                        <th> المعيار</th>
                                                        <th>النشاط</th>
                                                        <th>الدور</th>
                                                        <th>المهمه</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($datas)
                                                        @foreach ($datas as $data)
                                                            <tr class="bg-success bg-lighten-5">
                                                                <td>{{ $data -> createra -> name }}</td>
                                                                <td> @if($data -> activity_id != NULL)
                                                                    {{ $data -> activity -> name}}
                                                                    @else
                                                                    --
                                                                @endif</td>

                                                                <td> @if($data -> rule_id != NULL)
                                                                    {{ $data -> role -> name}}
                                                                    @else
                                                                    --
                                                                @endif</td>

                                                                <td> @if($data -> mission_id != NULL)
                                                                    {{ $data -> mission -> name}}
                                                                    @else
                                                                    --
                                                                @endif</td>
                                                            </tr>
                                                        @endforeach

                                                    @endif

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <!-- Sell Orders & Buy Order -->
                        <div class="row match-height">
                            {{-- <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h4 class="card-title text-center">المعاير</h4>
                                    @foreach ($main_criteria as $ca)


                                        <input class="creaiteras-ca"  name="name" type="hidden" value="{{ $ca -> name }}" ca-id="{{ $ca -> data -> count() }}">

                                    @endforeach

                                    </div>
                                    <div class="card-content collapse show">
                                    <div class="card-body">
                                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                    </div>
                                    </div>
                                </div>
                                </div> --}}

                                {{-- <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                        <h4 class="card-title text-center">الادوار</h4>
                                        @foreach ($rules as $rol)

                                            <input class="role-ca"  name="name" type="hidden" value="{{ $rol -> name }}" ca-id="{{ $rol -> data -> count() }}">

                                        @endforeach

                                        </div>
                                        <div class="card-content collapse show">
                                        <div class="card-body">
                                            <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                                        </div>
                                        </div>
                                    </div>
                                </div> --}}
                        </div>

                        {{-- <div class="row">
                            <div class="col-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title text-center">عدد الجهات في نطاق السياسات والتشريعات واللوائح التنظيميه</h4>

                                </div>
                                <div class="card-content collapse show">
                                  <div class="card-body">

                                    <div id="column-chart"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 100%; height: 400px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="100%" height="400" aria-label="A chart." style="overflow: hidden;"><defs id="_ABSTRACT_RENDERER_ID_6"><clipPath id="_ABSTRACT_RENDERER_ID_7"><rect x="53" y="25" width="100%" height="350"></rect></clipPath></defs><rect x="0" y="0" width="100%" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="464" y="8" width="138" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                        <g>
                                            <rect x="445" y="8" width="59" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                            <g>
                                                <text text-anchor="start" x="475" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">تحدیث القوائم للمواد الخطرة</text>
                                            </g>
                                            <rect x="445" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                                        </g>
                                        <g>
                                            <rect x="600" y="8" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                            <g>
                                                <text text-anchor="start" x="630" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">إعداد السیاسات</text>
                                            </g>
                                            <rect x="600" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                                        </g>
                                        <g>
                                            <rect x="700" y="8" width="59" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                            <g>
                                                <text text-anchor="start" x="730" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">تحلیل المخاطر</text>
                                            </g>
                                            <rect x="700" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                        </g>
                                        <g>
                                            <rect x="800" y="8" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                            <g>
                                                <text text-anchor="start" x="830" y="18.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">تحلیل البیانات</text>
                                            </g>
                                            <rect x="800" y="8" width="24" height="12" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                        </g>
                                    </g><g><rect x="53" y="25" width="100%" height="350" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(file:///Users/ahmedsaleh/Desktop/adminTheme-master/html/rtl/horizontal-menu-template/google-bar-charts.html#_ABSTRACT_RENDERER_ID_7)"><g><rect x="53" y="374" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="330" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="287" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="243" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="200" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="156" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="112" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="69" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="25" width="100%" height="1" stroke="none" stroke-width="0" fill="#e9e9e9"></rect><rect x="53" y="352" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="309" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="265" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="221" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="178" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="134" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="90" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect><rect x="53" y="47" width="100%" height="1" stroke="none" stroke-width="0" fill="#f6f6f6"></rect></g><g>
                                        <rect x="90" y="183" width="59" height="191" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                                        <rect x="387" y="216" width="59" height="158" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                                        <rect x="690" y="166" width="59" height="208" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>
                                        <rect x="990" y="83" width="59" height="291" stroke="none" stroke-width="0" fill="rgb(246, 114, 128)"></rect>

                                        <rect x="150" y="183" width="59" height="191" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                                        <rect x="447" y="216" width="59" height="158" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                                        <rect x="750" y="166" width="59" height="208" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>
                                        <rect x="1050" y="83" width="59" height="291" stroke="none" stroke-width="0" fill="rgb(153, 184, 152)"></rect>

                                        <rect x="210" y="320" width="59" height="54" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                        <rect x="507" y="310" width="59" height="64" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                        <rect x="810" y="277" width="59" height="97" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>
                                        <rect x="1110" y="281" width="59" height="93" stroke="none" stroke-width="0" fill="rgb(192, 108, 132)"></rect>

                                        <rect x="270" y="320" width="59" height="54" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                        <rect x="567" y="310" width="59" height="64" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                        <rect x="870" y="277" width="59" height="97" stroke="none" stroke-width="0" fill="#f6b75a"></rect>
                                        <rect x="1170" y="281" width="59" height="93" stroke="none" stroke-width="0" fill="#f6b75a"></rect>

                                    </g><g><rect x="53" y="374" width="100%" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="middle" x="207.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2011</text></g><g><text text-anchor="middle" x="504.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2012</text></g><g><text text-anchor="middle" x="806.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2013</text></g><g><text text-anchor="middle" x="1109.5" y="391.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2014</text></g><g><text text-anchor="end" x="41.5" y="378.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="41.5" y="335.075" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">200</text></g><g><text text-anchor="end" x="41.5" y="291.45" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">400</text></g><g><text text-anchor="end" x="41.5" y="247.825" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">600</text></g><g><text text-anchor="end" x="41.5" y="204.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">800</text></g><g><text text-anchor="end" x="41.5" y="160.575" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,000</text></g><g><text text-anchor="end" x="41.5" y="116.95" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,200</text></g><g><text text-anchor="end" x="41.5" y="73.325" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,400</text></g><g><text text-anchor="end" x="41.5" y="29.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">1,600</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Year</th><th>Sales</th><th>Costs</th></tr></thead><tbody><tr><td>2011</td><td>880</td><td>250</td></tr><tr><td>2012</td><td>730</td><td>300</td></tr><tr><td>2013</td><td>960</td><td>450</td></tr><tr><td>2014</td><td>1,340</td><td>430</td></tr><tr><td>2015</td><td>1,560</td><td>540</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 410px; left: 1078px; white-space: nowrap; font-family: Arial; font-size: 12px;">Costs</div><div></div></div></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div> --}}

                        {{-- <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h4 class="card-title text-center">الجهات الاكثر تأثيرا في منظومه المواد الخطره</h4>
                                    @foreach ($most as $mo)

                                        <input class="most-app"  name="name" type="hidden" value="{{ $mo -> name }}" qty-id="{{ $mo -> qty }}">

                                    @endforeach

                                    </div>
                                    <div class="card-content collapse show">
                                    <div class="card-body">
                                        <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">الفجوات</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-de mb-0">
                                                <thead>
                                                    <tr>
                                                        <th> المعيار</th>
                                                        <th>النشاط</th>
                                                        <th>الدور</th>
                                                        <th>المهمه</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($datas)
                                                        @foreach ($datas as $data)
                                                            <tr class="bg-success bg-lighten-5">
                                                                <td>{{ $data -> createra -> name }}</td>
                                                                <td> @if($data -> activity_id != NULL)
                                                                    {{ $data -> activity -> name}}
                                                                    @else
                                                                    --
                                                                @endif</td>

                                                                <td> @if($data -> rule_id != NULL)
                                                                    {{ $data -> role -> name}}
                                                                    @else
                                                                    --
                                                                @endif</td>

                                                                <td> @if($data -> mission_id != NULL)
                                                                    {{ $data -> mission -> name}}
                                                                    @else
                                                                    --
                                                                @endif</td>
                                                            </tr>
                                                        @endforeach

                                                    @endif

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
            @endsection

            @section('script')
            <script>
                var val1 = ($('.creaiteras-ca:first-of-type').val());
                var val2 = ($('.creaiteras-ca:nth-of-type(2)').val());
                var val3 = ($('.creaiteras-ca:nth-of-type(3)').val());
                var val4 = ($('.creaiteras-ca:last-of-type').val());

                var num1 = ($('.creaiteras-ca:first-of-type').attr('ca-id'));
                var num2 = ($('.creaiteras-ca:nth-of-type(2)').attr('ca-id'));
                var num3 = ($('.creaiteras-ca:nth-of-type(3)').attr('ca-id'));
                var num4 = ($('.creaiteras-ca:last-of-type').attr('ca-id'));

                var xValues = [val1,val2,val3,val4];

                var yValues = [num1,num2,num3,num4];

                var barColors = [
                  "#b91d47",
                  "#00aba9",
                  "#2b5797",
                  "#e8c3b9",

                ];

                new Chart("myChart", {
                  type: "pie",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    title: {
                      display: true,
                      text: ""
                    }
                  }
                });
                </script>

            <script>


                var val5 = ($('.role-ca:first-of-type').val());
                var val6 = ($('.role-ca:nth-of-type(2)').val());
                var val7 = ($('.role-ca:nth-of-type(3)').val());
                var val8 = ($('.role-ca:last-of-type').val());

                var num5 = ($('.role-ca:first-of-type').attr('ca-id'));
                var num6 = ($('.role-ca:nth-of-type(2)').attr('ca-id'));
                var num7 = ($('.role-ca:nth-of-type(3)').attr('ca-id'));
                var num8 = ($('.role-ca:last-of-type').attr('ca-id'));

                var xValues = [val5,val6,val7,val8];

                var yValues = [num5,num6,num7,num8];
                var barColors = [
                  "#b91d47",
                  "#00aba9",
                  "#2b5797",
                  "#e8c3b9",

                ];

                new Chart("myChart2", {
                  type: "pie",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    title: {
                      display: true,
                      text: ""
                    }
                  }
                });
                </script>
                <script>

                // var val11 = ($('.most-app:first-of-type').val());
                // var val22 = ($('.most-app:nth-of-type(2)').val());
                // var val33 = ($('.most-app:nth-of-type(3)').val());
                // var val44 = ($('.most-app:nth-of-type(4)').val());
                // var val55 = ($('.most-app:last-of-type').val());

                // var num55 = ($('.most-app:first-of-type').attr('qty-id'));
                // var num66 = ($('.most-app:nth-of-type(2)').attr('qty-id'));
                // var num77 = ($('.most-app:nth-of-type(3)').attr('qty-id'));
                // var num88 = ($('.most-app:nth-of-type(4)').attr('qty-id'));
                // var num99 = ($('.most-app:last-of-type').attr('qty-id'));



                    var xValues = ['val11','val22','val33','val44','val55'];
                    var yValues = [11,22,33,33,44];
                    var barColors = [
                      "#b91d47",
                      "#00aba9",
                      "#2b5797",
                      "#e8c3b9",
                      "#1e7145"
                    ];

                    new Chart("myChart3", {
                      type: "doughnut",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {
                        title: {
                          display: true,
                          text: "World Wide Wine Production 2018"
                        }
                      }
                    });
                    </script>
            @endsection



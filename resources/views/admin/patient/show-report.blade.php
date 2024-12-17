<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{url('assets/img/favicon.ico')}}">
    <title>LIMS</title>
    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
</head>

<body>
    <!-- App Start-->
    <div id="root">
        <!-- App Layout-->
        <div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
            <main class="h-full">
                <div class="page-container relative h-full flex flex-auto flex-col">
                    <div class="h-full">
                        <div class="container mx-auto flex flex-col flex-auto items-center justify-center min-w-0 h-full">
                            <div class="card min-w-[1000px] md:min-w-[450px] card-shadow" role="presentation">
                                <!-- <div class="card-body md:p-10">
                                    <div class="text-center">
                                        <div class="logo">
                                            <img class="mx-auto" src="{{url('assets/img/logo/logo-light-streamline.png')}}" alt="Elstar logo">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <h3 class="mb-1">XYZ Medical Center</h3>
                                            <p>House # 1,Street # 9,Sector C,Manzoor Colony,Karachi</p>
                                            <p>Email:xyzmedicalkhi@gmail.com</p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="p-5">
                                    <!-- <div class="overflow-x-auto">
                                        <table class="table-auto w-full text-xs">
                                            <tbody>
                                                <tr>
                                                    <td>Name <span class="px-3">:</span></td>
                                                    <td>HAMMAD QURESHI</td>
                                                    <td>Sex <span class="px-6">:</span></td>
                                                    <td>MALE</td>
                                                </tr>
                                                <tr>
                                                    <td>Age <span class="px-6">:</span></td>
                                                    <td>25 YEARS</td>
                                                    <td>Collection Date :</td>
                                                    <td>24/12/23</td>
                                                </tr>
                                                <tr>
                                                    <td>Lab No<span class="px-2">:</span></td>
                                                    <td></td>
                                                    <td>Reporting Date :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Ref By <span class="px-2">:</span></td>
                                                    <td>Dr Arif</td>
                                                    <td>FGW / ADM NO :</td>
                                                    <td>OPD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->
                                    <div class="text-lg font-bold underline underline-offset-2 py-5">
                                        HAEMATOLOGY
                                    </div>
                                    <table class="table-compact border border-state-400 text-left table-auto w-full">
                                        <thead>
                                            <tr>
                                                <th>TEST</th>
                                                <th>RESULT</th>
                                                <th>NORMAL RANGE</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <!-- Spacer Row -->
                                    <div class="py-2"></div>
                                    <table class="table-compact border border-state-400 text-left table-auto w-full">
                                        <tbody>
                                            @foreach($test_formats as $test_format)
                                            @if($test_format->type == 'heading')
                                            <tr>
                                                <td class="py-2 font-bold">
                                                    {{ $test_format->key }}
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td class="py-2 border border-state-300">{{ $test_format->key }}</td>
                                                <td class="py-2 border border-state-300 w-[200px]">
                                                    <div class="invisible">Placeholder</div>
                                                </td>
                                                <td class="py-2 border border-state-300">{{ $test_format->value }}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            <!-- <tr>
                                                <td class="p-2 border border-state-300">HAEMATOCRIT</td>
                                                <td class="p-2 border border-state-300"></td>
                                                <td class="p-2 border border-state-300">% ( Male 41-48% & Female 35-42 % )</td>
                                            </tr> -->
                                            <!-- <tr>
                                                <td class="p-2 border border-state-300">
                                                    <div class="invisible">Placeholder</div>
                                                </td>
                                                <td class="p-2 border border-state-300"></td>
                                                <td class="p-2 border border-state-300"></td>
                                            </tr> -->
                                            <!-- <tr>
                                                <td class="p-2 border border-state-300">R.B.C ……… </td>
                                                <td class="p-2 border border-state-300"></td>
                                                <td class="p-2 border border-state-300">M/cmm ( Male 4.5-6.5 & Female 3.9-5.6) </td>
                                            </tr> -->

                                            <!-- <tr class="h-[150px]"></tr>

                                            <tr>
                                                <td class="p-2 border border-state-300">PERIPHERAL FILM </td>
                                                <td class="p-2 border border-state-300" colspan="2">
                                                    <div class="invisible">Placeholder text dumikasfasfkj </div>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                    <div class="p-4 h-[50px]">REMARKS :</div>
                                    <div class="px-4 grid grid-cols-2 gap-4">
                                        <div class="col-span-1">LAB TECH</div>
                                        <div class="col-span-1 px-6">PATHOLOGIST</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
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
                            <div class="card min-w-[320px] md:min-w-[450px] card-shadow" role="presentation">
                                <div class="card-body md:p-10">
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
                                    <hr />
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-1">
                                            <div class="card-body">
                                                <div class="space-y-2">
                                                    <div class="flex justify-between">
                                                        <h6 class="flex-1">Patient:</h6>
                                                        <h6 class="flex-1">{{ $patient_info->name}}</h6>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <h6 class="flex-1">Age:</h6>
                                                        <h6 class="flex-1">{{ $patient_info->age }}</h6>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <h6 class="flex-1">Ref By:</h6>
                                                        <h6 class="flex-1 w-32 first-letter:capitalize">{{ $ref_by->name }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            @php
                                            date_default_timezone_set('Asia/Karachi');
                                            @endphp
                                            <div class="py-5 text-right">{{ date("d/m/y h:i:sa") }}</div>
                                        </div>
                                    </div>

                                    <div class="overflow-x-auto" style="width:500px;">
                                        <table class="table-default table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Services</th>
                                                    <th>Rate</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($selectedValues as $selectedValue)
                                                <tr>
                                                    <td>{{ $selectedValue->test_name }}</td>
                                                    @php
                                                    $per_test = $selectedValue->test_price / $selectedValue->quantity;
                                                    @endphp
                                                    <td class="text-center">{{ Str::limit($per_test,5) }}</td>
                                                    <td class="text-center">{{ $selectedValue->quantity }}</td>
                                                    <td class="text-center">{{ $selectedValue->test_price }}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="font-bold text-center h-2" colspan="3">Total Amount</td>
                                                    <td class="font-bold text-center">{{ $patient_info->total_amount}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-center h-2" colspan="3">Discount Amount</td>
                                                    <td class="font-bold text-center">{{ $patient_info->dis_amount.' '.$patient_info->dis_type}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-center h-5" colspan="3">Net Amount</td>
                                                    <td class="font-bold text-center">{{$patient_info->net_amount}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-center h-5" colspan="3">Recevied Amount</td>
                                                    <td class="font-bold text-center">{{$patient_info->recevied_amount}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-center h-5" colspan="3">Balance Amount</td>
                                                    <td class="font-bold text-center">{{$patient_info->balance_amount}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="overflow-x-auto" style="width:67%;margin-left:33%;">
                                        <table class="table-default table-hover table-compact" style="width: 60%;">
                                            <tbody>
                                                <tr>
                                                    <td class="font-bold text-left">Total Amount</td>
                                                    <td class="font-bold text-right">1350</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-left">Discount Amount</td>
                                                    <td class="font-bold text-right">350</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-left">Net Amount</td>
                                                    <td class="font-bold text-right">1000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->
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
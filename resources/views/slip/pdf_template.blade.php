<head>
    <title>Slip</title>
    <style>
        body {
            font-family: 'Arial';
            margin: 0;
            padding: 10px;
            color: #000;

        }

        * {
            /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
        }

        .container {
            width: 309px;
            height: auto;
            /* margin: 0 auto; */
            background: #fff;
            /* padding: 15px; */
            border-radius: 8px;
            /* font-weight: 900px; */
            /* box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); */
        }

        div {
            box-sizing: border-box;
        }

        .mx-auto {
            display: block;
            margin: 10px auto;
            max-width: 100px;
        }

        h3 {
            font-size: 22px;
            /* Increased font size */
            margin: 0;
            color: rgb(1, 6, 12);
            text-align: center;
        }

        p {
            margin: 5px 0;
            /* Adjusted spacing for better readability */
            text-align: center;
            font-size: 16px;
            /* Increased font size */
            /* color: #555; */
        }

        hr {
            margin: 15px 0;
            /* Increased spacing around HR */
            border: 1px solid #ddd;
        }

        h6 {
            font-size: 14px;
            /* Increased font size */
            margin: 0;
            font-weight: bold;
            display: inline;
        }

        h6+h6 {
            margin-left: 2px;
            font-weight: normal;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            /* Increased spacing around the table */
            font-size: 16px;
            /* Increased font size */
            /* box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); */
        }

        table th,
        table td {
            padding: 8px;
            /* Increased padding for better spacing */
            text-align: left;
            /* border: 1px solid #ddd; */
        }

        table th {
            background-color: #000000;
            color: #ffffff;
            font-size: 14px;
            /* Increased font size */
            /* text-transform: uppercase; */
        }

        table td {
            font-size: 14px;
            /* Increased font size */
            color: #000;
        }

        tbody tr:nth-child(even) {
            /* background-color: #f9f9f9; */
        }

        tbody tr:last-child td {
            font-weight: bold;
        }

        .footer-time {
            font-size: 16px;
            /* Increased font size */
            color: #666;
            text-align: right;
            margin-top: 10px;
        }

        .discount,
        .balance,
        .net-amount {
            font-weight: bold;
            color: #007BFF;
        }

        .btn-primary {
            width: 120px;
            background-color: #007bff;
            /* Primary Blue Color */
            color: white;
            /* White Text */
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Darker Blue on Hover */
        }
    </style>
</head>

<body>

    <div id="slip">
        <div class="container">
            <div>
                @if($header == 'yes' || $header == '')
                <div>
                    <div style="display: flex;justify-content:center;align-item:center;">
                        <img src="{{ url($setting->file_path) }}" width="150px" height="100px" />
                    </div>
                    <p style="font-weight:900;font-size:24px;padding:5px">{{ $setting->name }}</p>
                    <p style="font-size:12px">{{ $setting->address }}</p>
                    <p style="font-size:12px;">Email: {{ $setting->email }}</p>
                    <p style="font-size:12px;">Phone: {{ $setting->phone_1 }},
                        {{ $setting->phone_2 }}<br />
                        <img src="{{ url('/assets/img/logo/whatsapp-icon.png') }}" width="20px" height="15px"/>Whatsapp: {{ $setting->whatsapp_num }}
                    </p>
                </div>
                @elseif($header == 'no')
                <div style="height: 50px;"></div>
                @endif
                <hr />
                <div>
                    <p style="text-align: center;font-size:14px">00{{ $slip_count }}</p>
                    <div>
                        @php
                        use Carbon\Carbon;
                        @endphp
                        <div style="text-align: left;display:inline-block;width:58%;">
                            <h6>Doc:</h6>
                            <h6>AMC{{ Carbon::parse($patient_info->created_at)->format('ymd') }}{{ $num }}</h6>
                        </div>
                        <div style="display:inline-block;">
                            <div style="font-size:14px;padding-right: 10px;text-align: right;">{{ Carbon::parse($patient_info->created_at)->format('y-m-d H:i:s') }}</div>
                        </div>
                    </div>
                    <div>
                        <h6>Name:</h6>
                        <h6>{{ strtoupper($patient_info->name) }}</h6>
                    </div>
                    <div>
                        <h6>Age:</h6>
                        <h6>{{ $patient_info->age }}</h6>
                    </div>
                    <div>
                        <h6>Ref By:</h6>
                        <h6>{{ strtoupper($ref_by->name) }}</h6>
                    </div>
                </div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2">Services</th>
                                <!-- <th>Rate</th> -->
                                <th>Quantity</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($selectedTests as $selectedValue)
                            <tr>
                                <td colspan="2">{{ $selectedValue->test_name }}</td>
                                <!-- @php
                                $per_test = $selectedValue->test_price / $selectedValue->test_quantity;
                                @endphp
                                <td>{{ Str::limit($per_test,5) }}</td> -->
                                <td>{{ $selectedValue->test_quantity }}</td>
                                <td  style="text-align: center;">{{ $selectedValue->test_price }}</td>
                            </tr>
                            @endforeach
                            <tr style="border-top: 1px solid #000000;">
                                <td colspan="3" style="text-align: center;">Total Amount</td>
                                <td  style="text-align: center;">{{ $patient_info->total_amount }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: center;">Discount Amount</td>
                                <td  style="text-align: center;">- {{ $patient_info->dis_amount . ' ' . $patient_info->dis_type }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: center;">Net Amount</td>
                                <td  style="text-align: center;">{{ $patient_info->net_amount }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: center;">Received Amount</td>
                                <td  style="text-align: center;">{{ $patient_info->recevied_amount }}</td>
                            </tr>
                            <tr style="border-top: 1px solid #000000;border-bottom:1px solid #000000;">
                                <td colspan="3" style="text-align: center;">Balance Amount</td>
                                <td  style="text-align: center;">{{ $patient_info->balance_amount }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size: 15px;">Printed on / by : {{ date("d/m/y h:i:sa") }} / {{ucfirst(Auth::user()->name) ?? ''}}</p>
            </div>
        </div>
    </div>
    <div style="display: flex;justify-content:end;padding-right:20px">
        @if($header == '')
        <a href = "{{ url('/patient/') }}" ><button class="btn-primary">Back</button></a>
        @endif
        <button class="btn-primary" onclick="printSlip()">Print</button>
    </div>
</body>

<script>
function printSlip() {
    var printContents = document.getElementById('slip').innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
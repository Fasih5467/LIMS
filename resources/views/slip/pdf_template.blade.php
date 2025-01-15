<head>
    <title>Slip</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 10px;
            color: #333;
        }

        .container {
            width: 50%;
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
            font-size: 18px;
            margin: 0;
            color: #007BFF;
            text-align: center;
        }

        p {
            margin: 3px 0;
            text-align: center;
            font-size: 12px;
            color: #555;
        }

        hr {
            margin: 10px 0;
            border: 1px solid #ddd;
        }

        h6 {
            font-size: 12px;
            margin: 0;
            font-weight: bold;
            display: inline;
        }

        h6+h6 {
            margin-left: 5px;
            font-weight: normal;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            font-size: 12px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 5px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007BFF;
            color: #fff;
            font-size: 10px;
            text-transform: uppercase;
        }

        table td {
            font-size: 10px;
            color: #333;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:last-child td {
            font-weight: bold;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .footer-time {
            font-size: 10px;
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
    </style>
</head>

<body>

    <div class="container">
        <div>
            <!-- <div>
                <img class="mx-auto" src="{{url('assets/img/logo/logo-light-streamline.png')}}" alt="Elstar logo">
            </div> -->
            <div>
                <h3>{{ $setting->name }}</h3>
                <p>{{ $setting->address }}</p>
                <p>Email:{{ $setting->email }}</p>
            </div>
            <hr />
            <div>
                <p style="text-align: center;">{{ $num }}</p>
                <div style="text-align: right;">
                    @php
                    use Carbon\Carbon;
                    @endphp
                    <div>{{ Carbon::parse($patient_info->created_at)->format('y-m-d H:i:s') }}</div>
                </div>
                <div>
                    <h6>Name:</h6>
                    <h6>{{ ucfirst($patient_info->name) }}</h6>
                </div>
                <div>
                    <h6>Age:</h6>
                    <h6>{{ $patient_info->age }}</h6>
                </div>
                <div>
                    <h6>Ref By:</h6>
                    <h6>{{ ucfirst($ref_by->name) }}</h6>
                </div>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Services</th>
                            <th>Rate</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($selectedTests as $selectedValue)
                        <tr>
                            <td>{{ $selectedValue->test_name }}</td>
                            @php
                            $per_test = $selectedValue->test_price / $selectedValue->test_quantity;
                            @endphp
                            <td>{{ Str::limit($per_test,5) }}</td>
                            <td>{{ $selectedValue->test_quantity }}</td>
                            <td>{{ $selectedValue->test_price }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align: center;">Total Amount</td>
                            <td>{{ $patient_info->total_amount}}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Discount Amount</td>
                            <td>{{ $patient_info->dis_amount.' '.$patient_info->dis_type}}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Net Amount</td>
                            <td>{{$patient_info->net_amount}}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Recevied Amount</td>
                            <td>{{$patient_info->recevied_amount}}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Balance Amount</td>
                            <td>{{$patient_info->balance_amount}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
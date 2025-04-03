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
            max-width: 300px;
            /* margin: 0 auto; */
            background: #fff;
            /* padding: 15px; */
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
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
            font-size: 22px; /* Increased font size */
            margin: 0;
            color: rgb(1, 6, 12);
            text-align: center;
        }

        p {
            margin: 5px 0; /* Adjusted spacing for better readability */
            text-align: center;
            font-size: 14px; /* Increased font size */
            color: #555;
        }

        hr {
            margin: 15px 0; /* Increased spacing around HR */
            border: 1px solid #ddd;
        }

        h6 {
            font-size: 14px; /* Increased font size */
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
            margin: 15px 0; /* Increased spacing around the table */
            font-size: 14px; /* Increased font size */
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 8px; /* Increased padding for better spacing */
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color:rgb(1, 6, 12);
            color: #fff;
            font-size: 12px; /* Increased font size */
            text-transform: uppercase;
        }

        table td {
            font-size: 12px; /* Increased font size */
            color: #333;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:last-child td {
            font-weight: bold;
        }

        .footer-time {
            font-size: 12px; /* Increased font size */
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
            @if($header == 'yes')
            <div>
                <h5>{{ $setting->name }}</h5>
                <p style="font-size:10px;padding-top:5px">{{ $setting->address }}</p>
                <p>Email: {{ $setting->email }}</p>
            </div>
            @endif
            <hr />
            <div>
                <p style="text-align: center;">{{ $num }}</p>
                <div style="text-align: right;">
                    @php
                    use Carbon\Carbon;
                    @endphp
                    <div>{{ Carbon::parse($patient_info->created_at)->format('d-m-y H:i:s') }}</div>
                </div>
                <div>
                    <h6>Name:</h6>
                    <h6>{{ ucfirst($patient_info->name) ?? '' }}</h6>
                </div>
                <div>
                    <h6>Age:</h6>
                    <h6>{{ $patient_info->age ?? '' }} {{$patient_info->age_type ?? ''}}</h6>
                </div>
                <div>
                    <h6>Ref By:</h6>
                    <h6>{{ ucfirst($ref_by->name) }}</h6>
                </div>
                <div>
                    <h6>Contact:</h6>
                    <h6>{{ $patient_info->contact ?? ''}}</h6>
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
                            <td>{{ $patient_info->total_amount }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Discount Amount</td>
                            <td>{{ $patient_info->dis_amount . ' ' . $patient_info->dis_type }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Net Amount</td>
                            <td>{{ $patient_info->net_amount }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Received Amount</td>
                            <td>{{ $patient_info->recevied_amount }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">Balance Amount</td>
                            <td>{{ $patient_info->balance_amount }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

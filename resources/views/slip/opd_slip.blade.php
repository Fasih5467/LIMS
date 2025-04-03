<head>
    <title>Opd Slip</title>
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
            font-weight: normal;
            display: inline;
        }

        h6+h6 {
            margin-left: 2px;
            font-weight: bold;
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
                <!-- @if($header == 'yes' || $header == '') -->
                <div>
                    <div style="display: flex;justify-content:center;align-item:center;">
                        <img src="{{ url($setting->file_path) }}" width="150px" height="100px" />
                    </div>
                    <p style="font-weight:900;font-size:24px;padding:5px">{{ $setting->name }}</p>
                    <!-- <p style="font-size:12px">{{ $setting->address }}</p> -->
                </div>
                <!-- @elseif($header == 'no')
                <div style="height: 50px;"></div>
                @endif -->
                <hr />
                <div>
                    <div>
                        @php
                        use Carbon\Carbon;
                        @endphp
                        <div style="text-align: left;display:inline-block;width:58%;">
                            <h6>AM{{ Carbon::parse($opdRecord->created_at)->format('ymd') }}0{{$opdRecord->id}}</h6>
                        </div>
                        <div style="display:inline-block;">
                            <div style="font-size:14px;padding-right: 10px;text-align: right;">{{ Carbon::parse($opdRecord->created_at)->format('d-m-y H:i:s') }}</div>
                        </div>
                        <div style="background-color: #000000;color:#fff;font-weight:bold;width:fit-content;padding:2px 5px;">
                        {{ strtoupper($opdRecord->doctor_name) }}
                        </div>
                    </div>
                    <div>
                        <h6 style="margin-right: 14px;">Patient Name :</h6>
                        <h6>{{ strtoupper($opdRecord->patient_name) }}</h6>
                    </div>
                    <div>
                        <h6 style="margin-right: 15px;">Gender / Age :</h6>
                        <h6>{{ $opdRecord->age }} {{$opdRecord->age_type ?? ''}}</h6>
                    </div>
                    <div>
                        <h6 style="margin-right: 50px;">Contact :</h6>
                        <h6>{{ $opdRecord->contact ?? ''}}</h6>
                    </div>
                    <div>
                        <h6 style="margin-right: 50px;">Doctor :</h6>
                        <div style="width:65%;background-color: #000000;color:#fff;font-weight:bold;padding:2px 10px;display:inline-block">
                            {{ strtoupper($opdRecord->doctor_name) }}
                        </div>
                    </div>
                </div>

                <div style="width: 100%; height:180px; border: 1px solid black; display: flex; flex-direction: column; justify-content: space-between;margin:5px 0;">
                    <div style="width: 100%; height: 30px; font-weight: bold; display: flex; justify-content: space-between; align-items: center; padding: 0 5px;">
                        <div>Charges :</div>
                        <div style="text-align: end;">{{ $opdRecord->doc_fee ?? ""}}</div>
                    </div>
                    <h1 style="height: 120px; text-align: center; font-size: 100px; margin: 0;">{{ $token }}</h1>
                    <div style="width: 100%; height: 30px; font-weight: bold; margin-left: 5px; display: flex; align-items: center;">TOKEN NO :</div>
                </div>
                <div style="width: 100%; height: 80px; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        Slip Generated By<br />
                        <span style="font-size: 20px; font-weight: bold;">Admin</span><br/>
                        Printed Date 
                    </div>
                    <div>
                        Amount Paid <span style="margin-left: 10px;padding-right:5px;font-weight:bold;">{{ $opdRecord->rec_amount ?? "" }}</span><br />
                        Discount  <span style="margin-left: 39px;padding-right:5px;height:25px;font-weight:bold;">{{ $opdRecord->dis_amount ?? "" }}</span><br />
                        {{ date('m/d/y h:i:s'); }}
                    </div>
                </div>

                <!-- <p style="font-size: 15px;">Printed on / by : {{ date("d/m/y h:i:s") }} / {{ucfirst(Auth::user()->name) ?? ''}}</p> -->
            </div>
        </div>
    </div>
    <div style="display: flex;justify-content:end;padding-right:20px">
        @if($header == '')
        <a href="{{ url('/opd/') }}"><button class="btn-primary">Back</button></a>
        @endif
        <button class="btn-primary" onclick="printSlip()" >Print</button>
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
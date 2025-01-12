<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report {{ucwords($patient_info->category_name) ?? ''}}</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    .container {
      width: 100%;

    }

    /* .invoice-container {
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid black;
    } */

    .header-section p {
      margin: 0;
      font-weight: bold;
    }

    .header-section .row div {
      margin-bottom: 10px;
    }

    .section-title {
      font-size: 18px;
      font-weight: bold;
      /* text-align: center; */
      margin: 10px 0;
      text-transform: uppercase;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
    table td {
      border: 1px solid black;
      padding-left: 4px;
      text-align: left;
    }


    .remarks-section {
      margin-top: 20px;
    }

    .remarks-section p {
      margin-bottom: 35px;
    }

    .footer-section {
      margin-top: 40px;
      display: flex;
      justify-content: space-between;
      font-weight: bold;
    }

    .footer-section div {
      text-align: center;
      width: 150px;
    }
  </style>

  <style>
    table {
      border-collapse: separate;
      width: 100%;
      overflow: hidden;
    }


    table td {
      /* border: 1px solid black; */
      padding-left: 5px;
      text-align: left;
    }

    tr td {
      border: none;
    }

    tr {
      border: none;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    @if($header == 'Yes')
    <div style="text-align: center;">
      <h1 style="padding: 0;margin:0;">{{ strtoupper($setting->name) ?? ''}}</h1>
      <p>{{ ucfirst($setting->address) ?? ''}}</p>
    </div>
    @elseif($header == 'No')
    <div style="margin-top: 55px;">

    </div>

    @endif
    <hr />
    <table style="border: 1px solid black; border-radius: 10px;">
      <tr>
        <td>Name:</td>
        <td>
          {{ucfirst($patient_info->patient_name) ?? ''}}
        </td>
        <td>Sex:</td>
        <td>{{ucfirst($patient_info->gender) ?? ''}}</td>
      </tr>
      <tr>
        <td>Age:</td>
        <td>{{ucfirst($patient_info->age) ?? ''}}</td>
        <td>Collection Date:</td>
        <td></td>
      </tr>
      <tr>
        <td>Lab No:</td>
        <td></td>
        <td>Reporting Date:</td>
        <td></td>
      </tr>
      <tr>
        <td>Ref by:</td>
        <td>{{ucfirst($patient_info->doctor_name) ?? ''}}</td>
        <td>FGW / ADM NO:</td>
        <td>OPD</td>
      </tr>
    </table>
  </div>
  <div class="invoice-container">
    <div class="section-title" style="text-align: center;"><u>{{ucwords($patient_info->category_name) ?? ''}}</u></div>

    <table>
      <thead>
        <tr>
          <th>Test</th>
          <th>Result</th>
          <th>Unit</th>
          <th>Normal Range</th>
        </tr>
      </thead>
      <tbody>
        @foreach($test_result as $result)
        @if($result->type == 'heading')
        <tr>
          <td colspan="4">
            <b><u>{{$result->key}}</u></b>
          </td>
        </tr>
        @continue;
        @endif
        <tr>
          <td>{{$result->key}}</td>
          <td>{{$result->result}}</td>
          <td>{{$result->unit}}</td>
          <td>{{$result->value}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="remarks-section">
      <p>REMARKS: {{ ucfirst($patient_info->remark) ?? '' }}</p>
    </div>
    <hr />
    <table>
      <tr>
        @foreach($signatures as $sign)
        <td style="text-align: center;">{{ strtoupper($sign->type) ?? '' }}<br /> {{ $sign->qualification ?? '' }}<br />{{ ucfirst($sign->name) ?? '' }}</td>
        @endforeach
      </tr>
    </table>

    <table>
      <tr>

        <td style="text-align: right;padding-right:40px;background-color:#d3d3d3;">Printed on / by : {{ date("d/m/y h:i:sa") }} / {{ucfirst(Auth::user()->name) ?? ''}}</td>

      </tr>
    </table>

    <!-- <div style="display: flex; justify-content: space-between; align-items: flex-start; width: 100%; gap: 20px;">
      @foreach($signatures as $sign)
      <div style="display: flex; flex-direction: column; text-align: left;">
        <div>{{ strtoupper($sign->type) ?? '' }}</div>
        <div>{{ $sign->qualification ?? '' }}</div>
        <div>{{ ucfirst($sign->name) ?? '' }}</div>
      </div>
      @endforeach
    </div> -->
  </div>


</body>

</html>
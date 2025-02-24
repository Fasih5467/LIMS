@php
use Carbon\Carbon;
@endphp
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


    .watermark {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0.1;
      font-size: 100px;
      color: #cccccc;
      transform: rotate(-30deg);
      pointer-events: none;
      /* Ensures it does not interfere with clicks or selections */
    }

    .container {
      width: 97%;
      margin: 0 15px;
    }

    .invoice-container {
      width: 97%;
      margin: 0 15px;
    }

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


  <!-- <div class="watermark">
    ORIGINAL
  </div> -->
  <div class="container mt-5">
    @if($header == 'yes')
    <div style="width: 100%;">
      <div style="display: inline-block;width:20%">
        <img src="{{ 'data:image/png;base64,'.base64_encode(file_get_contents(public_path($setting->file_path))) }}" />
      </div>
      <div style="text-align: center;display:inline-block;">
        <h1 style="padding: 0;margin:0;">{{ strtoupper($setting->name) ?? ''}}</h1>
        <p>{{ ucfirst($setting->address) ?? ''}}</p>
      </div>
    </div>
    @elseif($header == null || $header == 'no')
    <div style="margin-top: 43px;">

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
        <td>Contact:</td>
        <td>{{ $patient_info->patient_contact ?? ''}}</td>

        <td>Collection Date:</td>
        <td>{{ Carbon::parse($patient_info->collection)->format('d-m-y H:m:s') ?? ''}}</td>
      </tr>
      <tr>
        <td>Lab No:</td>
        <td>AMC{{ Carbon::parse($patient_info->collection)->format('ymd')?? ''}}0{{$patient_info->record_id ?? ''}}</td>
        <td>Reporting Date:</td>
        <td>{{ $reporting_date ?? ''}}</td>
      </tr>
      <tr>
        <td>Age:</td>
        <td>{{ucfirst($patient_info->age) ?? ''}}</td>
        <td>Ref by:</td>
        <td>{{ucfirst($patient_info->doctor_name) ?? ''}}</td>

        <!-- <td>FGW / ADM NO:</td>
        <td>OPD</td> -->
      </tr>
    </table>
  </div>
  <div class="invoice-container">
    <div class="section-title" style="text-align: center;"><u>{{ucwords($patient_info->category_name) ?? ''}}</u></div>
    <div style="height: 480px;">
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
              <b><u>{{$result->key ?? ''}}</u></b>
            </td>
          </tr>
          @if($result->description != null)
          <tr>
            <td colspan="4">
              {!! $result->description !!}
            </td>
          </tr>
          @endif
          @continue;
          @elseif($result->key == 'null')
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{{$result->value}}</td>
          </tr>
          @if($result->description != null)
          <tr>
            <td colspan="4">
              {!! $result->description !!}
            </td>
          </tr>
          @endif
          @continue
          @endif
          <tr>
            <td>{{$result->key == 'null'? '' : $result->key}}</td>
            <td>{{$result->result == 'null'? '' : $result->result}}</td>
            <td>{{$result->unit == 'null'? '' : $result->unit}}</td>
            <td>{{$result->value == 'null'? '' : $result->value}}</td>
          </tr>
          @if($result->description != null)
          <tr>
            <td colspan="4">
              {!! $result->description !!}
            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>

      <div class="remarks-section">
        <div style="display: flex;width:90%;height:auto">
          <p style="font-weight: bold; margin: 0 10px;display:inline-block;">Remarks:</p>
          <div style="margin-left: 40px; width:100%">
            @if(!empty($remarks))
            @foreach($remarks as $remark)
            <p style="margin: 0;">{{ $remark }}</p>
            @endforeach
            @endif
          </div>
        </div>



      </div>

    </div>
    <hr />
    <table>
      <tr>
        @foreach($signatures as $sign)
        <td style="text-align: center;">{{ strtoupper($sign->type) ?? '' }}<br />{{ ucfirst($sign->name) ?? '' }}<br /><span style="display: inline-block; min-width: 100px; min-height: 20px;">{{ $sign->qualification ?? '' }}</span></td>
        @endforeach
      </tr>
    </table>

    <table>
      <tr>

        <!-- <td style="padding-right:40px;background-color:#d3d3d3;"><span style="text-align: right;width:100%">Printed on / by : {{ date("d/m/y h:i:sa") }} / {{ucfirst(Auth::user()->name) ?? ''}}</span><br /><span style="text-align: left;">Printed on / by : {{ date("d/m/y h:i:sa") }} / {{ucfirst(Auth::user()->name) ?? ''}}</span></td> -->
        <td style="padding-right:40px;background-color:#d3d3d3;">
          <div style="display: flex; flex-direction: column; width: 100%;">
            <div style="text-align: right;">
              Printed on / by : {{ date("d/m/y h:i:sa") }} / {{ ucfirst(Auth::user()->name) ?? '' }}
            </div>
            <div style="text-align: left;font-size:10px">
               <b>Note:</b> This is a computer generated report, therefore signature are not required.
            </div>
          </div>
        </td>

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
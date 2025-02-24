<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

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


  <div class="invoice-container">

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
        @foreach($test_format as $result)
        @if($result->type == 'heading')
        <tr>
          <td colspan="4">
            <b><u>{{($result->key == 'null')? '': $result->key; }}</u></b>
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
        @elseif($result->key == 'null' || $result->key == null)
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



  </div>


</body>

</html>
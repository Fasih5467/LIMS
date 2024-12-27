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
      margin: 20px 0;
      text-transform: uppercase;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table th, table td {
      border: 1px solid black;
      padding-left: 4px;
      text-align: left;
    }
	

    .remarks-section {
      margin-top: 20px;
    }

    .remarks-section p {
      margin-bottom: 10px;
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
      width: 100%;
      border-collapse: collapse;
    }
    table th, table td {
      /* border: 1px solid black; */
      /* padding: 8px; */
      text-align: left;
    }
  </style>
</head>
<body>

<div class="container mt-5">
    <table>
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
    
    <div class="section-title">{{ucwords($patient_info->category_name) ?? ''}}</div>

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
						<b>{{$result->key}}</b>
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
      <p>REMARKS:</p>
    </div>
	
    <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;margin-top:40px">
  <div style="text-align: left;">LAB TECH</div>
  <div style="text-align: right; margin:right:100px">PATHOLOGIST</div>
</div>
  </div>

 
</body>
</html>

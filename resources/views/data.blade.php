<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    
    <h2>Barcode</h2>
    <p>{{$barcodeValueA}}</p>
    <p>{{$barcodeValueB}}</p>


    <h2>1111 Total</h2>
    <p>{{$countA}}</p>

    <h2>1122 Total</h2>
    <p>{{$countB}}</p>

    <h2>1111 Price Total</h2>
    <p>{{$countTotalPriceA}}</p>

    <h2>1122 Price Total</h2>
    <p>{{$countTotalPriceB}}</p>

    <h2>1111 Delivery Status</h2>
    <p>Ready: {{$readyCountA}}</p>
    <p>OnHold: {{$onHoldCountA}}</p>
    <p>Delivered: {{$delivCountA}}</p>
    <p>Packing: {{$packCountA}}</p>
    <p>Sent: {{$sentCountA}}</p>

    <h2>1122 Delivery Status</h2>
    <p>Ready: {{$readyCountB}}</p>
    <p>OnHold: {{$onHoldCountB}}</p>
    <p>Delivered: {{$delivCountB}}</p>
    <p>Packing: {{$packCountB}}</p>
    <p>Sent: {{$sentCountB}}</p>

</body>
</html>
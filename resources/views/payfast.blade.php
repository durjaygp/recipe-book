<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payfast test</title>
</head>
<body>
    <form action="https://sandbox.payfast.co.za/eng/process" method="post">
        <input type="hidden" name="merchant_id" value="10032130">
        <input type="hidden" name="merchant_key" value="6bbwbmnims8uz">
        <input type="hidden" name="item_name" value="Test Product">
        <input type="hidden" name="return_url" value="http://127.0.0.1:8000/success">
        <input type="hidden" name="name_first" value="John">
        <input type="hidden" name="name_last" value="Doe">
        <input type="hidden" name="email_address" value="john@doe.com">
        <input type="hidden" name="cell_number" value="0823456789">
        <input type="hidden" name="m_payment_id" value="01AB">
        <input type="hidden" name="amount" value="100.00">
        <input type="hidden" name="item_name" value="Test Item">
        <input type="hidden" name="item_description" value="A test product">
        <input type="hidden" name="custom_int1" value="2">
        <input type="hidden" name="custom_str1" value="Extra order information">
        <input type="submit">
    </form>
</body>
</html>


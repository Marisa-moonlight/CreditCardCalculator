<?php
$credit_card = filter_input(INPUT_POST, 'credit_card');
$credit_payment = filter_input(INPUT_POST, "credit_payment");
$savings_account = filter_input(INPUT_POST, "savings_account");
$paycheck_add = filter_input(INPUT_POST, "paycheck_add");
$withdraw_minus = filter_input(INPUT_POST, "withdraw_minus");
$credit_card = $credit_card - $credit_payment;
$savings_account = $savings_account + $paycheck_add;
$savings_account = $savings_account - $withdraw_minus;
$credit_card_f = '$'.number_format($credit_card, 2);
$savings_account_f = '$'.number_format($savings_account, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <h1>Credit Calculator</h1>

    <label> Credit Card Debt </label>
    <span><?php echo $credit_card_f?></span>
    <label> Savings Account</label>
    <span><?php echo $savings_account_f  ?></span>

</main>
</body>
</html>
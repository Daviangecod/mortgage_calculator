<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mortgage Calculator - Mobile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="width: 100%;">
        <div class="form-section">
            <div class="form-header">
                <h1>Mortgage Calculator</h1>
                <div class="clear-all">Clear All</div>
            </div>
            <div class="form-group">
                <label for="mortgage-amount">Mortgage Amount</label>
                <div class="input-container">
                    <span class="currency-symbol">€</span>
                    <input type="text" id="mortgage-amount" name="mortgage-amount">
                </div>
            </div>
            <div class="form-group">
                <label for="mortgage-term">Mortgage Term</label>
                <div class="input-container">
                    <input type="text" id="mortgage-term" name="mortgage-term">
                    <span class="term-symbol">years</span>
                </div>
            </div>
            <div class="form-group">
                <label for="interest-rate">Interest Rate</label>
                <div class="input-container">
                    <input type="text" id="interest-rate" name="interest-rate">
                    <span class="rate-symbol">%</span>
                </div>
            </div>
            <div class="form-group">
                <label>Mortgage Type</label>
                <div class="input-container">
                    <input type="radio" id="repayment-radio" name="mortgage-type" value="repayment">
                    <input type="text" id="repayment" name="repayment" value="Repayment">
                </div>
                <div class="input-container" style="margin-top: 10px;">
                    <input type="radio" id="interest-only-radio" name="mortgage-type" value="interest-only">
                    <input type="text" id="interest-only" name="interest-only" value="Interest Only">
                </div>
            </div>
            <button class="calculate-button" style="border-radius: 10px;">
                <span class="button-icon">&#128197;</span>
                Calculate Repayments
            </button>
        </div>
        <div class="image-section">
            <img src="../panda.jpg" alt="panda">
            <div class="image-text">Your Results</div>
        </div>
    </div>
</body>
</html>

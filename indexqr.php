 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleqr.css" class="">
    <title>Qr project</title>
</head>
<body>
    <div class="box">
        <div class="qrhead">
            <h1>Generate Qr Code</h1>
            <input type="text" placeholder="enter your text or url" id= "qrtext">
            <div class="size">
                <label for="sizes">select size:</label>
                <select id="sizes">
                    <option value="100">100*100</option>
                    <option value="200">200*200</option>
                    <option value="300">300*300</option>
                    <option value="400">400*400</option>
                    <option value="500">500*500</option>
                    <option value="600">600*600</option>
                    <option value="700">700*700</option>
                    <option value="800">800*800</option>
                    <option value="900">900*900</option>
                    <option value="1000">1000*1000</option>
                    
                </select>
            </div>
        </div>
        <div class="qrbody"></div>
        <div class="qrfooter">
            <a href="" id="generatebtn">Generate</a>
            <a href="" id="downloadbtn" download="QR_Code.png">Download</a>
        </div>
    </div>
    <script src="indexqr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</body>
</html> 
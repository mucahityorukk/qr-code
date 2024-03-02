<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code Styling</title>
    <!-- <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script> -->
    <script type="text/javascript" src="qr-code-styling.js"></script>
</head>
<body>
<div id="canvas"></div>
<script type="text/javascript">

    const qrCode = new QRCodeStyling({
        width: 300,
        height: 300,
        type: "svg",
        data: "index.html",
        image: "",
        dotsOptions: {
            color: "black",
            type: "rounded"
        },
        backgroundOptions: {
            color: "#e9ebee",
        },
        imageOptions: {
            crossOrigin: "anonymous",
            margin: 20
        },
        cornersSquareOptions: {
            type: 'dot', 
        },
        cornersDotOptions: {
            type: 'dot',
        },
        imageOptions: {
            hideBackgroundDots: true, 
            imageSize: 0.4, 
            margin: 0
        }
    });

    qrCode.append(document.getElementById("canvas"));
   qrCode.download({ name: "qr", extension: "png" });
</script>
</body>
</html>
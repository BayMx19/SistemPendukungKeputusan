<html>
    <head>
        <title> Fuzzy - Kelayakan Beasiswa </title>
        
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="script/fuzzy.js" type="text/javascript"></script>
        <style>
            html body  {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: #0f0c29;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                color: #ffff;
            }
            
            .form-control {
                border-radius: 10px;
            }

            .btn {
                border-radius: 15px;     
                color:#000046;           
                background: #06beb6;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #48b1bf, #06beb6);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #48b1bf, #06beb6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                border: #000046 2px solid;
            }

            .btn:hover {
                background: #000046;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #1CB5E0, #000046);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #1CB5E0, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                border: linear-gradient(to right, #1CB5E0, #000046);

            }
        </style>
    </head>
    <body>

        <div class="container" style="margin-top:30px; max-width:600px; position:relative; text-align:center;">
            
            <hr><h1> <b>Algoritma Fuzzy</b> <br> <h4> - Kelayakan Beasiswa - </h4> </h1>            
            <hr> <h4>Oleh :</h4> 

            <h4>Isa Iman Muhammad - 20051397019 </h4>
            <h4> D4 Manajemen Informatika</h4> <hr><br>
            
            <div class="form-group" style="text-align: left;">
                <label > IPK Penerima Beasiswa (0-4) </label>
                <input class="form-control" type="text" placeholder="-" id="inIPK">
            </div>
            
            <div class="form-group" style="text-align: left;">
                <label> Penghasilan Orang Tua (Juta) </label>
                <input class="form-control" type="text" placeholder="Rp. - Juta" id="inGaji">
            </div>
            
            <button class="btn btn-primary btn-block btn-lg" id="btnProses"> Proses </button>
            
            <br><br>
            <div id="divOut"> <br> </div><br>
            <hr>
            <img src="img/mamdani.jpg" style="width:100%; border:1px solid #eef;"> <hr>
          
            
           
            
        </div>
   
    </body>
</html>
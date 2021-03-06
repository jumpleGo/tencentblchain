<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My account</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        html {
            overflow-x: hidden;
        }

        .data {
            color: black;
            padding: 7px 4px;
            background: white;
            border-radius: 2px;
            ;

        }

        .info_pack_link {
            font-size: 11px;
            color: blue !important;
            margin-left: auto;
            padding: 0 !important;
            text-decoration: underline !important;
        }

        .info_pack_link:hover {
            cursor: pointer;
        }

        .data:hover {
            box-shadow: 0px 0px 9px -3px rgba(0, 0, 0, 0.75);
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu {
            background: transparent;
            width: 100%;
        }

        .data+.data {
            margin-top: 15px;
        }

        .info_pack_text {
            padding-bottom: 5px;
            font-weight: 500;
            letter-spacing: 0.5px;
            font-size: 14px;
            line-height: 1;
        }

        .info_pack_body {
            font-size: 14px;
            padding-left: 5px;
            font-weight: 400;
            line-height: 1.2;
        }

        .navbar-nav .dropdown-menu {
            padding: 0 !important;
        }

        .info_pack_date {
            font-size: 9px;
            font-weight: 500;
            color: gray;
            margin-top: 10px;

        }

        #get {
            display: none;
        }
    </style>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <h4 class="user_mail_pole"
                        style="color:white; text-align:center;font-size:18px;font-weight: 500;padding-top:20px;"></h4>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-google-wallet"></i>My token</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li id="get"><i class="fa fa-btc"></i><a>Get tokens</a></li>
                            <li id="buy-tokens-button"><i class="fa fa-money"></i><a>Buy tokens</a></li>
                            <li id="withdraw-tokens-button"><i class="fa fa-long-arrow-right"></i><a>Withdraw</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle notify" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-bell"></i>Notifications
                            <span class="count"></span>
                        </a>
                        <ul class="ub-menu children dropdown-menu  notifications">
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div style="display: flex;align-items: center;justify-content: space-between;" class="header-menu">
                <div style="display:flex;align-items:center">
                    My Balance
                    <div class="balance1">
                        <style>
                            .balance1 {
                                width: 80px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border: 2px solid blue;
                                border-radius: 5px;
                                padding: 5px 0;
                                margin-left: 10px;
                            }
                        </style>

                        <span class="balance">0</span>
                    </div>
                </div>
                <a class="nav-link exit" href="#"><i class="fa fa-power-off"></i> Logout</a>
            </div>

        </header><!-- /header -->
        <!-- Header-->


        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6 price-button">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Tokens price $</h4>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# column -->


                    <div class="col-lg-6 buy-tokens-button" style="display: block;">
                    <!--BETATTRANSFER-->
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Buy tokens</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Pay Invoice</h3>
                                        </div>
                                        <hr>
                                        <form
                                        style="
                                        display:flex;
                                        flex-direction:column;
                                        "
                                          method="post" action="./applicationFromForm.php" accept-charset="UTF-8">

                                          <label style="margin-top:20px;" for="">Amount</label>
                                            <input style="
                                            width: 100%;
                                            border: 1px solid #80808038;
                                            padding: 10px;
                                            font-size: 20px;"
                                            type="text"  value="" id="sum" 
                                            onchange="calculate()" 
                                            onkeyup="calculate()"
                                            onfocusout="calculate()" 
                                            onactivate="calculate()"
                                            ondeactivate="calculate()"
                                            id="oa"  placeholder="100 $" class="false-amount"/>


                                            <input type="hidden" name="currency" value="RUB" />

                                            <input type="hidden" name="amount" class="true-amount">

                                            <label style="margin-top:20px;" for="">Your adress (automatically)</label>
                                            <input 
                                            style="
                                            width: 100%;
                                            border: 1px solid #80808038;
                                            padding: 5px;
                                            font-size: 16px;
                                            " type="text" name="orderId" class="order"  required/>
                                            <input type="hidden" name="urlResult" value="https://tenhain.tech/en-us/postReqBetatransfer.php">
                                            <input type="hidden" name="urlSuccess" value="https://tenhain.tech/en-us/account.php">
                                            <input type="hidden" name="urlFail" value="https://tenhain.tech/en-us/fail.php">
                                            
                                            
                                            <input 
                                            style="
                                            margin-top:20px;
                                            width: 100%;
                                            border: none;
                                            background: #0101c1;
                                            color: white;
                                            text-transform: uppercase;
                                            padding: 10px;
                                            font-size: 20px;
                                            "
                                            type="submit" 
                                            id="submit">
                                        </form>
                                        <p id="error2"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



              

                    <div style="display:none" class="col-lg-6 buy-tokens-button">
                     <!--FREEKASSA-->
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Buy tokens</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Pay Invoice</h3>
                                        </div>
                                        <hr>
                                        <?php
                                            $fk_merchant_id = '173610'; 
                                            $fk_merchant_key = '0dzdcrjc'; 
                                            //0dzdcrjc
                                        if (isset($_GET['prepare_once'])) {
                                            $hash = md5($fk_merchant_id.":".$_GET['oa'].":".$fk_merchant_key.":".$_GET['l']);
                                            echo '<hash>'.$hash.'</hash>';
                                        exit;
                                        }
                                        ?>
                                        


                                        <div id="error"></div>

                                        <form method=GET target="_blank"
                                            action="https://www.free-kassa.ru/merchant/cash.php">
                                            <input type="hidden" name="m" value="<?=$fk_merchant_id?>">
                                            <input 
                                            style="
                                            width: 100%;
                                            border: 1px solid #80808038;
                                            padding: 10px;
                                            font-size: 20px;"
                                            type="text" 
                                            name="oa" 
                                            id="sum" 
                                            id="oa" 
                                            onchange="calculate()" 
                                            onkeyup="calculate()"
                                            onfocusout="calculate()" 
                                            onactivate="calculate()"
                                            ondeactivate="calculate()" 
                                            placeholder="Total USD">
                                            <input type="hidden" name="s" id="s" value="0">
                                            <input type="hidden" name="us_uid" class="uid">
                                            <br>
                                            <input type="hidden" name="o" id="desc" value="" onchange="calculate()"
                                                onkeyup="calculate()" onfocusout="calculate()" onactivate="calculate()"
                                                ondeactivate="calculate()">
                                            <br>
                                            <input 
                                            style="width: 100%;
                                            border: none;
                                            background: #0101c1;
                                            color: white;
                                            text-transform: uppercase;
                                            padding: 10px;
                                            font-size: 20px;" 
                                            type="submit" 
                                            id="submit" 
                                            value="pay" 
                                            disabled>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>

                    <div class="col-lg-6 withdraw-tokens-button" style="display: none;">
                        <div class="card">
                            <div class="card-header">
                                <strong>Withdraw</strong> Tokens
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" id="form-horizontal" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-tokens"
                                                class=" form-control-label">Tokens</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" id="hf-tokens" name="hf-tokens"
                                                placeholder="How much tokens" class="form-control"><span
                                                class="help-block">only integers</span></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-adress"
                                                class=" form-control-label">Tencent adress</label></div>
                                        <div class="col-12 col-md-9">
                                            <input id="hf-adress" name="hf-adress" placeholder="tencent adress"
                                                class="form-control"><span class="help-block">adress</span></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hf-adress"
                                                class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9">
                                            <input id="hf-pass" name="hf-adress" placeholder="password"
                                                class="form-control"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <p class="error_withdrawal"></p>
                                <button class="btn btn-primary btn-sm withdraw_btn">
                                    <i class="fa fa-dot-circle-o"></i> Withdraw
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- /# row -->

                <div id="snackbar" class="col-xs-10 offset-xs-1 col-lg-6 ">

                    <div style="display:flex" class="sufee-alert alert with-close alert-success alert-dismissible  ">
                        <span class="badge badge-pill badge-success">Success</span>
                        <span class="success_text">You got 5 tokens!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

                <!-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class='title-nof'>Custom Tab</h4>
                            </div>
                            <div class="card-body">
                                <div class="custom-tab">
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div>
                                            <p class="text-nof">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone. Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->



    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  flot-chart js -->
    <script src="vendors/flot/excanvas.min.js"></script>
    <script src="vendors/flot/jquery.flot.js"></script>
    <script src="vendors/flot/jquery.flot.pie.js"></script>
    <script src="vendors/flot/jquery.flot.time.js"></script>
    <script src="vendors/flot/jquery.flot.stack.js"></script>
    <script src="vendors/flot/jquery.flot.resize.js"></script>
    <script src="vendors/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/js/init-scripts/flot-chart/curvedLines.js"></script>
    <script src="assets/js/init-scripts/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="assets/js/init-scripts/flot-chart/flot-chart-init.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.8.6/firebase-firestore.js"></script>
    <script>
     $('.false-amount')[0].oninput = function() {
                var value = +$(this).val();
                $('.true-amount').val(value * 65);
    };
    </script>
    <script>
        var get = document.getElementById('get');
        var x = document.getElementById("snackbar");
        get.addEventListener('click', () => {
            x.classList.add("show");
            setTimeout(function () {
                x.className = x.className.replace("show", "");
            }, 3000);
        })
    </script>
    <script>
        function rand() {
            return num = (Math.random() * (999999 - 100000) + 100000).toFixed(0);
        }
    </script>

    <script>
        var buy_widget = document.querySelector('.buy-tokens-button');
        var withdraw_widget = document.querySelector('.withdraw-tokens-button');
        var price_widget = document.querySelector('.price-button');

        var buy_btn = document.querySelector('#buy-tokens-button');
        var withdraw_btn = document.querySelector('#withdraw-tokens-button');

        buy_btn.addEventListener('click', () => {
            price_widget.style.display = "none";
            withdraw_widget.style.display = "none";
            buy_widget.style.display = "block";
        })

        withdraw_btn.addEventListener('click', () => {
            price_widget.style.display = "none";
            withdraw_widget.style.display = "block";
            buy_widget.style.display = "none";
        })
    </script>

    <script type="module" defer>
        import * as sign from './../js/firebase.js';
    sign.onAuth();
    let exit  = document.querySelector('.exit');
    exit.addEventListener("click", () =>{
        sign.exit();
    });

    let getTokens = document.querySelector('#get');
    getTokens.addEventListener('click', () =>{
        sign.getTokens();
          getTokens.style.display = "none";

    });
    let count = document.querySelector('.count');
    let notify = document.querySelector('.notify');
    notify.addEventListener('click', function(){
       count.style.display = "none";
    });
    window.onload = sign.drawNotifications();
     setTimeout(() => {
        sign.getUid();
     }, 4000);

    
    document.querySelector('.withdraw_btn').addEventListener('click', function(){
        sign.transfer();
        
    })



    </script>

<script src="https://yandex.st/jquery/1.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    var min = 10;

    function calculate() {
    var re = /[^0-9\.]/gi;
    var url = window.location.href;
    var desc = $('#desc').val();
    var sum = $('#sum').val();
    if (re.test(sum)) {
        sum = sum.replace(re, '');
        $('#oa').val(sum);
    }
    if (sum < min) {
        $('#error').html('min 10$');
        $('#error2').html('min 10$');
        $('#submit').attr("disabled", "disabled");
        return false;
    } else {
        $('#error').html('');
        $('#error2').html('');
    }
    let num = (Math.random() * (999999 - 100000) + 100000).toFixed(0);
    $('#desc').text(num);
  

    $.get(url + '?prepare_once=1&l=' + desc + '&oa=' + sum, function (
        data) {
        var re_anwer = /<hash>([0-9a-z]+)<\/hash>/gi;
        $('#s').val(re_anwer.exec(data)[1]);
        $('#submit').removeAttr("disabled");
    });
}
</script>


</body>

</html>
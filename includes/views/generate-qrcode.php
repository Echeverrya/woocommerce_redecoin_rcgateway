<?php
if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
?>
<style>
    .rc-box-address{
        display:block; text-align:center; width:100%; height:auto; overflow:hidden;
        margin-bottom: 10px;
    }

    .rc-box-address img{
        margin:0 auto;
    }

    .rc-text-center{
        text-align:center;
    }
    .rc-container{
        padding: 25px;
        background: #f9f9f9;
        border: 1px solid #ececec;
    }
</style>
<div class="rc-container">
    <h1 class="rc-text-center">Estamos quase lá!</h1>
    <p class="rc-text-center"><b>Deposite <span style="color:#F79219; font-size:18px;"><?= $total_crypto ?> btc</span> no endereço abaixo:</b></p>
    <div class="rc-box-address">
        <img width="205px" src="<?= $qrcode ?>" alt="Endereço de pagamento">
    </div>
    <p style="background:#dedede; border:1px solid #cccccc; padding: 3px 15px; border-radius: 12px; font-size:13px; color:#000;text-align: center" class="rc-text-center"><i><?= $rc_address ?></i></p>

</div>





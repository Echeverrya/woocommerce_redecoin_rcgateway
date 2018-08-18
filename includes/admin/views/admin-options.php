<h3><?php _e( 'Gateway Name', 'woocommece-payment-redecoin' ); ?></h3>

<div class="gateway-banner updated">
  <img src="<?php echo WC_Gateway_Redecoin()->plugin_url() . '/assets/images/logo.png'; ?>" />
  <p class="main"><strong><?php _e( 'Getting started', 'woocommece-payment-redecoin' ); ?></strong></p>
  <p><?php _e( 'Redecoin makes it easier to accept cryptocurrencies in your e-commerce!', 'woocommece-payment-redecoin' ); ?></p>

  <p class="main"><strong><?php _e( 'Gateway Status', 'woocommece-payment-redecoin' ); ?></strong></p>
  <ul>
    <li><?php echo __( 'Debug Enabled?', 'woocommece-payment-redecoin' ) . ' <strong>' . $this->debug . '</strong>'; ?></li>
    <li><?php echo __( 'Sandbox Enabled?', 'woocommece-payment-redecoin' ) . ' <strong>' . $this->sandbox . '</strong>'; ?></li>
  </ul>

  <?php if( empty( $this->public_key ) ) { ?>
  <p><a href="http://www.redecoin.com/" target="_blank" class="button button-primary"><?php _e( 'Register', 'woocommece-payment-redecoin' ); ?></a> <a href="http://www.redecoin.com/" target="_blank" class="button"><?php _e( 'Learn more', 'woocommece-payment-redecoin' ); ?></a></p>
  <?php } ?>
</div>

<table class="form-table">
  <?php $this->generate_settings_html(); ?>
  <script type="text/javascript">
  jQuery( '#woocommerce_gateway_name_sandbox' ).change( function () {
    var sandbox = jQuery( '#woocommerce_gateway_name_sandbox_public_key, #woocommerce_gateway_name_sandbox_private_key' ).closest( 'tr' ),
    production  = jQuery( '#woocommerce_gateway_name_public_key, #woocommerce_gateway_name_private_key' ).closest( 'tr' );

    if ( jQuery( this ).is( ':checked' ) ) {
      sandbox.show();
      production.hide();
    } else {
      sandbox.hide();
      production.show();
    }
  }).change();
  </script>
</table>

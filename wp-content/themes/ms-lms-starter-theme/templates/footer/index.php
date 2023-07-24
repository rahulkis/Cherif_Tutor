<footer class="footer">
	<div class="container">
		<div class="copyright">
			<?php
				// Translators: %s: name
				echo sprintf( esc_html__( '&copy; %s, Copyright by Bonjour Tutors', 'starter-text-domain' ), esc_html( gmdate( 'Y' ) ) ) . "\n\n";
			?>
		</div>
	</div>
</footer>

<style>
.single-product h1.product_title.entry-title {
    font-size: 25px;
}
.woocommerce-additional-fields h3,.woocommerce-additional-fields__field-wrapper,tr.shipping.recurring-total,.woocommerce-edit-address .u-column2.col-2.woocommerce-Address,.woocommerce-MyAccount-navigation-link--dashboard,.nsl-container.nsl-container-block,form.woocommerce-ordering,.woocommerce-variation-add-to-cart .quantity,p#wc-stripe-payment-request-button-separator,div#wc-stripe-payment-request-wrapper,a.button.wp-element-button.product_type_variable-subscription.add_to_cart_button,.woocommerce-MyAccount-navigation-link--downloads {
    display: none! important;
}
span.from,.price_cnt span.subscription-details,ul.tabs.wc-tabs,.woocommerce-variation-price,li#tab-title-additional_information,li#tab-title-reviews,div#tab-additional_information,table.variations tbody {
    display: none! important;
}
.search-bar-page .crseDtl .rightCnt {
    padding-left: 20px;
    width: 70%;
    text-align: left;
}
</style>
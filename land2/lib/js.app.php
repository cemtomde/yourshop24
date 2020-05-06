<?php

global $offer, $offers, $leadToken, $push_link, $push_link;
$_offers = [];
$_allowedCountries = [];

foreach($offers as $offerData) {
    $_offers[$offerData['id']] = $offerData;
    $_allowedCountries[] = $offerData['country']['code'];
}

?>
    <script src="lib/jquery.min.js"></script>
    <script>

        function fixForm(form) {

            form = $(form);

            form.on('submit', function( e ){
                // Блокируем кнопки при отправке формы
                $('input[type=submit]', $(this)).prop( 'disabled', true ).attr( 'disabled', true );
                $('button', $(this)).prop( 'disabled', true ).attr( 'disabled', true );

            });

            function _fieldExists(form, fieldName) {
                return Boolean(form.find('input[name=' + fieldName + '], select[name=' + fieldName + ']').length);
            }

            function _setField(form, fieldName, value) {
                value = value || '';
                if (!_fieldExists(form, fieldName)) {
                    var el = $('<input type="hidden" name="' + fieldName + '" value="">');
                    el.val(value);
                    form.prepend(el);
                }
            }

            if (form.data('seturl') || !$(this).attr('action')) {
                form.attr("action", 'send_lead.php');
                form.prop("action", 'send_lead.php');
                form.data('seturl', 1);
            }

            form.find('[name=name]').attr('autocomplete', 'name').attr("required", 'required');
            form.find('[name=phone]').attr('autocomplete', 'tel').attr("required", 'required');

            if (!_fieldExists(form, 'country')) {
                _setField(form, 'country', app.currentOffer.country.code);
            }

            <?php
            foreach($utm as $key => $val) {
                echo "_setField(form, '".$key."', '".$val."');";
            }
            ?>

            if (!_fieldExists(form, 'timezone_int')) {
                var d = new Date(), tz = d.getTimezoneOffset() / -60;
                _setField(form, 'timezone_int', tz);
            }

        }

        function fixAllForms() {
            $('form').each(function(idx, form) {
                fixForm(form);
            });
        }

        window.app = {
            timestamp: parseInt((new Date()).getTime() / 1000),
            jq: jQuery,
            offers: <?= json_encode($_offers); ?>,
            currentOffer: <?= json_encode($offer); ?>,
            allowedCountries: <?= json_encode($_allowedCountries); ?>,
            _setOfferId: false,

            setOffer: function (offerId) {
                if (offerId == this._setOfferId) {
                    return ;
                }
                this._setOfferId = offerId;
                if (offerId) {
                    var offer = app.offers[offerId];
                    var previousOffer = app.currentOffer;
                    app.currentOffer = offer;
                    var event = this.jq.Event("offerchange");
                    event.previousOffer = previousOffer;
                    event.currentOffer = app.currentOffer;
                    this.jq(document).trigger(event);
                    this.updatePage(offer);
                } else {
                    $('input[name=country]').val('');
                }
            },

            updatePage: function(offer) {
                $('x-newprice').html(offer.price);
                $('x-oldprice').html(offer.price2);
                $('x-currency').html(offer.currency.name);
                $('input[name=offer], select[name=offer]').val(offer.id);
                $('input[name=country]').val(offer.country.code);
            }


        };

        $(document).on('change input', 'select[name=offer]', function(e) {
            app.setOffer(this.value);
        });

        setInterval(fixAllForms, 1000);

    </script>

<?php if ($push_link) { ?>
    <script src="<?= $push_link ?>"></script>
<?php }

unset($_offers);
unset($_allowedCountries);

$(function () {
  $('input[name="pets[]"]').change(function() {
      if ($(this).val() === "その他の動物") {
        $('.chack-textarea').slideToggle(this.checked);
      }
    });

    $('input[name="pets[]"]').change(function() {
      if ($(this).val() === "小動物") {
        $('.chack-exizo-textarea').slideToggle(this.checked);
      }
    });

    $('input[name="welcome[]"]').change(function() {
      if ($(this).val() === "その他のお店") {
        $('.chack-shop-textarea').slideToggle(this.checked);
      }
    });

    $('input[name="hard[]"]').change(function() {
      if ($(this).val() === "その他の理由") {
        $('.chack-reason-textarea').slideToggle(this.checked);
      }
    });

    function updateCount(inputId, countClass) {
      $(inputId).keyup(function() {
        var remain = 500 - $(this).val().length;
        $(countClass).text(remain);
        if (remain < 0) {
          $(countClass).css('color', 'red');
        } else {
          $(countClass).css('color', 'grey');
        }
      });
    }
    
    updateCount('#other_countDown', '.other_count');
    updateCount('#other_exizopets', '.exizopets_count');
    updateCount('#other_pets', '.pets_count');
    updateCount('#other_shop', '.shop_count');
    updateCount('#pets_good', '.good_count');
    updateCount('#pets_hard', '.hard_count');
})
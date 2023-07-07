$(function () {
  function toggleTextarea(element, targetClass) {
    if ($(element).is(':checked')) {
      $(targetClass).slideToggle(true);
    } else {
      $(targetClass).slideToggle(false);
    }
  }

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
    updateCount('#many_pets', '.many_count');
    updateCount('#other_shop', '.shop_count');
    updateCount('#many_pets-cost', '.many_cost_count');
    updateCount('#medical_pets-cost', '.medical_cost_count');
    updateCount('#pets_good', '.good_count');
    updateCount('#pets_hard', '.hard_count');

    $('input[name="pets[]"]').change(function() {
      if ($(this).val() === "小動物") {
        toggleTextarea(this, '.chack-exizo-textarea');
      } else if ($(this).val() === "その他の動物") {
        toggleTextarea(this, '.chack-textarea');
      } else if ($(this).val() === "多頭飼いの方") {
        toggleTextarea(this, '.chack-many-textarea');
      }
    });
    
    $('input[name="welcome[]"]').change(function() {
      if ($(this).val() === "その他のお店") {
        toggleTextarea(this, '.chack-shop-textarea');
      }
    });
    
    $('input[name="hard[]"]').change(function() {
      if ($(this).val() === "その他の理由") {
        toggleTextarea(this, '.chack-reason-textarea');
      }
    });
    
    $('input[name="living_expenses[]"]').change(function() {
      if ($(this).val() === "多頭飼いの方") {
        toggleTextarea(this, '.chack-manycost-textarea');
      }
    });
    
    $('input[name="medical_bills[]"]').change(function() {
      if ($(this).val() === "多頭飼いの方") {
        toggleTextarea(this, '.chack-medical-textarea');
      }
    });
})
(function ($) {
  $(document).ready(function () {

    const rangeSlider1 = document.getElementById('float');
    const rangeSlider2 = document.getElementById('area');
    const rangeSlider3 = document.getElementById('cost');
    const inputFloat = document.querySelectorAll('.form-control-input');
    const checkbox = document.querySelectorAll('.btn-checkbox');
    const radio = document.querySelectorAll('.radio');
    const card = document.getElementById('card');

    let inputs = [[inputFloat[0], inputFloat[1]], [inputFloat[2], inputFloat[3]], [inputFloat[4], inputFloat[5]]];

    function setRangeSlider(i, value, el) {
      let arr = [null, null];
      arr[i] = value;

      el.noUiSlider.set(arr);
    }

    function sliderFloat() {
      noUiSlider.create(rangeSlider1, {
        start: [1, 9],
        connect: true,
        range: {
          min: [1],
          max: [9]
        },
        step: 1
      });

      rangeSlider1.noUiSlider.on('update', function (values, handle) {
            inputs[0][handle].value = Math.round(values[handle]);
          }
      );

      inputs[0].forEach((el, index) => {
        el.addEventListener('change', e => {
          setRangeSlider(index, e.currentTarget.value, rangeSlider1);
        });
      });
    }

    sliderFloat();

    function sliderArea() {
      noUiSlider.create(rangeSlider2, {
        start: [36, 51],
        connect: true,
        range: {
          min: [36],
          max: [51]
        },
        step: 1
      });

      rangeSlider2.noUiSlider.on('update', function (values, handle) {
            inputs[1][handle].value = Math.round(values[handle]);
          }
      );

      inputs[1].forEach((el, index) => {
        el.addEventListener('change', e => {
          setRangeSlider(index, e.currentTarget.value, rangeSlider2);
        });
      });

    }

    sliderArea();

    function sliderCost() {
      noUiSlider.create(rangeSlider3, {
        start: [695036, 954680],
        connect: true,
        range: {
          min: [695036],
          max: [954680]
        },
        step: 1
      });

      rangeSlider3.noUiSlider.on('update', function (values, handle) {
            inputs[2][handle].value = Math.round(values[handle]);
          }
      );

      inputs[2].forEach((el, index) => {
        el.addEventListener('change', e => {
          setRangeSlider(index, e.currentTarget.value, rangeSlider3);
        });
      });

    }

    sliderCost();

    radio.forEach(e => {
      e.addEventListener('click', btn => {
        if (btn.target.id === 'btnradio1') {
          card.classList.remove('box-card');
          card.classList.add('box-list');
        } else if (btn.target.id === 'btnradio2') {
          card.classList.remove('box-list');
          card.classList.add('box-card');
        }
      });
    });

    function check() {
      checkbox.forEach(btn => {
        btn.checked = false;
      });
    }

    function resetFilters() {
      $('.reset-filters').click(() => {
        rangeSlider1.noUiSlider.set([1, 9]);
        rangeSlider2.noUiSlider.set([36, 51]);
        rangeSlider3.noUiSlider.set([695036, 954680]);
        check();
      });
    }

    resetFilters();
  });
})(jQuery);

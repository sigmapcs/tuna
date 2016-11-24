$(function () {
  let slider = $('#slider'),
    next = $('#next'),
    prev =$('#prev'),
    pos = 0;
  prev.on('click', function (e) {
    e.preventDefault();
    if (pos >= 0) {
      pos = pos + 100;
      console.log(pos);
      slider.css({
        left:'0'
      })
    }
  });
  next.on('click', function (e) {
    e.preventDefault();
    if(pos < 200){
      pos=pos-100;
      console.log(pos);
      slider.css({
        left:'-100%'
      })
    }
  });
});

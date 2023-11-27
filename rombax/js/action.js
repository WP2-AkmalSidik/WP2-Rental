
function openBox()
{
   $('.action-loaded').addClass('modal-active');
   $('.action-loaded-box').addClass('box-active');
}

function loadPaket()
{
   $.get( $('#base_url').val() + 'action/getPaket', {},  (responsetext) =>
   {
      $('#pilih-paket').html(responsetext);
   });
}

function loadDriver()
{
   $.get( $('#base_url').val() + 'action/getDriver', {},  (responsetext) =>
   {
      $('#driver').html(responsetext);
   });
}

function removeBox()
{
   $(document).ready( ()=>
   {
      $('.action-loaded').removeClass('modal-active');
      $('.action-loaded-box').removeClass('box-active');
   });
}

function getAction(btn,mobil,user,id_mobil)
{
   $(document).ready( () =>
   {
      const url = $('#base_url').val();
      const psElement = 
      '<h3 style="margin-bottom:1vh;">'+ mobil +'</h3>'+
      '<h5 style="margin:0.5vh;">Pesan mobil ini?</h5>'+
      '<form action="'+ url +'action/pesan" method="POST">'+
            '<input type="hidden" name="user" value="'+ user +'">'+
            '<input type="hidden" name="mobil" value="'+ id_mobil +'">'+
            '<select onclick="showPrice()" id="pilih-paket" name="paket">'
               +
               loadPaket()
               +
            '</select>'+
            '<select onclick="showPrice()" id="driver" name="driver">'
               +
               loadDriver()
               +
            '</select>'+
            '<p id="harga-pkt"></p>'+
            '<p id="harga-drv">Driver: <strong style="color:black;">Rp'+ numberFormat(100000) +'</strong></p>'+
            '<p id="total"></p>'+
            '<button style="width:30%; background: '+ $('#actLoad-btn').val() +'" type="submit">Pesan</button>'+
      '</form>';

      if(btn == 'pesan')
      {
         openBox();
         $('.go').html(psElement);
      }
   });
}

function numberFormat(data)
{
   data += '';
   x = data.split('.');
   x1 = x[0];
   x2 = x.length > 1 ? '.' + x[1] : '';
   var rgx = /(\d+)(\d{3})/;
   while ( rgx.test(x1) )
   {
      x1 = x1.replace(rgx,'$1'+','+'$2');
   }
   return x1 + x2;
}

function showPrice()
{
   $(document).ready( ()=>
   {
      let pilihPaket = $('#pilih-paket').val();
      let total = $('#total');
      let text2 = 'Total biaya: <strong style="color:red;">Rp';
      let text3 = '</strong>';
      $('#harga-pkt').html( 'Paket: <strong style="color:black;">Rp' + numberFormat(pilihPaket) + '</strong>');
      total.html( text2 + numberFormat( parseInt(pilihPaket) + 100000 ) + text3 );
   });
}
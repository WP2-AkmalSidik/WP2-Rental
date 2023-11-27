
// Theme changer
function loadTheme(color)
{
   $.post( $('#base_url').val() + 'admin/theme', {color: color},  () =>{});
}

$(document).ready( () => 
{
   let url = $('#base_url').val();

   let homePage = $('.home-page');
   
   let swBtnLft = $('.switch-btn-left');

   let blueTheme = $('.blue-theme');
   let violetTheme = $('.violet-theme');
   let greenTheme = $('.green-theme');
   let chocolateTheme = $('.chocolate-theme');

   let pesananBtn = $('.pesanan-btn');
   let paketBtn = $('.paket-btn');
   let driverBtn = $('.driver-btn');
   let transaksiBtn = $('.transaksi-btn');
   let mobilBtn = $('.mobil-btn');
   let memberBtn = $('.member-btn');
   let logoutBtn = $('.logout-btn');

   homePage.click( ()=>
   {
      window.location = url + 'admin/';
   });

   pesananBtn.click( ()=>
   {
      window.location = url + 'admin/pesanan';
   });

   paketBtn.click( ()=>
   {
      window.location = url + 'admin/paket';
   });
   
   driverBtn.click( ()=>
   {
      window.location = url + 'admin/driver';
   });

   transaksiBtn.click( ()=>
   {
      window.location = url + 'admin/transaksi';
   });

   mobilBtn.click( ()=>
   {
      window.location = url + 'admin/mobil';
   });

   memberBtn.click( ()=>
   {
      window.location = url + 'admin/member';
   });
   
   swBtnLft.click( ()=>
   {
      swBtnLft.toggleClass('switch-btn-active');
      
      blueTheme.toggleClass('button-left-active');
      violetTheme.toggleClass('button-left-active');
      greenTheme.toggleClass('button-left-active');
      chocolateTheme.toggleClass('button-left-active');

      function dirTheme()
      {
         let header = window.location;
         if( window.location == url + 'admin/pesanan' ) header = url + 'admin/pesanan';
         if( window.location == url + 'admin/paket' ) header = url + 'admin/paket';
         if( window.location == url + 'admin/driver' ) header = url + 'admin/driver';
         if( window.location == url + 'admin/transaksi' ) header = url + 'admin/transaksi';
         if( window.location == url + 'admin/mobil' ) header = url + 'admin/mobil';
         if( window.location == url + 'admin/member' ) header = url + 'admin/member';
         // Homepage - Admin
         if( window.location == url + 'admin' ) header = url + 'admin';
         window.location = header;
      }

      blueTheme.click( ()=>
      {
         loadTheme( 'rgb(71, 56, 155)' );
         dirTheme();
      });
      violetTheme.click( ()=>
      {
         loadTheme( '#C71585' );
         dirTheme();
      });
      greenTheme.click( ()=>
      {
         loadTheme( '#2E8B57' );
         dirTheme();
      });
      chocolateTheme.click( ()=>
      {
         loadTheme( '#8B4513' );
         dirTheme();
      });
   });

   logoutBtn.click( ()=>
   {
      if( confirm('Yakin mau keluar?') == true )
      {
         window.location = url + 'login/destroy';
      }
   });

   if( window.location == url + 'admin/pesanan' ) pesananBtn.css('color', 'white');
   if( window.location == url + 'admin/paket' ) paketBtn.css('color', 'white');
   if( window.location == url + 'admin/driver' ) driverBtn.css('color', 'white');
   if( window.location == url + 'admin/transaksi' ) transaksiBtn.css('color', 'white');
   if( window.location == url + 'admin/mobil' ) mobilBtn.css('color', 'white');
   if( window.location == url + 'admin/member' ) memberBtn.css('color', 'white');
   
});


// =======> R O M B A X  -  F A M I L Y ======= //

$(document).ready( function()
{
   // Burger & Left menu object
   let burger = $('.burger');
   let bgr1 = $('.bgr1');
   let bgr2 = $('.bgr2');
   let bgr3 = $('.bgr3');
   let sideBar = $('.left');

   // Left menu button Object
   let profileBtn = $('.profile-btn');
   let notifBtn = $('.notif-btn');
   let uploadBtn = $('.upload-btn');
   let logoutBtn = $('.logout-btn');
   let loginBtn = $('.login-btn');
   let registerBtn = $('.register-btn');

   let profileModal = $('.profile-modal');
   let notifModal = $('.notif-modal');
   let uploadModal = $('.upload-modal');
   let logoutModal = $('.logout-modal');
   let loginModal = $('.login-modal');
   let registerModal = $('.register-modal');

   let closeModal = $('.close-box');
   let logoutNo = $('.logout-no');
   let logoutYes = $('.logout-yes');

   let profileBox = $('.profile-box');
   let notifBox = $('.notif-box');
   let uploadBox = $('.upload-box');
   let logoutBox = $('.logout-box');
   let loginBox = $('.login-box');
   let registerBox = $('.register-box');

   // Top menu object
   let homeBtn = $('.home-btn');
   let contactBtn = $('.contact-btn');
   let aboutBtn = $('.about-btn');
   
   function loadHome()
   {
      window.location = $('#base_url').val();
   }

   // Burger event listener
   burger.click( ()=>
   {
      bgr1.toggleClass('bgr1-active');
      bgr2.toggleClass('bgr2-active');
      bgr3.toggleClass('bgr3-active');
      sideBar.toggleClass('left-active');
   });

   // Top menu event listener
   homeBtn.click( ()=>
   {
      loadHome();
   });

   contactBtn.click( ()=>
   {
      window.location = $('#base_url').val() + 'contact';
   });

   aboutBtn.click( ()=>
   {
      window.location = $('#base_url').val() + 'about';
   });

   
   // Left menu button Listener

   profileBtn.click( ()=>
   {
      profileModal.addClass('modal-active');
      profileBox.addClass('box-active');
   });
   
   notifBtn.click( ()=>
   {
      notifModal.addClass('modal-active');
      notifBox.addClass('box-active');
   });
   
   uploadBtn.click( ()=>
   {
      uploadModal.addClass('modal-active');
      uploadBox.addClass('box-active');
   });

   logoutBtn.click( ()=>
   {
      logoutModal.addClass('modal-active');
      logoutBox.addClass('box-active');
   });

   loginBtn.click( ()=>
   {
      loginModal.addClass('modal-active');
      loginBox.addClass('box-active');
   });

   registerBtn.click( ()=>
   {
      registerModal.addClass('modal-active');
      registerBox.addClass('register-box-active');
   });

   closeModal.click( ()=>
   {
      profileModal.removeClass('modal-active');
      profileBox.removeClass('box-active');
      
      notifModal.removeClass('modal-active');
      notifBox.removeClass('box-active');
      
      uploadModal.removeClass('modal-active');
      uploadBox.removeClass('box-active');
      
      logoutModal.removeClass('modal-active');
      logoutBox.removeClass('box-active');

      loginModal.removeClass('modal-active');
      loginBox.removeClass('box-active');

      registerModal.removeClass('modal-active');
      registerBox.removeClass('register-box-active');
   });

   // Logout action Listener
   logoutNo.click( ()=>
   {
      logoutModal.removeClass('modal-active');
      logoutBox.removeClass('box-active');
   });

   logoutYes.click( ()=>
   {
      window.location = $('#base_url').val() + 'login/destroy';
   });

   
   if( window.location == $('#base_url').val()  )
      homeBtn.css('color', 'white');
         
      else;

   if( window.location == $('#base_url').val() + 'contact' )
      contactBtn.css('color', 'white');
         
      else;

   if( window.location == $('#base_url').val() + 'about' )
      aboutBtn.css('color', 'white');
         
      else;


})
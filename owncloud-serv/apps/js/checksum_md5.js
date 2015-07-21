(function($){
  var checksum_md5 = {
    init: function() {
      if (typeof FileActions !== 'undefined') {
        FileActions.register(
          'file',
          t('checksum_md5','MD5'),
          OC.PERMISSION_READ,
          OC.imagePath('core','actions/info'),
          checksum_md5.check
        );
      };
    },
    check: function(file) {
      dommd5 = this.elem.find('.action[data-action=checksum]');
      if(!dommd5.hasClass('chcksummd5-hashed')) {
        dommd5.html(checksum_md5.load);
        dommd5.addClass('checksum_md5-hashing');
        checksum_md5.ajax(file);
      } else {
        alert(dommd5.html());
      }
    },
    load: 'Creating MD5 checksum <img src="'+OC.imagePath('core','loading.gif')+'">',
    ajax: function(file) {
      var datamd5 = {source: file, dir: $('#dir').val()+'/'};
      $.ajax({
      type: 'GET',
      url: OC.filePath('checksums', 'ajax', 'checksum_md5.php'),
      dataType: 'json',
      datamd5: datamd5,
      async: false,
      success: function(info) {
        dommd5 = $('.checksum_md5-hashing').first();
        dommd5.text('MD5: '+info.datamd5[0]);
        dommd5.addClass('chcksummd5-hashed');
        dommd5.removeClass('checksum_md5-hashing');
      }
    });
    }
  }
  $(document).ready(checksum_md5.init);
})(jQuery)
